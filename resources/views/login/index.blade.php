<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="Title"/>
        <meta name="keywords" content="Title"/>
        <title>Thai Life Prompt</title>
        <link rel="SHORTCUT ICON" href="assets/img/favicon.ico" />
        
        <!-- plugin css -->
        <link rel="stylesheet" type="text/css"  href="assets/js/jquery.fancybox/jquery.fancybox.css" />
        <link rel="stylesheet" type="text/css"  href="assets/js/pickadate/themes/classic.css" />
        <link rel="stylesheet" type="text/css"  href="assets/js/pickadate/themes/classic.date.css" />
        
        <!-- layout css -->
        <link rel="stylesheet" type="text/css"  href="assets/css/fonts/icon/tl-prompt/styles.css" />
        <link rel="stylesheet" type="text/css"  href="assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css"  href="assets/css/share.css" />
        <link rel="stylesheet" type="text/css"  href="assets/css/responsive.css" />
    </head>
    
    <body>
        <div id="login_page" class="mainContainer">
            <div class="container">
                <!-- start loginHeader -->
                <div class="loginHeader">
                    <h1 class="logoThailife"><a id="login_pic_logoTL" href="#">ไทยประกันชีวิต</a></h1>
                    <div class="boxVersion">
                        <div class="txt1">ทีแอล <span>พร้อม</span></div>
                        <div id="login_lb_tlprompt" class="txt2">TL PROMPT</div>
                        <div id="login_lb_version" class="txt3">V.2.2.5</div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- end loginHeader -->
                <div class="ct"><div class="cc">
                    <!-- start boxFormLogin -->
                    <div class="boxFormLogin">
                        <h1 id="login_lb_memberLogin">Member <strong>Login</strong></h1>
                        <div class="formLogin">
                            {!! Form::open(['route' => 'login.store','id'=>'formLogin', 'files'=>true]) !!}
                            
                            @if ($errors->has())
                            <div class="alert alert-danger" style="margin:20px; color:red;"> @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach </div>
                            @endif
                            <ul class="bg-style">
                                <li><input name="username" type="text" class="intxt-style" placeholder="รหัสตัวแทน หรือ รหัสบัตรประชาชน" value="{{old('username')}}"></li>
                                <li><input name="password" type="password" class="intxt-style" placeholder="รหัสผ่านนักขายดิจิทัล"></li>
                            </ul>
                            
                            <ul>
                                <li>
                                    <div class="pull-left">
                                        <input id="login_ck_rememberPass" name="login_ck_rememberPass" class="check-style" type="checkbox"> <label for="login_ck_rememberPass">จดจำรหัสผ่าน</label>
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                                <li><button id="login_bt_login" class="btn-style mgt22" type="submit"><span>เข้าสู่ระบบ</span></button></li>
                            </ul>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- end boxFormLogin -->
                </div></div>
                
            </div>
        </div>
        
        <!-- start javascript inc -->
        <script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.mousewheel.js"></script>
        <script type="text/javascript" src="assets/js/TweenMax.mo.min.js"></script>
        
        <script type="text/javascript" src="assets/js/jquery.number/jquery.number.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.fancybox/jquery.fancybox.pack.js"></script>
        <script type="text/javascript" src="assets/js/pickadate/picker.js"></script>
        <script type="text/javascript" src="assets/js/pickadate/picker.date.js"></script>
        
        <script type="text/javascript" src="assets/js/function.js"></script>
        <!-- end javascript inc -->
        
        <!-- start javascript this page -->
        
        <!-- end javascript this page -->
    </body>
</html>