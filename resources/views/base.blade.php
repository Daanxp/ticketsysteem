<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link   href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous">
    <title>Ticketsysteem</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Ticketsysteem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('testroute') }}">Testroute</a>
                    <a class="nav-item nav-link" href="{{ route('testroute2') }}">Testroute2</a>
                    <a class="nav-item nav-link" href="{{ route('events') }}">Events</a>
                </div>
                    <a class="nav-item btn btn-primary" href="{{ route('login') }}">Login</a>
            </div>
        </nav>
    </header>
    @yield('content')
</body>
</html>