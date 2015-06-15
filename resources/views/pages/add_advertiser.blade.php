@extends('layout')

@section('title')
    Add New Advertiser
@stop

@section('page-title')
    Add New Advertiser
@stop

@section('sub-title')
    Register New Advertiser into BusPromo
@stop

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="advertisers">Advertiser</a></li>
        <li class="active">Add New Advertisers</li>
    </ol>
@stop

@section('content_1')
          <!-- add form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Fill this form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="advertiser_name">ID</label>
                                <input type="number" class="form-control" id="advertiser_id" name="advertiser_id" placeholder="Advertiser ID">
                            </div>
                            <div class="form-group">
                                <label for="advertiser_name">Name</label>
                                <input type="text" class="form-control" id="advertiser_name" name="advertiser_name" placeholder="Advertiser Name">
                            </div>
                            <div class="form-group">
                                <label for="advertiser_address">Address</label>
                                <input type="text" class="form-control" id="advertiser_address" name="advertiser_address" placeholder="Advertiser Address">
                            </div>
                            <div class="form-group">
                                <label for="advertiser_tel">Contact Number</label>
                                <input type="text" class="form-control" id="advertiser_tel" name="advertiser_tel" placeholder="Advertiser Contact Number">
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
@stop