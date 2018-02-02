@extends('backend.layouts.app')   

@section('title')
  Danh sach cac chu de
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC CHỦ ĐỀ HOA
        <small>CÁC CHỦ ĐỀ VÀ LOẠI HOA</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sach Chu De</h3>
              
              

              <div class="box-tools">
                <button type="button" class="btn btn-sm pull-right" style="margin-left: 2px"> <a href="{{ route('chude.pdf') }}"><i class="fa fa-file-pdf-o"></i> In PDF </a></button> 

                <button type="button" class="btn btn-sm pull-right"> <a href="{{ route('chude.excel') }}"><i class="fa fa-file-excel-o"></i> In Excel </a></button> 
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
              <table class="table table-hover text-center ">
                <tr>
                  <th>Mã</th>
                  <th style="text-align: left">Tên</th>
                  <th>Ngày Tạo Mới</th>
                  <th>Ngày Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th colspan="2"><button type="button" class="btn btn-info"> <a href="{{ route('chude.create') }}"><i class="fa fa-plus"></i> Thêm Chủ Đề</button></a></th>
                  <!-- <th></th> -->
                </tr>
                @foreach ($dsChude as $cd)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$cd->cd_ma}}</td>
                    <td style="text-align: left;">{{$cd->cd_ten}}</td>
                    <td>{{$cd->cd_taomoi}}</td>
                    <td>{{$cd->cd_capnhat}}</td>
                    <td>{{$cd->cd_trangthai}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('chude.edit', ['chude' => $cd->cd_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                    
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('chude.destroy', ['chude' => $cd->cd_ma])}}">
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



