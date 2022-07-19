@extends('master_admin')
@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">สินค้าทั้งหมด</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Product</a></li>
          <li class="breadcrumb-item active">All Product</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">แบบกรอกข้อมูลสินค้า</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/type/insert_action" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label>Typename</label>
          <input type="text" class="form-control" placeholder="ชื่อประเภทสินค้า" name="typename">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">เพิ่ม</button>
      </div>
    </form>
  </div>
@endsection

