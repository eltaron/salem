@extends('web.layouts.app')
@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('web')}}/images/slide-03.jpg')">
    <h2 class="ltext-105 cl0 txt-center">
        @empty($product)
            منتج غير موجود
        @else
            {{$product->title}}
        @endempty
    </h2>
</section>
@empty($product)
<div class="container mt-4">
    <div class="alert alert-warning alert-dismissible fade show" role="alert" dir="rtl">
        <h2 class="mb-2">عفوا</h2> هذا المنتج غير موجود.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;top: -2.75rem;font-size: 40px;">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@else
    <section class="sec-product-detail bg0 p-t-65 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 text-right">
                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                            {{$product->title}}
                        </h4>
                        <span class="mtext-106 cl2" style="color: #cda45e">
                            @if ($product->offer)
                            <span style="float: right">{{$product->offer->price}} </span> جنية <sub><del>{{$product->price}} جنية</del></sub>
                            @else
                            <span style="float: right"> {{$product->price}}</span> <sup> جنية</sup>
                            @endif
                        </span>
                        <p class="stext-102 cl3 p-t-23">
                            {{$product->description}}
                        </p>
                        <div class="p-t-33" >
                            <div class="flex-w flex-r-m p-b-10">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-7 " dir="ltr">
                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                        <div class="wrap-slick3 flex-sb flex-w mb-5">
                            <div class="wrap-slick3-dots"></div>
                            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
                                <div class="slick3 gallery-lb">
                                    @foreach ($images as $image)
                                        <div class="item-slick3" data-thumb="{{$image->url}}">
                                            <div class="wrap-pic-w pos-relative">
                                                <img src="{{$image->url}}" alt="IMG-PRODUCT" style="max-height: 580px;">
                                                <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{$image->url}}">
                                                    <i class="zmdi zmdi-photo-size-select-large"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bor10 p-t-43 p-b-40" dir="rtl" style="box-shadow: 0 0 2rem rgb(0 0 0 / 10%);">
                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item p-b-10">
                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">تفاصيل المنتج</a>
                        </li>

                        <li class="nav-item p-b-10">
                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">وصف المنتج</a>
                        </li>
                        @if ($product->allow_coment == 'On')
                            <li class="nav-item p-b-10">
                                <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">التعليقات</a>
                            </li>
                        @endif
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-43">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <div class="how-pos2 p-lr-15-md">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="mtext-108 cl2">QR Code</h5>
                                        <div class="form-group" style="background-color: #fff;padding: 20px;width:140px;">
                                            <input id="textMainQrcode2" type="text" value="https://www.all-traders.com/products/view/{{$product->id}}" hidden />
                                            <div id="qrcode2" style="width:100px; height:100px; margin:auto;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="mtext-108 cl2">وصف المنتج</h5>
                                        <p class="stext-102 cl3 p-t-23">
                                            {{$product->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="information" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto text-center">
                                    <ul class="p-lr-28 p-lr-15-sm">
                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                السعر
                                            </span>
                                            <span class="stext-102 cl6 size-206">
                                                @if ($product->offer)
                                                <span>{{$product->offer->price}}</span> جنية <sub><del>{{$product->price}} جنية</del></sub>
                                                @else
                                                <span>{{$product->price}}</span> <sup> جنية</sup>
                                                @endif
                                            </span>
                                        </li>
                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                الكود
                                            </span>
                                            <span class="stext-102 cl6 size-206">
                                                {{$product->code}}
                                            </span>
                                        </li>
                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                            اللون
                                            </span>
                                            <span class="stext-102 cl6 size-206">
                                                <input type="color" class="m-auto" value="{{$product->color}}" disabled>
                                            </span>
                                        </li>
                                        <li class="flex-w flex-t p-b-7">
                                            <span class="stext-102 cl3 size-205">
                                                المقاس
                                            </span>
                                            <span class="stext-102 cl6 size-206">
                                                XL, L, M, S
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if ($product->allow_coment == 'On')
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="row">
                                    <div class="col-12 p-5" style="padding-top: 0 !important">
                                        <div class="p-b-30 m-lr-15-sm">
                                            <!-- Review -->
                                            <div class="row">
                                                <div class="col-md-6 p-2">
                                                    <h5 class="mtext-108 cl2 p-b-7 mb-3">
                                                        جميع التعليقات
                                                    </h5>
                                                    @foreach ($comments as $comment)
                                                        <div class="flex-w flex-t p-b-20">
                                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
                                                                <img src="{{asset('web')}}/images/product-11.png" alt="AVATAR">
                                                            </div>
                                                            <div class="size-207 p-r-20">
                                                                <div class="flex-w flex-sb-m p-b-12">
                                                                    <span class="mtext-107 cl2">
                                                                        {{$comment->name}}
                                                                    </span>
                                                                </div>
                                                                <p class="stext-102 cl6">
                                                                    {{$comment->comment}}
                                                                </p>
                                                                <p class="stext-114 cl1">
                                                                    {{$comment->time_ago}}
                                                                </p>
                                                            </div>
                                                            <hr style="width: 100%">
                                                        </div>
                                                    @endforeach
                                                    {{ $comments->links('web.pagination.index') }}
                                                </div>
                                                <div class="col-md-6">
                                                    <form class="w-full" method="POST" action="{{url('comment')}}">
                                                        @csrf
                                                        <h5 class="mtext-108 cl2 p-b-7 mb-3">
                                                        اكتب تعليق
                                                        </h5>
                                                        <div class="row p-b-25">
                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                            <div class="col-12 p-b-5 mt-3">
                                                                <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" required name="review" placeholder="التعليق"></textarea>
                                                            </div>
                                                            <div class="col-sm-6 p-b-5 mt-3">
                                                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" required name="username" placeholder="الاسم">
                                                            </div>
                                                            <div class="col-sm-6 p-b-5 mt-3">
                                                                <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" type="text" name="email" placeholder="البريد الألكترونى">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="flex-c-m stext-101 cl0 size-112 bg12 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
                                                            أرسال
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- Add review -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endempty
<div class="container">
    <div class="p-b-10 mb-2 text-right">
        <h3 class="ltext-103 cl5 ">
            اخر المنتجات
        </h3>
    </div>
    <div class="m-t-10 p-b-40" dir="rtl">
        <div class="row isotope-grid">
            @foreach ($products as $product)
                <div class="col-sm-6 mb-3 col-md-4 col-lg-4 isotope-item {{$product->category->parent }}">
                    <div class="block2" style="    box-shadow: 0 0 1rem rgb(0 0 0 / 7%);">
                        <div class="block2-pic hov-img0  {{$product->allow_coment == 'On' ? 'label-new' : ''}}" {{$product->allow_coment == 'On' ? 'data-label=مميز' : ''}}>
                            <img src="{{$product->image->url}}" alt="IMG-PRODUCT">
                            <button
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 show_model"
                            data-title="{{ $product->title }}"
                            data-description="{{ $product->description }}"
                            data-price="{{ $product->price }}"
                            data-image="{{ $product->image->url }}"
                            data-href="{{url('products/'.$product->id)}}"
                            >
                                عرض سريع
                            </button>
                        </div>
                        <div class="block2-txt flex-w flex-t p-3">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$product->title}}
                                </a>
                                <span class="stext-105 cl3">
                                    {{$product->price}} جنية
                                </span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="{{url('products/'.$product->id)}}" style="color: #cda45e;">
                                    <i class="zmdi zmdi-mail-reply" style="font-size: 31px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('web.includes.contact')
