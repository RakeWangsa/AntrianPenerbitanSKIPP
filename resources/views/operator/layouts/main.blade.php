<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('admin_template/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_template/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('operator.partials.navbar')
        @include('operator.partials.sidebar')
        @include('operator.index')
    </div>

    <script src="{{ asset('admin_template/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('admin_template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('admin_template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
