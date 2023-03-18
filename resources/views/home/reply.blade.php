@extends('layouts.app')
@section('title','Reply template')
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
                <div class="col-md-12 mt-2">
                    <!-- TO DO List -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="ion ion-clipboard mr-1"></i>
                                Create template reply
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @foreach($replies as $i => $starData)
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success @if($i == 1 || count($starData) > 0) @else collapsed-card @endif">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        @for($j = 0; $j < $i; $j++)
                                                        <span class="fa fa-star checked"></span>
                                                        @endfor
                                                        @for($j = 0; $j < 5 - $i; $j++)
                                                        <span class="fa fa-star"></span>
                                                        @endfor
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas @if($i == 1 || count($starData) > 0) fa-minus @else fa-plus @endif"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        @csrf
                                                        <div class="row mb-2 mt-2">
                                                            <div class="col-lg-12 reply-form">
                                                                <input type="hidden" name='star_id' value="{{$i}}"/>
                                                                @if(count($starData) == 0)
                                                                <div id="inputFormRow" class="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="content[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger removeRow">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @else
                                                                    @foreach($starData as $val)
                                                                    <div id="inputFormRow" class="inputFormRow">
                                                                        <div class="input-group mb-3">
                                                                            <input type="text" name="content[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off" value="{{$val->content}}">
                                                                            <div class="input-group-append">
                                                                                <button id="removeRow" type="button" class="btn btn-danger removeRow">Remove</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                @endif
                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info addRow">Add template</button>
                                                                <button type="submit" class="btn btn-info">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        <!-- /.row (main row) -->
                    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

@section('script')
<script type="text/javascript">
    // add row
    $(".addRow").click(function() {
        var length = $(this).parents('.reply-form').find('.inputFormRow').length;
        var html = '';
        html += '<div id="inputFormRow" class="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="content[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger removeRow">Remove</button>';
        html += '</div>';
        html += '</div>';
        if(length < 5) {
            $(this).siblings('#newRow').append(html);
        } else {
            alert('Sorry! you can not add. Maximum only 5 items')
        }
        
    });

    // remove row
    $(document).on('click', '.removeRow', function() {
        var length = $(this).closest('.inputFormRow').siblings().length;
        if(length > 0) {
            $(this).closest('.inputFormRow').remove();
        }else {
            alert('Sorry! you can not remove. minimum is 1 item')
        }
    });

    $('.alert-msg').fadeOut(6000);

</script>
@endsection

@section('css')
<style>
    #start-rating .checked {
        color: orange;
    }
</style>
@endsection