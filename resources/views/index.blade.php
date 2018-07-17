<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud com Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style type="text/css">

        .conteudo{
            width: 700px;
            display: flex;
            content: center;
        }

        </style>

     
    </head>
    <body>
        <div class ="container _conteudo">
            <div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Lista de Clientes</h1>
                          @if(session('success'))

                           <p class="alert alert-danger">{{ session('success') }}</p> 

                        @endif()
                    </div>
                    <p><a href="{{url('/create_cliente')}}" class="btn btn-info">Cadastrar Novo Cliente</a></p>
                </div>
                <div class="col-md-12">
                    <table class="table striped">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th> 
                                    <th>Ações</th>                            
                                </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                                 <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>{{ $cliente->nome }}</td> 
                                    <td>{{ $cliente->email}}</td>
                                     <td>
                                       <a href="{{ url('/edit_cliente', $cliente->id) }}" class="btn btn-info">Editar</a>
                                       <a href="{{ url('/deleta_cliente', $cliente->id) }}" class="btn btn-danger">Deletar</a>
                                     </td>
                                  </tr>
                            @endforeach
                        </tbody>                         
                    </table>                   
                </div>
            </div>
        </div>
      
    </body>
</html>
