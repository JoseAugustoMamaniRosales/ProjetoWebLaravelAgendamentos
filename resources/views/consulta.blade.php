<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SistemaWebLaravel</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">

        @vite ([
            'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
    </head>
    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link active" aria-current="page" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>           
            </div>

            <div class="row">
                <div class="card mb-3 col-12">
                    <div class="card-body" style="margin: auto;">
                        
                            <div class="col">
                                <table class="table table-responsive" style="width: auto;">

                                    <h5 class="card-title">Consultar - Contatos Agendados</h5>

                                    <thead class="table-active bg-primary">
                                        <tr>
                                            <th scope="col"> Nome </th>
                                            <th scope="col"> Telefone </th>
                                            <th scope="col"> Origem </th>
                                            <th scope="col"> Contato </th>
                                            <th scope="col"> Observação </th>
                                            <th scope="col"> Ações </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="tbody bg-light">

                                        
                                        @foreach($agendamentos as $agendamento)
                                        <tr>
                                            <td scope = "col">{{$agendamento->nome}}</td>
                                            <td scope = "col">{{$agendamento->telefone}}</td>
                                            <td scope = "col">{{$agendamento->origem}}</td>
                                            <td scope = "col">{{$agendamento->data_contato}}</td>
                                            <td scope = "col">{{$agendamento->observacao}}</td>
                                            <td scope = "col">
                                                <button type = "button" class="btn btn-primary" style="width: 72px;">Editar</button>
                                                <button type = "button" class="btn btn-primary" sytle="width: 72px;">Excluir</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>