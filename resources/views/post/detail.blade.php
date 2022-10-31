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
    <div class="container m-5">
      <a href="/home" class="btn btn-primary m-3">kembali</a>
      <div class="card mb-3">
        <img src="{{asset('storage/'.$data->img)}}" height="500px" class="card-img-top" alt="...">
        <div class="card-body">
          <h2 class="card-title">{{$data->title}}</h2>
          <p class="card-text"><small class="text-muted">{{$data->created_at}}</small></p>
          <p class="card-text">{{$data->konten}}</p>
        </div>
      </div>
          {{-- =============================== KOMENTAR ================================ --}}
          {{-- <div class="container mt-5 mb-5"> --}}
      <div class="d-flex justify-content-center row ">
        <div class="d-flex flex-column col-md-8 shadow">
          <div class="coment-bottom bg-white p-2 px-4">
            <div class="d-flex mt-4 mb-4">
              {{-- <img class="img-fluid img-responsive rounded-circle mr-2" src="https://i.imgur.com/qdiP4DB.jpg" width="38"> --}}
              <input type="text" class="form-control" placeholder="Add comment" style="width: 700px">
              <button class="btn btn-primary" type="button">Comment</button>
            </div>
            <div class="commented-section mt-2">
              <div class="d-flex align-items-center justify-content-between" style="width: 200px">
                <h5 class="mr-2 ">Corey oates</h5>
                <span class="mb-1 ml-2">4 hours ago</span>
              </div>
              <div class="comment-text-sm"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></div>
                <div class="reply-section">
                <h6 class="ml-5 mt-1">Reply</h6>
                </div>
              </div>
            </div>
          </div>
      </div>
        {{-- </div> --}}
    </div>
    
</body>
</html>