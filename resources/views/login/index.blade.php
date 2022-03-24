<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/template-assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/template-assets/img/favicon.png">
  <title>{{ $page }}</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="/template-assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/template-assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/template-assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="/template-assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>

<body class="">
  @include('sweetalert::alert')
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              My Cashflow
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" target="blank" href="https://github.com/govindakarisma">
                    <i class="fa fa-github opacity-6 text-dark me-1"></i>
                    Github
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" target="blank" href="https://linkedin.com/in/govindakarisma">
                    <i class="fa fa-linkedin opacity-6 text-dark me-1"></i>
                    Linkedin
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" target="blank" href="https://instagram.com/govindakarisma">
                    <i class="fa fa-instagram opacity-6 text-dark me-1"></i>
                    Instagram
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" target="blank" href="https://twitter.com/govindakarisma">
                    <i class="fa fa-twitter opacity-6 text-dark me-1"></i>
                    Twitter
                  </a>
                </li>
              </ul>
              <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/product/argon-dashboard" class="btn btn-sm mb-0 me-1 btn-primary" target="blank">Argon Template</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                  @if(session()->has('toast_error'))
                  <div class="alert bg-gradient-danger text-white alert-dismissible-white fade show" role="alert">
                    {{ session('toast_error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                  <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                      <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="Username" aria-label="Username" value="{{ old('username') }}" autofocus>
                      @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" id="password" aria-label="Password">
                      @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="d-flex my-4 align-items-center">
                      <span type="button" class="toggle-password border-0 bg-transparent" style="color: #717171;">
                        <i class="fas fa-eye-slash"></i>
                        <span id="show-hide">Show Password</span>
                      </span>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="/template-assets/js/core/popper.min.js"></script>
  <script src="/template-assets/js/core/bootstrap.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="/my-assets/js/showhide-password.js"></script>
</body>

</html>