<div class="content" data-layout="tabbed">
    <!-- PAGE HEADER -->
    <header class="page-header">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h1 class="separator">NUEVA GESTIÓN</h1>
                    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="?module=dashboard"><i class="icon dripicons-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Gestion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">INGRESO DE NUEVA GESTIÓN</h5>
                    <div class="card-body">
                        <div class="col-lg-12 offset-lg-3">
                            <form role="form" class="form-horizontal" method="POST" action="pages/user/proses.php?act=insert" enctype="multipart/form-data">
                                <div class="box-body">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nombre de usuario</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="username" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Contraseña</label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" name="password" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nombre</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="name_user" autocomplete="off" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Permisos de acceso</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="permisos_acceso" required>
                                                <option value=""></option>
                                                <option value="Super Admin">Super Admin</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Operador">Operador</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!-- /.box body -->

                                <div class="box-footer">
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                                            <a href="?module=usuarios" class="btn btn-default btn-reset">Cancelar</a>
                                        </div>
                                    </div>
                                </div><!-- /.box footer -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>