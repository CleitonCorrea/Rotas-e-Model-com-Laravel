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
                        <h1>Atualizar Dados do Cliente</h1>  

                         @if(session('success'))

                           <p class="alert alert-danger">{{ session('success') }}</p> 

                        @endif()                 

                    </div>
                </div>
                <div class="col-md-12">
                    <form action="{{ url('/edit_cliente', $editaClientes->id) }}" method="post" class="form-group">    
                    {{ csrf_field() }}                    
                        Nome<br> <input type="text"  value="{{ $editaClientes->nome  }}"  name="nome"  class="form-control"><br>
                        Email<br><input type="email" value="{{ $editaClientes->email }}" name="email" class="form-control" ><br><br>
                        <input type="submit" value="Atualizar" class="btn btn-success">
                        <a href="{{ url('/') }}" class="btn btn-info">Voltar</a>
                    </form>
                               
                </div>
            </div>
        </div>      
    </body>
</html>
