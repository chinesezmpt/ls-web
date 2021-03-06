

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Proton - Admin Template</title>      
        
        <!-- Import google fonts - Heading first/ text second -->
        <link rel='stylesheet' type='text/css' href='http://fonts.useso.com/css?family=Open+Sans:400,700|Droid+Sans:400,700' />
        <!--[if lt IE 9]>
<link href="http://fonts.useso.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
<link href="http://fonts.useso.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
<![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ URL::asset('ico/favicon.ico')}}" type="image/x-icon" /> 

        <!-- Css files -->
        <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">     
        <link href="{{ URL::asset('css/jquery.mmenu.css')}}" rel="stylesheet">      
        <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('plugins/jquery-ui/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">                
        <link href="{{ URL::asset('css/style.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('css/add-ons.min.css')}}" rel="stylesheet">
        <style>
            footer {
                display: none;
            }
        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
</head>

<body>
    <div class="container-fluid content">
        <div class="row">
            <div id="content" class="col-sm-12 full">
                <div class="row">
                    <div class="login-box">
                    
                        <div class="header">
                        两刷子后台管理登录
                        </div>
                       <!--  <div class="text-center">
                            <li><a href="" class="fa fa-facebook facebook-bg"></a></li>
                            <li><a href="" class="fa fa-twitter twitter-bg"></a></li>
                            <li><a href="" class="fa fa-linkedin linkedin-bg"></a></li>
                        </div>              
                    
                        <div class="text-with-hr">
                            <span>or</span>
                        </div> -->
                    
                        <form class="form-horizontal login" action="index.php/bannerlist" method="post">
                        
                            <fieldset class="col-sm-12">
                                <div class="form-group">
                                    <div class="controls row">
                                        <div class="input-group col-sm-12"> 
                                            <input type="text" class="form-control" id="username" placeholder="登录名或者邮箱"/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>  
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="controls row">
                                        <div class="input-group col-sm-12"> 
                                            <input type="password" class="form-control" id="password" placeholder="密码"/>
                                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        </div>  
                                    </div>
                                </div>

                                <!-- <div class="confirm">
                                    <input type="checkbox" name="remember"/>
                                    <label for="remember">Remember me</label>00
                                </div>   -->

                                <div class="row">
                            
                                    <button type="submit" class="btn btn-lg btn-primary col-xs-12">登录</button>
                            
                                </div>
                                
                            </fieldset> 

                        </form>
                    
                      <!--   <a class="pull-left" href="page-login.html#">Forgot Password?</a>
                        <a class="pull-right" href="page-register.html">Sign Up!</a> -->
                    
                        <div class="clearfix"></div>                
                        
                    </div>
                </div><!--/row-->
        
            </div>  
            
        </div><!--/row-->       
    
        <!-- 
        <div id="usage-blank">
            <ul>
                <li>
                    <div class="title">Memory</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                        </div>
                    </div>          
                    <div class="desc">2GB of 8GB</div>
                </li>
                <li>
                    <div class="title">HDD</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                    </div>          
                    <div class="desc">750GB of 1TB</div>
                </li>
                <li>
                    <div class="title">SSD</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
                        </div>
                    </div>          
                    <div class="desc">300GB of 1TB</div>
                </li>
                <li>
                    <div class="title">Bandwidth</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                        </div>
                    </div>          
                    <div class="desc">50TB of 50TB</div>
                </li>
            </ul>   
        </div>        -->   
        
    </div><!--/container-->
        
        
    <!-- start: JavaScript-->
    <!--[if !IE]>-->

            <script src="{{ URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>

    <!--<![endif]-->

    <!--[if IE]>
    
        <script src="assets/js/jquery-1.11.1.min.js"></script>
    
    <![endif]-->

    <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
        </script>

    <!--<![endif]-->

    <!--[if IE]>
    
        <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
        </script>
        
    <![endif]-->
    <script src="{{ URL::asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>  
    
    
    <!-- page scripts -->
    
    <!-- theme scripts -->
    <script src="{{ URL::asset('js/SmoothScroll.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.mmenu.min.js')}}"></script>
    <script src="{{ URL::asset('js/core.min.js')}}"></script>
    
    <!-- inline scripts related to this page -->
    <script src="{{ URL::asset('js/pages/login.js')}}"></script>
    
    <!-- end: JavaScript-->
    
</body>
</html>