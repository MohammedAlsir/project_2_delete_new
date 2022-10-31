@extends('layouts.app')
{{-- @section('title','كل الاقســـــام') --}}
@section('reservation_open','menu-open')
@section('reservation','active')
@section('reservation_index','active')



@section('content')
<!-- Main content -->
    <section class="content">
      <div class="">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h3 class="card-title"> الحجوزات الجديدة </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>اسم المريض </th>
                  <th> الحالة </th>
                  <th> الادوية </th>
                  <th> الملاحظات</th>
                  <th>العمليات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($reservation as $item)
                        <tr>
                            <td>{{$index++}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->sick->status}}</td>
                            <td>{{$item->sick->drug}}</td>
                            <td>{{$item->sick->note}}</td>
                            {{-- <td>{{$item->price}}</td> --}}

                            <td>
                                <div>
                                    {{-- <form  action="{{route('reservation.destroy',$item->id)}}" method="POST">
                                        {{ csrf_field()}}
                                        {{ method_field('delete') }} --}}
                                        <a href="{{route('reservation.start',$item->id)}}" class="btn {{$item->status ==''?'btn-primary':'btn-danger'}}">

                                            {{$item->status ==''?'بدء  المقابلة':'مراجعة المقابلة'}}
                                        </a>
                                        {{-- <button type="submit" class="btn btn-danger"></i>&nbsp; حذف</button>
                                    </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach



                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
