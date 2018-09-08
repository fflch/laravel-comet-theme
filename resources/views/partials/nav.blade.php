<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <!-- Organization Name -->
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href=" {{ url('/') }}"> 
        @section('sitename')
            Comet Project
        @show
    </a>
    <form class="form-control form-control-dark" method="GET" action="/">
        <input class="form-control form-control-dark w-100" type="text" name="pesquisar" placeholder="Search" aria-label="Search">
    </form>
</nav>
