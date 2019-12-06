<?php include_once 'includes/header.php';?>
    <div id="main-wrapper">
        <?php include_once 'includes/menu_principal.php';?>
        <?php include_once 'includes/menu_lateral.php';?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Novo Post</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Novo Post</li>
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
                            <form class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Descrição</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Título</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Subtítulo</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="lname" placeholder="Subtítulo">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="imagem" class="col-sm-3 text-right control-label col-form-label">Imagem</label>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="imagem" required>
                                                <label class="custom-file-label" for="imagem">Escolher ficheiro...</label>
                                                <div class="invalid-feedback">Imagem Inválida</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-right control-label col-form-label">Descrição</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="email1" placeholder="descrição">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Link</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="cono1" placeholder="link">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-right control-label col-form-label">Texto</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Cadastrar</button>
                                    <button type="submit" class="btn btn-info" disabled="">Editar</button>
                                    <button type="submit" class="btn btn-danger" disabled="">Cancelar</button>
                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Outras descrições</h5>
                                
                                </form>
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
    <script src="assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="js/pages/mask/mask.init.js"></script>
    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/libs/quill/dist/quill.min.js"></script>
    <script>
        $(".select2").select2();

        $('.demo').each(function() {
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
</body>

</html>