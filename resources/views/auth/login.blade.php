<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian Urgent | Login</title>
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
</head>
<body>
    <main class="main" id="top">
        <div class="container-fluid">
          <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
              var container = document.querySelector('[data-layout]');
              container.classList.remove('container');
              container.classList.add('container-fluid');
            }
          </script>
          <div class="row min-vh-100 bg-100">
            <div class="col-6 d-none d-lg-block position-relative">
              <div class="bg-holder" style="background-image:url({{ asset('assets/img/generic/14.jpg') }});background-position: 50% 20%;">
              </div>
              <!--/.bg-holder-->
  
            </div>
            
            <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
              <div class="row justify-content-center g-0">
                <div class="col-lg-9 col-xl-8 col-xxl-6">
                  @if ($errors->any())
                    <div class="alert alert-warning border-2 d-flex align-items-center" role="alert">
                      <div class="bg-warning me-3 icon-item"><span class="fas fa-exclamation-circle text-white fs-3"></span></div>
                      <p class="fs-3 mb-0 flex-1">@foreach ($errors->all() as $error)
                        <li class="fs--1">{{ $error }}</li>
                    @endforeach</p>
                      <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  <div class="card">
                    <div class="card-header bg-circle-shape bg-shape text-center p-2">
                        <a class="font-sans-serif fw-bolder fs-4 z-index-1 position-relative link-light light" href="">
                            {{-- <img src="{{ asset('image/Logo KMI 8000x4000.png') }}" height="50"> --}}
                            Pembelian Urgent
                        </a>
                    </div>
                    <div class="card-body p-4">
                      @if (session('status'))
                          <div class="mb-4 font-medium text-sm text-green-600">
                              {{ session('status') }}
                          </div>
                      @endif
                      
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <h3>Login</h3>
                        </div>
                        </div>
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                          <label class="form-label" for="split-login-email">Email address</label>
                          <input class="form-control" id="split-login-email" type="email"  name="txtemail" :value="old('email')" required autofocus />
                        </div>
                        <div class="mb-3">
                          <div class="d-flex justify-content-between">
                            <label class="form-label" for="split-login-password">Password</label>
                          </div>
                          <input class="form-control" id="split-login-password" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="row flex-between-center">
                          <div class="col-auto">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="split-checkbox" name="remember" />
                              <label class="form-check-label mb-0" for="split-checkbox">Remember me</label>
                            </div>
                          </div>
                        </div>
                        <div class="mb-3">
                          <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>
</html>