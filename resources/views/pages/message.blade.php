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
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
    </ol>
@stop

@section('content_1')
 <?= $message?>
@stop