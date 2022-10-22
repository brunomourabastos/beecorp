<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Despesas</title>
</head>
<body>

<table>
  <tr>
    <td>Id</td>
    <td>Descrição</td>
    <td>Valor</td>
  </tr>

  @foreach($expenses as $expense)
    <tr>
      <td>{{ $expense -> id }}</td>
      <td>{{ $expense -> description }}</td>
      <td>{{ $expense -> value }}</td>
      <td>
        <form action="{{ route('edit.form', ['expense' => $expense->id]) }}" method="get">
          @csrf
          <input type="hidden" name="edit-expense" value="{{ $expense->id }}">
          <input type="submit" value="Editar">
        </form>
        <form action="{{ route('delete.expense', ['expense' => $expense->id]) }}" method="post">
          @csrf
          @method('delete')
          <input type="hidden" name="expense" value="{{ $expense->id }} ">
          <input type="submit" value="Remover">
        </form>
      </td>
    </tr>
  @endforeach
</table>
  
</body>
</html>