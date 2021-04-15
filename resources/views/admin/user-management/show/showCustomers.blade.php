@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">

                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark "> Customers</h4>
                                <p class="card-category text-dark "> Customer Management</p>
                            </div>
                            <a type="button" class="btn btn-warning"
                                href="{{ url('/admin/user-management/users/create') }}">Add a Customer</a>
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
                                                First Name
                                            </th>
                                            <th>
                                                Last Name
                                            </th>
                                            <th>
                                                Username
                                            </th>
                                            <th>
                                                Birthday
                                            </th>
                                            <th>
                                                Gender
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Phone Number
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                            <th colspan="3">
                                                Functions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <th>{{ $customer->id }}</th>
                                                <th>
                                                    <a class="text-yellow-700" href="{{ route('users.show', ['user' => $customer]) }}">{{ $customer->firstName }}</a>
                                                </th>
                                                <th>{{ $customer->lastName }}</th>
                                                <th>{{ $customer->userName }}</th>
                                                <th>{{ $customer->dob }}</th>
                                                <th>{{ $customer->gender }}</th>
                                                <th>{{ $customer->email }}</th>
                                                <th>{{ $customer->phoneNumber }}</th>
                                                <th>{{ $customer->active }}</th>
                                                <th>
                                                    @if($customer->active == 1)
                                                        <a href="{{ route('users.ban', $customer) }}"><i title="Ban" class="fas fa-ban"></i></a>
                                                    @else
                                                        <a href="{{ route('users.unban', $customer) }}"><i title="Unban" class="fas fa-unlock"></i></a>    
                                                    @endif
                                                </th>
                                                <th>
                                                    <a href="{{ route('users.edit', $customer) }}"><i title="Edit" class="fas fa-edit"></i></a>
                                                </th>
                                                <th>
                                                    <form action="{{ route('users.destroy', $customer) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">
                                                            <a class=""><i title="Delete" class="fas fa-trash"></i></a>
                                                        </button>
                                                    </form>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    <span>{{ $customers->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
