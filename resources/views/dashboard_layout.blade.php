
<!--
* Project Name: Admin Dashboard
* Version: 0.01
* By: Nasr Aldin
* E-mail: nasr@nasralin.com
-->
<!DOCTYPE html>
<html lang="ar-sa" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset("dashboardFiles/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("dashboardFiles/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("dashboardFiles/css/bootstrap-theme.min.css")}}">
    <link rel="stylesheet" href="{{asset("dashboardFiles/css/main.min.css")}}">
    <script src="{{asset("dashboardFiles/js/modernizr-2.8.3.js")}}"></script>
    <script src="{{asset("dashboardFiles//js/jquery-3.1.1.min.js")}}"></script>
</head>

<body>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="left">
                <!-- Single button -->
                <div class="btn-group navbar-top-links">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="glyphicon glyphicon-user"></i>
                    اسم المستخدم
                    <span class="glyphicon glyphicon-list"></span>
                </button>
                    <ul class="dropdown-menu">
                        <li>
                            <span class="user-profile">
                            <img src="dashboardFiles/imgs/avatar1.jpg" alt="avatar" class="img-responsive">
                        </span>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">الاعدادات</a></li>
                        <li><a href="#">تغير كلمة المرور</a></li>
                        <li><a href="#">أي شئ اخر</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> تسجيل الخروج</a></li>
                    </ul>
                </div>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
            <div class="navbar-collapse collapse">
                <div class="right">
                    <a href="" class="navbar-brand">محمد الشرباصي</a>
                </div>
                <ul class="nav navbar-nav right">
                    <li><a href="#">الطلاب</a></li>
                    <li><a href="#">الطلاب</a></li>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">120211614</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container wrapper clearfix">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 clearfix">
                <div class="sidebar clearfix">
                    <aside>
                        <div class="sidebar-search">
                            <div class="input-group">
                                <span class="input-group-btn">
                    <button class="btn btn-success" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                                <input type="text" class="form-control" placeholder="البحث...">
                            </div>
                            <!-- /input-group -->
                        </div>
                        <div class="list-group clearfix">
                            <span class="list-group-item active">
                القائمة الرئيسية
            </span>
                            <a href="#" class="list-group-item">
                                <i class="glyphicon glyphicon-pencil"></i> رابط واحد
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="glyphicon glyphicon-envelope"></i> رابط الثنان
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="glyphicon glyphicon-file"></i> عنوان النص
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="glyphicon glyphicon-heart"></i> جملة فرعية
                                <span class="badge">42</span>
                            </a>
                        </div>
                        <div class="list-group clearfix">
                            <span class="list-group-item active">
                القائمة الرئيسية
            </span>
                            <a href="{{route("addCategoryUi")}}" class="list-group-item">اضافة قئة</a>
                            <a href="{{route("getAllCategory")}}" class="list-group-item">عرض الفئات</a>
                            <a href="#" class="list-group-item">عنوان النص</a>
                            <a href="#" class="list-group-item">جملة فرعية</a>
                        </div>
                        <ul class="list-group lg-single">
                            <li class="list-group-item">
                                <a href="#">
                    English (US)
                </a>
                                <span>.</span>
                                <a class="active">
                    العربية
                </a>
                            </li>
                        </ul>
                        <footer>
                            <p>جميع الحقوق محفوظة - 2025 &copy; </p>
                        </footer>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clearfix">
                <ol class="breadcrumb">
                    <li><a href="#">الرئيسية</a></li>
                    <li><a href="#">المكتبة</a></li>
                    <li class="active">البيانات</li> 
                </ol>
                <div class="jumbotron clearfix">
                    @yield("PageContent")
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset("dashboardFiles/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("dashboardFiles/js/app.js")}}"></script>
</body>

</html>
<!--
Copyright 2017 Nasr Aldin. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://nasraldin.com/license
-->