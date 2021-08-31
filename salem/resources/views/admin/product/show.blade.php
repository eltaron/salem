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
    <div class="row p-3">
        <section class="card w-100">
            <div class="card-header">
                <strong>تفاصيل المنتج</strong>
            </div>
            <div class="twt-feed">
                <div class="media w-100">
                    <div class="row w-100">
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @foreach ($images as $i => $image)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active' : ''}}"></li>
                                    @endforeach
                                </ol>
                                <div class="carousel-inner">
                                    @foreach ($images as $i => $image)
                                        <div class="carousel-item {{$i == 0 ? 'active' : ''}}">
                                            <img src="{{$image->url}}" class="d-block w-100" height="300">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3" style="color: #0c0b09;">{{$product->title}}</h3>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weather-category twt-category">
                <ul>
                    <li class="active" style="border-right:0">
                        الكود
                        <h5>{{$product->code}}</h5>
                    </li>
                    <li>
                        السعر
                        <h5>{{$product->price}} جنية</h5>
                    </li>
                    <li>
                        القسم
                        <h5>{{$product->category->title}}</h5>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="row p-3">
        <div class="card w-100">
            <div class="card-header">
                <strong>جميع التعليقات الخاصة بالمنتج</strong>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatableid" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>التعليق</th>
                                <th>المستخدم</th>
                                <th>الايميل</th>
                                <th>التاريخ</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr>
                                    <td>{{ \Illuminate\Support\Str::limit($comment->comment, 20, '...') }}</td>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->emai}}</td>
                                    <td>{{$comment->time_ago}}</td>
                                    <td class="dropdown">
                                        <button type="button" class="btn btn-primary"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-gear"></i>&nbsp; العمليات
                                        </button>
                                        <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton">
                                            <button class="btn-block btn btn-info show_comment" data-comment="{{ $comment->comment }}">
                                                <i class="fa fa-external-link"></i>&nbsp; اظهار
                                            </button>
                                            <button  class="btn-block btn btn-danger delete_comment" data-id="{{ $comment->id }}">
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
<div class="modal fade" id="deletecommentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <h4 class="p-3 mb-4">هل حقا تريد حذف التعليق ؟</h4>
                <div class="row" style="max-width: 170px; margin: 0 auto;">
                    <form action="{{aurl('products/deleteComment')}}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" id="comment_id">
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
<div class="modal fade" id="showCommentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center font-18">
                <div class="row d-block" style=" margin: 0 auto;">
                            <h4 class="card-title mb-3">تفاصيل التعليق</h4>
                            <p id="comment_show"></p>
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
        jQuery(".delete_image").click(function() {
            var id       = jQuery(this).attr('data-id');
            jQuery("#product_id").val(id);
            jQuery("#deleteModal").modal('toggle');
        });
        jQuery(".delete_comment").click(function() {
            var id       = jQuery(this).attr('data-id');
            jQuery("#comment_id").val(id);
            jQuery("#deletecommentModal").modal('toggle');
        });
        jQuery(".show_comment").click(function() {
            var comment       = jQuery(this).attr('data-comment');
            jQuery("#comment_show").text(comment);
            jQuery("#showCommentModal").modal('toggle');
        });
    });
</script>
@endpush
@endsection
