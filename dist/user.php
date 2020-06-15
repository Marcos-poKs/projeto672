<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Aztec</title>
        <link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="../aula.php">Aztec</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <div class="input-group-append">
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Sessão</div>
                            <a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Obrigado Professor !! ^^</a
                            ><a class="nav-link" href="#"
                                ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Politica de Privacidade</a
                            >
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Você está logado em:</div>
                        Aztec.Inc
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Perfil</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pagina do Administrador</li>
                        </ol>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Meses Contratados do Plano</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../conheca.html">Inativo</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Fluxo de Contratações do serviço VPN</div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Total Relativo a Acessos por Usuario</div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Dados dos Usuarios</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <form name=""f1 method="POST" action="user.php">
                                            <h5>Busca de Usuarios</h5>
                                            <div class="input-group text-left">
                                                <input clas="form-control" type="text" name="texto" id="texto">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                            </div>
                                            <table class="table table-bordered" width="100%" cellspanding="0">
                                                <thead>
                                                <tr>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Opções</th>
                                            </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if(isset($_POST['texto'])){
                                                        $texto = $_POST["texto"];
                                                            $local_servidor = "sql10.freesqldatabase.com";
                                                            $nome_usuario = "sql10348675";
                                                            $senha = "yijjFMg8St";
                                                            $nome_banco = "sql10348675";

                                                        $conecta = new mysqli($local_servidor, $nome_usuario, $senha,$nome_banco);
                                                        
                                                        $sql = "select * from dados where nome like '%$texto%'";
                                                        
                                                        $resultado = $conecta->query($sql);
                                                        
                                                        if($resultado ->num_rows > 0){
                                                            while ($linha=$resultado -> fetch_array(MYSQLI_ASSOC)){
                                                            echo'<tr>';
                                                            echo '<td>'. $linha['nome'].'</td>';
                                                            echo '<td>'.$linha['email'].'</td>';
                                                            echo '                                                <td>
                                                    <a class="btn btn-sm btn-primary" class="btn btn-primary" href="../altera.php?id='.$linha['id'].'" title="Alterar Usuario"><i class="fa fa-edit"></i>
                                                        <a class="btn btn-danger" href="delete.php?id='.$linha['id'].'" title="Excluir Usuario"><i class="fa fa-trash"></i>
                                                </td>';
                                                            echo'</tr>'
                                                            ;
                                                        }
                                                    }
                                                    else{
                                                        echo'<tr>';
                                                            echo'<td> Dados não encontrados. </td>';
                                                        echo'</tr>';
                                                        }
                                                 }
                                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Aztec 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
