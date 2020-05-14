<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Welcome</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
  <script src="https://kit.fontawesome.com/00cd36dc15.js" crossorigin="anonymous"></script>

</head>

<body>
  <section class="">
    <article class="strips__strip strips__strip--expanded">
        @yield('login-register')
    </article>
    <a class="fa fa1 fa-close strip__close strip__close--show" href="/"></a>
  </section>
</body>
