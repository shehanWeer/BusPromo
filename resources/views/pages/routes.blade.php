@extends('layout')

@section('title')
    Routes
@stop

@section('page-title')
    Routes
@stop

@section('sub-title')
    Select your action
@stop

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Routes</li>
    </ol>
@stop

@section('content_1')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>93</h3>
                    <p>View All Routes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-network"></i>
                </div>
                <a href="view_routes" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>+</h3>
                    <p>Add New Route</p>
                </div>
                <div class="icon">
                    <i class="ion ion-fork-repo"></i>
                </div>
                <a href="add_route" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>E</h3>
                    <p>Edit Route Details</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pull-request"></i>
                </div>
                <a href="edit_route" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>X</h3>
                    <p>Remove Route</p>
                </div>
                <div class="icon">
                    <i class="ion ion-merge"></i>
                </div>
                <a href="remove_route" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
@stop

@section('content_right_column')
    <!-- Map box -->
    <div class="box box-solid bg-light-blue-gradient">
        <div class="box-header">
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
                <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
            </div><!-- /. tools -->

            <i class="fa fa-map-marker"></i>
            <h3 class="box-title">
                Routes
            </h3>
        </div>
        <div class="box-body">
            <div id="world-map" style="height: 250px; width: 100%;"></div>
        </div><!-- /.box-body-->
        <div class="box-footer no-border">
            <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-1"></div>
                    <div class="knob-label">Visitors</div>
                </div><!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">Online</div>
                </div><!-- ./col -->
                <div class="col-xs-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">Exists</div>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </div>
    </div>
    <!-- /.box -->
@stop