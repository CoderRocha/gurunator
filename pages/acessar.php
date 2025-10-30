<?php 

$id = intval($_GET['id']);
$id_user = $_SESSION['usuario'];
$sql_query_curso = $mysqli->query("SELECT preco FROM cursos WHERE id='$id' AND id IN (SELECT id_curso FROM relatorio WHERE id_usuario='$id_user')") or die($mysqli->error);
$curso = $sql_query_curso->fetch_assoc();

?>
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Sample Page</h4>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Pages</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Página Inicial</h5>
                        <span>Seja bem-vindo ao Gurunator!</span>
                    </div>
                    <div class="card-block">
                        <p>
                            Na Gurunator, nós ensinamos diversos cursos interessantes e úteis para você, de forma
                            acessível e completamente descomplicada!
                            Aprenda na prática e com simplicidade.
                        </p>
                    </div>
                </div>
            </div>
        </div>