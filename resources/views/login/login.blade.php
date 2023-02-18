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
    @include('layouts.navbar')
    <div class="container col-md-4">
        <div class="mt-5">
            <form action="/login" method="post">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form2Example1" name="email" class="form-control" />
                  <label class="form-label" for="form2Example1">Email address</label>
                </div>
              
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form2Example2" name="password" class="form-control" />
                  <label class="form-label" for="form2Example2">Password</label>
                </div>
              
                 <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block mb-4">Sign in</button>
              
                <!-- Register buttons -->
                <div class="text-center">
                  <p>Not a member? <a class="text-warning" href="#!">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
