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
    <form action="/product/edit_action" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
      <div class="card-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="name" value="{{$product -> name }}">
        </div>
        <div class="form-group">
            <label>Product Type</label>
            <select name="type" class="form-control">
                @foreach ($productTypes as $type)
                @if ($type -> id == $product->product_type_id)
                    <option value="{{$type->id}}" selected>{{$type->name}}</option>
                @else
                    <option value="{{$type->id}}">{{$type->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Scale</label>
            <input type="text" class="form-control" placeholder="ขนาด" name="scale" value="{{$product->scale}}">
        </div>
        <div class="form-group">
            <label>Number</label>
            <input type="text" class="form-control" placeholder="เบอร์" name="number" value="{{$product->number}}">
        </div>
        <div class="form-group">
            <label>Case</label>
            <input type="text" class="form-control" placeholder="จำนวน" name="case" value="{{$product->case}}">
        </div>
        <div class="form-group">
            <label>Item</label>
            <input type="text" class="form-control" placeholder="บรรจุ" name="item" value="{{$product->item}}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" placeholder="ราคาต่อชิ้น" name="price" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label>Cost</label>
            <input type="text" class="form-control" placeholder="ราคาทุน" name="cost" value="{{$product->cost}}">
        </div>
        <div class="form-group">
            <label>Barcode</label>
            <input type="text" class="form-control" placeholder="บาร์โค้ดต่อชิ้น" name="barcode" value="{{$product->barcode}}">
        </div>
        <div class="from-group">
            <label>Before Image</label>
            <div><img src="{{$product -> ImagePath}}" style="height: 100px"></div>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image">
              <label class="custom-file-label">เลือกไฟล์</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection

