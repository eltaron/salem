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
                    <li class="active">{{$task->task}}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>{{$task->task}}</h1>
            </div>
        </div>
    </div>
</div>
@include('admin.includes.messages')
<div class="content mt-3">
    <form action="{{aurl('tasks/edit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="task_id" value="{{$task->id}}">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <strong>تعديل موعد</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label class=" form-control-label">عنوان الموعد</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-file-text"></i></div>
                                <input type="text" class="form-control" name="task" value="{{$task->task}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وصف الموعد</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-list-alt"></i></div>
                                <textarea class="form-control" name="description">{{$task->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">الكمية</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-th"></i></div>
                                <input type="number" class="form-control" name="quantity" value="{{$task->quantity}}">
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
                                <input type="text" class="form-control" name="user_name" value="{{$task->user_name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">هاتف المستلم</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                <input type="number" class="form-control" name="user_phone" value="{{$task->user_phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class=" form-control-label">وقت التسليم</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                <input type="datetime-local" class="form-control" name="dayToDeliver" value="{{ date('Y-m-d\TH:i', strtotime($task->dayToDeliver)) }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-left">
                            <i class="fa fa-dot-circle-o"></i> تعديل الموعد
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
