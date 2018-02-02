@extends('backend.layouts.app')   

@section('title')
  Sửa NV
@endsection


@section('page-header')
      <h1>
        Sửa NV
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
<form name="frmNhanVien" method="POST" action="{{route('nhanvien.update', ['nhanvien'=> $nhanvien->nv_ma]) }}" enctype="multipart/form-data"> <!-- action tu controller -->
  {{ csrf_field() }}
  {{ method_field('PATCH') }}
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Sửa NV</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form">
        <div class="box-body">
          <div class="form-group">
                <label>Quyền</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="q_ma", id="q_ma">
                  @foreach($dsQuyen as $quyen)
              <option value="{{$quyen->q_ma}}" <?php echo ($quyen->q_ma == $nhanvien->q_ma) ? 'selected' : ''  ?>>{{$quyen->q_ten}}</option>
              @endforeach
                </select>
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">TÊN Nhân Viên</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nv_hoten" placeholder="Nhập Tên NV" value="{{$nhanvien->nv_hoten}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Tài Khoản</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nv_taikhoan" placeholder="Nhập Tên TK" value="{{$nhanvien->nv_taikhoan}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Mật Khẩu</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nv_matkhau" placeholder="Nhập MK" value="{{$nhanvien->nv_matkhau}}">
          </div>
          <div class="form-group">
                <label>Giới Tính</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="nv_gioitinh", id="nv_gioitinh">
                  <!-- <select > -->
                    <option value="0">Nam</option>
                    <option value="1">Nữ</option>
                  <!-- </select> -->
                </select>
          </div>
          
          <div class="form-group">

            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="nv_email" placeholder="Nhập email" value="{{$nhanvien->nv_email}}">
          </div>
          <div class="form-group">
                <label>Ngày Sinh:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="nv_ngaysinh" name="nv_ngaysinh" value="{{$nhanvien->nv_ngaysinh}}">
                </div>
                <!-- /.input group -->
              </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Địa Chỉ</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nv_diachi" placeholder="Nhập địa chỉ" value="{{$nhanvien->nv_diachi}}">
          </div>
          <div class="form-group">

            <label for="exampleInputEmail1">Sđt</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="nv_dienthoai" placeholder="Nhập Sđt" value="{{$nhanvien->nv_dienthoai}}">
          </div>
          <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" name="nv_trangthai", id="nv_trangthai">
                  <!-- <select > -->
                    <option value="1">Khóa</option>
                    <option value="2">Khả dụng</option>
                  <!-- </select> -->
                </select>
          </div>
          <div class="form-group">
                <label>Tạo Mới:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="nv_taomoi" name="nv_taomoi" value="{{$nhanvien->nv_taomoi}}">
                </div>
                <!-- /.input group -->
              </div>
              <div class="form-group">
                <label>Cập Nhật:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right datepicker" id="nv_capnhat" name="nv_capnhat" value="{{$nhanvien->nv_capnhat}}">
                </div>
                <!-- /.input group -->
              </div>
           
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Sửa</button>
        </div>
      </form>

  </div>
  </form>
  

<!-- noi dung can thay doi o giua -->



@endsection



