<!DOCTYPE html>


<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="@yield('link')">
                    <h2>Incubadora</h2>
                </a>
            </li>

            </li>
            <br/><br/><br/>
            @yield('menu')
        </ul>

    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <hr class="layout">
                    @yield('content')
                    <hr class="layout">
                    <A HREF="http://www.unitecnologica.edu.co/"><img src="/imgs/logoUTB.png" style="float:right;" alt="logo UTB"></A>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->


</body>

</html>