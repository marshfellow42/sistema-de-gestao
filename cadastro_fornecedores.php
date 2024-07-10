<?php

    session_start();

    if (isset($_SESSION['user_data']) == false) {
        header("location: index.php?msg=access_denied ");
    } else {
        $user = $_SESSION['user_data'];
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">   
    <title> Cadastro dos Fornecedores </title>
</head>
<body>
    
    <?php include_once 'menu.php'; ?>

    <div class="px-md-3">
        <hr>
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item"><a href="fornecedores.php"> Menu de Fornecedores </a></li>
                    <li class="list-group-item active" aria-current="true"> Cadastro dos Fornecedores </li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="card text-center">
                    <div class="card-header">
                      Cadastro dos Fornecedores
                    </div>
                    <form action="php/formulario_cadastro_fornecedores.php" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-address-card"></i> Nome do Fornecedor
                                        </label>
                                        <input required name="nome" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                        
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-envelope-o"></i> Email do Fornecedor
                                        </label>
                                        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                        
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-address-card-o"></i></i> CNPJ do Fornecedor
                                        </label>
                                        <input required name="cnpj" type="text" class="form-control" id="cnpj" aria-describedby="emailHelp">                        
                                    </div>
                
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-globe"></i></i> Endereço do Fornecedor
                                        </label>
                                        <input required name="endereco" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">                        
                                    </div>
                
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            <i class="fa fa-phone"></i></i> Telefone/Contato do Fornecedor
                                        </label>
                                        <input required name="telefone" type="text" class="form-control" id="telefone" aria-describedby="emailHelp">                        
                                    </div>
                                </div>

                                <hr>

                                <div class="mb-3">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-outline-success"> Adicionar Fornecedor </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div>
    </div>
 
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/jquery.mask.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#cnpj').mask('000.000.000/0000-00');
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
</body>
</html>