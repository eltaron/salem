@extends('admin.layouts.app')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-8">
        <div class="page-header float-left">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{aurl('/')}}">لوحة التحكم</a></li>
                    <li class="active">جميع الاقسام</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="page-header">
            <div class="page-title">
                <h1>جميع الاقسام</h1>
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
                    <strong class="card-title">جميع الاقسام</strong>
                    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary text-light pull-left"><i class="fa fa-plus"></i> انشاء قسم جديد</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatableid" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>القسم</th>
                                    <th>النوع</th>
                                    <th>تاريخ الانشاء</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td class="{{$category->parent == 0 ? 'text-success' : 'text-primary'}}">{{$category->parent == 0 ? 'رئيسي' : 'فرعى'}}</td>
                                        <td>{{$category->time_ago}}</td>
                                        <td class="text-center">
                                            <button  class="btn btn-danger delete_product" data-id="{{ $category->id }}">
                                                <i class="fa fa-trash-o"></i>&nbsp; حذف
                                            </button>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-right" dir="rtl">
            <div class="modal-header bg-primary text-light">
                <h5 class="modal-title" id="exampleModalLongTitle">اضافة قسم جديد</h5>
            </div>
            <form action="{{aurl('categories/add')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <h5><label for="recipient-name" class="col-form-label">اسم القسم :</label></h5>
                        <input type="text" class="form-control" id="recipient-name" name="name" required placeholder="اسم القسم">
                    </div>
                    <div class="form-group">
                        <h5><label for="message-text" class="col-form-label">نوع القسم :</label></h5>
                        <select id="select" class="form-control" name="parent" required>
                            <option disabled>اختر القسم</option>
                            <option value="0">قسم رئيسي</option>
                            @foreach ($maincategories as $maincategory)
                                <option value="{{$maincategory->id}}">{{$maincategory->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary ml-3">اضافة القسم</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="p-3 mb-4">هل حقا تريد حذف القسم ؟</h4>
                <div class="row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{aurl('categories/delete')}}" method="POST">
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
