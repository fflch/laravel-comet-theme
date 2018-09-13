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
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
            <link href="{{ asset('/vendor/laravel-comet-theme/css/style.css') }}" rel="stylesheet">

        @show
    </head>

    <body>
        {{--@include('laravel-comet-theme::partials.nav')--}}

        <div class="container-fluid">
          <div class="row">
            <div class="col text-center">
              <img src="/img/logo.png" alt="logo" class="align-middle">
            </div>
          </div>
          <div class="row">
            @include('laravel-comet-theme::partials.menu')
          </div>
          <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 container">
                @yield('content')
            </main>
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
