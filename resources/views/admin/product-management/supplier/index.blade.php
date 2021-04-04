@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">

                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark ">Supplier</h4>
                                <p class="card-category text-dark ">Supplier Management</p>
                            </div>
                            <a type="button" class="btn btn-warning"
                                href="{{ url('/admin/product-management/supplier/create') }}">Add a Supplier</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead class="">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Phone 1
                                            </th>
                                            <th>
                                                Phone 2
                                            </th>
                                            <th>
                                                Website
                                            </th>
                                            <th>
                                                Address
                                            </th>
                                            <th>
                                                Ward
                                            </th>
                                            <th>
                                                District
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th>
                                                Function
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $supplier)
                                            <tr>
                                                <th>{{ $supplier->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('supplier.show', ['supplier' => $supplier]) }}">{{ $supplier->name }}</a>
                                                </th>
                                                <th>{{ $supplier->email }}</th>
                                                <th>{{ $supplier->phone_1 }}</th>
                                                <th>{{ $supplier->phone_2 }}</th>
                                                <th>{{ $supplier->website }}</th>
                                                <th>{{ $supplier->address }}</th>
                                                <th>{{ $supplier->ward }}</th>
                                                <th>{{ $supplier->district }}</th>
                                                <th>{{ $supplier->city }}</th>
                                                <th>
                                                    <a class="btn-sm btn-warning "
                                                        href="{{ route('supplier.edit', $supplier) }}">Edit</a>
                                                    <form action="{{ route('supplier.destroy', $supplier) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <a class="btn-sm btn-danger ">Delete</a>
                                                        </button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <span>{{ $suppliers->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
