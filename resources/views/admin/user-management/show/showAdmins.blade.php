@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="col-md-12">

                <div class="card card-plain">
                    <div class="shadow-lg p-3  bg-white rounded">

                        <div class="card-header card-header-dark d-flex justify-content-between">
                            <div>
                                <h4 class="card-title mt-0 text-dark "> Admin</h4>
                                <p class="card-category text-dark "> Admins Management</p>
                            </div>
                            <a type="button" class="btn btn-warning" href="{{ url('admin/user-management/admins/create') }}">Add an Admin</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-center">
                                    <thead>
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
                                            <th colspan="2">
                                                Function
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $admin)
                                            <tr>
                                                <th>{{ $admin->id }}</th>
                                                <th>
                                                    <a href="{{ route('users.show', ['user' => $admin]) }}">{{ $admin->firstName }}</a>
                                                    </th>
                                                <th>{{ $admin->lastName }}</th>
                                                <th>{{ $admin->userName }}</th>
                                                <th>{{ $admin->dob }}</th>
                                                <th>{{ $admin->gender }}</th>
                                                <th>{{ $admin->email }}</th>
                                                <th>{{ $admin->phoneNumber }}</th>
                                                <th>{{ $admin->active }}</th>
                                                <th>
                                                  <a href="{{ route('admins.edit', $admin) }}"><i title="Edit" class="fas fa-edit"></i></a>
                                                </th>
                                                <th>
                                                    <form action="" method="POST">
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
                                    <span>{{ $admins->links() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
