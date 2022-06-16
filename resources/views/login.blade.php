<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partial/css')
    @include('partial/js')
    <title>{{$title." || WebRes"}}</title>
</head>

<body>
    <div class="container-fluid p-0 m-0">
        <div class="row d-flex vh-100 p-0 m-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark align-self-start">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        Web <b class="text-danger">Responsive</b>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </nav>
            <div class="col-12 align-self-stretch">
                <div class="card col-4 m-auto">
                    <h5 class="card-header bg-dark text-white">{{$title}}</h5>
                    <div class="card-body">
                        <form action="/{{$url}}" method="post">
                            @csrf
                            @include("login/".$childForm)
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>