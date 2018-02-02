@extends('backend.layouts.app')   

@section('title')
  Danh Sách Các Quyền
@endsection


@section('page-header')
      <h1>
        Danh Sách Các Quyền
        <small>Danh Sách Các Quyền</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<a href="{{ route('quyen.create') }}">Thêm Mới Quyền</a>
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Các Quyền</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Ma</th>
                  <th>Ten</th>
                  <th>Dien Giai</th>
                  <th>Tao Moi</th>
                  <th>Cap Nhat</th>
                  <th>Trang Thai</th>
                  <th>Action</th>
                </tr>
                @foreach ($dsQuyen as $q)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$q->q_ma}}</td>
                    <td>{{$q->q_ten}}</td>
                    <td>{{$q->q_diengiai}}</td>
                    <td>{{$q->q_taomoi}}</td>
                    <td>{{$q->q_capnhat}}</td>
                    <td>{{$q->q_trangthai}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('quyen.edit', ['quyen' => $q->q_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      <form method="POST" action="{{route('quyen.destroy', ['quyen' => $q->q_ma])}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                      </form>
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



