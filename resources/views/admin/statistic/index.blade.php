@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h1 class="text-center, font-bold">Statistics</h1>
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="row shadow-lg p-3 bg-white rounded">
                        <div class="col-12 mb-5">
                            <div class="card-header card-header-dark d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mt-0 text-dark font-weight-bold">Shop Revenue</h4>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div>
                                    <canvas id="myChart1" width="400" height="200" aria-label="Hello ARIA World" role="img">
                                        <p>Hello Fallback World</p>
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <div class="card-header card-header-dark d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mt-0 text-dark font-weight-bold">Favorite Products</h4>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                {{--<div class="ct-chart-2" id="chart2"></div>--}}
                                <canvas id="myChart2" width="400" height="200" aria-label="Hello ARIA World" role="img">
                                    <p>Hello Fallback World</p>
                                </canvas>
                                {{-- <div class="text-left">
                                    <ul>
                                        @foreach($products as $product)
                                            <li><p>Product id #{{ $product->id }}: {{ $product->name}} </p></li>
                                        @endforeach
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">
                                <div class="card-header card-header-dark d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title mt-0 text-dark font-weight-bold">Cateogory</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <canvas id="myChart3" width="200" height="200" ></canvas>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-header card-header-dark d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title mt-0 text-dark font-weight-bold">Most Bought Products</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                          <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                              <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                  <tr>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                      Name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                      Price
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                      Status
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                      <span class="sr-only">Edit</span>
                                                    </th>
                                                  </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @foreach($productsOrdered as $productOrdered)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full" src="/storage/Image/product/{{ $productOrdered->img }}" alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                {{ $productOrdered->name }}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                {{ $productOrdered->supplier->name }}
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">@currency($productOrdered->price) VND</div>
                                                            <div class="text-sm text-gray-500">Bought {{$productIdsOrdered->where('product_id', 2)->first()->timeOrdered}} times</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            @if($productOrdered->stock > 5)
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                                    In stock : {{ $productOrdered->stock }}
                                                                </span>
                                                            @elseif($productOrdered->stock < 5)
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                                    In stock : {{ $productOrdered->stock }}
                                                                </span>
                                                            @else
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                                    Out of stock
                                                                </span>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    <!-- More items... -->
                                                </tbody>
                                              </table>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </div>
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
                borderColor: 'rgb(57,243,139)',
                backgroundColor: 'rgba(57,243,139, 0.2)',
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
                        text: 'Month'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'VNĐ'
                        },
                        beginAtZero: true,
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
                    borderColor: 'rgb(54, 162, 235)',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
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
                    }
                },
                scales: {
                    x: {
                        title: {
                        display: true,
                        text: 'Product'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Time Added To Cart'
                        },
                        beginAtZero: true,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 2
                        }
                    }
                }
            },
        };

        {{-- Chart 3 --}}
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
                }
            },
        };

        window.onload = function(){
            let chart1 = document.getElementById("myChart1").getContext("2d");
            window.myLine = new Chart(chart1, config1);
            let chart2 = document.getElementById('myChart2').getContext('2d');
            window.myBar = new Chart(chart2, config2);
            let chart3 = document.getElementById('myChart3').getContext('2d');
            window.myDoughnut = new Chart(chart3, config3);
        }
    </script>
@endsection
