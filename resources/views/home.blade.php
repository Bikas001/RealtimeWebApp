<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
<div>
    <div id="app">
        <app-home></app-home>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
