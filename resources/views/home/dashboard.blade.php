@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
    @if(session('success-msg'))
    <div class="alert alert-success alert-dismissible mt-3 ml-3 alert-msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{session('success-msg')}}
    </div>
    @elseif(session('error-msg'))
    <div class="alert alert-danger alert-dismissible mt-3 ml-3 alert-msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        {{session('error-msg')}}
    </div>
    @endif
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
                            <h3 class="card-title">
                                @if($account)Locations List managed by <b>{{$account->account_name}}</b>
                                @else
                                Google business account
                                @endif
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body mt-2 ml-2">
                            <div class="row">
                                @if($account)
                                    @if(!empty($locations))
                                        @foreach($locations as $location)
                                        <a class="col-md-4" href="{{route('review', $location->name)}}?aid={{$account->account_id}}&&aname={{$location->title}}">
                                            <!-- Widget: user widget style 1 -->
                                            <div class="card card-widget widget-user shadow-lg">
                                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                                <div class="widget-user-header bg-info text-left location-block">
                                                    <h3 class="widget-user-username">{{ $location->title }}</h3>
                                                    <?php $description = $location->profile->description ?? '' ?>
                                                    <p class="widget-user-desc">{!! \Illuminate\Support\Str::limit($description, $limit = 70, $end = '...')!!} </p>
                                                    <p class="phone-number">{{$location->phoneNumbers->primaryPhone ?? ''}}</p>
                                                </div>
                                                <div class="widget-user-image">
                                                    <img class="img-circle" src="{{asset('dist/img/gmb.jpg')}}" alt="User Avatar">
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="description-block">
                                                                <h5 class="description-header">{{$location -> totalReviews}}</h5>
                                                                <span class="description-text">Reviews</span>
                                                            </div>
                                                            <!-- /.description-block -->
                                                        </div>
                                                    </div>
                                                    <!-- /.row -->
                                                </div>
                                            </div>
                                            <!-- /.widget-user -->
</a>
                                        @endforeach
                                    @else
                                    <div class="col-md-12 mt-2 mb-4">
                                        <div class="alert alert-danger alert-dismissible">
                                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                            The account has no management location.
                                        </div>
                                    </div>
                                    @endif
                                @else
                                <div class="col-md-12 mt-2 mb-4">
                                    <div class="col-md-2 m-auto">
                                        <a href="{{route('gmb-connect')}}" class="btn btn-block btn-success btn-lg">Connect account</a>
                                    </div>
                                </div>
                                @endif
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
<script>
    $(document).ready(function() {
        $('.alert-msg').fadeOut(6000);
    });
</script>
@endsection

@section('css')
<style>
    .location-block {
        position: relative;
    }
    .location-block .phone-number{
        position: absolute;
        left: 15px;
        bottom: 0;
    }
</style>
@endsection