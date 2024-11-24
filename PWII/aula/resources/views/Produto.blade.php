<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styleProduto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <section>
        <form action="/produto" method="post">
        @csrf

        <div>
            <label>Nome</label>
            <input type="text" name="txtNome">
        </div>

        <div>
            <label>Categoria</label>
            <input type="text" name="txtCategoria">
        </div>

        <div>
            <label>Descrição</label>
            <input type="text" name="txtDescricao">
        </div>

        <div>
            <label>Preço</label>
            <input type="text" name="txtPreco">
        </div>

        <div>
            <label>Quantidade em Estoque</label>
            <input type="text" name="txtQuantidade">
        </div>

        <div>

            <input type="submit" value="ENVIAR" />

        </div>

        </form>
    </section>
    <body>
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>

              </tr>
            </thead>
            @foreach($produto as $p)
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">{{$p->id}}</th>
                <td>{{$p->nome}}</td>
                <td>{{$p->id_categoria}}</td>
                <td>{{$p->descricao}}</td>
                <td>{{$p->preco}}</td>
                <td>{{$p->quantidade_em_estoque}}</td>

              </tr>
            </tbody>
            @endforeach
          </table>
    </body>
</html>