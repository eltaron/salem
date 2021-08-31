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
                    <li class="active">انشاء منتج جديد</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>انشاء منتج جديد</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <form action="{{aurl('products/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>انشاء منتج</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">عنوان المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                <input type="text" class="form-control" name="name" required placeholder="عنوان المنتج">
                            </div>
                            <small class="form-text text-muted">مثال : قميص سادة</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وصف المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-list-alt"></i></div>
                                <textarea class="form-control" name="description" placeholder="وصف المنتج"></textarea>
                            </div>
                            <small class="form-text text-muted">مثال : قميص سادة</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">لون المنتج</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-adjust"></i></div>
                                <input type="color" class="form-control" name="color" >
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
                                <input type="number" class="form-control" name="price" placeholder="سعر المنتج">
                            </div>
                            <small class="form-text text-muted">مثال : 500 جنية</small>
                        </div>
                        <div class="form-group">
                            <label for="file-multiple-input" class=" form-control-label">اختر صور للمنتج</label>
                            <input type="file" id="file-multiple-input" name="images[]" required multiple="" class="form-control-file ">
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">القسم</label>
                            <div class="input-group">
                                <select data-placeholder="اختر القسم" name="category" required class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
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
                            <i class="fa fa-dot-circle-o"></i> انشاء المنتج
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
