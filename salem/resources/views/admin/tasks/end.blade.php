@extends('admin.layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{aurl('/')}}">لوحة التحكم</a></li>
                    <li class="active">جميع المهام والمواعيد المنتهية</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>جميع المهام والمواعيد المنتهية</h1>
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
                    <strong class="card-title">جميع المهام والمواعيد المنتهية</strong>
                    <a href="{{aurl('tasks/add')}}" class="btn btn-primary text-light pull-left"><i class="fa fa-plus"></i> انشاء عرض المهام</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatableid" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>الموعد</th>
                                    <th>الوقت الذي يجب التسليم فية</th>
                                    <th>اسم المستلم</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ \Illuminate\Support\Str::limit($task->task, 20, '...') }}</td>
                                        <td>{{$task->time_ago}}</td>
                                        <td>{{$task->user_name}}</td>
                                        <td class="dropdown">
                                            <button type="button" class="btn btn-primary"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fa fa-gear"></i>&nbsp; العمليات
                                            </button>
                                            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                                <button class="btn-block btn btn-info show_task"
                                                data-task="{{ $task->task }}"
                                                data-description="{{ $task->description }}"
                                                data-dayToDeliver="{{ $task->dayToDeliver }}"
                                                data-user_name="{{ $task->user_name }}"
                                                data-user_phone="{{ $task->user_phone }}"
                                                data-quantity="{{ $task->quantity }}"
                                                data-image="{{ $task->image }}"
                                                data-time_ago="{{ $task->time_ago }}"
                                                >
                                                    <i class="fa fa-external-link"></i>&nbsp; اظهار الموعد
                                                </button>
                                                <a href="{{aurl('tasks/edit/'.$task->id)}}" class="btn-block btn btn-success">
                                                    <i class="fa fa-edit"></i>&nbsp; تعديل
                                                </a>
                                                <button  class="btn-block btn btn-danger delete_product" data-id="{{ $task->id }}">
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
                <h4 class="p-3 mb-4">هل حقا تريد حذف الموعد ؟</h4>
                <div class="row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{aurl('tasks/delete')}}" method="POST">
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
<div class="modal fade" id="show_productModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center pt-0">
                <div class="row">
                <div class="card w-100">
                    <img class="card-img-top" width="100%" id="productImg" src="">
                    <div class="card-body text-right" style="padding-bottom: 0 !important;">
                        <h4 class="card-title mb-3" id="productName"></h4>
                        <p class="card-text" id="productdescription"></p>
                        <small class="form-text text-muted">الكمية : <span id="orderquantity"></span></small>
                        <div class="weather-category twt-category" style="padding-bottom: 0 !important;">
                            <ul dir="rtl" class="pr-0">
                                <li class="active" style="border-right:0">
                                    المستلم
                                    <h6 id="user_name"></h6>
                                </li>
                                <li>
                                    رقم الهاتف للمستلم
                                    <h6 id="user_phone"></h6>
                                </li>
                                <li>
                                    موعد التسليم
                                    <h6 id="time_ago"></h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                <div class="row m-auto">
                    <div class="m-auto">
                        <button type="button" class="btn btn-info btn-block" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        اغلاق
                    </div>
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
        jQuery(".activate_product").click(function() {
            var id = jQuery(this).attr('data-id');
            jQuery("#product_id_2").val(id);
            jQuery("#activate_productModal").modal('toggle');
        });
        jQuery(".show_task").click(function() {
            var task        = jQuery(this).attr('data-task');
            var description = jQuery(this).attr('data-description');
            var user_name   = jQuery(this).attr('data-user_name');
            var user_phone  = jQuery(this).attr('data-user_phone');
            var quantity    = jQuery(this).attr('data-quantity');
            var image       = jQuery(this).attr('data-image');
            var time_ago    = jQuery(this).attr('data-time_ago');
            jQuery("#productImg").attr("src",image);
            jQuery('#productName').text(task);
            jQuery('#productdescription').text(description);
            jQuery('#orderquantity').text(quantity);
            jQuery('#time_ago').text(time_ago);
            jQuery('#user_name').text(user_name);
            jQuery('#user_phone').text(user_phone);
            jQuery("#show_productModal").modal('toggle');
        });
    });
</script>
@endpush
@endsection
