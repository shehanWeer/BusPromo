@extends('layout')

@section('title')
    View All Advertisers
@stop

@section('page-title')
    View All Advertisers
@stop

@section('sub-title')
    Advertisers in BusPromo
@stop

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="advertisers">Advertiser</a></li>
        <li class="active">View Advertisers</li>
    </ol>
@stop

@section('content_main_column')


        <?php
        foreach ($advertisers as $advertiser) {
            echo "<div class='callout callout-info'><b>".$advertiser->name."</b></div>";
        }
        ?>



@stop