<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>Cadastrar Despesa</title>
</head>

<body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')
    <form action="{{ route('create.expense')}}" method="post">
      @csrf
      <h1>Cadastro de Despesas </h1>

      <br>

      <label for="description"> Despesas</label>
      <input type="text" name="description" id="description">
      <br>
      <label for="value"> Valor</label>
      <input type="number" min=0 name="value" id="value">
      <br>
      <label for="expense-date"> Data da Despesa</label>
      <input type="date" name="expense_created_at" id="expense_date">
      <br>
      <input type="submit" value="Cadastrar despesa">
    </form>
  </div>
</body>

</html>