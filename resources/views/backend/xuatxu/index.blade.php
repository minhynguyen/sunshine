@extends('backend.layouts.app')   

@section('title')
  Xuất Xứ
@endsection


@section('page-header')
      <h1>
        Xuất Xứ
        <!-- <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small> -->
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<a href="{{ route('xuatxu.create') }}">Thêm Xuất Xứ</a>
<!-- <button type="button" class="btn btn-info"> <i class="fa fa-plus"></i> Thêm màu mới</button> -->
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Xuất Xứ</h3>

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
                  <th>Tao Moi</th>
                  <th>Cap Nhat</th>
                  <th>Trang Thai</th>
                  <th>Action</th>
                </tr>
                @foreach ($dsXuatXu as $xx)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$xx->xx_ma}}</td>
                    <td>{{$xx->xx_ten}}</td>
                    <td>{{$xx->xx_taomoi}}</td>
                    <td>{{$xx->xx_capnhat}}</td>
                    <td>{{$xx->xx_trangthai}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('xuatxu.edit', ['xuatxu' => $xx->xx_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    

                      
                      <button type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </a></button>
                    
                      
                      
                    </td>
                </tr>

        @endforeach
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

@endsection



