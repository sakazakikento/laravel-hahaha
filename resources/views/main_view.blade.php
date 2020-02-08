<!DOCTYPE html>
<head>
    <title>Laravel | @yield('title', 'Home')</title>


    <style type="text/css">
        <!--
        p {color:blue; line-height:1.5;}

        #container{
          background-color: #FFFF00;
        }
        -->
    </style>
</head>
<body>

    <div id='container'>
    うあわあああああ
        @yield('content')
    </div>

    @section('footer')
        <script src="app"></script>
    @show
</body>
</html>
