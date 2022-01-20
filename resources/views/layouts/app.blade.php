<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Pembelian Urgent | Dashboard') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        {{-- Favicon --}}
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
        <link rel="shortcut icon" href="{{ asset('favicon.gif') }}" type="image/x-icon">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon.gif') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.gif') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.gif') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.gif') }}">
        <meta name="msapplication-TileImage" content="{{ asset('favicon.gif') }}">
        <meta name="theme-color" content="#ffffff">
        {{-- END : Favicon --}}

        <!-- Styles -->

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ asset('assets/js/config.js') }}"></script>
        <script src="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.js') }}"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
        <link href="{{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
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
                @livewire('components.sidebar')
                <div class="content">
                    @livewire('components.topbar')
                    {{ $slot }}
                </div>
            </div>
        </main>

        @stack('modals')
        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        @livewireScripts
        <script src="{{ asset('js/sweetalert2.js') }}"></script>
        <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
        <script src="{{ asset('vendors/is/is.min.js') }}"></script>
        <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
        <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script type="text/javascript" defer>
            Livewire.on('hideModal', id => {
                bootstrap.Modal.getInstance(document.getElementById(id.id)).hide();
            });
        </script>
        @stack('scripts')
        <x-livewire-alert::scripts />
    </body>
</html>
