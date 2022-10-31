@extends('layouts.app')
{{-- @section('title','إضافة قسم جديد') --}}
@section('clinic_open','menu-open')
@section('clinic','active')
@section('clinic_create','active')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-8">
                <!-- Horizontal Form -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">إضافة عيادة جديدة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('clinic.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">اسم العيادة </label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label">  الموقع </label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control" name="address">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label"> البريد الالكتروني </label>
                                <div class="col-sm-10">
                                    <input required type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 control-label"> كلمة المرور  </label>
                                <div class="col-sm-10">
                                    <input required type="password" class="form-control" name="password">
                                </div>
                            </div>


                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">اضافة</button>
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


