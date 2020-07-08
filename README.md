
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

Publish assets using webpack.mix.js:

    mix.js('vendor/uspdev/laravel-comet-theme/resources/assets/js/script.js', 'public/js')
       .sass('vendor/uspdev/laravel-comet-theme/resources/assets/sass/app.scss', 'public/css');

Using service provider:

    php artisan vendor:publish --provider="Uspdev\CometTheme\CometThemeServiceProvider" --tag=assets --force
    
And then run Mix:

    npm run dev

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
