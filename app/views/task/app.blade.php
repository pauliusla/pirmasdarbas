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
</head>
<body>

<div id="header">
    <h1>ToDo Application </h1>
</div>

<div id="nav">
</div>

<div id="section">
    @if (Session::has('message'))
        <div class="flash alert-info">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif
    @yield('content')
</div>

<div id="footer">
</div>

</body>
</html>