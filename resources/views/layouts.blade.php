<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    @if (session('user'))
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP TASK</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="row">
                    <div class="col-12">
                        <h5>{{ session('user')->first_name.' '.session('user')->last_name }}</h5>
                        <select class="form-select" aria-label="Default select example" onchange="redirectToSelectedOption(this)">
                            <option value="1" {{ session('user')->status->status_id == 1 ? 'selected' : '' }}>Online</option>
                            <option value="2" {{ session('user')->status->status_id == 2 ? 'selected' : '' }}>Away</option>
                            <option value="3" {{ session('user')->status->status_id == 3 ? 'selected' : '' }}>Do not disturb</option>
                        </select>
                    </div>
                </div>
                </div>
            </div>
        </nav>
        <a href="{{ route('login.logout') }}" class="btn btn-info">Logout</a> <br>
    @endif
    <br>
    @yield('content')

    
    <script>
        function redirectToSelectedOption(select) {
            var selectedValue = select.value;
            
            var url = "{!! route('users.status') !!}"
            window.location.href = url+'?status_id='+selectedValue
           
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>