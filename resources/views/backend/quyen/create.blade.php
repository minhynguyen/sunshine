@extends('backend.layouts.app')   

@section('title')
  Thêm Quyền
@endsection


@section('page-header')
      <h1>
        Thêm Quyền
        <small>Thêm Quyền</small>
      </h1>
@endsection

@section('content')
<form name="frmQuyen" method="POST" action="{{route('quyen.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Thêm Quyền</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN Quyền</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="q_ten" placeholder="Nhập Tên Quyền">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Diễn Giải Quyền</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="q_diengiai" placeholder="Nhập Diễn Giải">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">TRẠNG THÁI</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_trangthai" placeholder="Nhập Trạng Thái">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tao moi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_taomoi" placeholder="Nhập Trạng Thái">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">cap nhat</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="q_capnhat" placeholder="Nhập Trạng Thái">
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
          <button type="submit" class="btn btn-primary">THÊM MỚI</button>
        </div>
      </form>

  </div>
  </form>

<!-- noi dung can thay doi o giua -->



@endsection



