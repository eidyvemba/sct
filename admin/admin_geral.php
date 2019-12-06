<?php include_once 'includes/header.php';?>
    <div id="main-wrapper">
        <?php include_once 'includes/menu_principal.php';?>
        <?php include_once 'includes/menu_lateral.php';?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Geral</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Geral</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title m-b-0">Recente Posts</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Eidy Vemba</h6>
                                        <span class="m-b-15 d-block">Postagem de artigo. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">Novembro 14, 2018</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Editar</button>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Walter Adriano</h6>
                                        <span class="m-b-15 d-block">Postagem de artigo. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">Outubro 10, 2018</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Editar</button>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/5.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Soares Coxe</h6>
                                        <span class="m-b-15 d-block">Postagem de artigo. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">Dezembro 1, 2018</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Editar</button>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/4.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Soares Coxe</h6>
                                        <span class="m-b-15 d-block">Postagem de artigo. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">Dezembro 1, 2018</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Editar</button>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="assets/images/users/3.jpg" alt="user" width="50" class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Walter Adriano</h6>
                                        <span class="m-b-15 d-block">Postagem de artigo. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">Dezembro 1, 2018</span> 
                                            <button type="button" class="btn btn-cyan btn-sm">Editar</button>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="card m-b-0">
                                <div class="card-header" id="headingOne">
                                  <h5 class="mb-0">
                                    <a  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Tutorial 1</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Tutorial de utilização do site. .
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingTwo">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Tutorial 2</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Tutorial de utilização do site. .
                                  </div>
                                </div>
                            </div>
                            <div class="card m-b-0 border-top">
                                <div class="card-header" id="headingThree">
                                  <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Tutorial 3</span>
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Tutorial de utilização do site. .
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Tarefas</h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Descrição</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Responder Email</td>
                                        <td class="text-success">Sucesso</td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Apagar">
                                                </i><i class="mdi mdi-close"></i>
                                            </a>     
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Responder Solicitações</td>
                                        <td class="text-warning">Pendente</td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Apagar">
                                                </i><i class="mdi mdi-close"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Novos Visitantes</td>
                                        <td class="text-danger">Cancelado</td>
                                        <td>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Update">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="top" title="Apagar">
                                                </i><i class="mdi mdi-close"></i>
                                            </a>
                                        </td>  
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Caixinha de Progresso</h4>
                                <div class="m-t-20">
                                    <div class="d-flex no-block align-items-center">
                                        <span>81% Clicks</span>
                                        <div class="ml-auto">
                                            <span>125</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="m-t-25">
                                    <div class="d-flex no-block align-items-center m-t-15">
                                        <span>72% Visualizações</span>
                                        <div class="ml-auto">
                                            <span>120</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="m-t-25">
                                    <div class="d-flex no-block align-items-center m-t-15">
                                        <span>53% Downloads</span>
                                        <div class="ml-auto">
                                            <span>785</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="m-t-25">
                                    <div class="d-flex no-block align-items-center m-t-15">
                                        <span>3% Solicitações</span>
                                        <div class="ml-auto">
                                            <span>8</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once 'includes/footer.php';?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="js/waves.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/custom.min.js"></script>
</body>

</html>