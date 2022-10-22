<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Despesa</title>
</head>
<body>

<form action="{{ route('edit.expense', ['expense' => $expense->id]) }}" method="post">
  @csrf
  @method('PUT')
  <h1>Editar Despesas </h1>

  <br>

  <label for="description"> Despesas</label>
  <input type="text" name="description" id="description" value="{{ $expense->description }}"> 
  <br>
  <label for="expense-value"> Valor</label>
  <input type="number" min=0 name="value" id="expense-value" value="{{ $expense->value }}">   
  <br>
  <label for="expense-date"> Data da Despesa</label>
  <input type="date" name="expense_created_at" id="expense_date" value="{{ $expense->expense_created_at }}">
  <br>
  <input type="submit" value="Editar despesa" >
</form>
  
</body>
</html>