<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baghali Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    {{--when want to test ajax paje state--}}
    {{--<div>{{time()}}</div>--}}



</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/admin') }}">Home</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right"  style="float:right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            {{--<li><a href="javascript:ajaxLoad('{{route('admin.users.index')}}')">View 1</a></li>--}}
                                <a href="{{route('admin.users.index')}}">All Users</a>
                            </li>
                            <li>
                                <a href="{{route('admin.users.create')}}">Create User</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.posts.index')}}">All Posts</a>
                            </li>
                            <li>
                                <a href="{{route('admin.posts.create')}}">Create Post</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Products<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.products.index')}}">All Product</a>
                            </li>
                            <li>
                                <a href="{{route('admin.products.create')}}">Create Product</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Categories<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.categories.index')}}">All Categories</a>
                            </li>

                        </ul>
                        <!-- /.nav-second-level -->
                    </li>




                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Brands<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.brands.index')}}">All Brands</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Specification<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('admin.psf.index')}}">All Specifications</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>




                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> Media<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="panels-wells.html">All Media</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="buttons.html">Create Media</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                                                            {{--this m4 comment page--}}
                                                        {{--<li>--}}
                                                            {{--<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>--}}
                                                            {{--<ul class="nav nav-second-level">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="panels-wells.html">Panels and Wells</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="buttons.html">Buttons</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="notifications.html">Notifications</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="typography.html">Typography</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="icons.html"> Icons</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="grid.html">Grid</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- /.nav-second-level -->--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
                                                            {{--<ul class="nav nav-second-level">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">Second Level Item</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">Second Level Item</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="#">Third Level <span class="fa arrow"></span></a>--}}
                                                                    {{--<ul class="nav nav-third-level">--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">Third Level Item</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">Third Level Item</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">Third Level Item</a>--}}
                                                                        {{--</li>--}}
                                                                        {{--<li>--}}
                                                                            {{--<a href="#">Third Level Item</a>--}}
                                                                        {{--</li>--}}
                                                                    {{--</ul>--}}
                                                                    {{--<!-- /.nav-third-level -->--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- /.nav-second-level -->--}}
                                                        {{--</li>--}}
                                                        {{--<li>--}}
                                                            {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                                                            {{--<ul class="nav nav-second-level">--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="blank.html">Blank Page</a>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<a href="login.html">Login Page</a>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- /.nav-second-level -->--}}
                                                        {{--</li>--}}
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <!-- <h1 class="page-header">Dashboard</h1> -->
                    <div id="content">


                    @yield('content')
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>


<div class="container">
    <section>
        <div id="map">
        </div>
    </section>
    <footer class="primary "><div>footer -> {{time()}}</div></footer>
</div>


<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>

{{--Todo remove this and ro gulp--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>

<!-- JavaScripts -->
{{--<script>--}}
    {{--function ajaxLoad(filename, content) {--}}
        {{--content = typeof content !== 'undefined' ? content : 'content';--}}
        {{--$('.loading').show();--}}
        {{--$.ajax({--}}
            {{--type: "GET",--}}
            {{--url: filename,--}}
            {{--contentType: false,--}}
            {{--success: function (data) {--}}
                {{--$("#" + content).html(data);--}}
                {{--$('.loading').hide();--}}
                {{--alert("External content loaded successfully!");--}}
            {{--},--}}
            {{--error: function (xhr, status, error) {--}}
                {{--alert(xhr.responseText);--}}
            {{--}--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}

{{--<script>--}}
    {{--$("#document").pjax('a','#content');--}}
{{--</script>--}}


<script type="text/javascript">
    $(function(){
        // pjax
        $(document).pjax('a', '#content')
    })
    $(document).ready(function(){

        // does current browser support PJAX
        if ($.support.pjax) {
            $.pjax.defaults.timeout = 2000; // time in milliseconds
        }

    });
</script>




</body>

</html>
