@extends('layouts.admin.admin')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h1 class="text-center, font-bold">Statistics</h1>
            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="row shadow-lg p-3 bg-white rounded">
                        <div class="col-12">
                            <div class="card-header card-header-dark d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mt-0 text-dark font-weight-bold">Shop Revenue</h4>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <div>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-header card-header-dark d-flex justify-content-between">
                                <div>
                                    <h4 class="card-title mt-0 text-dark font-weight-bold">Favorite Products</h4>
                                </div>
                            </div>
                            <div class="card-body text-center">
{{--                                <div class="ct-chart-2" id="chart2"></div>--}}
                                <canvas id="myChart2" width="400" height="400"></canvas>
                            </div>
                        </div>
                        <div class="col-12 row">
                            <div class="col-4">
                                <div class="card-header card-header-dark d-flex justify-content-between">
                                    <div>
                                        <h4 class="card-title mt-0 text-dark font-weight-bold">Favorite Cateogory</h4>
                                    </div>
                                </div>
                                <div class="card-body">
{{--                                    <div class="ct-chart-3" id="chart3"></div>--}}
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
                                                  <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                          <img class="h-10 w-10 rounded-full" src="/storage/Image/product/noimage.jpg" alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                          <div class="text-sm font-medium text-gray-900">
                                                            Kitten
                                                          </div>
                                                          <div class="text-sm text-gray-500">
                                                            Whiskas
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <div class="text-sm text-gray-900">200.000 VND</div>
                                                      <div class="text-sm text-gray-500">Bought 30 times</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                      <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        In stock : 30
                                                      </span>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                      <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </td>
                                                  </tr>

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

    {{-- Chart 1 --}}
    <script>
        let data = {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [
                [5, 9, 7, 8, 5, 3, 5, 4, 3, 2, 1, 9]
            ]
        };

        new Chartist.Line('.ct-chart-1', data, {
            low: 0,
            showArea: true,
            height: 500
        });
    </script>
    {{-- Chart 2 --}}
    <!--<script>
        new Chartist.Bar('.ct-chart-2', {
            labels:
            series:
        }, {
            height: 500,
            distributeSeries: true
        });
    </script>-->

    <script>
        /*let DATA_COUNT = {{count($productsInCart)}};
        let NUMBER_CFG = {count: DATA_COUNT, min: 0, max: 100};*/

        let labels = [
            @foreach($products as $product)
                ['{{ $product->id }}'],
            @endforeach
        ];
        let data = {
            labels: labels,
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

        const config = {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    title: {
                        display: true,
                        text: 'Favorite Products'
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            },
        };

        let chart2 = document.getElementById('myChart2').getContext('2d');
        let myChart2 = new Chart(chart2, {
            type: 'bar',
            data: {
                labels: [
                        @foreach($products as $product)
                    ['{{ $product->id }}'],
                    @endforeach
                ],
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
                }]
            }
        });

    </script>

    {{-- Chart 3 --}}
    <script>
        var data = {
            labels: ['Cat', 'Dog'],
            series: [45, 55]
        };

        var options = {
            labelInterpolationFnc: function(value) {
                return value[0]
            },
            width: 300,
            height: 300
        };

        var responsiveOptions = [
            ['screen and (min-width: 640px)', {
                chartPadding: 30,
                labelOffset: 100,
                labelDirection: 'explode',
                labelInterpolationFnc: function(value) {
                    return value;
                }
            }],
            ['screen and (min-width: 1024px)', {
                labelOffset: 80,
                chartPadding: 20
            }]
        ];

        new Chartist.Pie('.ct-chart-3', data, options, responsiveOptions);
    </script>

    <script>
        const labels = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        };

        const config = {
            type: 'line',
            data,
            options: {}
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
