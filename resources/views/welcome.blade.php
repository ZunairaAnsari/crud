<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
   <!-- Favicon -->
<link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />

<!-- Font Awesome -->
<link
  rel="stylesheet"
  href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}"
/>

<!-- Google Fonts Roboto -->
<link
  rel="stylesheet"
  href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap') }}"
/>

<!-- MDB -->
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
<!-- Favicon -->
<link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />

<!-- Font Awesome -->
<link
  rel="stylesheet"
  href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}"
/>

<!-- Google Fonts Roboto -->
<link
  rel="stylesheet"
  href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap') }}"
/>

<!-- MDB -->
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
<!-- Favicon -->
<link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />

<!-- Font Awesome -->
<link
  rel="stylesheet"
  href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css') }}"
/>

<!-- Google Fonts Roboto -->
<link
  rel="stylesheet"
  href="{{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap') }}"
/>

<!-- MDB -->
<link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />

  </head>
  <body>

    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarButtonsExample"
        aria-controls="navbarButtonsExample"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarButtonsExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
        </ul>
        <!-- Left links -->
  
        <div class="d-flex align-items-center">
          <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
            Login
          </button>
          <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
            <a style="color: white !important" href="{{ route ('register')}}">Sign up for free</a>
          </button>
          <a
            data-mdb-ripple-init
            class="btn btn-dark px-3"
            href="https://github.com/mdbootstrap/mdb-ui-kit"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </div>
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <div class="card text-center">
    <div class="card-header">Entries Message Section
    </div>
    <div class="card-body">
      <h5 class="card-title">Data Entered</h5>
      @if($message = Session::get('success'))
      <p class="alert alert-success alert-block">{{ $message }}</p>
      @endif
      <a href="{{ route('show')}}" class="btn btn-primary" data-mdb-ripple-init>Students Record</a>
    </div>
    <div class="card-footer text-muted">2 days ago</div>
  </div>
  
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script>
      // Initialization for ES Users
import { Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Ripple });
    </script>
  </body>
</html>
