<!DOCTYPE html>
<html lang="en-US" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Pembelian Urgent</title>

        <link rel="shortcut icon" href="{{ asset('favicon.gif') }}" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.gif') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.gif') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.gif') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.gif') }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.gif') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

        <script src="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">

    </head>
    <body>
        <main class="main" id="top">
            <div class="container" data-layout="container">
              <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                  var container = document.querySelector('[data-layout]');
                  container.classList.remove('container');
                  container.classList.add('container-fluid');
                }
              </script>
              <div class="row flex-center min-vh-100 py-6 text-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xxl-5">
                    <a class="d-flex flex-center mb-4" href="{{ route('dashboard') }}">
                        <img class="me-2" src="{{ asset('image/Logo KMI 8000x4000.png') }}" alt="" width="70" />
                    </a>
                  <div class="card">
                    <div class="card-body p-4 p-sm-5">
                      <div class="fw-black lh-1 text-300 fs-error">@yield('code')</div>
                      <p class="lead mt-4 text-800 font-sans-serif fw-semi-bold w-md-75 w-xl-100 mx-auto">The page you're looking for is not found.</p>
                      <hr />
                      <p>@yield('message'), <a href="mailto:info@exmaple.com">contact us</a>.</p><a class="btn btn-primary btn-sm mt-3" href="{{ route('dashboard') }}"><span class="fas fa-home me-2"></span>Take me home</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>
    </body>
</html>
