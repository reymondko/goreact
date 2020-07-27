<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed May 20 2020 16:50:31 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5ec29d102100e50acf8345d8" data-wf-site="5ec29d102100e54eaf8345d7">
    <head>
    <meta content="@yield('og')" property="og:title">
    <meta content="@yield('twitter')" property="twitter:title">  
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    
    <script src="https://use.typekit.net/cmh4dsx.js" type="text/javascript"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="/images/webclip.png" rel="apple-touch-icon">
    
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/css/custom.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
     
    
    @yield('css')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="background-color: #f28438 !important;">
            <a class="navbar-brand" href="/">GoReact</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                  <!--  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>!-->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!--<a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>!-->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
            <div id="layoutSidenav">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #6748af;">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <a class="nav-link" href="/dashboard"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    File Manager
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            
                        </div>
                    </nav>
                </div>
                <div id="layoutSidenav_content">
            @yield('content')
                    
        </div>
        </div>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/js/scripts.js"></script>
            
        <link rel="stylesheet" href="{{ asset('/css/loader.css') }}">
        

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- #region datatables files -->
    
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css " />
        
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
        <script src="//cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
        <script src="//cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js "></script>
    
        <!-- #endregion -->

        
        <script src="/js/webflow.js" type="text/javascript"></script>
        <script src="/js/custom.js" type="text/javascript"></script>
        
        <!-- include timepickers !-->
       
        
        <script src='/js/spectrum.js'></script>
        <link rel='stylesheet' href='/css/spectrum.css' />
        <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
        
       
        @yield('js')
    </body>
</html>