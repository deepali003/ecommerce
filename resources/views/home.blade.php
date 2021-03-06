@extends('layouts.sidebar')
@section('content')
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" class="active">
      <h3><a href="#" class="logo">E-Commerce</a></h3>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="#"><span class="fa fa-home"></span> Home</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-user"></span> About</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-cogs"></span> Services</a>
        </li>
        <li>
          <a href="#"><span class="fa fa-paper-plane"></span> Contacts</a>
        </li>
      </ul>

      <div class="footer">
        <p>
          Copyright &copy;<script>
            document.write(new Date().getFullYear());

          </script> All rights reserved | This website is made<i class="icon-heart" aria-hidden="true"></i> by <a href="https://itplus.com" target="_blank">itplus.com</a>
        </p>
      </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div> --}}
        </div>
      </nav>

      <h2 class="mb-4">Sidebar #07</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
@endsection