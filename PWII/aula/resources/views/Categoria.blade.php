<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styleCategoria.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <section>
        <form action="/categoria" method="post">
            @csrf

            <div>

                <label>Nome da Categoria</label>
                <input type="text" name="txtNome">

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
                  </tr>
                </thead>
                @foreach ($categorias as $c)
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">{{ $c -> id }}</th>
                    <td>{{$c->nome}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
        </body>
</html>