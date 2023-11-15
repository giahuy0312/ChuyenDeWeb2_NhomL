@EXTENDS('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">Thêm Sản Phẩm</h3>
                    <div class="card-body">
                        <form action="{{ route('registerproduct.custom') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-3">
                                        <label for="category_id">Tên Sản Phẩm</label>
                                        <input type="text" placeholder="Name" id="product_name" class="form-control" name="product_name" required autofocus>
                                        @if ($errors->has('product_name'))
                                        <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="product_description">Mô tả Sản Phẩm</label>
                                        <textarea class ="form-control" name="product_description" id="product_description" cols="30" rows="10" placeholder="Input description" ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="category_id">Danh Mục Sản Phẩm</label>
                                        <select placeholder="ID Category" name="category_id" id="category_id" class="form-control custom-select">
                                            <option selected disabled>Select one</option>
                                            @foreach ($categories as $value)
                                                <option value="{{$value->id}}">{{$value->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <li><label for="product_material">Vật Liệu Sản Phẩm</label></li>
                                        <li> <select class ="form-control custom-select" name="product_material">
                                            <option selected disabled>Select one</option>
                                            <option value="14k">14k</option>
                                            <option value="18k">18k</option>
                                            <option value="Platinum">Platinum</option>
                                        </select></li>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="product_price">Giá Sản Phẩm</label>
                                        <input type="text" placeholder="Price" id="product_price" class="form-control" name="product_price" required autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_size">Kích thước Sản Phẩm</label>
                                        <input class ="form-control" name="product_size" id="product_size" placeholder="Input size">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="product_image">Ảnh Sản Phẩm</label>
                                        <input type="file" name="product_image" id="product_image" accept="image/*" class="form-control-file" required>
                                    </div>
                                </div>
                            </div>
                            
                          
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">THÊM SẢN PHẨM</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection