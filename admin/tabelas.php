<?php include_once 'includes/header.php';?>
    <div id="main-wrapper">
        <?php include_once 'includes/menu_principal.php';?>
        <?php include_once 'includes/menu_lateral.php';?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tabelas</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Tabelas</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Tabela - Admin</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Primeiro</th>
                                      <th scope="col">Último</th>
                                      <th scope="col">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Soares</td>
                                      <td>Coxe</td>
                                      <td>@scoxe</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Walter</td>
                                      <td>Adriano</td>
                                      <td>@wadriano</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Eidy</td>
                                      <td>Vemba</td>
                                      <td>@evemba</td>
                                    </tr>
                                  </tbody>
                            </table>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Tabela Apps</h5>
                            </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox m-b-20">
                                                        <input type="checkbox" id="mainCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Descrição</th>
                                                <th scope="col">Plataforma</th>
                                                <th scope="col">Versão</th>
                                            </tr>
                                        </thead>
                                        <tbody class="customtable">
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>App para jogar</td>
                                                <td>Android</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>Utilidade</td>
                                                <td>Android</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>App para jogar</td>
                                                <td>Android</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>Utilidade</td>
                                                <td>Android</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>Saúde 5.5</td>
                                                <td>Android</td>
                                                <td>5.5</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label class="customcheckbox">
                                                        <input type="checkbox" class="listCheckbox" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <td>NomeApp</td>
                                                <td>Saúde 6</td>
                                                <td>Win 7+</td>
                                                <td>6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="card">
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
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        $('#zero_config').DataTable();
    </script>

</body>

</html>