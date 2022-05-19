<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Factura</title>

    <link rel="shortcut icon" href="{{asset('assets/images/logo/d.jpg')}}">

    <link href="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>



    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/a.css')}}" rel="stylesheet">


</head>

<body>
    <div class='app is-default'>
        <div class="layout">
            <div class="header">
                <div class="logo logo-dark">
                    <a href="{{url('home')}}">
                        <img src="{{asset('assets/images/logo/logo_factura.png')}}" style="width: 95px;"  >
                        <img class="logo-fold" src="{{asset('assets/images/logo/d.jpg')}}" style="width: 55px;"  alt="Icono M">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="{{url('home')}}">
                        <img src="{{asset('assets/images/logo/image.png')}}"  class="lo" alt="Logo ProjectUp">
                        <img class="logo-fold a" src="{{asset('assets/images/logo/logo_factura.png')}}" alt="Icono ProjectUp">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-branches"></i>                                </span>
                                <span class="title">Facturacion</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                <a href="{{url('cliente')}}">Clientes</a>
                                </li>
                                <li>
                                </li>
                            </ul>
                            <ul class="side-nav-menu scrollable">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle" href="javascript:void(0);">
                                        <span class="icon-holder">
                                            <i class="anticon anticon-robot"></i></span>
                                        <span class="title">Tienda</span>
                                        <span class="arrow">
                                            <i class="arrow-icon"></i>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{url('items')}}">Items</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                </div>
            </div>
            <div class="page-container">

                @yield('p')


                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2022 Montechelo. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">

            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Configuración de tema</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Color de cabecera</h5>
                                <p>Configuración de color de cabecera</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
                                    </div>
                                    <form method="post" action="">
                                      @csrf
                                 @method('PUT')
                                    <div class="form-row">

                                    <div class="radio">
                                        <input id="header-default" name="header-theme"  type="radio" value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme"  type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme"  type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme"  type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                                                        </div>
                                    <br>
                                    <br>
                                  <button class="btn btn-info btn-tone m-r-5  btn-xs"  type="submit">Escoger tema</button>

                                </div>
                                 </form>

                            </div>
                            <hr>
                            <div>
                            <form method="post" action="">
                                <h5 class="m-b-0">Modo oscuro</h5>
                                <p>Cambiar a modo oscuro</p>
                                <div class="switch d-inline">
                                    <input type="radio" name="side-nav-theme-toogle" id="side-nav-theme-toogle" value="is-side-nav-dark"><i class="fas fa-moon"></i>
                                    <br>

                                    <input type="radio" name="side-nav-theme-toogle" id="side-nav-theme-toogle" value="is"> <i class="fas fa-sun"></i>
                                    <br>

                                </div>
                                <br>
                                <button class="btn btn-info btn-tone m-r-5  btn-xs"  type="submit">Escoger modo</button>


                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Menu Guardado</h5>
                                <p>Cambiar a menu  guardado</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script src="{{asset('assets/js/vendors.min.js')}}"></script>


    <!-- page js -->
    <script src="{{asset('assets/vendors/quill/quill.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/datatables.js')}}"></script>
    <script src="{{asset('assets/js/pages/profile.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="https://enlink.themenate.net/main.a68630004af6d4d2424e.js"></script>



    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>
<script>

    </script>
</body>



</html>
