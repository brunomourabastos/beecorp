<?php

namespace App\Http\Controllers;

use App\Models\Expenses;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        return(view('expenses'));
    }

    public function showAll()
    {
        $expenses = Expenses::where('user_id', Auth::user()->id)->get();

        return view('listAllExpenses', [
            'expenses' => $expenses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

       $request->validate([
            'expense_created_at' => ['required', 'date', 'before_or_equal:today'], 
            'value' => ['required', 'min:0']
        ], [
            'expense_created_at.date' => 'Não lançar datas futuras',
            'value.min' => 'O valor não pode ser negativo.'
        ]);

        $expenses = new Expenses();
        $expenses->description = $request->description;
        $expenses->value = $request->value;
        $expenses->expense_created_at = $request->expense_created_at;
        $expenses->user_id = Auth::user()->id;
        $expenses->save();

        return(view('expenses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function formEditExpense(Expenses $expense)
    {
        return(view('editExpense', [
            'expense' => $expense
        ]));
    }

    public function editExpense(Expenses $expense, Request $request)
    {
        $request->validate([
            'expense_created_at' => ['required', 'date', 'before_or_equal:today'], 
            'value' => ['required', 'min:0']
        ], [
            'expense_created_at.date' => 'Não lançar datas futuras',
            'value.min' => 'O valor não pode ser negativo.'
        ]);

        $expense->description =  $request->description;
        $expense->value = $request->value;
        $expense->expense_created_at = $request->expense_created_at;
        $expense->user_id = Auth::user()->id;
        $expense->save();
        
        return $this->showAll();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
