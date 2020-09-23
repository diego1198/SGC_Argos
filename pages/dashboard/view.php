<div class="content">
    <!--START PAGE HEADER -->
    <header class="page-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h1>Dashboard</h1>
            </div>
            <ul class="actions top-right">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                        <i class="la la-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            Acciones Rápidas
                        </div>
                        <a href="?module=dashboard" class="dropdown-item">
                            <i class="icon dripicons-clockwise"></i> Recargar
                        </a>
                        <a href="#" class="dropdown-item">
                            <i class="icon dripicons-help"></i> Soporte
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <!--END PAGE HEADER -->
    <!--START PAGE CONTENT -->
    <section class="page-content container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row m-0 col-border-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                                    <i class="icon dripicons-graph-bar"></i>
                                </div>
                                <h5 class="card-title m-b-5 append-percent counter" data-count="72">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Porcentaje Gestiones Exitosas del Mes
                                </h6>
                                <div class="progress progress-active-sessions mt-4" style="height:7px;">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="72">
                                    0
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-accent float-left m-r-20">
                                    <i class="icon dripicons-cart"></i>
                                </div>
                                <h5 class="card-title m-b-5 append-percent counter" data-count="67">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Porcentaje Gestiones En Espera del Mes
                                </h6>
                                <div class="progress progress-add-to-cart mt-4" style="height:7px;">
                                    <div class="progress-bar bg-accent" role="progressbar" style="" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="67">
                                    0
                                </small>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-info float-left m-r-20">
                                    <i class="icon dripicons-mail"></i>
                                </div>
                                <h5 class="card-title m-b-5 append-percent counter" data-count="45">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Porcentaje Gestiones Negativas del Mes
                                </h6>
                                <div class="progress progress-new-account mt-4" style="height:7px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="83">
                                    0
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-success float-left m-r-20">
                                    <i class="la la-dollar f-w-600"></i>
                                </div>
                                <h5 class="card-title m-b-5 counter" data-count="73">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Gestiones Pendientes del Mes
                                </h6>
                                <div class="progress progress-total-revenue mt-4" style="height:7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter append-percent" data-count="73">
                                    0
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card-deck m-b-30">
                    <div class="card">
                        <h5 class="card-header border-none">$ Recuperado Cartera 30</h5>
                        <div class="card-body p-0">
                            <h4 class="card-title text-info p-t-10 p-l-15">67,325 <i class="zmdi zmdi-trending-up text-info"></i></h4>
                            <div class="h-200">
                                <canvas id="usersChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header border-none">$ Recuperado Cartera 60</h5>
                        <div class="card-body p-0">
                            <h4 class="card-title text-warning p-t-10 p-l-15"><i class="zmdi zmdi-trending-down text-warning"></i></h4>
                            <div class="h-200">
                                <canvas id="bounceRateChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header border-none">$ Recuperado Cartera 90</h5>
                        <div class="card-body p-0">
                            <h4 class="card-title text-primary p-t-10 p-l-15"><i class="zmdi zmdi-trending-up text-primary"></i></h4>
                            <div class="h-200">
                                <canvas id="sessionDuration"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="card-header border-none">$ Recuperado Cartera +90</h5>
                        <div class="card-body p-0">
                            <h4 class="card-title text-success p-t-10 p-l-15"><i class="zmdi zmdi-trending-up text-success"></i></h4>
                            <div class="h-200">
                                <canvas id="cartera_90"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row m-0 col-border-xl">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-success float-left m-r-20">
                                    <i class="la la-dollar f-w-600"></i>
                                </div>
                                <h5 class="card-title m-b-5 counter prepend-currency" data-count="500">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Cartera 30 días
                                </h6>
                                <div class="progress progress-total-revenue mt-4" style="height:7px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter prepend-currency" data-count="500">
                                    0
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-info float-left m-r-20">
                                    <i class="la la-dollar f-w-600"></i>
                                </div>
                                <h5 class="card-title m-b-5 counter prepend-currency" data-count="420">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Cartera 60 días
                                </h6>
                                <div class="progress progress-total-revenue mt-4" style="height:7px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter prepend-currency" data-count="420">
                                    0
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-secondary float-left m-r-20">
                                    <i class="la la-dollar f-w-600"></i>
                                </div>
                                <h5 class="card-title m-b-5 counter prepend-currency" data-count="200">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Cartera 90 días
                                </h6>
                                <div class="progress progress-total-revenue mt-4" style="height:7px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter prepend-currency" data-count="200">
                                    0
                                </small>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <div class="card-body">
                                <div class="icon-rounded icon-rounded-primary float-left m-r-20">
                                    <i class="la la-dollar f-w-600"></i>
                                </div>
                                <h5 class="card-title m-b-5 counter prepend-currency" data-count="100">0</h5>
                                <h6 class="text-muted m-t-10">
                                    Cartera +90 días
                                </h6>
                                <div class="progress progress-total-revenue mt-4" style="height:7px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small class="text-muted float-right m-t-5 mb-3 counter prepend-currency" data-count="100">
                                    0
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-6">
                <div class="card bg-info" id="totalVisitsChart">
                    <div class="card-body p-0">
                        <div class="card-toolbar top-right">
                            <ul class="nav nav-pills nav-pills-light justify-content-end" id="total-visits-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="total-visits-link-1" data-toggle="pill" href="#total-visits-tab-1" role="tab" aria-controls="total-visits-tab-1" aria-selected="true">Semana</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-visits-link-2" data-toggle="pill" href="#total-visits-tab-2" role="tab" aria-controls="total-visits-tab-2" aria-selected="false">Mes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-visits-link-3" data-toggle="pill" href="#total-visits-tab-3" role="tab" aria-controls="total-visits-tab-3" aria-selected="false">Año</a>
                                </li>
                            </ul>
                        </div>
                        <h5 class="card-title border-none text-white p-l-20 p-t-20 m-b-0">Fridays</h5>
                        <div class="tab-content" id="total-visits-tab-content">
                            <div class="tab-pane fade show active" id="total-visits-tab-1" role="tabpanel" aria-labelledby="total-visits-tab-1">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="3233">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-visits-tab-2" role="tabpanel" aria-labelledby="total-visits-tab-2">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="7933">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-visits-tab-3" role="tabpanel" aria-labelledby="total-visits-tab-3">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="15423">0</span>
                            </div>
                        </div>
                        <div class="ct-chart h-75 m-t-40"></div>
                    </div>
                </div>
                <div class="card bg-danger" id="totalUniqueVisitsChart">
                    <div class="card-body p-0">
                        <div class="card-toolbar top-right">
                            <ul class="nav nav-pills nav-pills-light justify-content-end" id="total-uniquevisits-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="total-uniquevisits-link-1" data-toggle="pill" href="#total-uniquevisits-tab-1" role="tab" aria-controls="total-uniquevisits-tab-1" aria-selected="true">Semana</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-uniquevisits-link-2" data-toggle="pill" href="#total-uniquevisits-tab-2" role="tab" aria-controls="total-uniquevisits-tab-2" aria-selected="false">Mes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-uniquevisits-link-3" data-toggle="pill" href="#total-uniquevisits-tab-3" role="tab" aria-controls="total-uniquevisits-tab-3" aria-selected="false">Año</a>
                                </li>
                            </ul>
                        </div>
                        <h5 class="card-title border-none text-white p-l-20 p-t-20  m-b-0">Pizza Hut
                        </h5>
                        <div class="tab-content" id="total-uniquevisits-tab-content">
                            <div class="tab-pane fade show active" id="total-uniquevisits-tab-1" role="tabpanel" aria-labelledby="total-uniquevisits-tab-1">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="1943">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-uniquevisits-tab-2" role="tabpanel" aria-labelledby="total-uniquevisits-tab-2">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="3213">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-uniquevisits-tab-3" role="tabpanel" aria-labelledby="total-visits-tab-3">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="7713">0</span>
                            </div>
                        </div>

                        <div class="ct-chart h-75 m-t-40"></div>
                    </div>
                </div>
                <div class="card bg-success" id="totalUniqueVisitsChart">
                    <div class="card-body p-0">
                        <div class="card-toolbar top-right">
                            <ul class="nav nav-pills nav-pills-light justify-content-end" id="total-uniquevisits-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="total-uniquevisits-link-1" data-toggle="pill" href="#total-uniquevisits-tab-1" role="tab" aria-controls="total-uniquevisits-tab-1" aria-selected="true">Semana</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-uniquevisits-link-2" data-toggle="pill" href="#total-uniquevisits-tab-2" role="tab" aria-controls="total-uniquevisits-tab-2" aria-selected="false">Mes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-uniquevisits-link-3" data-toggle="pill" href="#total-uniquevisits-tab-3" role="tab" aria-controls="total-uniquevisits-tab-3" aria-selected="false">Año</a>
                                </li>
                            </ul>
                        </div>
                        <h5 class="card-title border-none text-white p-l-20 p-t-20  m-b-0">Otro
                        </h5>
                        <div class="tab-content" id="total-uniquevisits-tab-content">
                            <div class="tab-pane fade show active" id="total-uniquevisits-tab-1" role="tabpanel" aria-labelledby="total-uniquevisits-tab-1">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="1943">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-uniquevisits-tab-2" role="tabpanel" aria-labelledby="total-uniquevisits-tab-2">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="3213">0</span>
                            </div>
                            <div class="tab-pane fade" id="total-uniquevisits-tab-3" role="tabpanel" aria-labelledby="total-visits-tab-3">
                                <span class="card-title text-white font-size-40 font-w-300 p-l-20 counter" data-count="7713">0</span>
                            </div>
                        </div>

                        <div class="ct-chart h-75 m-t-40"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6">
                <div class="card">
                    <div class="card-header"><span class="m-t-10 d-inline-block">Top Ten Mejores Clientes</span>
                        <ul class="nav nav-pills nav-pills-primary float-right" id="pills-demo-sales" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-month-tab" data-toggle="tab" href="#sales-month-tab" role="tab">Més</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-year-tab" data-toggle="tab" href="#sales-year-tab" role="tab">Año</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-0">
                        <div class="tab-content" id="pills-tabContent-sales">
                            <div class="tab-pane fade show active" id="sales-month-tab" role="tabpanel" aria-labelledby="sales-month-tab">
                                <table class="table v-align-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="p-l-20">Name</th>
                                            <th>Earnings</th>
                                            <th>Quota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/27.jpg" alt="">
                                                <strong class="nowrap">Robert Norris</strong>
                                            </td>
                                            <td>$37,000</td>
                                            <td><span class="badge badge-pill badge-success">Above</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/47.jpg" alt="">
                                                <strong class="nowrap">Shawna Cohen</strong></td>
                                            <td>$27,600</td>
                                            <td><span class="badge badge-pill badge-info">Met</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/24.jpg" alt="">
                                                <strong class="nowrap">Darrin Todd</strong></td>
                                            <td>$23,200</td>

                                            <td><span class="badge badge-pill badge-info">Met</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/01.jpg" alt="">
                                                <strong class="nowrap">Michelle White</strong></td>
                                            <td>$19,300</td>

                                            <td><span class="badge badge-pill badge-info">Met</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/09.jpg" alt="">
                                                <strong class="nowrap">Josh Lynch</strong></td>
                                            <td>$18,500</td>
                                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/26.jpg" alt="">
                                                <strong class="nowrap">Jason Kendall</strong></td>
                                            <td>$16,300</td>
                                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/11.jpg" alt="">
                                                <strong class="nowrap">Aaron Elliott</strong></td>
                                            <td>$8,300</td>
                                            <td><span class="badge badge-pill badge-danger">Danger</span></td>
                                        </tr>
                                        <tr>
                                            <td class="border-none"><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/21.jpg" alt="">
                                                <strong class="nowrap">Rebecca Harris</strong></td>
                                            <td class="border-none">$4,000</td>
                                            <td class="border-none"><span class="badge badge-pill badge-danger">Danger</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="sales-year-tab" role="tabpanel" aria-labelledby="sales-year-tab">
                                <table class="table v-align-middle">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>Name</th>
                                            <th>Earnings</th>
                                            <th>Quota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/02.jpg" alt="">
                                                <strong class="nowrap">Mike Jones </strong>
                                            </td>
                                            <td>$587,000</td>
                                            <td><span class="badge badge-pill badge-success">Above</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/6.jpg" alt="">
                                                <strong class="nowrap">Leslie Chapman</strong></td>
                                            <td>$427,600</td>
                                            <td><span class="badge badge-pill badge-success">Above</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/7.jpg" alt="">
                                                <strong class="nowrap">Taylor Collier</strong></td>
                                            <td>$323,200</td>

                                            <td><span class="badge badge-pill badge-success">Above</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/35.jpg" alt="">
                                                <strong class="nowrap">Dominic Shaw</strong></td>
                                            <td>$321,000</td>

                                            <td><span class="badge badge-pill badge-info">Met</span></td>
                                        </tr>
                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/38.jpg" alt="">
                                                <strong class="nowrap">Josh Lynch</strong></td>
                                            <td>$293,500</td>
                                            <td><span class="badge badge-pill badge-warning">Pending</span></td>
                                        </tr>

                                        <tr>
                                            <td><img class="align-self-center mr-3 ml-2 w-50 rounded-circle" src="./assets/img/avatars/30.jpg" alt="">
                                                <strong class="nowrap">Angelo Parker</strong></td>
                                            <td>$87,300</td>
                                            <td><span class="badge badge-pill badge-danger">Danger</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-header p-t-25 p-b-20"><span class="">Traffic Sources</span></h5>
                    <div class="card-toolbar top-right">
                        <ul class="nav nav-pills nav-pills-primary justify-content-end" id="pills-demo-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="pills-tabContent-1">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1">
                                <ul class="list-reset list-inline-block m-b-15">
                                    <li class="m-r-5">
                                        <span><i class="badge badge-info badge-circle w-10 h-10 m-r-10"></i>Direct</span>
                                    </li>
                                    <li class="m-r-5">
                                        <span><i class="badge badge-success badge-circle w-10 h-10 m-r-10"></i>Referral</span>
                                    </li>
                                </ul>
                                <div class="ct-chart" id="traffic-week" style="height: 350px;"></div>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2">

                                <ul class="list-reset list-inline-block m-b-15">
                                    <li class="m-r-5">
                                        <span><i class="badge badge-info badge-circle w-10 h-10 m-r-10"></i>Direct</span>
                                    </li>
                                    <li class="m-r-5">
                                        <span><i class="badge badge-success badge-circle w-10 h-10 m-r-10"></i>Referral</span>
                                    </li>
                                </ul>
                                <div class="ct-chart" id="traffic-month" style="height: 350px;"></div>

                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3">

                                <ul class="list-reset list-inline-block m-b-15">
                                    <li class="m-r-5">
                                        <span><i class="badge badge-info badge-circle w-10 h-10 m-r-10"></i>Direct</span>
                                    </li>
                                    <li class="m-r-5">
                                        <span><i class="badge badge-success badge-circle w-10 h-10 m-r-10"></i>Referral</span>
                                    </li>
                                </ul>
                                <div class="ct-chart" id="traffic-year" style="height: 350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END PAGE CONTENT -->
</div>
<script src="./assets/vendor/countup.js/dist/countUp.min.js"></script>
<script src="./assets/vendor/chart.js/dist/Chart.bundle.min.js"></script>
<script src="./assets/vendor/flot/jquery.flot.js"></script>
<script src="./assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="./assets/vendor/flot/jquery.flot.resize.js"></script>
<script src="./assets/vendor/flot/jquery.flot.time.js"></script>
<script src="./assets/vendor/flot.curvedlines/curvedLines.js"></script>
<script src="./assets/vendor/datatables.net/js/jquery.dataTables.js"></script>
<script src="./assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
<script src="./assets/js/components/countUp-init.js"></script>
<script src="./assets/js/cards/counter-group.js"></script>

<script src="./assets/js/cards/users-chart.js"></script>
<script src="./assets/js/cards/bounce-rate-chart.js"></script>
<script src="./assets/js/cards/session-duration-chart.js"></script>
<script src="./assets/js/cards/cartera_90.js"></script>

<script src="./assets/js/cards/total-visits-chart.js"></script>
<script src="./assets/js/cards/total-unique-visits-chart.js"></script>

<script src="./assets/js/cards/traffic-sources.js"></script>