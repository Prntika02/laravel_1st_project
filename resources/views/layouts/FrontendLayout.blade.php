<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO APPLICATION @yield('title')</title>
    @notifyCss
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
 .notify {
  z-index: 9999999999;
  }
</style>
  </head>
<body>
  
<x-notify::notify />

<!--   Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Todo Application</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="{{route('todo.form')}}">Add Todo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" aria-current="page" href="{{route('todo.all')}}">All Todos</a>
        </li>
    
      </ul>

    </div>
  </div>
</nav>

<!--   Navigation Bar Ends -->

<!-- Daynamic Contant -->
 @yield('content')
<!-- Daynamic Contant  Ends -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@notifyJs
</body>
</html>