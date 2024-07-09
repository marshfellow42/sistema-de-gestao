<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap5.css">  
    <link rel="stylesheet" href="dist/css/responsive.bootstrap5.css">
    <link rel="stylesheet" href="dist/css/buttons.bootstrap5.css"> 
    <title> Página de Clientes </title>
</head>
<body>
    
    <div class="px-md-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Metacon</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" href="clientes.php"> <i class="fa fa-users"></i> Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="produtos.php"> <i class="fa fa-cubes"></i> Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="fornecedores.php"> <i class="fa fa-truck"></i> Fornecedores</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>          
    </div>
    <div class="px-md-3">
        <hr>
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true"> Menu de Clientes </li>
                    <li class="list-group-item"><a href="cadastro_cliente.php"> Cadastro de Clientes </a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <table class="table table-striped nowrap" style="width:100%" id="myTable">
                    <thead>
                        <th> Nome </th>    
                        <th> Email </th>
                        <th> Contato </th>    
                        <th> Endereço </th>    
                        <th> CPF </th>    
                        <th> Ações </th>
                    </thead>

                    <?php

                    $clientes = [
                        ["nome" => "Laura Monteiro", "email" => "laura.monteiro@example.com", "telefone" => "(11) 91234-5678", "endereco" => "Rua das Flores, 123, São Paulo, SP", "cpf" => "123.456.789-01"],
                        ["nome" => "Felipe Souza", "email" => "felipe.souza@example.com", "telefone" => "(21) 92345-6789", "endereco" => "Avenida Atlântica, 456, Rio de Janeiro, RJ", "cpf" => "234.567.890-12"],
                        ["nome" => "Bianca Oliveira", "email" => "bianca.oliveira@example.com", "telefone" => "(31) 93456-7890", "endereco" => "Praça Sete de Setembro, 789, Belo Horizonte, MG", "cpf" => "345.678.901-23"],
                        ["nome" => "Rodrigo Fernandes", "email" => "rodrigo.fernandes@example.com", "telefone" => "(41) 94567-8901", "endereco" => "Rua XV de Novembro, 101, Curitiba, PR", "cpf" => "456.789.012-34"],
                        ["nome" => "Camila Santos", "email" => "camila.santos@example.com", "telefone" => "(51) 95678-9012", "endereco" => "Avenida Borges de Medeiros, 202, Porto Alegre, RS", "cpf" => "567.890.123-45"],
                        ["nome" => "Rafael Costa", "email" => "rafael.costa@example.com", "telefone" => "(61) 96789-0123", "endereco" => "Esplanada dos Ministérios, 303, Brasília, DF", "cpf" => "678.901.234-56"],
                        ["nome" => "Juliana Pereira", "email" => "juliana.pereira@example.com", "telefone" => "(71) 97890-1234", "endereco" => "Rua Chile, 404, Salvador, BA", "cpf" => "789.012.345-67"],
                        ["nome" => "Matheus Lima", "email" => "matheus.lima@example.com", "telefone" => "(81) 98901-2345", "endereco" => "Avenida Boa Viagem, 505, Recife, PE", "cpf" => "890.123.456-78"],
                        ["nome" => "Mariana Almeida", "email" => "mariana.almeida@example.com", "telefone" => "(91) 99012-3456", "endereco" => "Avenida Presidente Vargas, 606, Belém, PA", "cpf" => "901.234.567-89"],
                        ["nome" => "Gabriel Silva", "email" => "gabriel.silva@example.com", "telefone" => "(48) 90123-4567", "endereco" => "Rua Felipe Schmidt, 707, Florianópolis, SC", "cpf" => "012.345.678-90"]
                    ];

                    $filePath = 'json/clientes.json';

                    if (file_exists($filePath)) {

                        // Read the JSON file contents
                        $json_data = file_get_contents($filePath);

                        // Decode JSON data into a PHP array
                        $data = json_decode($json_data, true);

                        $clientes = array_merge($clientes, $data);

                    }

                    ?>

                    <tbody>
                    
                    <?php foreach ($clientes as $arr_tot): ?>
                        
                        <tr>
                            <td><?php echo $arr_tot["nome"]; ?></td>
                            <td><?php echo $arr_tot["email"]; ?></td>
                            <td><?php echo $arr_tot["telefone"]; ?></td>
                            <td><?php echo $arr_tot["endereco"]; ?></td>
                            <td><?php echo $arr_tot["cpf"]; ?></td>
                            <td>
                                <button class="btn btn-sm btn-secondary" title="Editar"> <i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                
                                <button class="btn btn-sm btn-secondary" title="Excluir"> <i class="fa fa-trash" aria-hidden="true"></i> </button>

                                <button class="btn btn-sm btn-secondary" title="Visualizar"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                            </td>
                        </tr>

                    <?php endforeach; ?>

                    </tbody>
            
                    <tfoot>
                        <th> Nome </th>    
                        <th> Email </th>
                        <th> Contato </th>    
                        <th> Endereço </th>    
                        <th> CPF </th>    
                        <th> Ações </th>
                    </tfoot>
            
                </table>
            </div>
        </div>
    </div>
 
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap5.js"></script>
    <script src="dist/js/dataTables.responsive.js"></script>
    <script src="dist/js/responsive.bootstrap5.js"></script>
    <script src="dist/js/dataTables.buttons.js"></script>
    <script src="dist/js/buttons.bootstrap5.js"></script>
    <script src="dist/js/jszip.min.js"></script>
    <script src="dist/js/pdfmake.min.js"></script>
    <script src="dist/js/vfs_fonts.js"></script>
    <script src="dist/js/buttons.html5.min.js"></script>
    <script src="dist/js/buttons.print.min.js"></script>
    <script src="dist/js/buttons.colvis.min.js"></script>
    <script type="text/javascript">
        new DataTable('#myTable', {
            responsive: true,
            layout: {
                topStart: {
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                }
            },
            stateSave: true,
            language: {
                url:"https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"
            }
        });
    </script>

</body>
</html>