@extends('layout')

@section('title')
    Advertisers
@stop

@section('page-title')
    Advertisers
@stop

@section('sub-title')
    Select your action
@stop

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Advertisers</li>
    </ol>
@stop

@section('content_1')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>10</h3>
                    <p>All Advertisers</p>
                </div>
                <div class="icon">
                    <i class="ion ion-monitor"></i>
                </div>
                <a href="view_advertisers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>+</h3>
                    <p>Add New Advertiser</p>
                </div>
                <div class="icon">
                    <i class="ion ion-log-in"></i>
                </div>
                <a href="add_advertiser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>E</h3>
                    <p>Edit Advertiser</p>
                </div>
                <div class="icon">
                    <i class="ion ion-videocamera"></i>
                </div>
                <a href="edit_advertiser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>x</h3>
                    <p>Remove Advertiser</p>
                </div>
                <div class="icon">
                    <i class="ion-close-round"></i>
                </div>
                <a href="remove_advertiser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
@stop