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
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$product_data -> sum('item');}} ชิ้น </h3>

            <p>Product All Item</p>
            <p>จำนวนสินค้าทั้งหมด</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{url('/')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$product_data -> sum('price');}} บาท</h3>

            <p>Price Total</p>
            <p>มูลค่าสินค้าทั้งหมด</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <a href="/product/insert" class="btn btn-primary">เพิ่มข้อมูลสินค้า</a>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลสินค้า</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Scale</th>
                            <th>Number</th>
                            <th>Case</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Cost</th>
                            <th>Barcode</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product_data as $product)
                        <tr>
                            <td>{{$product -> id}}</td>
                            <td>
                                @if ($product -> image != '')
                                    <img src="{{$product -> ImagePath }}" style="height:50px"/>
                                @endif
                            </td>
                            <td>{{$product -> name}}</td>
                            <td>{{$product -> product_type_id}}</td>
                            <td>{{$product -> scale}}</td>
                            <td>{{$product -> number}}</td>
                            <td>{{$product -> case}}</td>
                            <td>{{$product -> item}}</td>
                            <td>{{$product -> price}}</td>
                            <td>{{$product -> cost}}</td>
                            <td>{{$product -> barcode}}</td>
                            <td>
                                <a href="/product/edit{{$product -> id}}" class="btn btn-warning">Edit</a>
                                <a href="/product/delete{{$product -> id}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6">Count {{$product_data -> count();}} record.</th>
                            <th>{{$product_data -> sum('case');}}</th>
                            <th>{{$product_data -> sum('item');}}</th>
                            <th>{{$product_data -> sum('price');}}</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
      </div>
@section('script')
<!-- Page specific script -->
<script type="text/javascript">
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
</div><!-- /.container-fluid -->

@endsection

