@extends('admin.layouts.app')
@push('styles')
<link rel="stylesheet" href="{{asset('admin')}}/vendors/chosen/chosen.min.css">
<style>

</style>
@endpush
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{aurl('/')}}">لوحة التحكم</a></li>
                    <li class="active">{{$product->title}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>{{$product->title}}</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <form action="{{aurl('products/edit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>تعديل منتج</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">عنوان المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                <input type="text" class="form-control" name="name" value="{{$product->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وصف المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-list-alt"></i></div>
                                <textarea class="form-control" name="description">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">لون المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-adjust"></i></div>
                                <input type="color" class="form-control" name="color" value="{{$product->color}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class=" form-control-label">سعر المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="number" class="form-control" name="price" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file-multiple-input" class=" form-control-label">اختر صور للمنتج</label>
                            <input type="file" id="file-multiple-input" name="images[]" multiple="" class="form-control-file ">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">القسم</label>
                            <div class="input-group">
                                <select data-placeholder="اختر القسم" name="category" class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$product->category_id == $category->id ? 'selected' : ''}}>{{$category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" form-control-label">تفعيل التعليقات</label>
                                    <label class="switch switch-text switch-primary">
                                        <input type="checkbox" class="switch-input" name="allow_comment">
                                        <span data-on="On" data-off="Off" class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class=" form-control-label">تفعيل المنتج</label>
                                    <label class="switch switch-text switch-primary">
                                        <input type="checkbox" class="switch-input" name="status">
                                        <span data-on="On" data-off="Off" class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-left">
                            <i class="fa fa-dot-circle-o"></i> تعديل المنتج
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row p-3">
        <div class="card w-100">
            <div class="card-header">
                <strong>جميع الصور الخاصة بالمنتج</strong>
            </div>
            <div class="row p-3">
                @foreach ($images as $image)
                    <div class="col-md-3 p-3">
                        <div class="da-card box-shadow" style="border-radius: 10px;">
                            <div class="da-card-photo">
                                <img src="{{$image->url}}" height="180">
                                <div class="da-overlay">
                                    <div class="da-social">
                                    <h5 class="p-3 text-center color-white">{{$product->title}}</h5>
                                        <ul class="clearfix pr-0">
                                            <li style="list-style: none;"><a href="{{$image->url}}" data-fancybox="images"><i class="fa fa-picture-o"></i></a></li>
                                            <li style="list-style: none;"><a class="delete_image" style="cursor: pointer" data-id="{{ $image->id }}"><i class="fa fa-trash-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="p-3 mb-4">هل حقا تريد حذف الصورة ؟</h4>
                <div class="row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{aurl('products/deleteImage')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" id="product_id">
                        <input type="hidden" name="product" value="{{$product->id}}">
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
<script src="{{asset('admin')}}/vendors/chosen/chosen.jquery.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
    jQuery(document).ready(function() {
        jQuery(".delete_image").click(function() {
            var id       = jQuery(this).attr('data-id');
            jQuery("#product_id").val(id);
            jQuery("#deleteModal").modal('toggle');
        });
    });
</script>
@endpush
@endsection
