{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <iframe src="avance.pdf" frameborder="0"></iframe>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <h1>{{$inquiry->url}}</h1> --}}
    {{-- {{URL('public/storage/1/1.pdf')}} --}}
    {{-- <iframe src="{{URL($inquiry->url)}}" frameborder="0" style="width: 100%; height: 100vh;  "></iframe> --}}
    <iframe src="{{asset($inquiry->path)}}" frameborder="0" style="width: 100%; height: 100vh;  "></iframe>

    {{-- el de abajo es linux --}}
    {{-- <iframe src="{{URL('/public/'.$inquiry->url)}}" frameborder="0" style="width: 100%; height: 100vh;  "></iframe> --}}
    
    {{-- <iframe src="/storage/1/1.pdf" frameborder="0" style="width: 98%; height: 90vh;  "></iframe> --}}
    {{-- <img src="/storage/1/tigre.jpg" alt="imagen de un tigre" title="foto de tigre" width="500px"> --}}
</body>
</html>