@extends('layouts.admin.admin')

@section('content')
<div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">New Product</h2>
                <form class="row g-3" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-3 pb-5">
                        <label for="animal" class="form-label font-semibold text-gray-500">Animal Type</label>
                        <select class="form-control" name="animal" id="animal">
                            @foreach($animalCategories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="category" class="form-label font-semibold text-gray-500">Category</label>
                        <select class="form-control" name="category" id="category">
                            @foreach($productCategories as $subCat)
                                <option value="{{ $subCat->name }}">{{ $subCat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="supplier" class="form-label font-semibold text-gray-500">Supplier</label>
                        <select class="form-control" name="supplier" id="supplier">
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->name }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="name" class="form-label font-semibold text-gray-500">Product Name</label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name">
                        @error('name')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-12 pb-5">
                        <label for="description" class="form-label font-semibold text-gray-500">Description</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="description" id="description" rows="3"></textarea>
                        @error('description')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-2 pb-5">
                        <label for="price" class="form-label font-semibold text-gray-500">Price</label>
                        <input type="number" class="form-control @error('price') border-red-500 @enderror" id="price" name="price" min='0'>
                        @error('price')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-1 pb-5">
                        <label for="stock" class="form-label font-semibold text-gray-500">Quantity</label>
                        <input type="number" class="form-control @error('stock') border-red-500 @enderror" id="stock" name="stock" min="0">
                        @error('stock')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-1 pb-5">
                        <label for="origin" class="form-label font-semibold text-gray-500">Origin</label>
                        <input type="text" class="form-control @error('origin') border-red-500 @enderror" id="origin" name="origin">
                        @error('origin')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-1 pb-5">
                        <label for="color" class="form-label font-semibold text-gray-500">Color</label>
                        <input type="text" class="form-control @error('color') border-red-500 @enderror" id="color" name="color">
                        @error('color')
                            <div class="text-sm text-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-1 pb-5">
                        <label for="size" class="form-label font-semibold text-gray-500">Size</label>
                        <input type="text" class="form-control @error('size') border-red-500 @enderror" id="size" name="size">
                        @error('size')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="ingredient" class="form-label font-semibold text-gray-500">Ingredients</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="ingredient" id="ingredient" rows="3"></textarea>
                        @error('ingredient')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 pb-5">
                        <label for="material" class="form-label font-semibold text-gray-500">Materials</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="material" id="material" rows="3"></textarea>
                        @error('material')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6 pb-5">
                        <label for="instruction" class="form-label font-semibold text-gray-500">Instructions</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="instruction" id="instruction" rows="3"></textarea>
                        @error('instruction')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 pb-5 m-3">
                        <h4 class="text-center form-label font-semibold text-gray-500">Nutrition Facts (Optional)</h4>
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="servingSize" class="form-label font-semibold text-gray-500">Serving Size</label>
                        <input type="text" class="form-control @error('servingSize') border-red-500 @enderror" id="servingSize" name="servingSize">
                        @error('servingSize')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="calories" class="form-label font-semibold text-gray-500">Calories</label>
                        <input type="text" class="form-control @error('calories') border-red-500 @enderror" id="calories" name="calories">
                        @error('calories')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="protein" class="form-label font-semibold text-gray-500">Protein</label>
                        <input type="text" class="form-control @error('protein') border-red-500 @enderror" id="protein" name="protein">
                        @error('protein')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="fatContent" class="form-label font-semibold text-gray-500">Fat Content</label>
                        <input type="text" class="form-control @error('fatContent') border-red-500 @enderror" id="fatContent" name="fatContent">
                        @error('fatContent')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="carbohydrate" class="form-label font-semibold text-gray-500">Total Carbohydrate</label>
                        <input type="text" class="form-control @error('carbohydrate') border-red-500 @enderror" id="carbohydrate" name="carbohydrate">
                        @error('carbohydrate')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="sugar" class="form-label font-semibold text-gray-500">Sugar</label>
                        <input type="text" class="form-control @error('sugar') border-red-500 @enderror" id="sugar" name="sugar">
                        @error('sugar')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="crudeAsh" class="form-label font-semibold text-gray-500">Crude Ash</label>
                        <input type="text" class="form-control @error('crudeAsh') border-red-500 @enderror" id="crudeAsh" name="crudeAsh">
                        @error('crudeAsh')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="crudeFiber" class="form-label font-semibold text-gray-500">Crude Fiber</label>
                        <input type="text" class="form-control @error('crudeFiber') border-red-500 @enderror" id="crudeFiber" name="crudeFiber">
                        @error('crudeFiber')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="calcium" class="form-label font-semibold text-gray-500">Calcium</label>
                        <input type="text" class="form-control @error('calcium') border-red-500 @enderror" id="calcium" name="calcium">
                        @error('calcium')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="vitaminA" class="form-label font-semibold text-gray-500">Vitamin A</label>
                        <input type="text" class="form-control @error('vitaminA') border-red-500 @enderror" id="vitaminA" name="vitaminA">
                        @error('vitaminA')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3 pb-5">
                        <label for="moisture" class="form-label font-semibold text-gray-500">Moisture</label>
                        <input type="text" class="form-control @error('moisture') border-red-500 @enderror" id="moisture" name="moisture">
                        @error('moisture')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-4 form-group">
                                <div class="row">
                                    <div class="col-sm-6 ">
                                        <label for="img" class="form-label btn btn-dark w-34 font-semibold text-white">Upload Image</label>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control-file" name="img" id="img" placeholder="img">
                                        <img src="#" alt="No file chosen." id="category-img-tag" class="hidden" width="150px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn" style="background-color: #a434a4;">Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function readUrl(input){
            if (input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    $('#category-img-tag').attr('src', e.target.result).removeClass('hidden');
                }

                reader.readAsDataURL(input.files[0]);
            }
        };

        $('#img').change(function(){
            readUrl(this);
        });
    </script>
@endsection