<div class="modal fade wrap-modal1 js-modal1 p-t-60 p-b-20" id="show_modelModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="overlay-modal1 js-hide-modal1">
            </div>
            <div class="container">
                <div class="bg0 p-t-20 p-b-30 p-lr-15-lg how-pos3-parent">
                    <button class="how-pos3 hov3 trans-04 js-hide-modal1" data-dismiss="modal">
                        <img src="{{asset('web')}}/{{asset('web')}}/images/icons/icon-close.png" alt="CLOSE">
                    </button>
                    <div class="row">
                        <div class="col-12 text-right">
                            <div class="">
                                <img src="" id="productImg" alt="" style="width: 100%">
                                <h4 class="mtext-105 cl2 js-name-detail p-b-14 p-t-14" id="product_title" style="color:#cda45e">
                                </h4>
                                <div>
                                    <span class="mtext-106 cl2 mr-2">جنية</span>
                                    <span id="product_price" style="float: right;padding-top: 4px;"></span>
                                </div>
                                <p class="stext-102 cl3 p-t-23 p-b-23" id="product_description"></p>
                                <a href="" id="producthref" class="btn text-light"  style="border-radius:0;background-color:#cda45e">الذهاب للمنتج</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.includes.footer_inner')
@push('script')
<script>
    $(document).ready(function() {
        $(".show_model").click(function() {
            var title       = $(this).attr('data-title');
            var description = $(this).attr('data-description');
            var price       = $(this).attr('data-price');
            var href        = $(this).attr('data-href');
            var image       = $(this).attr('data-image');
            $("#product_title").text(title);
            $("#product_description").text(description);
            $("#product_price").text(price);
            $("#productImg").attr("src",image);
            $("#producthref").attr("href",href);
            $("#show_modelModal").modal('toggle');
        });
    });
</script>
<script src="{{ asset('web') }}/js/qrcode.js"></script>
<script type="text/javascript">
    var qrcode2 = new QRCode(document.getElementById("qrcode2"), {
        width : 100,
        height : 100
    });
    function makeCode () {
        var elText2 = document.getElementById("textMainQrcode2");
        if (!elText2.value) {
            alert("Input a text");
            elText2.focus();
            return;
        }
        qrcode2.makeCode(elText2.value);
    }
    makeCode();
    $("#textMainQrcode2").
        on("blur", function () {
            makeCode();
        }).
        on("keydown", function (e) {
            if (e.keyCode == 13) {
                makeCode();
            }
        });
</script>
@endpush
@endsection
