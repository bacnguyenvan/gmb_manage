@extends('layouts.app')
@section('title','Reply template')
@section('content')
<div class="content-wrapper">

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
                            <!-- 1 sao -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.row -->
                            <!-- 2 sao -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.row -->
                            <!--  -->
                            <!-- 3 sao -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.row -->
                            <!-- 4 sao -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.row -->
                            <!-- 5 sao -->
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- DIRECT CHAT SUCCESS -->
                                    <div class="card card-success card-outline direct-chat direct-chat-success collapsed-card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <ul class="todo-list" data-widget="todo-list">
                                                    <li id="start-rating">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </li>
                                                </ul>
                                            </h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="row justify-content-end">
                                                <div class="col-md-8">
                                                    <form method="post" action="">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div id="inputFormRow">
                                                                    <div class="input-group mb-3">
                                                                        <input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">
                                                                        <div class="input-group-append">
                                                                            <button id="removeRow" type="button" class="btn btn-danger">Remove</button>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div id="newRow"></div>
                                                                <button id="addRow" type="button" class="btn btn-info">Add template</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.row -->
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
    $("#addRow").click(function() {
        var html = '';
        html += '<div id="inputFormRow">';
        html += '<div class="input-group mb-3">';
        html += '<input type="text" name="title[]" class="form-control m-input" placeholder="Enter reply content" autocomplete="off">';
        html += '<div class="input-group-append">';
        html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    });

    // remove row
    $(document).on('click', '#removeRow', function() {
        $(this).closest('#inputFormRow').remove();
    });
</script>
@endsection

@section('css')
<style>
    #start-rating .checked {
        color: orange;
    }
</style>
@endsection