@EXTENDS('admin.main')


@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-12">
  <div class="card-header py-3">
    <h1 class="">Danh Sách Sản Phẩm</h1>
    <h6 class="btnthem"><a href="{{route('addproduct')}}">Thêm Sản Phẩm</a></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
           
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Mô tả sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Khích Thước Sản Phẩm</th>
            <th>Danh mục sản phẩm</th>
            <th>Chức Năng</th>
            
        </tr>
        </thead>

        <tbody>
          @foreach($products as $product)
          <tr>
           
            <td>{{$product->name}}</td>
            <td><img src="{{URL::asset('images/image-products')}}/{{$product->image}}" alt="" width="50px" height="50px"></td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->size}}</td>
            <td>{{$product->category_id}}</td>
            <td class="btncn">
              <a href="{{route('getdataedt',$product->id)}}" >Edit</a>
              <a href="{{route('deleteproduct',$product->id)}}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
{{ $products->links() }}
@endsection