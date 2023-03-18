@extends('layouts.app')
@section('title','Review')
@section('content')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List reviews of location: <b>{{$locationName}}</b></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th style="width: 50%">Content</th>
                                        <th>Rating</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reviews as $index => $review)
                                    <tr>
                                        <td>{{$index + 1}}.</td>
                                        <td>{{ $review->reviewer->displayName ?? '' }}</td>
                                        <td>{{ $review->comment ?? '' }}</td>
                                        <td>
                                        <ul class="todo-list" data-widget="todo-list">
                                            <?php 
                                                $ratingData = [
                                                    'ONE' => 1,
                                                    'TWO' => 2,
                                                    'THREE' => 3,
                                                    'FOUR' => 4,
                                                    'FIVE' => 5
                                                ];
                                                $ratingCount = $ratingData[$review->starRating] ?? 1;
                                            ?>
                                            <li id="start-rating">
                                                @for($i = 0 ; $i < $ratingCount ; $i ++)
                                                <span class="fa fa-star checked"></span>
                                                @endfor
                                            </li>
                                        </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <!-- <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
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
<style>
    #start-rating .checked {
        color: orange;
    }
    .todo-list{
        text-align: center;
    }
</style>
@endsection