<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">

        <title>@yield('title')</title>

        <!-- Javascript -->
        @section('javascripts_head')
        @show

        <!-- CSS -->
        @section('styles')

        {{-- Botstrap 4 --}}
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
            {{-- Botstrap 4 --}}

            {{-- FontAwesome --}}
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
            {{-- FontAwesome --}}

            {{-- JqueryUI --}}
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            {{-- JqueryUI --}}

            <link rel="stylesheet" href="{{ asset('/vendor/laravel-comet-theme/css/styles.css')}}">
            <link rel="stylesheet" href="{{ asset('/vendor/laravel-comet-theme/css/breakpoints.css')}}">
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
          <div class="row justify-content-end mb-1">
             @yield('right-top-menu')
          </div>
          <div class="row">
            @include('laravel-comet-theme::partials.menu')
          </div>
          <div class="row">
            <main role="main" class="p-5 container-fluid">
                @include('laravel-comet-theme::partials.flash')
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

        {{-- Jquery --}}
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        {{-- Jquery --}}

        {{-- Popper --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        {{-- Popper --}}

        {{-- Botstrap 4 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        {{-- Botstrap 4 --}}

        {{-- FontAwesome --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        {{-- FontAwesome --}}
        
        {{-- JqueryUI --}}
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        {{-- JqueryUI --}}

        <script type="text/javascript" src="{{ asset('/vendor/laravel-comet-theme/js/script.js') }}"></script>
        @show
    </body>
</html>
