<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styleContato.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
    <section>
        <h1> Dados dos contatos </h1>
    </section>
    <section>
        <form action="/contato" method="post">
            @csrf

            <div>
                <label> Nome </label>
                <input type="text" name="txNome" />
            </div>

            <div>
                <label> E-mail </label>
                <input type="text" name="txEmail" />
            </div>

            <div>
                <label> Assunto </label>
                <input type="text" name="txAssunto" />
            </div>

            <div>
                <label> Mensagem </label>
                <textarea name="txMensagem"></textarea>
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>   

    <body>
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Assunto</th>
                <th scope="col">Mensagem</th>
              </tr>
            </thead>
            @foreach ($contatos as $c)
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">{{ $c -> ID }}</th>
                <td>{{$c->Nome}}</td>
                <td>{{$c->Email}}</td>
                <td>{{$c->Assunto}}</td>
                <td>{{$c->Mensagem}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </body>
</html>