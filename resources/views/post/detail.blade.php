<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5">
      <a href="/home" class="btn btn-primary m-3">kembali</a>
      @foreach ($datas as $data)
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
        <div class="d-flex flex-column col-md-8">
          <div class="coment-bottom bg-white p-2 px-4">
            {{-- <img class="img-fluid img-responsive rounded-circle mr-2" src="https://i.imgur.com/qdiP4DB.jpg" width="38"> --}}
            {{-- INPUT KOMENTAR --}}
            <form action="/comment" method="post">
              <div class="d-flex mt-4 mb-4">
                @csrf
                <input type="hidden" name="post_id" value="{{$data->id}}">
                <input type="text" name="konten" class="form-control" placeholder="Add comment" style="width: 700px">
                <button class="btn btn-primary" type="submit">Comment</button>
              </div>
            </form>
            @if(count($data->comment) < 1)
              <p class="text-center shadow p-3">komentar kosong, jadilah yang pertama mengomentari</p>
            @endif
            {{-- KOMENTAR --}}
            @foreach ($data->comment as $comment)
              <div class="card my-3 shadow p-3">
                <div class="d-flex align-items-center justify-content-between" style="width: 200px">
                  <h5 class="mr-2 ">{{$comment->user->name}}</h5>
                  <span class="mb-1 ml-2">{{$comment->created_at}}</span>
                </div>
                <div class="comment-text-sm">
                  <span>{{$comment->konten}}</span>
                </div>
                <div class="reply-section">
                  <a class="" data-bs-toggle="collapse" href="#collapseExample-{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-circle-dot"></i> Reply
                  </a>
                  @if(count($comment->reply) >= 1)
                  <a class="m-3" data-bs-toggle="collapse" href="#reply-{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fa-solid fa-circle-dot"></i> tampilkan
                  </a>
                  @endif
                </div>
              </div>
              {{-- collapse REPLY --}}
              <div style="width: 750px; margin-left:auto;">
                <div class="collapse shadow my-3" id="reply-{{$comment->id}}">
                  @foreach ($comment->reply as $reply)
                  <div class="card card-body">
                    <div class="d-flex align-items-center justify-content-between" style="width: 200px">
                      <h5 class="mr-2 ">{{$reply->user->name}}</h5>
                      <span class="mb-1 ml-2">{{$reply->created_at}}</span>
                    </div>
                    <div class="comment-text-sm">
                      <span>{{$reply->konten}}</span>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              {{-- collapse INPUT REPLY --}}
              <div style="width: 750px; margin-left:auto;">
                <div class="collapse shadow col-md-" id="collapseExample-{{$comment->id}}">
                  <div class="card card-body">
                    <form action="/reply" method="post">
                      <div class="d-flex mt-4 mb-4">
                        @csrf
                        <input type="hidden" name="comment_id" value="{{$comment->id}}">
                        {{-- <input type="hidden" name="post_id" value=""> --}}
                        <input type="text" name="konten" class="form-control" placeholder="Add reply">
                        <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample-{{$comment->id}}" aria-expanded="false" aria-controls="collapseExample">cancel</button>
                        <button class="btn btn-info" type="submit">reply</button>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
              @endforeach
          </div>
        </div>
      </div>
      @endforeach
        {{-- </div> --}}
    </div>
    
</body>
</html>