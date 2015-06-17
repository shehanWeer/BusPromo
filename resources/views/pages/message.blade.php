@extends('layout')

@section('title')
    Advertisers
@stop

@section('page-title')
    Message
@stop

@section('sub-title')
    Message received from system
@stop

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a onclick="goBack()" href=""><i></i>Back</a></li>
        <script>
            function goBack() {
                window.history.back();
                window.history.back();
            }
        </script>
    </ol>
@stop

@section('content_1')
 <?= $message?>
@stop