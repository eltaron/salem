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
                    <li class="active">انشاء موعد جديد</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>انشاء موعد جديد</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <form action="{{aurl('tasks/store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>انشاء موعد</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">عنوان الموعد</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                <input type="text" class="form-control" name="task" required placeholder="عنوان الموعد">
                            </div>
                            <small class="form-text text-muted">مثال :تسليم قميص سادة</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وصف الموعد</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-list-alt"></i></div>
                                <textarea class="form-control" name="description" placeholder="وصف الموعد"></textarea>
                            </div>
                            <small class="form-text text-muted">مثال :تسليم قميص سادة</small>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">الكمية</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-th"></i></div>
                                <input type="number" class="form-control" name="quantity" placeholder="عدد المنتجات">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file-multiple-input" class=" form-control-label">اختر صور للموعد</label>
                            <input type="file" id="file-multiple-input" name="images" class="form-control-file ">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label class=" form-control-label">اسم المستلم</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" class="form-control" name="user_name" placeholder="اسم المستلم">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">هاتف المستلم</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                <input type="number" class="form-control" name="user_phone" placeholder="هاتف المستلم">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وقت التسليم</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="datetime-local" class="form-control" name="dayToDeliver" placeholder="وقت التسليم">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-left">
                            <i class="fa fa-dot-circle-o"></i> انشاء الموعد
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
