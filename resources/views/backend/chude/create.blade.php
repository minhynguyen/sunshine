@extends('backend.layouts.app')   

@section('title')
  THEM MOI CHU DE
@endsection
@section('css')
  <link rel="stylesheet" href="{{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

@endsection

@section('page-header')
      <h1>
        THÊM MỚI CHỦ ĐỀ
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
      </h1>
@endsection

@section('content')
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      <!-- hàm validate trong lar hỗ trợ biến errors -->
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
<form name="frmChude" method="POST" action="{{route('chude.store')}}"> <!-- action tu controller -->
  {{ csrf_field() }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">THÊM MỚI CHỦ ĐỀ</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN CHỦ ĐỀ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="cd_ten" placeholder="Nhập Tên Chủ Đề">
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">TRẠNG THÁI</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cd_trangthai" placeholder="Nhập Trạng Thái">
            <select name="cd_trangthai", id="cd_trangthai">
              <option value="1">Khóa</option>
              <option value="2">Khả dụng</option>
            </select>
          </div> -->
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="cd_trangthai", id="cd_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
          </div>
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">Tao moi</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cd_taomoi" placeholder="Nhập Trạng Thái">
            
          </div> -->
          <!-- <div class="form-group">
            <label for="exampleInputPassword1">cap nhat</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="cd_capnhat" placeholder="Nhập Trạng Thái">
          </div> -->
          <div class="form-group">
                <label>Tạo Mới:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="cd_taomoi" name="cd_taomoi">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Cập Nhật:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="cd_capnhat" name="cd_capnhat">
                </div>
                <!-- /.input group -->
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
@section('script')
<script src=" {{ asset ('theme/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script>
  $(function(){
    // chấm là class # là id
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
  });
</script>
@endsection



