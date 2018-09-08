# Laravel theme for comet project

To install the package:

    composer require uspdev/laravel-comet-theme

Extends in your template:

    @extends('XXXXX')

Sections availables:

 - title
 - sitename
 - menu
 - content
 - stylesheets (it is a good idea to use: *{{ parent() }}*)
 - javascripts (it is a good idea to use: *{{ parent() }}*)

An example that can be inserted in your base.html.twig:

    @extends('XXXXX')

    @section('title') Sistema @endsection

    @section('menu')
    <ul>
        <li> <a href="#"> Sobre </a> </li>
    </ul>
    @endsection

    @section('content')
        Seu código
    @endsection
