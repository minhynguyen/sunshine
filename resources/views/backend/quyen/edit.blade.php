@extends('backend.layouts.app')   

@section('title')
  Chỉnh Sửa Quyền
@endsection


@section('page-header')
      <h1>
        Chỉnh Sửa Quyền
        <small>Chỉnh Sửa Quyền</small>
      </h1>
@endsection

@section('content')
<form name="frmQuyen" method="POST" action="{{route('quyen.update', ['quyen'=> $quyen->q_ma]) }}"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">SỬA Quyền</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN Loại</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="q_ten" placeholder="Nhập Tên Chủ Đề" value="{{$quyen->q_ten}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Diễn Giải</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="q_diengiai" placeholder="Nhập Tên Chủ Đề" value="{{$quyen->q_diengiai}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">TRẠNG THÁI</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_trangthai" placeholder="Nhập Trạng Thái" value="{{$quyen->q_trangthai}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tao moi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_taomoi" placeholder="Nhập Trạng Thái" value="{{$quyen->q_taomoi}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">cap nhat</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_capnhat" placeholder="Nhập Trạng Thái" value="{{$quyen->q_capnhat}}">
            <!-- value hiện lại giá trị cũ -->
          </div>
          

          <!-- <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Example block-level help text here.</p>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div> -->
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">SỬA</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



