<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('partial/css')
    @include('partial/js')
    <title>Welcome Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark min-vh-100">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="#">Data User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-10 p-0 m-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light align-self-start">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            Web <b class="text-danger">Responsive</b>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>