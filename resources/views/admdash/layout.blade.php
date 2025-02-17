<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trident Shipping-Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        {{-- <link href="{{asset('css/styles.css')}}" rel="stylesheet" /> --}}
        <link href="{{asset('css/stylesadm.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <style>
            #sidebarToggle{margin-left: 15px; transition: All 0.5s;}
            #sidebarToggle:hover{
                background: rgba(255, 255, 255, 0.2);
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        <div class="se-pre-con"></div>
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <a class="navbar-brand ps-3" href="index.html">Trident Shipping-Admin</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                        class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
                <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                </form>
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="container d-flex justify-content-center" style="height: 100px; width:100px; overflow:hidden; object-fit:cover;">
                                <img style="height: 100%; width:100%;" src="{{asset('/images/logo.svg')}}" alt="">
                            </div>
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading mt-1 text-center" style="padding: 0px;">Modules</div>
                                <a class="nav-link" href="{{route('Dashboard')}}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard
                                </a>
                                <a class="nav-link" href="{{route('slider.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-sliders"></i></div>
                                    Image Sliders
                                </a>
                                <a class="nav-link" href="{{route('counter.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-bar-chart"></i></div>
                                    Counters
                                </a>
                                <a class="nav-link" href="{{route('boxcards.index')}}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-window-restore"></i></div>
                                    Cards
                                </a>
                               
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Profile
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                                    data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav">
                                                <a class="nav-link" href="{{route('login')}}">Login</a>
                                                <a class="nav-link" href="{{route('register')}}">Register</a>
                                                <a class="nav-link mb-3" href="{{route('edit',Auth::user()->id)}}">Edit Profile</a>
                                            </nav>
                                </div>
                            </div>
                            <div class="sb-sidenav-footer" style="position: absolute; bottom:0; left:0; width:100%;">
                                <div class="small">Logged in as: Admin</div>
                            </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
                    <main>
        @yield('main')
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Trident Shipping {{ date('Y') }}</div>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/datatables-simple-demo.js')}}"></script>
        <!-- CKEditor CDN -->
        <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </body>
</html>
