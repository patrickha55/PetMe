@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">inventory</i>
                            </div>
                            <p class="card-category">Total Products</p>
                            <h3 class="card-title">{{ $products->count() }}
                                <small>Products</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">add_box</i>
                                <a href="javascript:;">Add more products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">people</i>
                            </div>
                            <p class="card-category">Customers</p>
                            <h3 class="card-title">{{ $users->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">store</i>
                            </div>
                            <p class="card-category">Revenue</p>
                            <h3 class="card-title">$34,245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">fact_check</i>
                            </div>
                            <p class="card-category">Orders</p>
                            <h3 class="card-title">{{ $orders->count() }}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Pending {{ $orders->where('status', 'pending')->count() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Daily Sales</h4>
                            <p class="card-category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Users Registered</h4>
                            <p class="card-category">April 2021</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> User registered 1 day ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Orders Submitted</h4>
                            <p class="card-category">Latest Orders</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> Order received 2 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">                                      
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Orders</h4>
                            <p class="card-category">Last updated on 20:16 pm 05 April 2021</p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <th>ID</th>
                                <th>User</th>
                                <th>Total Price</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Ward</th>
                                <th>District</th>
                                <th>City</th>
                                <th>Created On</th>
                                <th>Updated On</th>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->user_id}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td>{{$order->status }}</td>
                                        <td>{{$order->name ?? 'N/A'}}</td>
                                        <td>{{$order->phone ?? 'N/A' }}</td>
                                        <td>{{$order->email ?? 'N/A' }}</td>
                                        <td>{{$order->address ?? 'N/A' }}</td>
                                        <td>{{$order->ward ?? 'N/A' }}</td>   
                                        <td>{{$order->district ?? 'N/A' }}</td>
                                        <td>{{$order->city ?? 'N/A' }}</td>
                                        <td>{{$order->created_at }}</td>
                                        <td>{{$order->updated_at }}</td>
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                            <div>
                                <span>{{ $orders->links() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
