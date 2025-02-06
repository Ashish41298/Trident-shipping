<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
  <link href="{{asset('css/stylesadm.css')}}" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
  
<div class="" style="height: 100vh; overflow:hidden; background:cadetblue;">
<div class="container mt-3 d-flex align-items-center justify-content-center" style="height: 100vh; overflow:hidden; background:cadetblue;">
<div class="card text-center" style="margin-top: -100px;">
  <div class="card-header">
    Admin Login
  </div>
  @session('error')
  <div class="alert alert-danger ms-2 me-2 mt-2" role="alert">
  {{$value}}
</div>
  @endsession
  @session('success')
  <div class="alert alert-success ms-2 me-2 mt-2" role="alert">
  {{$value}}
</div>
  @endsession
  <div class="card-body d-flex align-items-center justify-content-center">
  <div class="formbox" style="max-width: 350px; width:350px;">
    <form action="{{route('logindata')}}" method="post" >
        @csrf
        <div class="mb-3 text-start">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter the Email">
            @error('email')
            <div style="color: crimson;" class="form-text">
                {{$message}}
              </div>
            @enderror
        </div>
        <div class="mb-3 text-start">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter the password">
            @error('password')
            <div style="color: crimson;" class="form-text">
                {{$message}}
              </div>
            @enderror
        </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>        
        </form>
    </div>
  </div>
</div>
   
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>