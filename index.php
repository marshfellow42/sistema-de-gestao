<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">   
    <title> Login </title>
    <style>
        *{
            overflow-y: hidden;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid" id="background">
        <div class="row">
            <div class="col-md-4 offset-md-8" style="height: 1200px; background-color: #DCDCDC;">
                <div class="row">
                    <div class="col-md-12 mt-5" style="border-radius: 10px; margin-top: 150px !important">
                        <form action="php/login.php" method="POST">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h2 class="text-center text-white" style="line-height: 1.3";> Login </h2>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">
                                            <i class="fa fa-envelope-o"></i> Email ou Usuário
                                        </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="username">
                                        </div>                                    
                                    </div>

                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">
                                            <i class="fa fa-key"></i> Senha de Acesso
                                        </label>
                                        <div class="input-group"> 
                                            <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" name="password">
                                        </div>                                    
                                    </div>

                                    <div class="mb-3">
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-outline-success"> Fazer Login </button>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Ainda não tem acesso? Cadastre-se!</button>
                                            <button type="button" class="btn btn-link">Esqueci minha senha</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Usuário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="php/login.php" method="POST">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-address-card"></i> Nome Completo
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>                        
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-envelope-o"></i> Email
                            </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="useremail" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-key"></i> Senha
                            </label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="password" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-key"></i><i class="fa fa-key"></i> Conf. de Senha
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="passconf" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-address-card-o"></i></i> CPF
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cpf">                        
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-globe"></i></i> Endereço
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-map"></i></i> CEP
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="postalcode" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-map"></i></i> Estado
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="state" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-phone"></i></i> Telefone/Contato
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact" required>                        
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                <i class="fa fa-whatsapp"></i></i> Whatsapp
                            </label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="whatsapp">                        
                        </div>
                    </div>
                </div>


            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Criar Usuario</button>
            </div>
        </form>
      </div>
    </div>
  </div>
 
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/three.min.js"></script>
    <script src="dist/js/vanta.birds.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        VANTA.BIRDS({
        el: "#background",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 1000.00,
        minWidth: 800.00,
        scale: 1.00,
        scaleMobile: 1.00
        })
    </script>
</body>
</html>
<?php 
    if(isset($_GET['msg'])): 
        switch($_GET['msg']):
            case "access_error":
                $icon = "error";
                $title = "Erro ao acessar!";
                $text = "Usuario ou senha incorretos!";
            break;

            case "invalid_password":
                $icon = "error";
                $title = "As senhas não conferem!";
                $text = "Preencha as senhas iguais.";
            break;
        endswitch;
?>    
    <script>
        Swal.fire({
            icon: "<?=$icon;?>",
            title: "<?=$title;?>",
            text: "<?=$text;?>",
            showConfirmButton: false,
            footer: '<a href="index.php" class="btn btn-primary"> OK! </a>'
        });
    </script>
<?php endif; ?>





