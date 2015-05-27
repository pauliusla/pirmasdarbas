<!DOCTYPE html>
<html>
<head>
    <style>
        #header {
            background-color:black;
            color:white;
            text-align:center;
            padding:5px;
        }
        #nav {
            line-height:30px;
            background-color:#eeeeee;
            height:300px;
            width:100px;
            float:left;
            padding:5px;
        }
        #section {
            width:350px;
            float:left;
            padding:10px;
        }
        #footer {
            background-color:black;
            color:white;
            clear:both;
            text-align:center;
            padding:5px;
        }
    </style>
    {{ HTML::style(asset('/css/bootstrap.css')) }}
    {{ HTML::style(asset('css/bootstrap.css')) }}

    {{ HTML::script(asset('js/bootstrap.js')) }}
</head>
<body>

<div id="header">
    <h1>City Gallery</h1>
</div>

<div id="nav">
    London<br>
    Paris<br>
    Tokyo<br>
</div>

<div id="section">
    @yield('content')
</div>

<div id="footer">
</div>

</body>
</html>