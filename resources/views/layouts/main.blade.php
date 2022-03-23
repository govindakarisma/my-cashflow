<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/template-assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/template-assets/img/favicon.png">
  <title>
    My CashFlow
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="/template-assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/template-assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="/template-assets/css/nucleo-svg.css" rel="stylesheet" />
  <link id="pagestyle" href="/template-assets/css/argon-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  @include('layouts.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    @include('layouts.header')
    <div class="container-fluid py-4">
      @yield('content')
    </div>
  </main>
  @include('layouts.config')

  @yield('logout-modal')
  @yield('delete-modal')
  @yield('import-modal')

  @stack('script-bottom-start')
  <script src="/template-assets/js/core/popper.min.js"></script>
  <script src="/template-assets/js/core/bootstrap.min.js"></script>
  <script src="/template-assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/template-assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/template-assets/js/plugins/chartjs.min.js"></script>
  @stack('script-bottom-end')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="/template-assets/js/argon-dashboard.min.js?v=2.0.1"></script>
</body>

</html>