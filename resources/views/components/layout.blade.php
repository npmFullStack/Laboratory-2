<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim & UPDIVISION
    </title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('material') }}/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="{{ $bodyClass }}">
    {{ $slot }}

    <!-- Core JS Files -->
    <script src="{{ asset('material') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/assets/js/core/bootstrap.min.js"></script>
    
    <!-- jQuery MUST come before DataTables -->
    <script src="{{ asset('material') }}/assets/js/jquery.min.js"></script>
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    
    <!-- Other plugins -->
    <script src="{{ asset('material') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('material') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    
    <!-- Your custom js should come after all dependencies -->
    <script src="{{ asset('material') }}/assets/js/js.js"></script>
    
    <!-- Material Dashboard JS -->
    <script src="{{ asset('assets') }}/js/material-dashboard.min.js?v=3.0.0"></script>
    
    @stack('js')
    
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>