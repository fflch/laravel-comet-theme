# Laravel theme for comet project

To install the package:

    composer require uspdev/laravel-comet-theme

Extends **laravel-comet-theme master** on your template:

    @extends('laravel-comet-theme::master')

Sections availables:

 - title
 - sitename
 - menu
 - content
 - stylesheets (it is a good idea to use: *{{ parent() }}*)
 - javascripts (it is a good idea to use: *{{ parent() }}*)

Publish assets:
    
    php artisan vendor:publish --provider="Uspdev\CometTheme\CometThemeServiceProvider" --tag=assets

An example that can be inserted in your base.html.twig:

    @extends('laravel-comet-theme::master')

    @section('title') Sistema @endsection

    @section('menu')
    <ul>
        <li> <a href="#"> Sobre </a> </li>
    </ul>
    @endsection

    @section('content')
        Seu código
    @endsection
