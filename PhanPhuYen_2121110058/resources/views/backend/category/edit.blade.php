@extends('layouts.admin')
@section('title','Sửa danh mục')
@section('content')
<form action="{{route('category.update',['category'=>$category->id])}}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Edit category</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Cập nhật danh mục</li>
                </ol>

              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-sm btn-danger">
                            <i class="fa fa-trash">Xóa</i>
                        </button>
                    </div>

                    <div class="col-md-6 text-right">
                      <button type="submit" class="btn bg-success">
                        <i class="fa-solid fa-save"></i> Lưu [Cập nhật] </button>
                      <a href="{{ route('category.index') }}" class="btn bg-success">
                        <i class="fa-solid fa-arrow-left"></i> Quay về danh sách </a>

                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mb-3">
                            <label for="name">Tên danh mục</label>
                            <input type="text" name="name" value="{{old('name',$category->name)}}" id="name" class="form-control" placeholder="Nhập tên danh mục">
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('name')}}
                                </div>

                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="metakey">Từ khóa tìm kiếm</label>
                            <textarea  name="metakey" id="metakey" class="form-control" placeholder="Từ khóa tìm kiếm">{{old('metakey',$category->metakey)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metakey')}}
                                </div>

                            @endif

                        </div>
                        <div class="mb-3">
                            <label for="metadesc">Mô tả</label>
                            <textarea  name="metadesc" id="metadesc" class="form-control" placeholder="Mô tả">{{old('metadesc',$category->metadesc)}}</textarea>
                            @if ($errors->any())
                                <div class="text-danger">
                                    {{$errors->first('metadesc')}}
                                </div>

                            @endif

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="parent_id">Danh mục cha</label>
                            <select name="parent_id" id="parent_id" class="form-control">
                                <option value="0">--Cấp cha--</option>
                                {!! $http_parent_id !!}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sort_order">Vị trí sắp xếp</label>
                            <select name="sort_order" id="sort_order" class="form-control">
                                <option value="0">--Vị trí sắp xếp--</option>
                                {!! $http_sort_order !!}
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="image">Hình ảnh</label>
                            <input type="file" name="image" value="{{old('image')}}" id="image" class="form-control" placeholder="Thêm hình ảnh">

                        </div>
                        <div class="mb-3">
                            <label for="status">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>


                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              Footer
            </div>
            <!-- /.card-footer-->
          </div>
          <!-- /.card -->

        </section>
        <!-- /.content -->
      </div>
</form>


@endsection
