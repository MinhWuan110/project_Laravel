 @extends('layouts.admin')
 @section('content')
 <div id="page-wrapper">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <h1 class="page-header">Tables</h1>
             </div>
             <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
             <div class="col-lg-12">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         DataTables Products
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                 <thead>
                                     <tr>
                                         <th>Mã Sản Phẩm </th>
                                         <th>Tên Sản Phẩm </th>
                                         <th>giá </th>
                                         <th>mã loại sản phẩm </th>
                                         <th>số lượng </th>
                                         <th>nhà cung cấp </th>
                                         <th>Hinh ảnh </th>

                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach ($sanPhams as $sanPham)
                                     <tr>
                                         <td>{{ $sanPham->ma_san_pham}}</td>
                                         <td>{{ $sanPham->ten_san_pham }}</td>
                                         <td>{{ $sanPham->gia }}</td>
                                         <td>{{ $sanPham->ma_loai_sp }}</td>
                                         <td>{{ $sanPham->so_luong }}</td>
                                         <td>{{ $sanPham->ma_nha_cung_cap }}</td>
                                         <td>
                                             <img src="{{ asset($sanPham->image) }}" alt="Hình ảnh của {{ $sanPham->ten_san_pham }}" style="width: 100px; height: auto;" />
                                         </td>

                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                         <div class="well">
                             <h4>DataTables Usage Information</h4>
                             <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                             <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                         </div>
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-12 -->
         </div>
         <!-- /.row -->
         <div class="row">
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Kitchen Sink
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Basic Table
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
         </div>
         <!-- /.row -->
         <div class="row">
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Striped Rows
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table table-striped">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Bordered Table
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive table-bordered">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
         </div>
         <!-- /.row -->
         <div class="row">
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Hover Rows
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr>
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr>
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
             <div class="col-lg-6">
                 <div class="panel panel-default">
                     <div class="panel-heading">
                         Context Classes
                     </div>
                     <!-- /.panel-heading -->
                     <div class="panel-body">
                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>#</th>
                                         <th>First Name</th>
                                         <th>Last Name</th>
                                         <th>Username</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr class="success">
                                         <td>1</td>
                                         <td>Mark</td>
                                         <td>Otto</td>
                                         <td>@mdo</td>
                                     </tr>
                                     <tr class="info">
                                         <td>2</td>
                                         <td>Jacob</td>
                                         <td>Thornton</td>
                                         <td>@fat</td>
                                     </tr>
                                     <tr class="warning">
                                         <td>3</td>
                                         <td>Larry</td>
                                         <td>the Bird</td>
                                         <td>@twitter</td>
                                     </tr>
                                     <tr class="danger">
                                         <td>4</td>
                                         <td>John</td>
                                         <td>Smith</td>
                                         <td>@jsmith</td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <!-- /.table-responsive -->
                     </div>
                     <!-- /.panel-body -->
                 </div>
                 <!-- /.panel -->
             </div>
             <!-- /.col-lg-6 -->
         </div>
         <!-- /.row -->
     </div>
     <!-- /.container-fluid -->
 </div>
 @endsection