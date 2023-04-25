<?php
    use App\Models\Agendamentos;
?>

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
            <!-- Content here -->
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
                                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>           
            </div>

            <div class = "row">
                <div class="card mb-3 col-12">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-text">Sistema utilizado para agendamento de serviços.</p>
                        <p>
                            <form class="row g-3" method="POST" action="/controller">
                                @csrf
                                <div class= "form-group">
                                    <div class="col-12">
                                        <label for="inputName" class="form-label">Nome:</label>
                                        <input type="text" class="form-control" name="txtNome" id="inputAddress">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="inputPhone" class="form-label">Telefone:</label>
                                        <input type="tel" class="form-control" required name="txtTelefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="inputOrigin" class="form-label">Origem:</label>
                                                <select class="form-control" required name="txtOrigem" id="txtOrigem">
                                                    <option>Celular</option>
                                                    <option>Fixo</option>
                                                    <option>Whatsapp</option>
                                                    <option>Facebook</option>
                                                    <option>Instagram</option>
                                                    <option>Google Meu Negocio</option>
                                                </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="inputDate" class="form-label">Data do Contato:</label>
                                        <input type="date" class="form-control" required name="txtDataContato" id="txtDataContato">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="inputObservacao" class="form-label">Observação</label>
                                        <textarea class="form-control" name="txtObservacao" id="txtObservacao" rows="3"></textarea>
                                    </div>
                                </div>

                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
                                    </div>

                                </div>
                                
                            </form>
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>
    </body>
</html>