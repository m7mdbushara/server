<!doctype html>
<html lang="ar">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <!-- title -->
  <title>Tawarak</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="">
  <!--    first mobile meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--    internet explorer compatibility meta-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--    fontawesome-->
  <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
  <!-- google fonts * cairo * -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

  <!-- RTL bootstrap  ++ must make html direction rtl or make html Lang ar-->
 

  <!-- Style file -->
  <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  @if(App::isLocale('en'))
  <link rel="stylesheet" href="{{ asset('asset/css/style-ltr.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
  @else
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
  integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
  @endif
</head>

<body>

 @yield('content')
 @include('sweetalert::alert')
 


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!--    wow.js file-->
  <script src="{{ asset('') }}"></script>
  <script>
    new WOW().init();
  </script>
  <!-- jquery -->
  <script src="js/jquery-1.12.3.min.js"></script>
  <!--    My JS Code   -->
  <script src="js/main.js"></script>
</body>

</html>