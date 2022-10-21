<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expenses</title>
</head>
<body>

<form action="{{ route('create.expense')}}" method="post">
  @csrf
  <h1>Cadastro de Despesas </h1>

  <br>

  <label for="description"> Despesas</label>
  <input type="text" name="description" id="description"> 
  <br>
  <label for="value"> Valor</label>
  <input type="number" name="value" id="value">   
  <br>
  <label for="expense-date"> Data da Despesa</label>
  <input type="date" name="expense_created_at" id="expense_date">
  <br>
  <input type="submit" value="Cadastrar despesa" >
</form>
  
</body>
</html>