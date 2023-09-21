<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar novo produto</title>
</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <form method="POST" action="{{route('registrar_produto')}}">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <label for="custo">Custo</label>
    <input type="text" name="custo" id="custo">

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco">

    <label for="quantidade">Quantidade</label>
    <input type="text" name="quantidade" id="quantidade">
    <button>Salvar</button>
  </form>
</body>
</html>