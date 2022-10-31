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
    <div class="container col-md-4">
        <div class="shadow-lg p-3 mb-5 bg-body rounded mt-5">
            <h1>ADD BERITA</h1>
            <form action="/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="formFile" class="form-label">Foto Berita</label>
                    <input name="img" class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Judul Berita</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Konten Berita</label>
                    <textarea name="konten" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <a href="/home" class="btn btn-danger ">cancel</a>
                <button type="submit" class="btn btn-primary">submittt</button>
            </form>
        </div>
    </div>
</body>
</html>