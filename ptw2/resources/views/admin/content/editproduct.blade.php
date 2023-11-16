@extends('admin.main')
@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center">Sửa Sản Phẩm</h3>
                    <div class="card-body">
                        <form action="{{ route('editproduct') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="hidden" placeholder="id" id="id" value="{{$getDataProductById[0]->id}}" class="form-control" name="id" required autofocus>

                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="product_name" value="{{$getDataProductById[0]->product_name}}" class="form-control" name="product_name" required autofocus>
                                @if ($errors->has('product_name'))
                                <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Description" id="product_description" value="{{$getDataProductById[0]->product_description}}" class="form-control" name="product_description" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <select name="category_id" id="category_id" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    @foreach ($categories as $value)
                                    @if ($getDataProductById[0]->category_id == $value->id)
                                    <option selected value="{{$value->id}}">{{$value->category_name}}</option>
                                    @else
                                    <option value="{{$value->id}}">{{$value->category_name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="product_materiall">Vật liệu</label>
                                <select class ="form-control" name="product_material">
                                    <option selected value="{{$getDataProductById[0]->product_material}}">{{$getDataProductById[0]->product_material}}</option>
                                        <option value="14k">14k</option>
                                        <option value="18k">18k</option>
                                        <option value="Platinum">Platinum</option>
                                  
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Price" value="{{$getDataProductById[0]->product_price}}" id="product_price" class="form-control" name="product_price" required autofocus>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Size" value="{{$getDataProductById[0]->product_size}}" id="product_size" class="form-control" name="product_size" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="product_image" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="product_image" name="product_image">
                                <img src="{{URL::asset('uploads')}}/{{$getDataProductById[0]->product_image}}" alt="" width="50">
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Lưu Thay Đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection