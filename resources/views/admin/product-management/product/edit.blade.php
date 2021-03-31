@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="w-full bg-white rounded shadow-lg p-8 m-4l">
                <h2 class="text-center">
                    Update <span class="font-medium">{{ $product->name }}</span> of Category <span class="font-medium">{{ $product->productCategory->animalCategory->name }}</span>
                </h2>
                <form class="row g-3" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-3">
                        <label for="animal" class="form-label font-semibold text-gray-500">Animal Type</label>
                        <input type="text" class="form-control @error('animal') border-red-500 @enderror" id="animal" name="animal" value="{{ $product->productCategory->animalCategory->name }}">
                        @error('animal')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="category" class="form-label font-semibold text-gray-500">Category</label>
                        <input type="text" class="form-control @error('category') border-red-500 @enderror" id="category" name="category" value="{{ $product->productCategory->name }}">
                        @error('category')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="supplier" class="form-label font-semibold text-gray-500">Supplier</label>
                        <input type="text" class="form-control @error('supplier') border-red-500 @enderror" id="supplier" name="supplier" value="{{ $product->supplier->name }}">
                        @error('supplier')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="name" class="form-label font-semibold text-gray-500">Product Name</label>
                        <input type="text" class="form-control @error('name') border-red-500 @enderror" id="name" name="name" value="{{ $product->name }}">
                        @error('name')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label font-semibold text-gray-500">Description</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="description" id="description" rows="3" >{{ $product->description }}</textarea>
                        @error('description')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <label for="price" class="form-label font-semibold text-gray-500">Price</label>
                        <input type="number" class="form-control @error('price') border-red-500 @enderror" id="price" name="price" value="{{ $product->price }}">
                        @error('price')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <label for="stock" class="form-label font-semibold text-gray-500">Quantity</label>
                        <input type="number" class="form-control @error('stock') border-red-500 @enderror" id="stock" name="stock" value="{{ $product->stock }}">
                        @error('stock')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <label for="origin" class="form-label font-semibold text-gray-500">Origin</label>
                        <input type="text" class="form-control @error('origin') border-red-500 @enderror" id="origin" name="origin" value="{{ $product->detail->origin }}">
                        @error('origin')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <label for="color" class="form-label font-semibold text-gray-500">Color</label>
                        <input type="text" class="form-control @error('color') border-red-500 @enderror" id="color" name="color" value="{{ $product->detail->color }}">
                        @error('color')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-1">
                        <label for="size" class="form-label font-semibold text-gray-500">Size</label>
                        <input type="text" class="form-control @error('size') border-red-500 @enderror" id="size" name="size" value="{{ $product->detail->size }}">
                        @error('size')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="ingredient" class="form-label font-semibold text-gray-500">Ingredients</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="ingredient" id="ingredient" rows="3">{{ $product->detail->ingredients }}</textarea>
                        @error('ingredient')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="material" class="form-label font-semibold text-gray-500">Materials</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="material" id="material" rows="3">{{ $product->detail->materials }}</textarea>
                        @error('material')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="instruction" class="form-label font-semibold text-gray-500">Instructions</label>
                        <textarea class="form-control @error('name') border-red-500 @enderror" name="instruction" id="instruction" rows="3">{{ $product->detail->instruction }}</textarea>
                        @error('instruction')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-12 m-3">
                        <h4 class="text-center form-label font-semibold text-gray-500">Nutrition Facts (Optional)</h4>
                    </div>
                    <div class="col-md-3">
                        <label for="servingSize" class="form-label font-semibold text-gray-500">Serving Size</label>
                        <input type="text" class="form-control @error('servingSize') border-red-500 @enderror" id="servingSize" name="servingSize" value="{{ $product->detail->nutritionFact->serving_size }}">
                        @error('servingSize')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="calories" class="form-label font-semibold text-gray-500">Calories</label>
                        <input type="text" class="form-control @error('calories') border-red-500 @enderror" id="calories" name="calories" value="{{ $product->detail->nutritionFact->calories }}">
                        @error('calories')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="protein" class="form-label font-semibold text-gray-500">Protein</label>
                        <input type="text" class="form-control @error('protein') border-red-500 @enderror" id="protein" name="protein" value="{{ $product->detail->nutritionFact->protein }}">
                        @error('protein')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="fatContent" class="form-label font-semibold text-gray-500">Fat Content</label>
                        <input type="text" class="form-control @error('fatContent') border-red-500 @enderror" id="fatContent" name="fatContent" value="{{ $product->detail->nutritionFact->fat_content }}">
                        @error('fatContent')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="carbohydrate" class="form-label font-semibold text-gray-500">Total Carbohydrate</label>
                        <input type="text" class="form-control @error('carbohydrate') border-red-500 @enderror" id="carbohydrate" name="carbohydrate" value="{{ $product->detail->nutritionFact->total_carbohydrate }}">
                        @error('carbohydrate')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="sugar" class="form-label font-semibold text-gray-500">Sugar</label>
                        <input type="text" class="form-control @error('sugar') border-red-500 @enderror" id="sugar" name="sugar" value="{{ $product->detail->nutritionFact->sugar }}">
                        @error('sugar')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="crudeAsh" class="form-label font-semibold text-gray-500">Crude Ash</label>
                        <input type="text" class="form-control @error('crudeAsh') border-red-500 @enderror" id="crudeAsh" name="crudeAsh" value="{{ $product->detail->nutritionFact->crude_ash }}">
                        @error('crudeAsh')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="crudeFiber" class="form-label font-semibold text-gray-500">Crude Fiber</label>
                        <input type="text" class="form-control @error('crudeFiber') border-red-500 @enderror" id="crudeFiber" name="crudeFiber" value="{{ $product->detail->nutritionFact->crude_fiber }}">
                        @error('crudeFiber')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="calcium" class="form-label font-semibold text-gray-500">Calcium</label>
                        <input type="text" class="form-control @error('calcium') border-red-500 @enderror" id="calcium" name="calcium" value="{{ $product->detail->nutritionFact->calcium }}">
                        @error('calcium')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="vitaminA" class="form-label font-semibold text-gray-500">Vitamin A</label>
                        <input type="text" class="form-control @error('vitaminA') border-red-500 @enderror" id="vitaminA" name="vitaminA" value="{{ $product->detail->nutritionFact->vitamin_A }}">
                        @error('vitaminA')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-md-3">
                        <label for="moisture" class="form-label font-semibold text-gray-500">Moisture</label>
                        <input type="text" class="form-control @error('moisture') border-red-500 @enderror" id="moisture" name="moisture" value="{{ $product->detail->nutritionFact->moisture }}">
                        @error('moisture')
                        <div class="text-sm text-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-6 form-inline mt-3">
                        <div class="col-3 form-group">
                            <label for="img" class="form-label font-semibold text-gray-500">Upload Image</label>
                            <input type="file" class="form-control-file" name="img" id="img" placeholder="img">
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn" style="background-color: #a434a4;">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
