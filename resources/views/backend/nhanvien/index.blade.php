@extends('backend.layouts.app')   

@section('title')
  Danh Sách Nhân Viên
@endsection


@section('page-header')
      <h1>
        Danh Sách Nhân Viên
        <small>Danh Sách Nhân Viên</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')

<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Nhân Viên</h3>

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
              <table class="table table-hover text-left" >
                <tr>
                  <th>Mã</th>
                  <th>Tên</th>
                  <th>Tài Khoản</th>
                  <!-- <th>Mật Khẩu</th> -->
                  <th>Giới Tính</th>
                  <th>Ngày Sinh</th>
                  <th>Email</th>
                  <th>Địa Chỉ</th>
                  <th>Điện Thoại</th>
                  <!-- <th>Tạo Mới</th>
                  <th>Cập Nhật</th> -->
                  <th>Trạng Thái</th>
                  <th>Quyền</th>
                  <th colspan="2" style="text-align: center;"><button type="button" class="btn btn-info"><a href=" {{ route('nhanvien.create') }}" > <i class="fa fa-plus"></i> Thêm Nhân Viên </a></button></th>
                </tr>
                @foreach ($dsNhanVien as $nv)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$nv->nv_ma}}</td>
                    <td>{{$nv->nv_hoten}}</td>
                    <td>{{$nv->nv_taikhoan}}</td>
                    <!-- <td>{{$nv->nv_matkhau}}</td> -->
                    <td>{{$nv->nv_gioitinh}}</td>
                    <td>{{$nv->nv_ngaysinh}}</td>
                    <td>{{$nv->nv_email}}</td>
                    <td>{{$nv->nv_diachi}}</td>
                    <td>{{$nv->nv_dienthoai}}</td>
                    <!-- <td>{{$nv->nv_taomoi}}</td>
                    <td>{{$nv->nv_capnhat}}</td> -->
                    <td>{{$nv->nv_trangthai}}</td>
                    <td>{{$nv->quyen -> q_ten}}</td>
                    
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('nhanvien.edit', ['nhanvien' => $nv->nv_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('nhanvien.destroy', ['nhanvien' => $nv->nv_ma])}}">
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



