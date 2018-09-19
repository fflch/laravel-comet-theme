<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>@yield('title')</title>

        <!-- Bootstrap core CSS -->
        @section('styles')
            <link rel="stylesheet" href="{{ asset('/css/app.css')}}">

        @show
    </head>

    <body>
        {{--@include('laravel-comet-theme::partials.nav')--}}

        <div class="container-fluid">
          <div class="row">
            <div class="col text-center">
                @yield('header')

            </div>
          </div>
          <div class="row">
            <div class="col text-right">
              @yield('language')
            </div>
          </div>
          <div class="row">
            @include('laravel-comet-theme::partials.menu')
          </div>
          <div class="row">
            <main role="main" class="p-5 container-fluid">
                @yield('content')
            </main>
          </div>
          <div class="row">
            <div class="col">
              <footer class="page-footer font-small blue">
                @include('laravel-comet-theme::partials.footer')
              </footer>
            </div>
          </div>
        </div>

        @section('javascripts')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.pt-BR.min.js"></script>
            <script type="text/javascript" src="{{ asset('/vendor/laravel-comet-theme/js/script.js') }}"></script>
        @show
    </body>
</html>
