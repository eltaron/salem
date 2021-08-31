@extends('admin.layouts.app')
@section('content')
<div class="content mt-3">
    <div class="row">
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-1">
                <div class="card-body pb-0">
                    <h4 class="mb-0">
                        <span class="count">{{$productcount->count()}}</span>
                    </h4>
                    <p class="text-light">عدد المنتجات</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart1"></canvas>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    <h4 class="mb-0">
                        <span class="count">{{$offercount->count()}}</span>
                    </h4>
                    <p class="text-light">عدد العروض</p>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart2"></canvas>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-3">
                <div class="card-body pb-0">
                    <h4 class="mb-0">
                        <span class="count">{{$taskcount->count()}}</span>
                    </h4>
                    <p class="text-light">عدد المهام</p>

                </div>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card text-white bg-flat-color-4">
                <div class="card-body pb-0">
                    <h4 class="mb-0">
                        <span class="count">{{$messagecount->count()}}</span>
                    </h4>
                    <p class="text-light">عدد الرسائل</p>

                    <div class="chart-wrapper px-3" style="height:70px;" height="70">
                        <canvas id="widgetChart4"></canvas>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">منتجات وعروض العام </h4>
                        <canvas id="sales-chart"></canvas>
                        @php
                            foreach ($productsCharts as $key => $value) {
                            $productcount[(int)$key] = count($value);
                            }
                            for($i = 1; $i <= 12; $i++){
                                if(!empty($productcount[$i])){
                                    $productArr[$i] = $productcount[$i];
                                }else{
                                    $productArr[$i] = 0;
                                }
                            }
                            foreach ($offersCharts as $key => $value) {
                            $offercount[(int)$key] = count($value);
                            }
                            for($i = 1; $i <= 12; $i++){
                                if(!empty($offercount[$i])){
                                    $offerArr[$i] = $offercount[$i];
                                }else{
                                    $offerArr[$i] = 0;
                                }
                            }
                            foreach ($taskcharts as $key => $value) {
                            $taskcount[(int)$key] = count($value);
                            }
                            for($i = 1; $i <= 12; $i++){
                                if(!empty($taskcount[$i])){
                                    $taskArr[$i] = $taskcount[$i];
                                }else{
                                    $taskArr[$i] = 0;
                                }
                            }
                        @endphp
                        <input type="hidden" id="productArr1"  value="{{$productArr[1]}}">
                        <input type="hidden" id="productArr2"  value="{{$productArr[2]}}">
                        <input type="hidden" id="productArr3"  value="{{$productArr[3]}}">
                        <input type="hidden" id="productArr4"  value="{{$productArr[4]}}">
                        <input type="hidden" id="productArr5"  value="{{$productArr[5]}}">
                        <input type="hidden" id="productArr6"  value="{{$productArr[6]}}">
                        <input type="hidden" id="productArr7"  value="{{$productArr[7]}}">
                        <input type="hidden" id="productArr8"  value="{{$productArr[8]}}">
                        <input type="hidden" id="productArr9"  value="{{$productArr[9]}}">
                        <input type="hidden" id="productArr10" value="{{$productArr[10]}}">
                        <input type="hidden" id="productArr11" value="{{$productArr[11]}}">
                        <input type="hidden" id="productArr12" value="{{$productArr[12]}}">

                        <input type="hidden" id="offerArr1"  value="{{$offerArr[1]}}">
                        <input type="hidden" id="offerArr2"  value="{{$offerArr[2]}}">
                        <input type="hidden" id="offerArr3"  value="{{$offerArr[3]}}">
                        <input type="hidden" id="offerArr4"  value="{{$offerArr[4]}}">
                        <input type="hidden" id="offerArr5"  value="{{$offerArr[5]}}">
                        <input type="hidden" id="offerArr6"  value="{{$offerArr[6]}}">
                        <input type="hidden" id="offerArr7"  value="{{$offerArr[7]}}">
                        <input type="hidden" id="offerArr8"  value="{{$offerArr[8]}}">
                        <input type="hidden" id="offerArr9"  value="{{$offerArr[9]}}">
                        <input type="hidden" id="offerArr10" value="{{$offerArr[10]}}">
                        <input type="hidden" id="offerArr11" value="{{$offerArr[11]}}">
                        <input type="hidden" id="offerArr12" value="{{$offerArr[12]}}">

                        <input type="hidden" id="taskArr1"  value="{{$taskArr[1]}}">
                        <input type="hidden" id="taskArr2"  value="{{$taskArr[2]}}">
                        <input type="hidden" id="taskArr3"  value="{{$taskArr[3]}}">
                        <input type="hidden" id="taskArr4"  value="{{$taskArr[4]}}">
                        <input type="hidden" id="taskArr5"  value="{{$taskArr[5]}}">
                        <input type="hidden" id="taskArr6"  value="{{$taskArr[6]}}">
                        <input type="hidden" id="taskArr7"  value="{{$taskArr[7]}}">
                        <input type="hidden" id="taskArr8"  value="{{$taskArr[8]}}">
                        <input type="hidden" id="taskArr9"  value="{{$taskArr[9]}}">
                        <input type="hidden" id="taskArr10" value="{{$taskArr[10]}}">
                        <input type="hidden" id="taskArr11" value="{{$taskArr[11]}}">
                        <input type="hidden" id="taskArr12" value="{{$taskArr[12]}}">
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">مهام ومواعيد العام </h4>
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card text-right" dir="rtl">
                <div class="card-header">
                    <strong class="card-title">اخر 9 المنتجات</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>الصورة</th>
                                    <th>الكود</th>
                                    <th>العنوان</th>
                                    <th>السعر</th>
                                    <th>التاريخ</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="text-center"><img src="{{$product->image->url}}" width="60" height="55"></td>
                                        <td>{{$product->code}}</td>
                                        <td>{{$product->title}}</td>
                                        <td>{{$product->price}} جنية</td>
                                        <td>{{$product->time_ago}}</td>
                                        <td class="dropdown">
                                            <button type="button" class="btn btn-primary"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-gear"></i>&nbsp; العمليات
                                            </button>
                                            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                                <a href="{{aurl('products/show/'.$product->id)}}" class="btn-block btn btn-info">
                                                    <i class="fa fa-external-link"></i>&nbsp; اظهار
                                                </a>
                                                <a href="{{aurl('products/edit/'.$product->id)}}" class="btn-block btn btn-success">
                                                    <i class="fa fa-edit"></i>&nbsp; تعديل
                                                </a>
                                                <button  class="btn-block btn btn-danger delete_product" data-id="{{ $product->id }}">
                                                    <i class="fa fa-trash-o"></i>&nbsp; حذف
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card text-right" dir="rtl">
                <div class="card-header">
                    <strong class="card-title">اخر 6 عروض</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatableid" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>الصورة</th>
                                    <th>المنتج</th>
                                    <th> السعر الجديد</th>
                                    <th>ينتهي في</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($offers as $offer)
                                    <tr>
                                        <td class="text-center"><img src="{{$offer->product->image->url}}" width="60" height="55"></td>
                                        <td>{{$offer->product->title}}</td>
                                        <td>{{$offer->price}} جنية</td>
                                        <td>{{$offer->time_ago}}</td>
                                        <td class="dropdown">
                                            <button type="button" class="btn btn-primary"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-gear"></i>&nbsp; العمليات
                                            </button>
                                            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                                <a href="{{aurl('products/show/'.$offer->product->id)}}" class="btn-block btn btn-info">
                                                    <i class="fa fa-external-link"></i>&nbsp; اظهار المنتج
                                                </a>
                                                <a href="{{aurl('offers/edit/'.$offer->id)}}" class="btn-block btn btn-success">
                                                    <i class="fa fa-edit"></i>&nbsp; تعديل
                                                </a>
                                                <button  class="btn-block btn btn-danger delete_product" data-id="{{ $offer->id }}">
                                                    <i class="fa fa-trash-o"></i>&nbsp; حذف
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .content -->
@push('script')
<script src="{{asset('admin')}}/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="{{asset('admin')}}/assets/js/init-scripts/chart-js/chartjs-init.js"></script>
<script src="{{asset('admin')}}/assets/js/widgets.js"></script>
@endpush
@endsection
