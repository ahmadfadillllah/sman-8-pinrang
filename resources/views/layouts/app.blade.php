@php
    $user = auth()->user();
    $avatar = substr(Auth::user()->name, 0, 2);
@endphp

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Aug 2021 07:33:19 GMT -->

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ config('app.name') }}</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/logo/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/charts/apexcharts.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/vendors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/pickers/pickadate/pickadate.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}>
    <!-- END: Vendor CSS-->

    {{-- BEGIN: Vendor DataTables --}}
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}>
    {{-- END: Vendor DataTables --}}

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/bootstrap-extended.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/colors.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/components.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/dark-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/bordered-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/themes/semi-dark-layout.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}>

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/pages/dashboard-ecommerce.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/plugins/charts/chart-apex.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/plugins/extensions/ext-component-toastr.min.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/plugins/forms/form-validation.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('app-assets/css/pages/app-user.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css') }}>
    <link rel="stylesheet" type="text/css"
        href={{ asset('app-assets/css/plugins/forms/pickers/form-pickadate.min.css') }}>
    <link rel="stylesheet" href={{ asset('app-assets/css/pages/app-chat.css') }} />
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/style.css') }}>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 44px;
        }

        .dropbtn:hover,
        .dropbtn:focus {
            background-color: #2980B9;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            position: relative;
            right: 24px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        /* width */
        ::-webkit-scrollbar {
            width: 7px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #a7a7a7;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #929292;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        li {
            list-style: none;
        }

        .user-wrapper,
        .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
            background-color: #F2F0F7;
            background-repeat: repeat;
            background-size: 210px;
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIzLjAuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAyNjAgMjYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyNjAgMjYwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGwtcnVsZTpldmVub2RkO2NsaXAtcnVsZTpldmVub2RkO2ZpbGw6I0UxRTBFOTt9Cjwvc3R5bGU+CjxnPgoJPGcgaWQ9ImktbGlrZS1mb29kIj4KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMjQuNCwxNmMwLjIsMC42LDAuNCwxLjMsMC41LDJoLTMuN2wxLjIsMi4zbDAuNSwwLjlsLTAuMiwwLjFWMjhjMi4yLDEuNywyLjcsNC44LDEsNwoJCQljLTAuOCwxLTEuOSwxLjctMy4yLDEuOVYzN2MtMC45LDMuNS00LjEsNi03LjgsNmgtMjBjLTMuNiwwLTYuOC0yLjUtNy43LTZ2LTAuMWMtMi43LTAuNC00LjYtMy00LjItNS43YzAuMi0xLjMsMC45LTIuNSwxLjktMy4yCgkJCXYtNi44bC0wLjgtMS42bC0wLjQtMC45bDAuOS0wLjRMLTE3LDE4aC0zQy0xNy4yLDUuNi00LjktMi4yLDcuNSwwLjZDMTUuNCwyLjMsMjEuOSw4LjIsMjQuNCwxNnogTS0xMi40LDE4Yy0wLjIsMC0wLjMsMC0wLjQsMC4xCgkJCWwtMy4xLDEuNmwwLjksMS44bDEuMy0wLjdjMC44LTAuNCwxLjgtMC40LDIuNywwbDIuMiwxLjFjMC4zLDAuMSwwLjYsMC4xLDAuOSwwbDIuMi0xLjFjMC44LTAuNCwxLjgtMC40LDIuNywwbDIuMiwxLjEKCQkJYzAuMywwLjEsMC42LDAuMSwwLjksMGwyLjItMS4xYzAuOC0wLjQsMS44LTAuNCwyLjcsMGwyLjIsMS4xQzcuNCwyMiw3LjcsMjIsOCwyMS45bDIuOS0xLjNjMC44LTAuMywxLjctMC4zLDIuNCwwbDIuOSwxLjMKCQkJYzAuMywwLjEsMC42LDAuMSwwLjksMGwzLjEtMS41bC0wLjktMS44bC0xLjQsMC43Yy0wLjgsMC40LTEuNywwLjQtMi42LDAuMWwtMi44LTEuMkMxMi4zLDE4LDEyLjIsMTgsMTIuMSwxOGwwLDAKCQkJYy0wLjEsMC0wLjMsMC0wLjQsMC4xbC0yLjgsMS4yYy0wLjgsMC40LTEuOCwwLjMtMi42LTAuMUw0LDE4LjFDMy45LDE4LDMuNywxOCwzLjYsMThsMCwwYy0wLjIsMC0wLjMsMC0wLjQsMC4xTDEsMTkuMgoJCQljLTAuOCwwLjQtMS44LDAuNC0yLjcsMEwtNCwxOC4xQy00LjEsMTgtNC4zLDE4LTQuNCwxOGwwLDBjLTAuMiwwLTAuMywwLTAuNCwwLjFMLTcsMTkuMmMtMC44LDAuNC0xLjgsMC40LTIuNywwbC0yLjItMS4xCgkJCUMtMTIuMSwxOC0xMi4zLDE4LTEyLjQsMThMLTEyLjQsMThMLTEyLjQsMTh6IE0tMTIuNCwxNmgtNC45Qy0xMy41LDUuMS0xLjUtMC43LDkuNSwzLjJjNiwyLjEsMTAuNyw2LjgsMTIuOCwxMi44aC0yLjFsLTAuMS0wLjEKCQkJTDE5LjksMTZILTEyLjRMLTEyLjQsMTZ6IE0xNy45LDIzLjdsMS40LTAuN2gxLjN2MmgtMzZ2LTEuMWwwLjMtMC4ybDEuNC0wLjdoMi42bDEuNCwwLjdjMC44LDAuNCwxLjgsMC40LDIuNywwbDEuNC0wLjdILTMKCQkJbDEuNCwwLjdjMC44LDAuNCwxLjgsMC40LDIuNywwTDIuMywyM2gyLjZsMS40LDAuN2MwLjcsMC40LDEuNywwLjQsMi41LDBsMS43LTAuN2gzLjJsMS43LDAuN0MxNi4yLDI0LjEsMTcuMSwyNC4xLDE3LjksMjMuN3oKCQkJIE0tMTMuOCwyN2wxNi40LDQuOUwxOC45LDI3SC0xMy44eiBNLTE0LjQsMjloMC4zbDE2LjcsNWwxNi43LTVoMC4zYzEuNywwLDMsMS4zLDMsM3MtMS4zLDMtMywzaC0zNGMtMS43LDAtMy0xLjMtMy0zCgkJCUMtMTcuNCwzMC4zLTE2LjEsMjktMTQuNCwyOXogTS0xMy4xLDM3YzAuOCwyLjQsMy4xLDQsNS43LDRoMjBjMi41LDAsNC44LTEuNiw1LjctNEMxOC4yLDM3LTEzLjEsMzctMTMuMSwzN3oiLz4KCQk8cGF0aCBpZD0icGF0aDZfZmlsbC1jb3B5IiBjbGFzcz0ic3QwIiBkPSJNMjg0LjQsMTZjMC4yLDAuNiwwLjQsMS4zLDAuNSwyaC0zLjdsMS4yLDIuM2wwLjUsMC45bC0wLjIsMC4xVjI4YzIuMiwxLjcsMi43LDQuOCwxLDcKCQkJYy0wLjgsMS0xLjksMS43LTMuMiwxLjlWMzdjLTAuOSwzLjUtNC4xLDYtNy44LDZoLTIwYy0zLjYsMC02LjgtMi41LTcuNy02di0wLjFjLTIuNy0wLjQtNC42LTMtNC4yLTUuN2MwLjItMS4zLDAuOS0yLjUsMS45LTMuMgoJCQl2LTYuOGwtMC44LTEuNmwtMC40LTAuOWwwLjktMC40TDI0MywxOGgtM2MyLjgtMTIuNCwxNS4xLTIwLjIsMjcuNS0xNy40QzI3NS40LDIuMywyODEuOSw4LjIsMjg0LjQsMTZ6IE0yNDcuNSwxOAoJCQljLTAuMiwwLTAuMywwLTAuNCwwLjFsLTMuMSwxLjZsMC45LDEuOGwxLjMtMC43YzAuOC0wLjQsMS44LTAuNCwyLjcsMGwyLjIsMS4xYzAuMywwLjEsMC42LDAuMSwwLjksMGwyLjItMS4xCgkJCWMwLjgtMC40LDEuOC0wLjQsMi43LDBsMi4yLDEuMWMwLjMsMC4xLDAuNiwwLjEsMC45LDBsMi4yLTEuMWMwLjgtMC40LDEuOC0wLjQsMi43LDBsMi4yLDEuMWMwLjMsMC4xLDAuNiwwLjEsMC45LDBsMi45LTEuMwoJCQljMC44LTAuMywxLjctMC4zLDIuNCwwbDIuOSwxLjNjMC4zLDAuMSwwLjYsMC4xLDAuOSwwbDMuMS0xLjVsLTAuOS0xLjhsLTEuNCwwLjdjLTAuOCwwLjQtMS43LDAuNC0yLjYsMC4xbC0yLjgtMS4yCgkJCWMtMC4xLTAuMS0wLjMtMC4xLTAuNC0wLjFsMCwwYy0wLjEsMC0wLjMsMC0wLjQsMC4xbC0yLjgsMS4yYy0wLjgsMC40LTEuOCwwLjMtMi42LTAuMWwtMi4zLTEuMWMtMC4xLTAuMS0wLjMtMC4xLTAuNS0wLjFsMCwwCgkJCWMtMC4yLDAtMC4zLDAtMC40LDAuMWwtMi4yLDEuMWMtMC44LDAuNC0xLjgsMC40LTIuNywwbC0yLjItMS4xYy0wLjEtMC4xLTAuMy0wLjEtMC40LTAuMWwwLDBjLTAuMiwwLTAuMywwLTAuNCwwLjFsLTIuMiwxLjEKCQkJYy0wLjgsMC40LTEuOCwwLjQtMi43LDBsLTIuMi0xLjFDMjQ3LjksMTgsMjQ3LjcsMTgsMjQ3LjUsMThMMjQ3LjUsMThMMjQ3LjUsMTh6IE0yNDcuNSwxNmgtNC45YzMuOS0xMC45LDE1LjktMTYuNywyNi44LTEyLjgKCQkJYzYsMi4xLDEwLjcsNi44LDEyLjgsMTIuOGgtMi4xbC0wLjEtMC4xbC0wLjMsMC4xSDI0Ny41TDI0Ny41LDE2eiBNMjc3LjksMjMuN2wxLjQtMC43aDEuM3YyaC0zNnYtMS4xbDAuMy0wLjJsMS40LTAuN2gyLjYKCQkJbDEuNCwwLjdjMC44LDAuNCwxLjgsMC40LDIuNywwbDEuNC0wLjdoMi42bDEuNCwwLjdjMC44LDAuNCwxLjgsMC40LDIuNywwbDEuNC0wLjdoMi42bDEuNCwwLjdjMC44LDAuNCwxLjcsMC40LDIuNiwwLjFsMS43LTAuNwoJCQloMy4ybDEuNywwLjdDMjc2LjIsMjQuMSwyNzcuMSwyNC4xLDI3Ny45LDIzLjdMMjc3LjksMjMuN3ogTTI0Ni4yLDI3bDE2LjQsNC45TDI3OSwyN0gyNDYuMnogTTI0NS41LDI5aDAuM2wxNi43LDVsMTYuNy01aDAuMwoJCQljMS43LDAsMywxLjMsMywzcy0xLjMsMy0zLDNoLTM0Yy0xLjcsMC0zLTEuMy0zLTNTMjQzLjksMjksMjQ1LjUsMjl6IE0yNDYuOSwzN2MwLjgsMi40LDMuMSw0LDUuNiw0aDIwYzIuNSwwLDQuOC0xLjYsNS43LTQKCQkJSDI0Ni45eiIvPgoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNTkuNSwyMWMtMS4zLTMuNi00LjctNi04LjUtNmgtNDJjLTMuOCwwLTcuMiwyLjQtOC41LDZjLTMuMywwLjMtNS44LDMuMi01LjUsNi41YzAuMiwyLjksMi42LDUuMiw1LjUsNS41CgkJCWMtMS43LDQuNywwLjgsOS44LDUuNCwxMS41YzEsMC4zLDIsMC41LDMsMC41aDQyYzUsMCw5LTQsOS05YzAtMS0wLjItMi4xLTAuNS0zYzMuMy0wLjMsNS44LTMuMiw1LjUtNi41CgkJCUMxNjQuNywyMy42LDE2Mi40LDIxLjMsMTU5LjUsMjF6IE0xNTEsMTdoLTQyYy0yLjcsMC01LjIsMS42LTYuMyw0aDU0LjdDMTU2LjIsMTguNiwxNTMuNywxNywxNTEsMTd6IE0xNDEuNyw0MwoJCQljMi4xLTEuNywzLjMtNC4zLDMuMy03aC0yYzAsMy45LTMuMSw3LTcsN2gtNC4zYzIuMS0xLjcsMy4zLTQuMywzLjMtN2gtMmMwLDMuOS0zLjEsNy03LDdoLTQuM2MyLjEtMS43LDMuMy00LjMsMy4zLTdoLTIKCQkJYzAsMy45LTMuMSw3LTcsN2gtN2MtMy45LDAtNy0zLjEtNy03czMuMS03LDctN2g0MmMzLjksMCw3LDMuMSw3LDdzLTMuMSw3LTcsN0gxNDEuN3ogTTEwOSwyN2MtMywwLTUuOCwxLjUtNy41LDRIMTAxCgkJCWMtMi4yLDAtNC0xLjgtNC00czEuOC00LDQtNGg1OGMyLjIsMCw0LDEuOCw0LDRzLTEuOCw0LTQsNGgtMC41Yy0xLjctMi41LTQuNS00LTcuNS00SDEwOXoiLz4KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNMzksMTE1YzQuNCwwLDgtMy42LDgtOHMtMy42LTgtOC04cy04LDMuNi04LDhTMzQuNiwxMTUsMzksMTE1eiBNNDUsMTA3YzAsMy4zLTIuNyw2LTYsNnMtNi0yLjctNi02CgkJCXMyLjctNiw2LTZTNDUsMTAzLjcsNDUsMTA3eiBNNDIsNzh2LTJoOHYtNkg0MGMtMi4yLDAtNCwxLjgtNCw0djEwSDIybC0xLjMsNEwyMCw5MGgyLjJsMy44LDQwaDI2bDMuOC00MEg1OGwtMC43LTJMNTYsODRINDJWNzh6CgkJCSBNMzgsNzR2MTBoMlY3NGg4di0yaC04QzM4LjksNzIsMzgsNzIuOSwzOCw3NHogTTQwLDg2aDE0LjZsMC43LDJIMjIuOGwwLjctMkg0MHogTTUzLjgsOTBIMjQuMmwzLjYsMzhoMjIuNEw1My44LDkweiIvPgoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xMjksOTJoLTZ2NGgtNnY0aC02djE0aC0zbDAuMiwybDMuOCwzMmgzNmwzLjgtMzJsMC4yLTJoLTN2LTE0aC02di00aC02di00SDEyOXogTTE0NywxMTR2LTEyaC00djRoM3Y4SDE0NwoJCQl6IE0xNDQsMTE0di02aC00djZIMTQ0eiBNMTM4LDEyMHYtMTZoLTR2MTkuMkMxMzUuNiwxMjIuNSwxMzcsMTIxLjQsMTM4LDEyMHogTTEzMiwxMjMuOFYxMDBoLTR2MjMuOAoJCQlDMTI5LjMsMTI0LjEsMTMwLjcsMTI0LjEsMTMyLDEyMy44eiBNMTI2LDEyMy4yVjEwNGgtNHYxNkMxMjMsMTIxLjQsMTI0LjQsMTIyLjUsMTI2LDEyMy4yeiBNMTIwLDExNHYtNmgtNHY2SDEyMHogTTExNCwxMTR2LThoMwoJCQl2LTRoLTR2MTJIMTE0eiBNMTQxLDEwMnYtNGgtNHY0aDN2NGgxVjEwMnogTTEzNSwxMDJ2LThoLTR2NGgzdjRIMTM1eiBNMTI5LDk4di00aC00djhoMXYtNEgxMjl6IE0xMjMsMTAydi00aC00djhoMXYtNEgxMjN6CgkJCSBNMTMwLDEyNmM1LjksMCwxMC45LTQuMiwxMS44LTEwaDcuOWwtMy41LDMwaC0zMi40bC0zLjUtMzBoNy45QzExOS4xLDEyMS44LDEyNC4xLDEyNiwxMzAsMTI2eiIvPgoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0yMTIsODZ2MmgtNHYtMkgyMTJ6IE0yMTYsODZoLTJ2MmgyVjg2eiBNMTk2LDg2TDE5Niw4NmMtMi43LDAuNy00LjUsMy4zLTMuOSw2YzAuNCwxLjgsMS42LDMuMiwzLjMsMy44CgkJCWwwLjEsMC4ybDEuMSw0LjVjMC4yLDAuOSwxLDEuNSwxLjksMS41bDAsMGw3LDI0LjZjMC4yLDAuOSwxLDEuNCwxLjksMS40aDVjMC45LDAsMS43LTAuNiwxLjktMS40bDctMjQuNmMwLjksMCwxLjctMC42LDEuOS0xLjUKCQkJbDEuMS00LjVsMC4xLTAuMmMyLjYtMC45LDQuMS0zLjcsMy4yLTYuM2MtMC42LTEuNy0yLTMtMy44LTMuM1Y4NmMwLTcuNy02LjMtMTQtMTQtMTRTMTk2LDc4LjMsMTk2LDg2eiBNMjAwLDg2aDZ2MmgtOQoJCQljLTEuNywwLTMsMS4zLTMsM3MxLjMsMywzLDNoMjZjMS43LDAsMy0xLjMsMy0zcy0xLjMtMy0zLTNoLTN2LTJoMmMwLTYuNi01LjQtMTItMTItMTJzLTEyLDUuNC0xMiwxMkgyMDB6IE0xOTguNiwxMDBsLTEtNGgyNC45CgkJCWwtMSw0SDE5OC42eiBNMjA3LjUsMTI2bC02LjktMjRoMTguN2wtNi45LDI0SDIwNy41eiBNMTUwLDI0MmMxMi4yLDAsMjItOS44LDIyLTIycy05LjgtMjItMjItMjJzLTIyLDkuOC0yMiwyMgoJCQlTMTM3LjgsMjQyLDE1MCwyNDJ6IE0xNzQsMjIwYzAsMTMuMy0xMC43LDI0LTI0LDI0cy0yNC0xMC43LTI0LTI0bDAsMGMwLTEzLjMsMTAuNy0yNCwyNC0yNFMxNzQsMjA2LjcsMTc0LDIyMHogTTE0NS42LDIzNy43CgkJCWwyLTAuOWMxLjUtMC42LDMuMi0wLjYsNC43LDBsMiwwLjljMC45LDAuNCwyLDAsMi41LTAuOGwxLjEtMS45YzAuOC0xLjQsMi4yLTIuNCwzLjgtMi44bDIuMS0wLjVjMS0wLjIsMS42LTEuMSwxLjUtMi4xbC0wLjItMi4yCgkJCWMtMC4xLTEuNiwwLjQtMy4yLDEuNC00LjVsMS40LTEuN2MwLjctMC44LDAuNy0xLjksMC0yLjZsLTEuNC0xLjdjLTEuMS0xLjItMS42LTIuOC0xLjQtNC41bDAuMi0yLjJjMC4xLTEtMC42LTEuOS0xLjYtMi4xCgkJCWwtMi4xLTAuNWMtMS42LTAuNC0zLTEuNC0zLjgtMi44bC0xLjEtMS45Yy0wLjUtMC45LTEuNi0xLjItMi41LTAuOGwtMiwwLjljLTEuNSwwLjYtMy4yLDAuNi00LjcsMGwtMi0wLjljLTAuOS0wLjQtMiwwLTIuNSwwLjgKCQkJbC0xLDIuMWMtMC44LDEuNC0yLjIsMi40LTMuOCwyLjhsLTIuMSwwLjVjLTEsMC4yLTEuNiwxLjEtMS41LDIuMWwwLjIsMi4yYzAuMSwxLjYtMC40LDMuMi0xLjQsNC41bC0xLjQsMS43CgkJCWMtMC43LDAuOC0wLjcsMS45LDAsMi42bDEuNCwxLjdjMS4xLDEuMiwxLjYsMi44LDEuNCw0LjVsLTAuMiwyLjJjLTAuMSwxLDAuNiwxLjksMS42LDIuMWwyLjEsMC41YzEuNiwwLjQsMywxLjQsMy44LDIuOGwxLjEsMS45CgkJCUMxNDMuNiwyMzcuOCwxNDQuNywyMzguMSwxNDUuNiwyMzcuN0wxNDUuNiwyMzcuN3ogTTE0OC40LDIzOC43YzEtMC40LDIuMS0wLjQsMy4xLDBsMiwwLjljMS44LDAuOCw0LDAuMSw1LTEuNmwxLjEtMS45CgkJCWMwLjYtMC45LDEuNS0xLjYsMi41LTEuOGwyLjEtMC41YzEuOS0wLjQsMy4zLTIuMywzLjEtNC4ybC0wLjItMi4yYy0wLjEtMS4xLDAuMy0yLjIsMS0zbDEuNC0xLjdjMS4zLTEuNSwxLjMtMy43LDAtNS4ybC0xLjQtMS43CgkJCWMtMC43LTAuOC0xLjEtMS45LTEtM2wwLjItMi4yYzAuMi0yLTEuMS0zLjgtMy4xLTQuMmwtMi4xLTAuNWMtMS4xLTAuMi0yLTAuOS0yLjUtMS44bC0xLjEtMS45Yy0xLTEuNy0zLjItMi40LTUtMS42bC0yLDAuOQoJCQljLTEsMC40LTIuMSwwLjQtMy4xLDBsLTItMC45Yy0xLjgtMC44LTQtMC4xLTUsMS42bC0xLjEsMS45Yy0wLjYsMC45LTEuNSwxLjYtMi41LDEuOGwtMi4xLDAuNWMtMS45LDAuNC0zLjMsMi4zLTMuMSw0LjJsMC4yLDIuMgoJCQljMC4xLDEuMS0wLjMsMi4yLTEsM2wtMS40LDEuN2MtMS4zLDEuNS0xLjMsMy43LDAsNS4ybDEuNCwxLjdjMC43LDAuOCwxLjEsMS45LDEsM2wtMC4yLDIuMmMtMC4yLDIsMS4xLDMuOCwzLjEsNC4ybDIuMSwwLjUKCQkJYzEuMSwwLjIsMiwwLjksMi41LDEuOGwxLjEsMS45YzEsMS43LDMuMiwyLjQsNSwxLjZMMTQ4LjQsMjM4Ljd6IE0xNTIsMjA3YzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMQoJCQlTMTUyLDIwNy42LDE1MiwyMDd6IE0xNTgsMjA5YzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMVMxNTgsMjA5LjYsMTU4LDIwOXogTTE0NywyMTBjMC0wLjYsMC40LTEsMS0xczEsMC40LDEsMQoJCQlzLTAuNCwxLTEsMVMxNDcsMjEwLjYsMTQ3LDIxMHogTTE0MSwyMTBjMC0wLjYsMC40LTEsMS0xczEsMC40LDEsMXMtMC40LDEtMSwxUzE0MSwyMTAuNiwxNDEsMjEweiBNMTQ0LDIwNWMwLTAuNiwwLjQtMSwxLTEKCQkJczEsMC40LDEsMXMtMC40LDEtMSwxUzE0NCwyMDUuNiwxNDQsMjA1eiBNMTM2LDIxM2MwLTAuNiwwLjQtMSwxLTFzMSwwLjQsMSwxcy0wLjQsMS0xLDFTMTM2LDIxMy42LDEzNiwyMTN6IE0xMzksMjE5CgkJCWMwLTAuNiwwLjQtMSwxLTFzMSwwLjQsMSwxcy0wLjQsMS0xLDFTMTM5LDIxOS42LDEzOSwyMTl6IE0xMzksMjI1YzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMVMxMzksMjI1LjYsMTM5LDIyNXoKCQkJIE0xNDMsMjMyYzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMVMxNDMsMjMyLjYsMTQzLDIzMnogTTE0OCwyMzBjMC0wLjYsMC40LTEsMS0xczEsMC40LDEsMXMtMC40LDEtMSwxCgkJCVMxNDgsMjMwLjYsMTQ4LDIzMHogTTE1MywyMzRjMC0wLjYsMC40LTEsMS0xczEsMC40LDEsMXMtMC40LDEtMSwxUzE1MywyMzQuNiwxNTMsMjM0eiBNMTU3LDIyOGMwLTAuNiwwLjQtMSwxLTFzMSwwLjQsMSwxCgkJCXMtMC40LDEtMSwxUzE1NywyMjguNiwxNTcsMjI4eiBNMTYzLDIyNGMwLTAuNiwwLjQtMSwxLTFzMSwwLjQsMSwxcy0wLjQsMS0xLDFTMTYzLDIyNC42LDE2MywyMjR6IE0xNTksMjIxYzAtMC42LDAuNC0xLDEtMQoJCQlzMSwwLjQsMSwxcy0wLjQsMS0xLDFTMTU5LDIyMS42LDE1OSwyMjF6IE0xNjMsMjE4YzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMVMxNjMsMjE4LjYsMTYzLDIxOHogTTE1OCwyMTQKCQkJYzAtMC42LDAuNC0xLDEtMXMxLDAuNCwxLDFzLTAuNCwxLTEsMVMxNTgsMjE0LjYsMTU4LDIxNHogTTEzNCwyMjBjMC0wLjYsMC40LTEsMS0xczEsMC40LDEsMXMtMC40LDEtMSwxUzEzNCwyMjAuNiwxMzQsMjIwegoJCQkgTTE1MCwyMjVjMi44LDAsNS0yLjIsNS01cy0yLjItNS01LTVzLTUsMi4yLTUsNVMxNDcuMiwyMjUsMTUwLDIyNXogTTE1NywyMjBjMCwzLjktMy4xLDctNyw3cy03LTMuMS03LTdzMy4xLTcsNy03CgkJCVMxNTcsMjE2LjEsMTU3LDIyMHogTTI0MywxOTFjLTAuNiwwLTEsMC40LTEsMXMwLjQsMSwxLDFoMmMwLjYsMCwxLTAuNCwxLTFzLTAuNC0xLTEtMUgyNDN6IE0yNjIsMjAwYzAtMC42LDAuNC0xLDEtMWgyCgkJCWMwLjYsMCwxLDAuNCwxLDFzLTAuNCwxLTEsMWgtMkMyNjIuNCwyMDEsMjYyLDIwMC42LDI2MiwyMDB6IE0yNDgsMjA1Yy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDJjMC42LDAsMS0wLjQsMS0xcy0wLjQtMS0xLTEKCQkJSDI0OHogTTIyMywyMDZjLTAuNiwwLTEsMC40LTEsMXMwLjQsMSwxLDFoMmMwLjYsMCwxLTAuNCwxLTFzLTAuNC0xLTEtMUgyMjN6IE0yMjgsMjEwYy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDIKCQkJYzAuNiwwLDEtMC40LDEtMXMtMC40LTEtMS0xSDIyOHogTTIzNywyMTBjMC0wLjYsMC40LTEsMS0xaDJjMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFoLTJDMjM3LjQsMjExLDIzNywyMTAuNiwyMzcsMjEwegoJCQkgTTI1MiwyMTFjMC0wLjYsMC40LTEsMS0xaDJjMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFoLTJDMjUyLjQsMjEyLDI1MiwyMTEuNiwyNTIsMjExeiBNMjY0LDIwOWMtMC42LDAtMSwwLjQtMSwxczAuNCwxLDEsMWgyCgkJCWMwLjYsMCwxLTAuNCwxLTFzLTAuNC0xLTEtMUgyNjR6IE0yNTMsMTk1YzAtMC42LDAuNC0xLDEtMWgyYzAuNiwwLDEsMC40LDEsMXMtMC40LDEtMSwxaC0yQzI1My40LDE5NiwyNTMsMTk1LjYsMjUzLDE5NXoKCQkJIE0yMzQsMTk1Yy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDJjMC42LDAsMS0wLjQsMS0xcy0wLjQtMS0xLTFIMjM0eiBNMjQwLDIwMGMwLTAuNiwwLjQtMSwxLTFoMmMwLjYsMCwxLDAuNCwxLDFzLTAuNCwxLTEsMQoJCQloLTJDMjQwLjQsMjAxLDI0MCwyMDAuNiwyNDAsMjAweiBNMjE1LDIxNWMwLTAuNSwwLTAuOSwwLTEuNGMtMi41LTEuMS0zLjctNC0yLjYtNi42YzAuMi0wLjUsMC41LTEsMC45LTEuNGMtMC45LTIsMC00LjIsMS45LTUuMgoJCQljLTAuOC0yLjYsMC43LTUuNCwzLjQtNi4ybDAsMGMwLjQtMC41LDAuOS0wLjksMS41LTEuMWMwLjUtMi43LDMuMS00LjUsNS44LTQuMWMwLjcsMC4xLDEuNCwwLjQsMiwwLjhjNS4zLTMuOCwxMS42LTUuOSwxOC4yLTUuOQoJCQljNi44LDAsMTMuMSwyLjIsMTguMiw1LjljMi4zLTEuNiw1LjQtMSw3LDEuM2MwLjQsMC42LDAuNywxLjMsMC44LDJjMC42LDAuMiwxLjEsMC42LDEuNSwxLjFjMi43LDAuOCw0LjIsMy41LDMuNCw2LjJsMCwwCgkJCWMxLjksMSwyLjcsMy4yLDEuOSw1LjJjMS45LDIsMS44LDUuMi0wLjIsN2MtMC40LDAuNC0wLjksMC43LTEuNSwxYzAsMC41LDAsMC45LDAsMS40djFoLTYydi0xSDIxNXogTTIxNS44LDIwNy44CgkJCWMtMC4zLDEuMi0wLjUsMi40LTAuNiwzLjZjLTEuMy0xLTEuNi0yLjktMC42LTQuMmwwLDBDMjE1LDIwNy41LDIxNS40LDIwNy43LDIxNS44LDIwNy44TDIxNS44LDIwNy44eiBNMjE3LjMsMjAzLjIKCQkJYy0wLjQsMC45LTAuNywxLjgtMSwyLjdjLTEtMC40LTEuNi0xLjUtMS4zLTIuNWMwLjItMC41LDAuNi0wLjksMS4xLTEuMkMyMTYuNSwyMDIuNiwyMTYuOSwyMDIuOSwyMTcuMywyMDMuMkwyMTcuMywyMDMuMnoKCQkJIE0yMTkuNiwxOTguN2MtMC41LDAuOS0xLDEuOC0xLjUsMi43Yy0xLjMtMS0xLjUtMi45LTAuNS00LjJjMC4xLTAuMiwwLjMtMC4zLDAuNC0wLjVDMjE4LjMsMTk3LjYsMjE4LjksMTk4LjMsMjE5LjYsMTk4LjcKCQkJTDIxOS42LDE5OC43eiBNMjIwLjgsMTk3YzAuNC0wLjUsMC43LTEsMS4xLTEuNWMtMC4zLTAuNS0wLjktMC43LTEuNC0wLjRzLTAuNywwLjktMC40LDEuNEMyMjAuMywxOTYuNywyMjAuNSwxOTYuOSwyMjAuOCwxOTcKCQkJTDIyMC44LDE5N3ogTTIyNi4xLDE5MS4yYy0xLDAuOS0yLDEuOC0yLjksMi44Yy0wLjMtMC4zLTAuNy0wLjYtMS4xLTAuOGMwLjQtMS42LDIuMS0yLjUsMy43LTIuMQoJCQlDMjI1LjksMTkxLjEsMjI2LDE5MS4yLDIyNi4xLDE5MS4yTDIyNi4xLDE5MS4yeiBNMjY4LjgsMTk0Yy0wLjktMS0xLjktMS45LTIuOS0yLjhjMS41LTAuNiwzLjMsMC4xLDMuOSwxLjcKCQkJYzAsMC4xLDAuMSwwLjIsMC4xLDAuM0MyNjkuNSwxOTMuNCwyNjkuMSwxOTMuNiwyNjguOCwxOTRMMjY4LjgsMTk0eiBNMjcwLjEsMTk1LjVjMC40LDAuNSwwLjgsMSwxLjEsMS40CgkJCWMwLjUtMC4xLDAuOS0wLjcsMC44LTEuMnMtMC43LTAuOS0xLjItMC44QzI3MC41LDE5NS4xLDI3MC4zLDE5NS4zLDI3MC4xLDE5NS41eiBNMjczLjksMjAxLjRjLTAuNS0wLjktMS0xLjgtMS41LTIuNwoJCQljMC44LTAuNCwxLjQtMS4xLDEuNi0yYzEuMywxLjEsMS40LDMsMC40LDQuMkMyNzQuMiwyMDEuMSwyNzQsMjAxLjIsMjczLjksMjAxLjR6IE0yNzUuNiwyMDUuOWMtMC4zLTAuOS0wLjYtMS44LTEtMi43CgkJCWMwLjQtMC4zLDAuOC0wLjYsMS4yLTFjMSwwLjUsMS40LDEuNywxLDIuN0MyNzYuNiwyMDUuMywyNzYuMiwyMDUuNywyNzUuNiwyMDUuOXogTTI3Ni44LDIxMS40Yy0wLjEtMS4yLTAuNC0yLjQtMC42LTMuNgoJCQljMC41LTAuMSwwLjktMC40LDEuMi0wLjZDMjc4LjQsMjA4LjUsMjc4LjEsMjEwLjQsMjc2LjgsMjExLjRMMjc2LjgsMjExLjRMMjc2LjgsMjExLjR6IE0yNzUsMjE0Yy0wLjUtMTYtMTMuOS0yOC42LTI5LjktMjguMQoJCQljLTE1LjMsMC41LTI3LjYsMTIuOC0yOC4xLDI4LjFIMjc1TDI3NSwyMTR6IE03Mi4zLDE5OC4xYy0wLjItMC4zLTAuMy0wLjctMC4zLTEuMXYtMTJoLTJ2MTJjMCwyLjIsMS44LDQsNCw0CgkJCWMxLjIsMCwyLjMtMC41LDMuMS0xLjRjMC42LTAuNywwLjktMS42LDAuOS0yLjV2LTEyaC0ydjEyYzAsMS4xLTAuOSwyLTIsMmwwLDBDNzMuMywxOTksNzIuNywxOTguNyw3Mi4zLDE5OC4xeiBNNzUsMTc2CgkJCWMwLjQsMCwwLjcsMCwxLjEtMC4xYzAuNSwyLjIsMi42LDMuNSw0LjgsM2MwLjUtMC4xLDEtMC4zLDEuNC0wLjZjMS4xLDIuMSwxLjcsNC40LDEuNyw2Ljd2MjRjMCwzLjMtMi43LDYtNiw2aC0zdjkKCQkJYzAsMi44LTIuMiw1LTUsNXMtNS0yLjItNS01di05aC0zYy0zLjMsMC02LTIuNy02LTZ2LTI0YzAtNy43LDYuMy0xNCwxNC0xNEM3MCwxNzMuOCw3Mi4yLDE3Niw3NSwxNzZ6IE01OCwxOTF2MTIKCQkJYzAsMC44LDAuNSwxLjUsMS4yLDEuOGMwLjksMC40LDEuOSwwLjEsMi40LTAuN2MwLjItMC4zLDAuMy0wLjcsMC4zLTEuMXYtMTJoMnYxMmMwLDIuMi0xLjcsNC0zLjksNGMtMC41LDAtMS0wLjEtMS40LTAuMgoJCQljLTAuMi0wLjEtMC40LTAuMi0wLjctMC4zdjIuNWMwLDIuMiwxLjgsNCw0LDRoMTZjMi4yLDAsNC0xLjgsNC00di0yNGMwLTEuNS0wLjItMi45LTAuNy00LjJjLTAuNCwwLjEtMC45LDAuMi0xLjMsMC4yCgkJCWMtMi4xLDAtNC4xLTEuMS01LjItM2MtMy0wLjEtNS42LTItNi41LTQuOUM2Mi40LDE3NCw1OCwxNzksNTgsMTg1VjE5MXogTTY3LDIxNXY5YzAsMS43LDEuMywzLDMsM3MzLTEuMywzLTN2LTlINjd6Ii8+CgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTS0xNywxOTFjLTAuNiwwLTEsMC40LTEsMXMwLjQsMSwxLDFoMmMwLjYsMCwxLTAuNCwxLTFzLTAuNC0xLTEtMUgtMTd6IE0yLDIwMGMwLTAuNiwwLjQtMSwxLTFoMgoJCQljMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFIM0MyLjQsMjAxLDIsMjAwLjYsMiwyMDB6IE0tMTIsMjA1Yy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDJjMC42LDAsMS0wLjQsMS0xcy0wLjQtMS0xLTFILTEyegoJCQkgTS0zNywyMDZjLTAuNiwwLTEsMC40LTEsMXMwLjQsMSwxLDFoMmMwLjYsMCwxLTAuNCwxLTFzLTAuNC0xLTEtMUgtMzd6IE0tMzIsMjEwYy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDJjMC42LDAsMS0wLjQsMS0xCgkJCXMtMC40LTEtMS0xSC0zMnogTS0yMywyMTBjMC0wLjYsMC40LTEsMS0xaDJjMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFoLTJDLTIyLjYsMjExLTIzLDIxMC42LTIzLDIxMHogTS04LDIxMWMwLTAuNiwwLjQtMSwxLTEKCQkJaDJjMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFoLTJDLTcuNiwyMTItOCwyMTEuNi04LDIxMXogTTQsMjA5Yy0wLjYsMC0xLDAuNC0xLDFzMC40LDEsMSwxaDJjMC42LDAsMS0wLjQsMS0xcy0wLjQtMS0xLTFINHoKCQkJIE0tNywxOTVjMC0wLjYsMC40LTEsMS0xaDJjMC42LDAsMSwwLjQsMSwxcy0wLjQsMS0xLDFoLTJDLTYuNiwxOTYtNywxOTUuNi03LDE5NXogTS0yNiwxOTVjLTAuNiwwLTEsMC40LTEsMXMwLjQsMSwxLDFoMgoJCQljMC42LDAsMS0wLjQsMS0xcy0wLjQtMS0xLTFILTI2eiBNLTIwLDIwMGMwLTAuNiwwLjQtMSwxLTFoMmMwLjYsMCwxLDAuNCwxLDFzLTAuNCwxLTEsMWgtMkMtMTkuNiwyMDEtMjAsMjAwLjYtMjAsMjAweiBNLTQ1LDIxNQoJCQljMC0wLjUsMC0wLjksMC0xLjRjLTIuNS0xLjEtMy43LTQtMi42LTYuNmMwLjItMC41LDAuNS0xLDAuOS0xLjRjLTAuOS0yLDAtNC4yLDEuOS01LjJjLTAuOC0yLjYsMC43LTUuNCwzLjQtNi4ybDAsMAoJCQljMC40LTAuNSwwLjktMC45LDEuNS0xLjFjMC41LTIuNywzLjEtNC41LDUuOC00LjFjMC43LDAuMSwxLjQsMC40LDIsMC44YzUuMy0zLjgsMTEuNi01LjksMTguMi01LjljNi44LDAsMTMuMSwyLjIsMTguMiw1LjkKCQkJYzIuMy0xLjYsNS40LTEsNywxLjNjMC40LDAuNiwwLjcsMS4zLDAuOCwyYzAuNiwwLjIsMS4xLDAuNiwxLjUsMS4xYzIuNywwLjgsNC4yLDMuNSwzLjQsNi4ybDAsMGMxLjksMSwyLjcsMy4yLDEuOSw1LjIKCQkJYzEuOSwyLDEuOCw1LjItMC4yLDdjLTAuNCwwLjQtMC45LDAuNy0xLjUsMWMwLDAuNSwwLDAuOSwwLDEuNHYxaC02MnYtMUgtNDV6IE0tNDQuMiwyMDcuOGMtMC4zLDEuMi0wLjUsMi40LTAuNiwzLjYKCQkJYy0xLjMtMS0xLjYtMi45LTAuNi00LjJsMCwwQy00NSwyMDcuNS00NC42LDIwNy43LTQ0LjIsMjA3LjhMLTQ0LjIsMjA3Ljh6IE0tNDIuNywyMDMuMmMtMC40LDAuOS0wLjcsMS44LTEsMi43CgkJCWMtMS0wLjQtMS42LTEuNS0xLjMtMi41YzAuMi0wLjUsMC42LTAuOSwxLjEtMS4yQy00My41LDIwMi42LTQzLjEsMjAyLjktNDIuNywyMDMuMkwtNDIuNywyMDMuMnogTS00MC40LDE5OC43CgkJCWMtMC41LDAuOS0xLDEuOC0xLjUsMi43Yy0xLjMtMS0xLjUtMi45LTAuNS00LjJjMC4xLTAuMiwwLjMtMC4zLDAuNC0wLjVDLTQxLjcsMTk3LjYtNDEuMSwxOTguMy00MC40LDE5OC43eiBNLTM5LjIsMTk3CgkJCWMwLjMtMC41LDAuNy0xLDEuMS0xLjVjLTAuMy0wLjUtMC45LTAuNy0xLjQtMC40cy0wLjcsMC45LTAuNCwxLjRDLTM5LjcsMTk2LjctMzkuNSwxOTYuOS0zOS4yLDE5N0wtMzkuMiwxOTd6IE0tMzMuOSwxOTEuMgoJCQljLTEsMC45LTIsMS44LTIuOSwyLjhjLTAuMy0wLjMtMC43LTAuNi0xLjEtMC44YzAuNC0xLjYsMi4xLTIuNSwzLjctMi4xQy0zNC4xLDE5MS4xLTM0LDE5MS4yLTMzLjksMTkxLjJMLTMzLjksMTkxLjJ6IE04LjgsMTk0CgkJCWMtMC45LTEtMS45LTEuOS0yLjktMi44YzEuNS0wLjYsMy4zLDAuMSwzLjksMS43YzAsMC4xLDAuMSwwLjIsMC4xLDAuM0M5LjUsMTkzLjQsOS4xLDE5My42LDguOCwxOTRMOC44LDE5NHogTTEwLjEsMTk1LjUKCQkJYzAuNCwwLjUsMC44LDEsMS4xLDEuNGMwLjUtMC4xLDAuOS0wLjcsMC44LTEuMmMtMC4xLTAuNS0wLjctMC45LTEuMi0wLjhDMTAuNSwxOTUuMSwxMC4zLDE5NS4zLDEwLjEsMTk1LjV6IE0xMy45LDIwMS40CgkJCWMtMC41LTAuOS0wLjktMS44LTEuNS0yLjdjMC44LTAuNCwxLjQtMS4xLDEuNi0yYzEuMywxLjEsMS40LDMsMC40LDQuMkMxNC4yLDIwMS4xLDE0LDIwMS4yLDEzLjksMjAxLjR6IE0xNS43LDIwNS45CgkJCWMtMC4zLTAuOS0wLjYtMS44LTEtMi43YzAuNC0wLjMsMC44LTAuNiwxLjItMWMxLDAuNSwxLjQsMS43LDEsMi43QzE2LjYsMjA1LjMsMTYuMiwyMDUuNywxNS43LDIwNS45eiBNMTYuOCwyMTEuNAoJCQljLTAuMS0xLjItMC40LTIuNC0wLjYtMy42YzAuNS0wLjEsMC45LTAuNCwxLjItMC42QzE4LjQsMjA4LjUsMTguMSwyMTAuNCwxNi44LDIxMS40TDE2LjgsMjExLjRMMTYuOCwyMTEuNHogTTE1LDIxNAoJCQljLTAuNS0xNi0xMy45LTI4LjYtMjkuOS0yOC4xYy0xNS4zLDAuNS0yNy42LDEyLjgtMjguMSwyOC4xSDE1TDE1LDIxNHoiLz4KCTwvZz4KPC9nPgo8L3N2Zz4K);

        }

        .user-wrapper {
            background-image: none !important;
            height: 600px;
            background-color: #fff !important;
        }

        .use,
        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }

        .user:hover {
            background: #eeeeee;
        }

        .user:last-child {
            margin-bottom: 0;
        }

        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: red;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .pendin {
            position: absolute;
            left: 13px;
            top: 9px;
            background: red;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }

        .media-left {
            margin: 0 10px;
        }

        .media-left img {
            width: 64px;
            border-radius: 64px;
        }

        .media-body p {
            margin: 6px 0;
        }

        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: ;
        }

        .messages {
            height: 5%;
        }

        .messages .message {
            margin-bottom: 15px;
        }

        .messages .message:last-child {
            margin-bottom: 0;
        }

        .received,
        .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }

        .received {
            background: lightgray;
        }

        .sent {
            background: #7367F0;
            float: right;
            text-align: right;
        }

        .message p {
            color: white;
            margin: 5px 0;
        }

        .date {
            color: #fff;
            font-size: 12px;
        }

        .active {
            background: #eeeeee;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }

        input[type=text]:focus {
            border: 1px solid #7367F0;
        }

        .btn-light {
            background-color: fff;
            border-color: #f8f9fa;
            color: cornsilk;
        }

        .media-body p {
            margin: 6px 0;
            color: currentcolor;
            font-size: 30px;
            font-weight: 900;
        }

        .navba {
            overflow: hidden;
            background-color: #333;
            font-family: Arial, Helvetica, sans-serif;
        }

        .navba a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdow {
            float: right;
            overflow: hidden;
        }

        .dropdow .dropbt {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font: inherit;
            margin: 0;
        }

        .navba a:hover,
        .dropdow:hover .dropbt {
            background-color: red;
            color: white;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: green;
            width: 10%;
            right: 0;

        }

        .dropdow:hover .dropdown-content {
            display: block;
        }
    </style>
    <!-- END: Custom CSS-->

    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">
    @if (session('info'))
    <script>
        Swal.fire(
    'Upps!',
    '{{ session('info') }}',
    'info'
    )
    </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire(
        'Great..',
        '{{ session('success') }}',
        'success'
        )
    </script>
  @endif

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href={{ route('show-jadwal-belajar') }}
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jadwal Belajar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href='/chat'
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{ $user->name }}</span><span
                                class="user-status">{{ $user->role }}</span></div><span
                            class="avatar bg-light-primary">
                            <div class="avatar-content"><img src="{{asset('app-assets/images/illustrator')}}/{{Auth::user()->avatar}}" width="40px"
                                    heigh="40px"></div>
                            {{-- <div class="avatar-content">{{ $avatar }}</div> --}}
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href={{ route('show-profile') }}><i class="me-50"
                                data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                        </div><button type="submit" class="dropdown-item" href="page-account-settings.html">
                            <i class="me-50" data-feather="power"></i> Logout</a>
                            </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('dashboard') }}"><span
                            class="brand-logo">

                            <img src="{{ asset('app-assets/images/logo/sekolah.png') }}" alt=""
                                srcset=""></span>
                        <h2 class="brand-text" style="font-size: 12pt">SMAN 8 PINRANG</h2>
                    </a></li>
                {{-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li> --}}
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('/*') ? 'active' : '' }}"><a class="d-flex align-items-center"
                                href="{{ route('home') }}"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="eCommerce">Home</span></a></li>
                    </ul>
                    @if (Auth::user()->role == 'Admin')
                        <ul class="menu-content">
                            <li class="{{ request()->is('dashboard*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('dashboard') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="eCommerce">Admin Dashboard</span></a></li>
                        </ul>
                    @endif
                </li>
                @if (Auth::user()->role == 'Admin')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="message-square"></i><span class="menu-title text-truncate"
                                data-i18n="User">Hubungi Kami</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="{{ route('dashboard.message') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Lihat Pesan</span></a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (Auth::user()->role == 'Admin')
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">User Management</span><i
                            data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="user"></i><span class="menu-title text-truncate"
                                data-i18n="User">User</span></a>
                        <ul class="menu-content">
                            <li class="{{ request()->is('show-siswa*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('show-siswa') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Daftar Siswa</span></a>
                            </li>
                            <li class="{{ request()->is('show-guru*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('show-guru') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="View">Daftar Guru</span></a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if (Auth::user()->role != 'WaliKelas')
                    <li class=" navigation-header"><span data-i18n="User Interface">Siswa Management</span><i
                            data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="calendar"></i><span class="menu-title text-truncate"
                                data-i18n="User">Jadwal
                                Siswa</span></a>
                        <ul class="menu-content">
                            @if (Auth::user()->role == 'Admin')
                                <li class="{{ request()->is('input-jadwal*') ? 'active' : '' }}"><a
                                        class="d-flex align-items-center" href="{{ route('input-jadwal') }}"><i
                                            data-feather="circle"></i><span class="menu-item text-truncate"
                                            data-i18n="List">Input Jadwal</span></a>
                                </li>
                            @endif
                            <li class="{{ request()->is('show-jadwal/belajar*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('show-jadwal-belajar') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Lihat Jadwal</span></a>
                            </li>
                    </li>
            </ul>
            </li>
            @endif

            @if (Auth::user()->role == 'Admin')
                <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                            data-feather="book-open"></i><span class="menu-title text-truncate"
                            data-i18n="User">Kelas
                            Siswa</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-kelas*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-kelas') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat
                                    Kelas</span></a>
                        </li>
                </li>
                </ul>
                <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                            data-feather="database"></i><span class="menu-title text-truncate" data-i18n="User">Data
                            Siswa</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-data-siswa*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-data-siswa') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Daftar
                                    Siswa</span></a>
                        </li>
                </li>
                </ul>
                </li>
            @endif
            @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Guru')
                <li class=" navigation-header"><span data-i18n="User Interface">Guru Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate"
                            data-i18n="User">Jadwal
                            Mengajar</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-jadwal/mengajar*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-jadwal-mengajar') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat
                                    Jadwal</span></a>
                        </li>
                </li>
                </ul>
                <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                            data-feather="check-circle"></i><span class="menu-title text-truncate"
                            data-i18n="User">Absensi</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-absensi-siswa*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-absensi-siswa') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Absen Siswa</span></a>
                        </li>
                </li>
                </ul>
                </li>
            @endif
            @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Guru' || Auth::user()->role == 'Siswa')
                <li class=" nav-item"><a class="d-flex align-items-center mt-1" href="#"><i
                            data-feather="database"></i><span class="menu-title text-truncate" data-i18n="User">Data
                            Guru</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-data-guru*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-data-guru') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Daftar
                                    Guru</span></a>
                        </li>
                </li>
                </ul>
                </li>
            @endif
            @if (Auth::user()->role == 'Admin')
                <li class=" navigation-header"><span data-i18n="User Interface">Pelajaran Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="book"></i><span class="menu-title text-truncate" data-i18n="User">Pelajaran
                            Siswa</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('input-pelajaran*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('input-pelajaran') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Input
                                    Pelajaran</span></a>
                        </li>
                        <li class="{{ request()->is('show-pelajaran*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-pelajaran') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat
                                    Daftar Pelajaran</span></a>
                        </li>
                </li>
                </ul>
                </li>
            @endif

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="message-square"></i><span class="menu-title text-truncate"
                        data-i18n="User">Chat Management</span></a>
                <ul class="menu-content">
                    <li class="{{ request()->is('chattas*') ? 'active' : '' }}"><a class="d-flex align-items-center"
                            href="/chat"><i data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">Lihat Chat</span></a>
                    </li>
                    {{-- <li class="{{ request()->is('group/create*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="/group/create"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Buat Grub Chat</span></a>
                        </li>
                        <li class="{{ request()->is('subscribe*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('subscribe') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Gabung Grub Chat</span></a>
                        </li> --}}
            </li>
            </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">Ujian Management</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="User">Jadwal
                        Ujian</span></a>
                <ul class="menu-content">
                    @if (Auth::user()->role == 'Admin' or Auth::user()->role == 'Guru')
                        <li class="{{ request()->is('input-ujian*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('input-ujian') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Input
                                    Jadwal Ujian</span></a>
                        </li>
                    @endif
                    <li class="{{ request()->is('show-ujian*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-ujian') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">
                                Jadwal Ujian</span></a>
                    </li>
            </li>
            </ul>

            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                        data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="User">Hasil
                        Ujian</span></a>
                <ul class="menu-content">
                    @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'WaliKelas' or Auth::user()->role == 'Guru')
                        <li class="{{ request()->is('input-nilai-ujian*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('input-nilai-ujian') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Input
                                    Nilai Ujian</span></a>
                        </li>
                    @endif
                    <li class="{{ request()->is('show-nilai/ujian*') ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('show-nilai-ujian') }}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate"
                                data-i18n="List">Lihat
                                Nilai Ujian</span></a>
                    </li>
            </li>
            </ul>
            </li>

            {{-- @if (Auth::user()->role != 'Guru') --}}
                <li class=" navigation-header"><span data-i18n="User Interface">Nilai Management</span><i
                        data-feather="more-horizontal"></i>
                </li>
                @if (Auth::user()->role != 'Siswa')
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="thumbs-up"></i><span class="menu-title text-truncate"
                                data-i18n="User">Nilai Sikap</span></a>
                        <ul class="menu-content">
                            <li class="{{ request()->is('input-nilai/sikap*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('input-nilai-sikap') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Input
                                        Nilai Sikap</span></a>
                            </li>
                    </li>
                    </ul>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="target"></i><span class="menu-title text-truncate"
                                data-i18n="User">Nilai
                                Ekstrakurikuler</span></a>
                        <ul class="menu-content">
                            <li class="{{ request()->is('input-nilai/ekstrakurikuler*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('input-ekstrakurikuler') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Input
                                        Nilai Ekstrakurikuler</span></a>
                            </li>
                    </li>
                    </ul>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="award"></i><span class="menu-title text-truncate"
                                data-i18n="User">Nilai
                                Prestasi</span></a>
                        <ul class="menu-content">
                            <li class="{{ request()->is('input-nilai/prestasi*') ? 'active' : '' }}"><a
                                    class="d-flex align-items-center" href="{{ route('input-prestasi') }}"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="List">Input
                                        Nilai Prestasi</span></a>
                            </li>
                    </li>
                    </ul>
                @endif
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="book"></i><span class="menu-title text-truncate" data-i18n="User">Nilai
                            Raport</span></a>
                    <ul class="menu-content">
                        <li class="{{ request()->is('show-nilai/lapor*') ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('show-nilai-lapor') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">Lihat Raport</span></a>
                        </li>
                </li>
                </ul>
                </li>

            {{-- @endif --}}

            {{-- OPTIONAL FOR FETURE --}}

            {{-- <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Configuration</span><i data-feather="more-horizontal"></i>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="database"></i><span class="menu-title text-truncate" data-i18n="RestApi">Rest API</span></a>
          <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="code"></i><span class="menu-title text-truncate" data-i18n="Appliaction">Appliaction</span></a>
          </li> --}}
        </div>
    </div>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                @yield('content')


                <!-- BEGIN: Footer-->
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                        data-feather="arrow-up"></i></button>
                <!-- END: Footer-->


                <!-- BEGIN: Vendor JS-->
                <script src={{ asset('app-assets/vendors/js/vendors.min.js') }}></script>
                <!-- BEGIN Vendor JS-->


                <!-- BEGIN: Page Vendor JS-->
                <script src={{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}></script>

                <script src={{ asset('app-assets/vendors/js/pickers/pickadate/picker.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/pickers/pickadate/picker.time.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/pickers/pickadate/legacy.js') }}></script>
                <script src={{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}></script>

                <script src={{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}></script>


                <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="{{ asset('js/app.js') }}"></script>

                <script>
                    var receiver_id = '';
                    var my_id = "{{ Auth::id() }}";
                    $(document).ready(function() {
                        // ajax setup form csrf token
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });

                        // Enable pusher logging - don't include this in production
                        Pusher.logToConsole = true;
                        var pusher = new Pusher('3b8d24a3b9f2e770036d', {
                            cluster: 'ap1'
                        });
                        var status = my_id;
                        var channel = pusher.subscribe(status);
                        channel.bind('App\\Events\\Notify', function(data) {
                            //alert(JSON.stringify(data));
                            if (my_id == data.from) {
                                $('#' + data.to).click();
                            } else if (my_id == data.to) {
                                if (receiver_id == data.from) {
                                    // if receiver is selected, reload the selected user ...
                                    $('#' + data.from).click();
                                } else {
                                    // if receiver is not seleted, add notification for that user
                                    var pending = parseInt($('#' + data.from).find('.pending').html());

                                    if (pending) {
                                        $('#' + data.from).find('.pending').html(pending + 1);
                                    } else {
                                        $('#' + data.from).append('<span class="pending">1</span>');
                                    }
                                }
                            }
                        });

                        // get message of each Group by click
                        $('.user').click(function() {
                            $('.user').removeClass('active');
                            $(this).addClass('active');
                            $(this).find('.pending').remove();

                            receiver_id = $(this).attr('id');

                            $.ajax({
                                type: "get",
                                url: "messag/" + receiver_id,
                                data: "",
                                cache: false,
                                success: function(data) {
                                    $('#messages').html(data);
                                    scrollToBottomFunc();
                                }
                            });
                        });
                        // remove new messge on nav by click
                        $('.use').click(function() {
                            $('.user').removeClass('active');
                            receiver_id = $(this).attr('id');
                            $.ajax({
                                type: "get",
                                url: "message/" + receiver_id, // need to create this route
                                data: "",
                                cache: false,
                                success: function(data) {

                                }
                            });
                        });
                        // add nem message
                        $(document).on('keyup', '#id,#message', function(e) { // message
                            var message = $("input[name=message]").val();
                            var id = $("input[name=id]").val();
                            // check if enter key is pressed and message is not null also receiver is selected auth
                            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                                $(this).val(''); // while pressed enter text box will be empty

                                var datastr = "id=" + id + "&message=" + message;
                                $.ajax({
                                    type: "post",

                                    url: "message", // need to create this post route
                                    data: datastr,
                                    cache: false,
                                    success: function(data) {

                                    },
                                    error: function(jqXHR, status, err) {
                                        console.log('error' + err);

                                    },
                                    complete: function() {
                                        scrollToBottomFunc();
                                    }
                                })
                            }
                        });
                    });


                    /* When the user clicks on the button,
                    toggle between hiding and showing the dropdown content */
                    function myFunction() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    };
                    // make a function to scroll down auto
                    function scrollToBottomFunc() {
                        $('.message-wrapper').animate({
                            scrollTop: $('.message-wrapper').get(0).scrollHeight
                        }, 50);
                    }
                </script>

                <!-- END: Page Vendor JS-->

                <!-- BEGIN: Theme JS-->
                <script src={{ asset('app-assets/js/core/app-menu.min.js') }}></script>
                <script src={{ asset('app-assets/js/core/app.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/customizer.min.js') }}></script>
                <!-- END: Theme JS-->


                <!-- BEGIN: Page JS-->

                <script src={{ asset('app-assets/js/scripts/cards/card-analytics.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/forms/form-select2.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/pages/app-user-list.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/tables/table-datatables-advanced.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/forms/pickers/form-pickers.min.js') }}></script>
                <script src={{ asset('app-assets/js/scripts/chat/app-chat.js') }}></script>

                <!-- END: Page JS-->



                <script>
                    $(window).on('load', function() {
                        if (feather) {
                            feather.replace({
                                width: 14,
                                height: 14
                            });
                        }
                    })
                </script>

                @yield('script')
