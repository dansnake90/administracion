@extends('adminlte::page')

@section('title', 'Listado de posts')

@section('content_header')

    <h1>Listado de posts</h1>
@stop



@section('content')

@if (session('info'))

<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
    
@endif

    @livewire('admin.fichas-index')

@stop

@section('css')

<link rel="stylesheet" href="/css/admin_custom.css">

@stop


@section('js')

<script> console.log('Hi'); </script>

@stop 


