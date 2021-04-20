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
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <canvas id="myChart1" width="600" height="200" aria-label="Hello ARIA World" role="img">
                                <p>Hello Fallback World</p>
                            </canvas>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Monthly Sales</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <canvas id="myChart2" width="600" height="200" aria-label="Hello ARIA World" role="img">
                                <p>Hello Fallback World</p>
                            </canvas>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Favorite Products</h4>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> Updated every week
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

@section('script')


    <script>
        {{-- Chart 1 --}}
        let labels1 = [
                @foreach($salesByMonth as $month)
            ['{{ $month->month }}'],
            @endforeach
        ]

        let data1 = {
            labels: labels1,
            datasets: [
                {
                    label: 'Sales',
                    data: [
                        @foreach($salesByMonth as $sale)
                            {{ $sale->price }},
                        @endforeach
                    ],
                    borderColor: 'rgba(255,255,255,0.75)',
                    backgroundColor: 'rgba(255,255,255,0.77)',
                    fill: true,
                    tension: 0.4,
                }
            ]
        };

        let config1 = {
            type: 'line',
            data: data1,
            options: {
                animations: {
                    radius: {
                        duration: 400,
                        easing: 'linear',
                        loop: (context) => context.active
                    }
                },
                hoverRadius: 12,
                hoverBackgroundColor: 'yellow',
                interaction: {
                    mode: 'nearest',
                    intersect: false,
                    axis: 'x'
                },
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month',
                            color: 'white',
                        },
                        ticks: {
                            color: 'rgb(255,255,255)',
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'VNĐ',
                            color: 'white',
                        },
                        beginAtZero: true,
                        ticks: {
                            color: 'rgb(255,255,255)',
                        }
                    }
                },
            },
        };

        {{-- Chart 2 --}}

        let delayed2;
        let labels2 = [
                @foreach($products as $product)
            ['{{ $product->id }}'],
            @endforeach
        ];
        let data2 = {
            labels: labels2,
            datasets: [{
                label: 'Product ID',
                data: [
                        @foreach($productsInCart as $productInCart)
                    [{{ $productInCart->timeAddedToCart }}],
                    @endforeach
                ],
                borderColor: 'rgba(255,255,255,0.75)',
                backgroundColor: 'rgba(255,255,255,0.77)',
                borderWidth: 1,
            }
            ]
        };

        let config2 = {
            type: 'bar',
            data: data2,
            options: {
                animation: {
                    onComplete: () => {
                        delayed2 = true;
                    },
                    delay: (context) => {
                        let delay2 = 0;
                        if (context.type === 'data' && context.mode === 'default' && !delayed2) {
                            delay2 = context.dataIndex * 300 + context.datasetIndex * 100;
                        }
                        return delay2;
                    },
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        color: 'rgba(255,255,255,0.75)',
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Product',
                            color: 'white',
                        },
                        ticks: {
                            color: 'rgb(255,255,255)',
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Time Added To Cart',
                            color: 'white',
                        },
                        beginAtZero: true,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 2,
                            color: 'rgb(255,255,255)',
                        }
                    }
                }
            },
        };

        {{-- Chart 3 --}}{{--
        let delayed3;
        let data3 = {
            labels: [
                    @foreach($totalProductsByCategory as $product)
                ['{{ $product->name }}'],
                @endforeach
            ],
            datasets: [
                {
                    label: 'Dataset 1',
                    data: [
                            @foreach($totalProductsByCategory as $product)
                        [{{ $product->products }}],
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(33,164,250,0.7)',
                        'rgba(205,12,212,0.7)',
                        'rgba(212,243,36,0.7)',
                        'rgba(250,181,3,0.7)',
                        'rgba(0,0,0,0.7)',
                    ],
                }
            ]
        };


        const config3 = {
            type: 'doughnut',
            data: data3,
            options: {
                animation: {
                    onComplete: () => {
                        delayed2 = true;
                    },
                    delay: (context) => {
                        let delay2 = 0;
                        if (context.type === 'data' && context.mode === 'default' && !delayed2) {
                            delay2 = context.dataIndex * 300 + context.datasetIndex * 100;
                        }
                        return delay2;
                    },
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Doughnut Chart'
                    }
                }
            },
        };--}}

        window.onload = function(){
            let chart1 = document.getElementById("myChart1").getContext("2d");
            window.myLine = new Chart(chart1, config1);
            let chart2 = document.getElementById('myChart2').getContext('2d');
            window.myBar = new Chart(chart2, config2);
            // let chart3 = document.getElementById('myChart3').getContext('2d');
            // window.myDoughnut = new Chart(chart3, config3);
        }
    </script>
@endsection
