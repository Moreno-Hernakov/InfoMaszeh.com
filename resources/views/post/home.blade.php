<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container p-3">
        <div class="d-flex align-items-center justify-content-between">
            <a href="/add" class="btn btn-primary m-3">Tambah Berita</a>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="/logout">logout</a></li>
                </ul>
            </div>
        </div>
        <div class="row shadow p-3" >
            @foreach ($datas as $data)
            <div class="card col-md-3 mx-auto" style="width: 400px;  padding: 0px !important" >
                <div class="rounded-2" style="background-position:center; background-repeat: no-repeat; background-size: cover; background-image: url('storage/{{$data->img}}'); width: 400px; height: 400px;"></div>
                {{-- <img src="storage/{{$data->img}}" class="card mt-3" alt="{{$data->img}}"> --}}
                <div class="card-body">
                <h3 class="card-title">{{$data->title}}</h3>
                <p class="card-text">{{ substr($data->konten, 0, 100) }}</p>
                <a href="detail/{{$data->id}}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
            
            <div class="m-3">

                {{ $datas->links() }}
            </div>
        </div>
    </div>
</body>
</html>