@extends('layouts.app')
{{-- @section('title','كل الاقســـــام') --}}
@section('reservation_open','menu-open')
@section('reservation','active')
@section('reservation_index','active')



@section('content')
<!-- Main content -->
   <section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">   الكشف</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('reservation.store',$sick->id)}}" class="form-horizontal">
                    {{-- <form method="POST" class="form-horizontal"> --}}
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الحالة</label>
                                <div class="col-sm-10">
                                    <input  type="text" value="{{$sick->status}}" class="form-control" name="status">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الادوية</label>
                                <div class="col-sm-10">
                                    <input  type="text"  value="{{$sick->drug}}" class="form-control" name="drug">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">الملاحظات</label>
                                <div class="col-sm-10">
                                    <textarea name="note" class="form-control"  cols="30" rows="10">{{$sick->note}}</textarea>
                                </div>
                            </div>




                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">تعديل</button>
                            </div>
                            <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection
