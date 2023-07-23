<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-3">
                        <img src="{{Vite::asset('resources/img/dc-logo.png')}}">
                </div>
                <div class="col-9">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link" href="#">Pricing</a>
        <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
      </div>
    </div>
  </div>
</nav>


                </div>
            </div>
        </div>

    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>