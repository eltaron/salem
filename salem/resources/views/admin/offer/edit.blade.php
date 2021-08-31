@extends('admin.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('admin')}}/vendors/chosen/chosen.min.css">
@endpush
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{aurl('/')}}">لوحة التحكم</a></li>
                    <li class="active">تعديل عرض جديد</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>تعديل عرض جديد</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <form action="{{aurl('offers/edit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="offer_id" value="{{$offer->id}}">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>تعديل العرض</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">المنتج</label>
                            <div class="input-group">
                                <select data-placeholder="اختر المنتج" name="product"  class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    @foreach ($products as $product)
                                    <option value="{{$product->id}}" {{$product->id == $offer->product_id ? 'selected' : ''}}>{{$product->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">سعر العرض</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="number" class="form-control" name="price"  value="{{$offer->price}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وقت انتهاء العرض</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="datetime-local" class="form-control" name="end_at"  value="{{ date('Y-m-d\TH:i', strtotime($offer->end_at)) }}">
                            </div>
                            <small class="form-text text-muted">{{$offer->time_ago}}</small>
                        </div>
                        <button type="submit" class="btn btn-primary float-left">
                            <i class="fa fa-dot-circle-o"></i> انشاء العرض
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@push('script')
<script src="{{asset('admin')}}/vendors/chosen/chosen.jquery.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
@endpush
@endsection
