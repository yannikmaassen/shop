<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." />
  <!-- Twitter meta-->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:site" content="@pratikborsadiya" />
  <meta property="twitter:creator" content="@pratikborsadiya" />
  <!-- Open Graph Meta-->
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Vali Admin" />
  <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme" />
  <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin" />
  <meta property="og:image" content="../blog/vali-admin/hero-social.png" />
  <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular." />
  <title>Neue Fische Shop - Admin Area</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="backend/css/main.css" />
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="backend/css/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  @include('backend/includes/header')
  <!-- Sidebar menu-->
  @include('backend/includes/sidebar')
  @yield('content')
  <!-- Essential javascripts for application to work-->
  <script src="{{ asset('backend/js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('backend/js/popper.min.js') }}"></script>
  <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/js/main.js') }}"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
</body>

</html>