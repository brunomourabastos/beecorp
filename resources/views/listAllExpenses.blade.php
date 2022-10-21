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
        <a href="">Ver despesa</a>
        <form action="" method="post">
          <input type="hidden" name="user" value="">
          <input type="submit" value="Remover">
        </form>
      </td>
    </tr>
  @endforeach
</table>
  
</body>
</html>