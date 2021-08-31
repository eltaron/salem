@extends('admin.layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{aurl('/')}}">لوحة التحكم</a></li>
                    <li class="active">جميع العروض</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>جميع العروض</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-right" dir="rtl">
                <div class="card-header">
                    <strong class="card-title">جميع العروض</strong>
                    <a href="{{aurl('offers/add')}}" class="btn btn-primary text-light pull-left"><i class="fa fa-plus"></i> انشاء عرض جديد</a>
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
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="p-3 mb-4">هل حقا تريد حذف العرض ؟</h4>
                <div class="row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{aurl('offers/delete')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id">
                        <div class="row">
                            <div class="col-6">
                                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                لا تحذف
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-danger btn-block "><i class="fa fa-check"></i></button>
                                حذف
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
<script>
    jQuery(document).ready(function() {
        jQuery(".delete_product").click(function() {
            var id = jQuery(this).attr('data-id');
            jQuery("#product_id").val(id);
            jQuery("#deleteModal").modal('toggle');
        });
    });
</script>
@endpush
@endsection
