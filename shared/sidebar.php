<!-- START MENU SIDEBAR WRAPPER -->
<?php
$permisos = $_SESSION['permisos_acceso'];

switch ($permisos) {
    case 'Super Admin':
?>
        <aside class="sidebar sidebar-left">
            <div class="sidebar-content">
                <div class="aside-toolbar">
                    <ul class="site-logo">
                        <li>
                            <!-- START LOGO -->
                            <a href="?module=dashboard">
                                <div class="logo">
                                    <img src="images/icon.png" alt="" width="25" height="25">
                                </div>
                                <span class="brand-text">SGC ARGOS</span>
                            </a>
                            <!-- END LOGO -->
                        </li>
                    </ul>
                    <ul class="header-controls">
                        <li class="nav-item">
                            <button type="button" class="btn btn-link btn-menu" data-toggle-state="mini-sidebar">
                                <i class="la la-dot-circle-o"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <nav class="main-menu">
                    <ul class="nav metismenu">
                        <li class="sidebar-header"><span>NAVEGACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'dashboard') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="?module=dashboard" aria-expanded="false"><i class="icon dripicons-meter"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'gestiones' || $_GET['module'] == 'nueva_gestion') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-document-edit"></i><span>Gestiones</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=gestiones&cartera=30"><span>Cartera 30</span></a></li>
                                <li><a href="?module=gestiones&cartera=60"><span>Cartera 60</span></a></li>
                                <li><a href="?module=gestiones&cartera=90"><span>Cartera 90</span></a></li>
                                <li><a href="?module=gestiones&cartera=91"><span>Cartera +90</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-dropdown <?php if ($_GET['module'] == 'reportes') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-to-do"></i><span>Reportes</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=reportes&tipo=ventas por locales"><span>Ventas por locales</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranzas anteriores"><span>Reporte Cobranzas Anteriores</span></a></li>
                                <li><a href="?module=reportes&tipo=total cobranza"><span>Total Cobranza</span></a></li>
                                <li><a href="?module=reportes&tipo=detalle cobranza"><span>Detalle Cobranza</span></li>
                                <li><a href="?module=reportes&tipo=dinero por edades de cartera"><span>Dinero por edades de cartera</span></a></li>
                                <li><a href="?module=reportes&tipo=cartera recuperada"><span>Cartera recuperada</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente + consumos"><span>Cliente + Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente - consumos"><span>Cliente - Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranza por gestor"><span>Detalle de cobranza por gestores</span></a></li>
                                <li><a href="?module=reportes&tipo=consumos del mes"><span>Consumos del mes</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-header"><span>ADMINISTRACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'administracion' || $_GET['module'] == 'usuarios' || $_GET['module'] == 'contrasena') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-user-group"></i><span>Usuarios</span></a>
                            <ul class="collapse nav-sub" aria-expanded="false">
                                <li><a href="?module=usuarios"><span>Gestión Usuarios</span></a></li>
                                <li><a href="?module=contrasena"><span>Cambiar Contraseña</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR WRAPPER -->
    <?php
        break;
    case 'Supervisor':
    ?>
        <aside class="sidebar sidebar-left">
            <div class="sidebar-content">
                <div class="aside-toolbar">
                    <ul class="site-logo">
                        <li>
                            <!-- START LOGO -->
                            <a href="?module=dashboard">
                                <div class="logo">
                                    <img src="images/icon.png" alt="" width="25" height="25">
                                </div>
                                <span class="brand-text">SGC ARGOS</span>
                            </a>
                            <!-- END LOGO -->
                        </li>
                    </ul>
                    <ul class="header-controls">
                        <li class="nav-item">
                            <button type="button" class="btn btn-link btn-menu" data-toggle-state="mini-sidebar">
                                <i class="la la-dot-circle-o"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <nav class="main-menu">
                    <ul class="nav metismenu">
                        <li class="sidebar-header"><span>NAVEGACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'dashboard') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="?module=dashboard" aria-expanded="false"><i class="icon dripicons-meter"></i><span>Dashboard</span></a>
                        </li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'gestiones') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-document-edit"></i><span>Gestiones</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=gestiones&cartera=30"><span>Cartera 30</span></a></li>
                                <li><a href="?module=gestiones&cartera=60"><span>Cartera 60</span></a></li>
                                <li><a href="?module=gestiones&cartera=90"><span>Cartera 90</span></a></li>
                                <li><a href="?module=gestiones&cartera=91"><span>Cartera +90</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-dropdown <?php if ($_GET['module'] == 'reportes') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-to-do"></i><span>Reportes</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=reportes&tipo=ventas por locales"><span>Ventas por locales</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranzas anteriores"><span>Reporte Cobranzas Anteriores</span></a></li>
                                <li><a href="?module=reportes&tipo=total cobranza"><span>Total Cobranza</span></a></li>
                                <li><a href="?module=reportes&tipo=detalle cobranza"><span>Detalle Cobranza</span></li>
                                <li><a href="?module=reportes&tipo=dinero por edades de cartera"><span>Dinero por edades de cartera</span></a></li>
                                <li><a href="?module=reportes&tipo=cartera recuperada"><span>Cartera recuperada</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente + consumos"><span>Cliente + Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente - consumos"><span>Cliente - Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranza por gestor"><span>Detalle de cobranza por gestores</span></a></li>
                                <li><a href="?module=reportes&tipo=consumos del mes"><span>Consumos del mes</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-header"><span>ADMINISTRACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'administracion' || $_GET['module'] == 'usuarios' || $_GET['module'] == 'contrasena') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-user-group"></i><span>Usuarios</span></a>
                            <ul class="collapse nav-sub" aria-expanded="false">
                                <li><a href="?module=usuarios"><span>Gestión Usuarios</span></a></li>
                                <li><a href="?module=contrasena"><span>Cambiar Contraseña</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR WRAPPER -->
    <?php
        break;
    case 'Operador':
    ?>
        <aside class="sidebar sidebar-left">
            <div class="sidebar-content">
                <div class="aside-toolbar">
                    <ul class="site-logo">
                        <li>
                            <!-- START LOGO -->
                            <a href="?module=dashboard">
                                <div class="logo">
                                    <img src="images/icon.png" alt="" width="25" height="25">
                                </div>
                                <span class="brand-text">SGC ARGOS</span>
                            </a>
                            <!-- END LOGO -->
                        </li>
                    </ul>
                    <ul class="header-controls">
                        <li class="nav-item">
                            <button type="button" class="btn btn-link btn-menu" data-toggle-state="mini-sidebar">
                                <i class="la la-dot-circle-o"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <nav class="main-menu">
                    <ul class="nav metismenu">
                        <li class="sidebar-header"><span>NAVEGACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'gestiones') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-document-edit"></i><span>Gestiones</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=gestiones&cartera=30"><span>Cartera 30</span></a></li>
                                <li><a href="?module=gestiones&cartera=60"><span>Cartera 60</span></a></li>
                                <li><a href="?module=gestiones&cartera=90"><span>Cartera 90</span></a></li>
                                <li><a href="?module=gestiones&cartera=91"><span>Cartera +90</span></a></li>
                            </ul>
                        </li>

                        <li class="nav-dropdown <?php if ($_GET['module'] == 'reportes') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-to-do"></i><span>Reportes</span></a>
                            <ul class="collapse nav-sub">
                                <li><a href="?module=reportes&tipo=ventas por locales"><span>Ventas por locales</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranzas anteriores"><span>Reporte Cobranzas Anteriores</span></a></li>
                                <li><a href="?module=reportes&tipo=total cobranza"><span>Total Cobranza</span></a></li>
                                <li><a href="?module=reportes&tipo=detalle cobranza"><span>Detalle Cobranza</span></li>
                                <li><a href="?module=reportes&tipo=dinero por edades de cartera"><span>Dinero por edades de cartera</span></a></li>
                                <li><a href="?module=reportes&tipo=cartera recuperada"><span>Cartera recuperada</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente + consumos"><span>Cliente + Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cliente - consumos"><span>Cliente - Consumos</span></a></li>
                                <li><a href="?module=reportes&tipo=cobranza por gestor"><span>Detalle de cobranza por gestores</span></a></li>
                                <li><a href="?module=reportes&tipo=consumos del mes"><span>Consumos del mes</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-header"><span>ADMINISTRACIÓN</span></li>
                        <li class="nav-dropdown <?php if ($_GET['module'] == 'administracion' || $_GET['module'] == 'usuarios' || $_GET['module'] == 'contrasena') {
                                                    echo 'active';
                                                } ?>">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon dripicons-user-group"></i><span>Usuarios</span></a>
                            <ul class="collapse nav-sub" aria-expanded="false">
                                <li><a href="?module=contrasena"><span>Cambiar Contraseña</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR WRAPPER -->
<?php
        break;
    default:

        break;
}
?>