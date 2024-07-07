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
    <title> Página de Produtos </title>
</head>
<body>
    
    <div class="px-md-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Ponto do Poder</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="clientes.php"> <i class="fa fa-users"></i> Clientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="produtos.php"> <i class="fa fa-cubes"></i> Produtos</a>
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
                    <li class="list-group-item active" aria-current="true"> Menu de Produtos </li>
                    <li class="list-group-item"><a href="cadastro_produto.php"> Adicionar </a></li>
                    <li class="list-group-item">Perfil</li>
                    <li class="list-group-item">Posição Financeira</li>
                    <li class="list-group-item">Carga Inicial</li>
                </ul>
            </div>
            <div class="col-md-10">
                <table class="table table-striped nowrap" style="width:100%" id="myTable">
                    <thead>
                        <th> Nome </th>    
                        <th> Código </th>    
                        <th> Nome do Fornecedor </th>    
                        <th> Preço de Compra </th>    
                        <th> Preço de Venda </th>    
                        <th> Quantidade </th>
                        <th> Possível Lucro </th>
                        <th> Ações </th>
                    </thead>

                    <?php

                    $produtos = [
                        ["nome" => "Camiseta", "codigo" => "001", "nome_fornecedor" => "Fornecedor A", "pre_compra" => 20, "pre_venda" => 40, "quantidade" => 50, "lucro_possivel" => 20],
                        ["nome" => "Calça Jeans", "codigo" => "002", "nome_fornecedor" => "Fornecedor B", "pre_compra" => 50, "pre_venda" => 90, "quantidade" => 30, "lucro_possivel" => 40],
                        ["nome" => "Tênis Esportivo", "codigo" => "003", "nome_fornecedor" => "Fornecedor C", "pre_compra" => 80, "pre_venda" => 150, "quantidade" => 20, "lucro_possivel" => 70],
                        ["nome" => "Mochila", "codigo" => "004", "nome_fornecedor" => "Fornecedor D", "pre_compra" => 30, "pre_venda" => 60, "quantidade" => 40, "lucro_possivel" => 30],
                        ["nome" => "Relógio", "codigo" => "005", "nome_fornecedor" => "Fornecedor E", "pre_compra" => 100, "pre_venda" => 200, "quantidade" => 15, "lucro_possivel" => 100],
                        ["nome" => "Óculos de Sol", "codigo" => "006", "nome_fornecedor" => "Fornecedor F", "pre_compra" => 40, "pre_venda" => 80, "quantidade" => 25, "lucro_possivel" => 40],
                        ["nome" => "Chinelo", "codigo" => "007", "nome_fornecedor" => "Fornecedor G", "pre_compra" => 10, "pre_venda" => 20, "quantidade" => 60, "lucro_possivel" => 10],
                        ["nome" => "Caneta", "codigo" => "008", "nome_fornecedor" => "Fornecedor H", "pre_compra" => 2, "pre_venda" => 5, "quantidade" => 100, "lucro_possivel" => 2],
                        ["nome" => "Caderno", "codigo" => "009", "nome_fornecedor" => "Fornecedor I", "pre_compra" => 15, "pre_venda" => 30, "quantidade" => 35, "lucro_possivel" => 15],
                        ["nome" => "Mouse", "codigo" => "010", "nome_fornecedor" => "Fornecedor J", "pre_compra" => 25, "pre_venda" => 50, "quantidade" => 45, "lucro_possivel" => 25]
                    ];

                    $filePath = 'json/produtos.json';

                    if (file_exists($filePath)) {

                        // Read the JSON file contents
                        $json_data = file_get_contents($filePath);

                        // Decode JSON data into a PHP array
                        $data = json_decode($json_data, true);

                        $produtos = array_merge($produtos, $data);

                    }

                    ?>
            
                    <tbody>
                        
                    <?php foreach ($produtos as $arr_tot): ?>
                        
                        <tr>
                            <td><?php echo $arr_tot["nome"]; ?></td>
                            <td><?php echo $arr_tot["codigo"]; ?></td>
                            <td><?php echo $arr_tot["nome_fornecedor"]; ?></td>
                            <td><?php echo $arr_tot["pre_compra"]; ?></td>
                            <td><?php echo $arr_tot["pre_venda"]; ?></td>
                            <td><?php echo $arr_tot["quantidade"]; ?></td>
                            <td><?php echo $arr_tot["lucro_possivel"]; ?></td>
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
                        <th> Código </th>    
                        <th> Nome do Fornecedor </th>    
                        <th> Preço de Compra </th>    
                        <th> Preço de Venda </th>    
                        <th> Quantidade </th>
                        <th> Possível Lucro </th>
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