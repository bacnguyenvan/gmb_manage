@extends('layouts.app') 
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 mt-2">
                    <!-- DIRECT CHAT -->
                    <div class="card direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Google business account</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body mt-2 ml-2">
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="card card-widget widget-user shadow">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header bg-info">
                                            <h3 class="widget-user-username">Alexander Pierce</h3>
                                            <h5 class="widget-user-desc">Founder & CEO</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="description-block text-align">
                                                        <h5 class="description-header">3</h5>
                                                        <span class="description-text">Reviews</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <!-- Widget: user widget style 1 -->
                                    <div class="card card-widget widget-user shadow-lg">
                                        <!-- Add the bg color to the header using any of the bg-* classes -->
                                        <div class="widget-user-header text-white" style="background: url('../dist/img/photo1.png') center center;">
                                            <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                                            <h5 class="widget-user-desc text-right">Web Designer</h5>
                                        </div>
                                        <div class="widget-user-image">
                                            <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-sm-12 border-right">
                                                    <div class="description-block">
                                                        <h5 class="description-header">15</h5>
                                                        <span class="description-text">Reviews</span>
                                                    </div>
                                                    <!-- /.description-block -->
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.widget-user -->
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </div>
                    <!--/.direct-chat -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('script')
@endsection

@section('css')
@endsection
