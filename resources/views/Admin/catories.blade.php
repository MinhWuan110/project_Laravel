 @extends('layouts.admin')
 @section('content')
 <div id="page-wrapper">
     < class="container mt-5">
         <h1>Quản lý Danh mục tin tức </h1>

         @if (session('success'))
         <div class="alert alert-success">{{ session('success') }}</div>
         @endif
         <form action="{{ route('create.catories') }}" method="POST" class="mb-4">
             @csrf
             <div class="form-group">
                 <label for="ten_tin_tuc">Tên danh mục</label>
                 <input type="text" class="form-control" id="ten_tin_tuc" name="ten_tin_tuc" required>
             </div>
             <div class="form-group">
                 <label for="trang_thai">Trạng thái</label>
                 <input type="number" class="form-control" id="trang_thai" name="trang_thai" required>
             </div>
             <div class="form-group">
                 <label for="noi_dung">Nội dung</label>
                 <textarea class="form-control" id="noi_dung" name="noi_dung"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Thêm danh mục</button>
         </form>
         <div>
             <form action="{{ route('search.catories') }}" method="GET">
                 </br>
                 <label>Tìm kiếm theo tên tin tức </label>
                 </br>
                 <input type="text" name="query" placeholder="Tìm kiếm danh mục..." required>
                 <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                 <a href="{{ route('admin.catories') }}" class="btn btn-success">Hiển thị tất cả </a>
             </form>
         </div>
         <h2>Danh sách Danh mục</h2>
         <table class="table">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Tên danh mục</th>
                     <th>Trạng thái</th>
                     <th>Nội dung</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach ($catories as $category)
                 <tr>
                     <td>{{ $category->id }}</td>
                     <td>{{ $category->ten_tin_tuc }}</td>
                     <td>{{ $category->trang_thai }}</td>
                     <td>{{ $category->noi_dung }}</td>
                     <td> <a href="{{ route('edit.catories', $category->id) }}" class="btn btn-warning">Chỉnh sửa</a></td>
                     <td>
                         <form action="{{ route('delete.catories', $category->id) }}" method="POST" style="display: inline;">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="btn btn-danger">Xóa</button>
                         </form>
                     </td>


                 </tr>
                 @endforeach
             </tbody>
         </table>
 </div>
 </div>




 @endsection