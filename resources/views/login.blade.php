
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    
<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
<main class="form-signin w-100 m-auto">
  <form action="/user/cekLogin" method="POST">
    @csrf
    <img class="mb-4" src="https://verysetiawan.files.wordpress.com/2017/09/multy-user.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Silahkan Log In</h1>

    <div class="form-floating">
      <input type="number" name="nik_user" class="form-control" id="floatingInput" required>
      <label for="floatingInput">NIK Pengguna</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingPassword" required>
      <label for="floatingPassword">Password</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
  </form>
</main>


    
  </body>
</html>
