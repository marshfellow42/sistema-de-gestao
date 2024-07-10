<?php
$currentPage = basename($_SERVER['PHP_SELF']); // Get the current file name

// Define groups of related pages
$paginasClientes = ['clientes.php', 'cadastro_clientes.php'];
$paginasProdutos = ['produtos.php', 'cadastro_produtos.php'];
$paginasFornecedores = ['fornecedores.php', 'cadastro_fornecedores.php'];

function isActive($pages) {
    global $currentPage;
    return in_array($currentPage, $pages) ? 'active' : '';
}
?>

<div class="px-md-3">
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Metacon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= isActive($paginasClientes); ?>" href="clientes.php"> <i class="fa fa-users"></i> Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive($paginasProdutos); ?>" href="produtos.php"> <i class="fa fa-cubes"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= isActive($paginasFornecedores); ?>" href="fornecedores.php"> <i class="fa fa-truck"></i> Fornecedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"> <i class="fa fa-power-off"></i> Sair</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Bem vindo(a) <?= $user['user']; ?>! Logado às <?= $user['access']; ?>
                </span>
            </div>
        </div>
    </nav>          
</div>
