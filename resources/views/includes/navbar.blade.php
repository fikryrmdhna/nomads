    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="" class="navbar-brand">
                <img src="{{url('frontend/images/nomads_logo@2x.png')}}" alt="logo nomads">
            </a>

            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                data-target="#navbarCollapse" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Paket Travel</a></li>
                    <li class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" id="navbarDrop" data-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">VISA</a>
                            <a href="#" class="dropdown-item">Passport</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
                </ul>

                <!-- Button Mobile -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>
                <!-- Akhir Button Mobile -->

                <!-- Button Desktop -->
                <form class="form-inline d-none d-md-block my-2 my-lg-0">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
                <!-- Akhir Button Desktop -->
            </div>

        </nav>
    </div>
    <!-- Akhir Navbar -->