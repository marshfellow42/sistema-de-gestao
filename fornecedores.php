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
    <title> Página de Fornecedores </title>
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
                    <a class="nav-link" href="clientes.php"> <i class="fa fa-users"></i> Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="produtos.php"> <i class="fa fa-cubes"></i> Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="fornecedores.php"> <i class="fa fa-truck"></i> Fornecedores</a>
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
                    <li class="list-group-item active" aria-current="true"> Menu de Fornecedores </li>
                    <li class="list-group-item"><a href="cadastro_fornecedores.php">Adicionar</a></li>
                    <li class="list-group-item">Perfil</li>
                    <li class="list-group-item">Posição Financeira</li>
                    <li class="list-group-item">Carga Inicial</li>
                </ul>
            </div>
            <div class="col-md-10">
                <table class="table table-striped nowrap" style="width:100%" id="myTable">
                    <thead>
                        <th> Nome </th>    
                        <th> Email </th>
                        <th> Contato </th>    
                        <th> Endereço </th>                            
                        <th> CNPJ </th>    
                        <th> Ações </th>
                    </thead>

                    <?php

                    $fornecedores = [
                      ["nome" => "Fornecedor A", "email" => "fornecedorA@email.com", "telefone" => "(11) 1234-5678", "endereco" => "Rua Exemplo, 123, Bairro Centro, Cidade A", "cnpj" => "00.123.456/0001-01"],
                      ["nome" => "Fornecedor B", "email" => "fornecedorB@email.com", "telefone" => "(21) 9876-5432", "endereco" => "Av. Teste, 456, Bairro Sul, Cidade B", "cnpj" => "99.876.543/0001-99"],
                      ["nome" => "Fornecedor C", "email" => "fornecedorC@email.com", "telefone" => "(31) 2468-1357", "endereco" => "Praça Modelo, 789, Bairro Norte, Cidade C", "cnpj" => "88.765.432/0001-88"],
                      ["nome" => "Fornecedor D", "email" => "fornecedorD@email.com", "telefone" => "(41) 3698-7412", "endereco" => "Alameda Qualquer, 321, Bairro Leste, Cidade D", "cnpj" => "77.654.321/0001-77"],
                      ["nome" => "Fornecedor E", "email" => "fornecedorE@email.com", "telefone" => "(51) 6543-9876", "endereco" => "R. da Amostra, 654, Bairro Oeste, Cidade E", "cnpj" => "66.543.210/0001-66"],
                      ["nome" => "Fornecedor F", "email" => "fornecedorF@email.com", "telefone" => "(61) 1357-2468", "endereco" => "Estrada Testando, 987, Bairro Sudoeste, Cidade F", "cnpj" => "55.432.109/0001-55"],
                      ["nome" => "Fornecedor G", "email" => "fornecedorG@email.com", "telefone" => "(71) 9876-5432", "endereco" => "Av. Qualquer, 789, Bairro Nordeste, Cidade G", "cnpj" => "44.321.098/0001-44"],
                      ["nome" => "Fornecedor H", "email" => "fornecedorH@email.com", "telefone" => "(81) 3698-7412", "endereco" => "Praça de Testes, 123, Bairro Sul, Cidade H", "cnpj" => "33.210.987/0001-33"],
                      ["nome" => "Fornecedor I", "email" => "fornecedorI@email.com", "telefone" => "(91) 6543-9876", "endereco" => "R. Sem Nome, 456, Bairro Norte, Cidade I", "cnpj" => "22.109.876/0001-22"],
                      ["nome" => "Fornecedor J", "email" => "fornecedorJ@email.com", "telefone" => "(101) 1357-2468", "endereco" => "Estrada Desconhecida, 789, Bairro Leste, Cidade J", "cnpj" => "11.098.765/0001-11"]
                    ];

                    $filePath = 'json/fornecedores.json';

                    if (file_exists($filePath)) {

                        // Read the JSON file contents
                        $json_data = file_get_contents($filePath);

                        // Decode JSON data into a PHP array
                        $data = json_decode($json_data, true);

                        $fornecedores = array_merge($fornecedores, $data);

                    }

                    ?>
            
                    <tbody>

                    <?php foreach ($fornecedores as $arr_tot): ?>
                        
                        <tr>
                            <td><?php echo $arr_tot["nome"]; ?></td>
                            <td><?php echo $arr_tot["email"]; ?></td>
                            <td><?php echo $arr_tot["telefone"]; ?></td>
                            <td><?php echo $arr_tot["endereco"]; ?></td>
                            <td><?php echo $arr_tot["cnpj"]; ?></td>
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
                        <th> CNPJ </th>    
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