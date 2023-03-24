<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

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
    <!-- END: Page CSS-->


</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static  "
    data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

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
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon"
                                data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon"
                                data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon"
                                data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html"
                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon"
                                data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i
                                class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                                data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle"
                        id="dropdown-flag" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span
                            class="selected-language">English</span></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a
                            class="dropdown-item" href="#" data-language="en"><i
                                class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item"
                            href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a
                            class="dropdown-item" href="#" data-language="de"><i
                                class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#"
                            data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                </li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..."
                            tabindex="-1" data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span
                            class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                                <div class="badge rounded-pill badge-light-primary">4 Items</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list">
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="../../../app-assets/images/pages/eCommerce/1.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Apple watch 5</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$374.90</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> Google Home Mini</a></h6><small
                                            class="cart-item-by">By Google</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="3">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$129.40</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="2">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$699.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> iMac Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$4,999.00</h5>
                                </div>
                            </div>
                            <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                    src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts"
                                    width="62">
                                <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                        data-feather="x"></i>
                                    <div class="media-heading">
                                        <h6 class="cart-item-title"><a class="text-body"
                                                href="app-ecommerce-details.html"> MacBook Pro</a></h6><small
                                            class="cart-item-by">By Apple</small>
                                    </div>
                                    <div class="cart-item-qty">
                                        <div class="input-group">
                                            <input class="touchspin-cart" type="number" value="1">
                                        </div>
                                    </div>
                                    <h5 class="cart-item-price">$2,999.00</h5>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer">
                            <div class="d-flex justify-content-between mb-1">
                                <h6 class="fw-bolder mb-0">Total:</h6>
                                <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                            </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-notification me-25"><a class="nav-link" href="#"
                        data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span
                            class="badge rounded-pill bg-danger badge-up">5</span></a>
                    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                        <li class="dropdown-menu-header">
                            <div class="dropdown-header d-flex">
                                <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                                <div class="badge rounded-pill badge-light-primary">6 New</div>
                            </div>
                        </li>
                        <li class="scrollable-container media-list"><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-15.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Congratulation Sam
                                                🎉</span>winner!</p><small class="notification-text"> Won the monthly
                                            best seller badge.</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar"><img
                                                src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                                alt="avatar" width="32" height="32"></div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">New
                                                message</span>&nbsp;received</p><small class="notification-text"> You
                                            have 10 unread messages</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content">MD</div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Revised Order
                                                👋</span>&nbsp;checkout</p><small class="notification-text"> MD Inc.
                                            order updated</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-item d-flex align-items-center">
                                <h6 class="fw-bolder me-auto mb-0">System Notifications</h6>
                                <div class="form-check form-check-primary form-switch">
                                    <input class="form-check-input" id="systemNotification" type="checkbox"
                                        checked="">
                                    <label class="form-check-label" for="systemNotification"></label>
                                </div>
                            </div><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-danger">
                                            <div class="avatar-content"><i class="avatar-icon" data-feather="x"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Server
                                                down</span>&nbsp;registered</p><small class="notification-text"> USA
                                            Server is down due to high CPU usage</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-success">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="check"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">Sales
                                                report</span>&nbsp;generated</p><small class="notification-text"> Last
                                            month sales report generated</small>
                                    </div>
                                </div>
                            </a><a class="d-flex" href="#">
                                <div class="list-item d-flex align-items-start">
                                    <div class="me-1">
                                        <div class="avatar bg-light-warning">
                                            <div class="avatar-content"><i class="avatar-icon"
                                                    data-feather="alert-triangle"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-item-body flex-grow-1">
                                        <p class="media-heading"><span class="fw-bolder">High memory</span>&nbsp;usage
                                        </p><small class="notification-text"> BLR Server using high memory</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-menu-footer"><a class="btn btn-primary w-100" href="#">Read all
                                notifications</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">John Doe</span><span
                                class="user-status">Admin</span></div><span class="avatar"><img class="round"
                                src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a
                            class="dropdown-item" href="page-profile.html"><i class="me-50"
                                data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i
                                class="me-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item"
                            href="app-todo.html"><i class="me-50" data-feather="check-square"></i> Task</a><a
                            class="dropdown-item" href="app-chat.html"><i class="me-50"
                                data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="page-account-settings-account.html"><i class="me-50" data-feather="settings"></i>
                            Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="me-50"
                                data-feather="credit-card"></i> Pricing</a><a class="dropdown-item"
                            href="page-faq.html"><i class="me-50" data-feather="help-circle"></i> FAQ</a><a
                            class="dropdown-item" href="auth-login-cover.html"><i class="me-50"
                                data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/xls.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small
                            class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/jpg.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/pdf.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                            Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="../../../app-assets/images/icons/doc.png" alt="png"
                            height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                            Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                            Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg"
                            alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web
                            Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75"
                        data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                        x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Vuexy</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i
                            data-feather="mail"></i><span class="menu-title text-truncate"
                            data-i18n="Email">Email</span></a>
                </li>
                <li class="active nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                            data-feather="message-square"></i><span class="menu-title text-truncate"
                            data-i18n="Chat">Chat</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i
                            data-feather="check-square"></i><span class="menu-title text-truncate"
                            data-i18n="Todo">Todo</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i
                            data-feather="calendar"></i><span class="menu-title text-truncate"
                            data-i18n="Calendar">Calendar</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Kanban</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Invoice">Invoice</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Preview">Preview</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Edit">Edit</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Add">Add</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i
                            data-feather="save"></i><span class="menu-title text-truncate"
                            data-i18n="File Manager">File Manager</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shield"></i><span class="menu-title text-truncate"
                            data-i18n="Roles &amp; Permission">Roles &amp; Permission</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-access-roles.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Roles">Roles</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-access-permission.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Permission">Permission</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="shopping-cart"></i><span class="menu-title text-truncate"
                            data-i18n="eCommerce">eCommerce</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Shop">Shop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Details">Details</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Wish List">Wish List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Checkout">Checkout</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="User">User</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="app-user-list.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List">List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="View">View</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="app-user-view-account.html"><span
                                            class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-security.html"><span
                                            class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-billing.html"><span
                                            class="menu-item text-truncate" data-i18n="Billing &amp; Plans">Billing
                                            &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-notifications.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="app-user-view-connections.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="Pages">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Account Settings">Account
                                    Settings</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-account.html"><span
                                            class="menu-item text-truncate" data-i18n="Account">Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-security.html"><span
                                            class="menu-item text-truncate" data-i18n="Security">Security</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-billing.html"><span
                                            class="menu-item text-truncate" data-i18n="Billings &amp; Plans">Billings
                                            &amp; Plans</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-notifications.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Notifications">Notifications</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="page-account-settings-connections.html"><span
                                            class="menu-item text-truncate"
                                            data-i18n="Connections">Connections</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-profile.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Profile">Profile</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-faq.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="FAQ">FAQ</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Knowledge Base">Knowledge Base</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-pricing.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pricing">Pricing</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-license.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="License">License</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="page-api-key.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="API Key">API Key</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-blog-list.html"><span
                                            class="menu-item text-truncate" data-i18n="List">List</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span
                                            class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span
                                            class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Welcome">Welcome</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Reset Password">Reset Password</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Verify Email">Verify Email</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Deactivate Account">Deactivate Account</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Invoice">Invoice</span></a>
                                </li>
                                <li><a class="d-flex align-items-center"
                                        href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Promotional">Promotional</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Coming Soon">Coming Soon</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Not Authorized">Not Authorized</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Maintenance">Maintenance</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="page-misc-error.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Error">Error</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="user-check"></i><span class="menu-title text-truncate"
                            data-i18n="Authentication">Authentication</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Login">Login</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-login-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-login-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Register">Register</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-register-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-register-multisteps.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Multi-Steps">Multi-Steps</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Forgot Password">Forgot
                                    Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-forgot-password-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Reset Password">Reset
                                    Password</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-reset-password-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-reset-password-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-verify-email-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-verify-email-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Two Steps">Two Steps</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="auth-two-steps-basic.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Basic">Basic</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="auth-two-steps-cover.html"
                                        target="_blank"><span class="menu-item text-truncate"
                                            data-i18n="Cover">Cover</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="modal-examples.html"><i
                            data-feather="square"></i><span class="menu-title text-truncate"
                            data-i18n="Modal Examples">Modal Examples</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><i
                            data-feather="type"></i><span class="menu-title text-truncate"
                            data-i18n="Typography">Typography</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><i
                            data-feather="eye"></i><span class="menu-title text-truncate"
                            data-i18n="Feather">Feather</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="credit-card"></i><span class="menu-title text-truncate"
                            data-i18n="Card">Card</span><span
                            class="badge badge-light-success rounded-pill ms-auto me-1">New</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="card-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-advance.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advance">Advance</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-statistics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Statistics">Statistics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-analytics.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="card-actions.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Card Actions">Card Actions</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="briefcase"></i><span class="menu-title text-truncate"
                            data-i18n="Components">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="component-accordion.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Accordion">Accordion</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-alerts.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Alerts">Alerts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-avatar.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Avatar">Avatar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-badges.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Badges">Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-buttons.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Buttons">Buttons</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-carousel.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Carousel">Carousel</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-collapse.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapse">Collapse</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-divider.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Divider">Divider</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-dropdowns.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Dropdowns">Dropdowns</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-list-group.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="List Group">List Group</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-modals.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Modals">Modals</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-navs-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Navs Component">Navs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-offcanvas.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Offcanvas">Offcanvas</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pagination.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pagination">Pagination</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pill-badges.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pill Badges">Pill Badges</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-pills-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Pills Component">Pills Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-popovers.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Popovers">Popovers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-progress.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Progress">Progress</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-spinner.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Spinner">Spinner</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tabs-component.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tabs Component">Tabs Component</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-timeline.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Timeline">Timeline</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-bs-toast.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Toasts">Toasts</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="component-tooltips.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tooltips">Tooltips</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="box"></i><span class="menu-title text-truncate"
                            data-i18n="Extensions">Extensions</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Sweet Alert">Sweet Alert</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Block UI">BlockUI</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Toastr">Toastr</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Sliders">Sliders</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tour.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tour">Tour</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Clipboard">Clipboard</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Media player">Media Player</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Context Menu">Context Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="swiper">Swiper</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-tree.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Tree">Tree</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Ratings">Ratings</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="l18n">l18n</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="layout"></i><span class="menu-title text-truncate"
                            data-i18n="Page Layouts">Page Layouts</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-full.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Full">Layout Full</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-without-menu.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Without Menu">Without Menu</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-empty.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Empty">Layout Empty</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="layout-blank.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Layout Blank">Layout Blank</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="copy"></i><span class="menu-title text-truncate"
                            data-i18n="Form Elements">Form Elements</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="form-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input">Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-groups.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Groups">Input Groups</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-input-mask.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Input Mask">Input Mask</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-textarea.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Textarea">Textarea</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-checkbox.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Checkbox">Checkbox</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-radio.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Radio">Radio</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-custom-options.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Custom Options">Custom Options</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-switch.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Switch">Switch</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-select.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Select">Select</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-number-input.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Number Input">Number Input</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="File Uploader">File Uploader</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Quill Editor">Quill Editor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><i
                            data-feather="box"></i><span class="menu-title text-truncate"
                            data-i18n="Form Layout">Form Layout</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i
                            data-feather="package"></i><span class="menu-title text-truncate"
                            data-i18n="Form Wizard">Form Wizard</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i
                            data-feather="check-circle"></i><span class="menu-title text-truncate"
                            data-i18n="Form Validation">Form Validation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><i
                            data-feather="rotate-cw"></i><span class="menu-title text-truncate"
                            data-i18n="Form Repeater">Form Repeater</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><i
                            data-feather="server"></i><span class="menu-title text-truncate"
                            data-i18n="Table">Table</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="grid"></i><span class="menu-title text-truncate"
                            data-i18n="Datatable">Datatable</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="table-datatable-basic.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Basic">Basic</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Advanced">Advanced</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="pie-chart"></i><span class="menu-title text-truncate"
                            data-i18n="Charts">Charts</span><span
                            class="badge badge-light-danger rounded-pill ms-auto me-2">2</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="chart-apex.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Apex">Apex</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="chart-chartjs.html"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="Chartjs">Chartjs</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i
                            data-feather="map"></i><span class="menu-title text-truncate"
                            data-i18n="Leaflet Maps">Leaflet Maps</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="menu"></i><span class="menu-title text-truncate"
                            data-i18n="Menu Levels">Menu Levels</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level
                                    2.1</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="Second Level">Second Level
                                    2.2</span></a>
                            <ul class="menu-content">
                                <li><a class="d-flex align-items-center" href="#"><span
                                            class="menu-item text-truncate" data-i18n="Third Level">Third Level
                                            3.1</span></a>
                                </li>
                                <li><a class="d-flex align-items-center" href="#"><span
                                            class="menu-item text-truncate" data-i18n="Third Level">Third Level
                                            3.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i
                            data-feather="eye-off"></i><span class="menu-title text-truncate"
                            data-i18n="Disabled Menu">Disabled Menu</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                        target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate"
                            data-i18n="Documentation">Documentation</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/"
                        target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate"
                            data-i18n="Raise Support">Raise Support</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content chat-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper container-xxl p-0">
            <div class="sidebar-left">
                <div class="sidebar">
                    <!-- Admin user profile area -->
                    <div class="chat-profile-sidebar">
                        <header class="chat-profile-header">
                            <span class="close-icon">
                                <i data-feather="x"></i>
                            </span>
                            <!-- User Information -->
                            <div class="header-profile-sidebar">
                                <div class="avatar box-shadow-1 avatar-xl avatar-border">
                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                        alt="user_avatar" />
                                    <span class="avatar-status-online avatar-status-xl"></span>
                                </div>
                                <h4 class="chat-user-name">John Doe</h4>
                                <span class="user-post">Admin</span>
                            </div>
                            <!--/ User Information -->
                        </header>
                        <!-- User Details start -->
                        <div class="profile-sidebar-area">
                            <h6 class="section-label mb-1">About</h6>
                            <div class="about-user">
                                <textarea data-length="120" class="form-control char-textarea" id="textarea-counter" rows="5"
                                    placeholder="About User">

                                    Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea>
                                <small class="counter-value float-end"><span class="char-count">108</span> / 120
                                </small>
                            </div>
                            <!-- To set user status -->
                            <h6 class="section-label mb-1 mt-3">Status</h6>
                            <ul class="list-unstyled user-status">
                                <li class="pb-1">
                                    <div class="form-check form-check-success">
                                        <input type="radio" id="activeStatusRadio" name="userStatus"
                                            class="form-check-input" value="online" checked />
                                        <label class="form-check-label ms-25" for="activeStatusRadio">Active</label>
                                    </div>
                                </li>
                                <li class="pb-1">
                                    <div class="form-check form-check-danger">
                                        <input type="radio" id="dndStatusRadio" name="userStatus"
                                            class="form-check-input" value="busy" />
                                        <label class="form-check-label ms-25" for="dndStatusRadio">Do Not
                                            Disturb</label>
                                    </div>
                                </li>
                                <li class="pb-1">
                                    <div class="form-check form-check-warning">
                                        <input type="radio" id="awayStatusRadio" name="userStatus"
                                            class="form-check-input" value="away" />
                                        <label class="form-check-label ms-25" for="awayStatusRadio">Away</label>
                                    </div>
                                </li>
                                <li class="pb-1">
                                    <div class="form-check form-check-secondary">
                                        <input type="radio" id="offlineStatusRadio" name="userStatus"
                                            class="form-check-input" value="offline" />
                                        <label class="form-check-label ms-25"
                                            for="offlineStatusRadio">Offline</label>
                                    </div>
                                </li>
                            </ul>
                            <!--/ To set user status -->

                            <!-- User settings -->
                            <h6 class="section-label mb-1 mt-2">Settings</h6>
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center mb-1">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="check-square" class="me-75 font-medium-3"></i>
                                        <span class="align-middle">Two-step Verification</span>
                                    </div>
                                    <div class="form-check form-switch me-0">
                                        <input type="checkbox" class="form-check-input" id="customSwitch1"
                                            checked />
                                        <label class="form-check-label" for="customSwitch1"></label>
                                    </div>
                                </li>
                                <li class="d-flex justify-content-between align-items-center mb-1">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="bell" class="me-75 font-medium-3"></i>
                                        <span class="align-middle">Notification</span>
                                    </div>
                                    <div class="form-check form-switch me-0">
                                        <input type="checkbox" class="form-check-input" id="customSwitch2" />
                                        <label class="form-check-label" for="customSwitch2"></label>
                                    </div>
                                </li>
                                <li class="mb-1 d-flex align-items-center cursor-pointer">
                                    <i data-feather="user" class="me-75 font-medium-3"></i>
                                    <span class="align-middle">Invite Friends</span>
                                </li>
                                <li class="d-flex align-items-center cursor-pointer">
                                    <i data-feather="trash" class="me-75 font-medium-3"></i>
                                    <span class="align-middle">Delete Account</span>
                                </li>
                            </ul>
                            <!--/ User settings -->

                            <!-- Logout Button -->
                            <div class="mt-3">
                                <button class="btn btn-primary">
                                    <span>Logout</span>
                                </button>
                            </div>
                            <!--/ Logout Button -->
                        </div>
                        <!-- User Details end -->
                    </div>
                    <!--/ Admin user profile area -->

                    <!-- Chat Sidebar area -->
                    <div class="sidebar-content">
                        <span class="sidebar-close-icon">
                            <i data-feather="x"></i>
                        </span>
                        <!-- Sidebar header start -->
                        <div class="chat-fixed-search">
                            <div class="d-flex align-items-center w-100">
                                <div class="sidebar-profile-toggle">
                                    <div class="avatar avatar-border">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                            alt="user_avatar" height="42" width="42" />
                                        <span class="avatar-status-online"></span>
                                    </div>
                                </div>
                                <div class="input-group input-group-merge ms-1 w-100">
                                    <span class="input-group-text round"><i data-feather="search"
                                            class="text-muted"></i></span>
                                    <input type="text" class="form-control round" id="chat-search"
                                        placeholder="Search or start a new chat" aria-label="Search..."
                                        aria-describedby="chat-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar header end -->

                        <!-- Sidebar Users start -->
                        <div id="users-list" class="chat-user-list-wrapper list-group">
                            <h4 class="chat-list-title">Chats</h4>
                            <ul class="chat-users-list chat-list media-list">
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-offline"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">Elizabeth Elliott</h5>
                                        <p class="card-text text-truncate">
                                            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie
                                            lemon drops icing
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-end mb-25 chat-time">4:14 PM</small>
                                        <span class="badge bg-danger rounded-pill float-end">3</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-busy"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">Kristopher Candy</h5>
                                        <p class="card-text text-truncate">
                                            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie
                                            lemon drops icing
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-end mb-25 chat-time">9:09 AM</small>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-8.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-away"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">Sarah Woods</h5>
                                        <p class="card-text text-truncate">
                                            Cake pie jelly jelly beans. Marzipan lemon drops halvah cake. Pudding cookie
                                            lemon drops icing.
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        <small class="float-end mb-25 chat-time">5:48 PM</small>
                                    </div>
                                </li>
                                <li class="no-results">
                                    <h6 class="mb-0">No Chats Found</h6>
                                </li>
                            </ul>
                            <h4 class="chat-list-title">Contacts</h4>
                            <ul class="chat-users-list contact-list media-list">
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Jenny Perich</h5>
                                        <p class="card-text text-truncate">
                                            Tart dragée carrot cake chocolate bar. Chocolate cake jelly beans caramels
                                            tootsie roll candy canes.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-5.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Sarah Montgomery</h5>
                                        <p class="card-text text-truncate">
                                            Tootsie roll sesame snaps biscuit icing jelly-o biscuit chupa chups powder.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-9.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Heather Howell</h5>
                                        <p class="card-text text-truncate">
                                            Tart cookie dragée sesame snaps halvah. Fruitcake sugar plum gummies
                                            cheesecake toffee.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Kelly Reyes</h5>
                                        <p class="card-text text-truncate">
                                            Wafer toffee tart jelly cake croissant chocolate bar cupcake donut.
                                            Fruitcake gingerbread tiramisu sweet
                                            jelly-o.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-15.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Kristopher Candy</h5>
                                        <p class="card-text text-truncate">
                                            Marzipan bonbon chocolate bar biscuit lemon drops muffin jelly-o sweet
                                            jujubes.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-14.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Vincent Nelson</h5>
                                        <p class="card-text text-truncate">
                                            Toffee gummi bears sugar plum gummi bears chocolate bar donut. Pudding
                                            cookie lemon drops icing
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-17.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Jimmy Parker</h5>
                                        <p class="card-text text-truncate">
                                            Powder halvah jelly beans topping caramels muffin dragée lollipop oat cake.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-3.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Elizabeth Elliott</h5>
                                        <p class="card-text text-truncate">
                                            Candy canes ice cream jelly beans carrot cake chocolate bar pastry candy
                                            jelly-o.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <span class="avatar"><img
                                            src="../../../app-assets/images/portrait/small/avatar-s-13.jpg"
                                            height="42" width="42" alt="Generic placeholder image" />
                                    </span>
                                    <div class="chat-info">
                                        <h5 class="mb-0">Nelson D'souza</h5>
                                        <p class="card-text text-truncate">
                                            Macaroon candy canes apple pie soufflé lemon drops chocolate cake chocolate
                                            sweet roll.
                                        </p>
                                    </div>
                                </li>
                                <li class="no-results">
                                    <h6 class="mb-0">No Contacts Found</h6>
                                </li>
                            </ul>
                        </div>
                        <!-- Sidebar Users end -->
                    </div>
                    <!--/ Chat Sidebar area -->

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper container-xxl p-0">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="body-content-overlay"></div>
                        <!-- Main chat area -->
                        <section class="chat-app-window">
                            <!-- To load Conversation -->
                            <div class="start-chat-area">
                                <div class="mb-1 start-chat-icon">
                                    <i data-feather="message-square"></i>
                                </div>
                                <h4 class="sidebar-toggle start-chat-text">Start Conversation</h4>
                            </div>
                            <!--/ To load Conversation -->

                            <!-- Active Chat -->
                            <div class="active-chat d-none">
                                <!-- Chat Header -->
                                <div class="chat-navbar">
                                    <header class="chat-header">
                                        <div class="d-flex align-items-center">
                                            <div class="sidebar-toggle d-block d-lg-none me-1">
                                                <i data-feather="menu" class="font-medium-5"></i>
                                            </div>
                                            <div class="avatar avatar-border user-profile-toggle m-0 me-1">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                    alt="avatar" height="36" width="36" />
                                                <span class="avatar-status-busy"></span>
                                            </div>
                                            <h6 class="mb-0">Kristopher Candy</h6>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i data-feather="phone-call"
                                                class="cursor-pointer d-sm-block d-none font-medium-2 me-1"></i>
                                            <i data-feather="video"
                                                class="cursor-pointer d-sm-block d-none font-medium-2 me-1"></i>
                                            <i data-feather="search"
                                                class="cursor-pointer d-sm-block d-none font-medium-2"></i>
                                            <div class="dropdown">
                                                <button
                                                    class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i data-feather="more-vertical" id="chat-header-actions"
                                                        class="font-medium-2"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="chat-header-actions">
                                                    <a class="dropdown-item" href="#">View Contact</a>
                                                    <a class="dropdown-item" href="#">Mute Notifications</a>
                                                    <a class="dropdown-item" href="#">Block Contact</a>
                                                    <a class="dropdown-item" href="#">Clear Chat</a>
                                                    <a class="dropdown-item" href="#">Report</a>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                </div>
                                <!--/ Chat Header -->

                                <!-- User Chat messages -->
                                <div class="user-chats">
                                    <div class="chats">
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>How can we help? We're here for you! 😄</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Hey John, I am looking for the best admin template.</p>
                                                    <p>Could you please help me to find it out? 🤔</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>It should be Bootstrap 4 compatible.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider">
                                            <div class="divider-text">Yesterday</div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Absolutely!</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Looks clean and fresh UI. 😃</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>It's perfect for my next project.</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>How can I purchase it?</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Thanks, from ThemeForest.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>I will purchase it for sure. 👍</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>Thanks.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat">
                                            <div class="chat-avatar">
                                                <span class="avatar box-shadow-1 cursor-pointer">
                                                    <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg"
                                                        alt="avatar" height="36" width="36" />
                                                </span>
                                            </div>
                                            <div class="chat-body">
                                                <div class="chat-content">
                                                    <p>Great, Feel free to get in touch on</p>
                                                </div>
                                                <div class="chat-content">
                                                    <p>https://pixinvent.ticksy.com/</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- User Chat messages -->

                                <!-- Submit Chat form -->
                                <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                                    <div class="input-group input-group-merge me-1 form-send-message">
                                        <span class="speech-to-text input-group-text"><i data-feather="mic"
                                                class="cursor-pointer"></i></span>
                                        <input type="text" class="form-control message"
                                            placeholder="Type your message or use speech to text" />
                                        <span class="input-group-text">
                                            <label for="attach-doc" class="attachment-icon form-label mb-0">
                                                <i data-feather="image" class="cursor-pointer text-secondary"></i>
                                                <input type="file" id="attach-doc" hidden /> </label></span>
                                    </div>
                                    <button type="button" class="btn btn-primary send" onclick="enterChat();">
                                        <i data-feather="send" class="d-lg-none"></i>
                                        <span class="d-none d-lg-block">Send</span>
                                    </button>
                                </form>
                                <!--/ Submit Chat form -->
                            </div>
                            <!--/ Active Chat -->
                        </section>
                        <!--/ Main chat area -->

                        <!-- User Chat profile right area -->
                        <div class="user-profile-sidebar">
                            <header class="user-profile-header">
                                <span class="close-icon">
                                    <i data-feather="x"></i>
                                </span>
                                <!-- User Profile image with name -->
                                <div class="header-profile-sidebar">
                                    <div class="avatar box-shadow-1 avatar-border avatar-xl">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg"
                                            alt="user_avatar" height="70" width="70" />
                                        <span class="avatar-status-busy avatar-status-lg"></span>
                                    </div>
                                    <h4 class="chat-user-name">Kristopher Candy</h4>
                                    <span class="user-post">UI/UX Designer 👩🏻‍💻</span>
                                </div>
                                <!--/ User Profile image with name -->
                            </header>
                            <div class="user-profile-sidebar-area">
                                <!-- About User -->
                                <h6 class="section-label mb-1">About</h6>
                                <p>Toffee caramels jelly-o tart gummi bears cake I love ice cream lollipop.</p>
                                <!-- About User -->
                                <!-- User's personal information -->
                                <div class="personal-info">
                                    <h6 class="section-label mb-1 mt-3">Personal Information</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-1">
                                            <i data-feather="mail" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">kristycandy@email.com</span>
                                        </li>
                                        <li class="mb-1">
                                            <i data-feather="phone-call" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">+1(123) 456 - 7890</span>
                                        </li>
                                        <li>
                                            <i data-feather="clock" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Mon - Fri 10AM - 8PM</span>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ User's personal information -->

                                <!-- User's Links -->
                                <div class="more-options">
                                    <h6 class="section-label mb-1 mt-3">Options</h6>
                                    <ul class="list-unstyled">
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="tag" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Add Tag</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="star" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Important Contact</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="image" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Shared Media</span>
                                        </li>
                                        <li class="cursor-pointer mb-1">
                                            <i data-feather="trash" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Delete Contact</span>
                                        </li>
                                        <li class="cursor-pointer">
                                            <i data-feather="slash" class="font-medium-2 me-50"></i>
                                            <span class="align-middle">Block Contact</span>
                                        </li>
                                    </ul>
                                </div>
                                <!--/ User's Links -->
                            </div>
                        </div>
                        <!--/ User Chat profile right area -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
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
</body>
<!-- END: Body-->

</html>
