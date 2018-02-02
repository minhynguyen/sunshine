@extends('backend.layouts.app')   

@section('title')
  Danh Sách Màu
@endsection


@section('page-header')
      <h1>
        DANH SÁCH CÁC MÀU HOA
        <small>Các màu hoa và Phụ Kiện</small>
      </h1>
@endsection


<!-- noi dung can thay doi o giua -->
@section('content')
<a href="{{ route('mau.create') }}">THEM MAU</a>


<div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Màu Hoa</h3>

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
              <table class="table table-hover text-center">
                <tr >
                  <th>Mã màu</th>
                  <th>Tên màu</th>
                  <th>Tạo Mới</th>
                  <th>Cập Nhật</th>
                  <th>Trạng Thái</th>
                  <th colspan="2">
                    <button type="button" class="btn btn-info"><a href=" {{ route('mau.create') }}" > <i class="fa fa-plus"></i> Thêm màu mới </a></button>
                  </th>

                </tr>
                @foreach ($dsMau as $Mau)
        <!-- nhãn từ controller -->
                <tr>
                    <td>{{$Mau->m_ma}}</td>
                    <td>{{$Mau->m_ten}}</td>
                    <td>{{$Mau->m_taomoi}}</td>
                    <td>{{$Mau->m_capnhat}}</td>
                    <td>{{$Mau->m_trangthai}}</td>
                    <td>
                      <button type="button" class="btn btn-warning"> <a href=" {{ route('mau.edit', ['mau' => $Mau->m_ma]) }}" ><i class="fa fa-edit"></i> Edit</a></button>
                      
                    </td>
                    <td>
                      <form method="POST" action="{{route('mau.destroy', ['mau' => $Mau->m_ma])}}">
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



