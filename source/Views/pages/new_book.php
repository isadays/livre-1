<?php $v->layout("_theme") ?>

<?php $v->start("sidebar"); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= url("source/Views/assets/img/sidebar-1.jpg") ?>">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo text-center"><a href="#">
                <img style="max-width: 100px" src="<?= url("source/Views/assets/img/livre_logo.png") ?>" alt="Logo Livre">
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("user") ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/editar/perfil") ?>">
                        <i class="material-icons">person</i>
                        <p>Editar Perfil</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/encontrar/livros") ?>">
                        <i class="material-icons">content_paste</i>
                        <p>Encontrar Livros</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url("user/novo/livro") ?>">
                        <i class="material-icons">library_books</i>
                        <p>Adicionar Livro</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/notificacoes") ?>">
                        <i class="material-icons">notifications</i>
                        <p>Notificações</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php $v->stop(); ?>
        <!-- Formulário para novos livros -->
        <section class="container d-flex justify-content-center content">
            <div class="card shadow">
                <div class="card-header card-header-text card-header-warning mb-3">
                    <div class="card-text">
                        <h4 class="card-title">Adicionar Livro Para Doação</h4>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form method="post">
                        <div class="form-group m-2">
                            <label class="float-begin mb-2">Titulo</label>
                            <input type="text" class="form-control" name="Titulo">
                        </div>
                        <div class="form-group m-2">
                            <label class="float-begin mb-2">Autor</label>
                            <input type="text" class="form-control" name="Autor">
                        </div>
                        <div class="row p-3">
                            <div class="row col">
                                <div class="form-group m-2 col">
                                    <label class="float-begin mb-2">Ano</label>
                                    <input type="number" class="form-control" name="Titulo">
                                </div>
                                <div class="form-group m-2 col">
                                    <label class="float-begin mb-2">Páginas</label>
                                    <input type="number" class="form-control" name="Titulo">
                                </div>
                            </div>
                            <div class="form-group m-2 col">
                                <label class="float-begin mb-2">Gênero</label>
                                <input type="text" class="form-control" name="Titulo">
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="row col">
                                <div class="form-group m-2 col">
                                    <label class="float-begin mb-2">ISBN</label>
                                    <input type="number" class="form-control" name="Titulo">
                                </div>
                                <div class="form-group m-2 col">
                                    <label class="float-begin mb-2">Quantidades</label>
                                    <input type="number" class="form-control" name="Titulo">
                                </div>
                            </div>
                            <div class="row col">
                                <div class="form-check m-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Vou pagar o frete <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                    <label class="form-check-label m-2">
                                        <input class="form-check-input" type="checkbox" value="">
                                        Não posso pagar o frete
                                        <span class="form-check-sign">
                                            <span class="check"></span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group form-file-upload form-file-multiple p-3">
                            <input type="file" multiple="" class="inputFileHidden">
                            <div class="input-group">
                                <input type="text" class="form-control inputFileVisible" placeholder="Capa do Livro">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-fab btn-round btn-primary">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>
                        </div>

                        <div class="dflex">
                            <div>
                                <button type="submit" class="btn btn-success float-end m-2 mb-3">Cadastrar</button>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger float-begin m-2 mb-3">Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>