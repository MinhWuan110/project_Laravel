 @extends('layouts.admin')
 @section('content')
 <div id="page-wrapper">
     <div class="container mt-5">
         <h1>Chỉnh Sữa Tin Tức </h1>

         @if (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
         @endif
         <form action="{{ route('update.catories', $category->id) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="ten_tin_tuc">Tên danh mục</label>
                <input type="text" class="form-control" id="ten_tin_tuc" name="ten_tin_tuc" value="{{ old('ten_tin_tuc', $category->ten_tin_tuc) }}" required>
            </div>
            <div class="form-group">
                <label for="trang_thai">Trạng thái</label>
                <input type="number" class="form-control" id="trang_thai" name="trang_thai" value="{{ old('trang_thai', $category->trang_thai) }}" required>
            </div>
            <div class="form-group">
                <label for="noi_dung">Nội dung</label>
                <textarea class="form-control" id="noi_dung" name="noi_dung">{{ old('noi_dung', $category->noi_dung) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            <a href="{{ route('admin.catories') }}" class="btn btn-warning">Quay lại</a>
        </form>


     </div>
 </div>




 @endsection