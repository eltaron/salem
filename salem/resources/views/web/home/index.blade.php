@extends('web.layouts.app')
@section('content')
<section class="section-slide">
    <div class="wrap-slick1 rs2-slick1">
        <div class="slick1">
            <div class="item-slick1 bg-overlay1" style="background-image: url({{asset('web')}}/images/slide-05.jpg);" data-thumb="{{asset('web')}}/images/slide-05.jpg" data-caption="بليزرات">
                <div class="container h-full">
                    <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-202 txt-center cl0 respon2">
                                تصميمات جديدة تناسب أذواقكم
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                عروض مميزة
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="#contact" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                تواصل معنا الان
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slick1 bg-overlay1" style="background-image: url({{asset('web')}}/images/slide-02.jpg);" data-thumb="{{asset('web')}}/images/slide-02.jpg" data-caption=" قمصان وبناطيل">
                <div class="container h-full">
                    <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                            <span class="ltext-202 txt-center cl0 respon2">
                                كل ما هو جديد
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                أحدث صيحات الموضة
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                            <a href="#contact" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                تواصل معنا
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item-slick1 bg-overlay1" style="background-image: url({{asset('web')}}/images/slide-03.jpg);" data-thumb="{{asset('web')}}/images/slide-03.jpg" data-caption="بدل رجالى">
                <div class="container h-full">
                    <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                            <span class="ltext-202 txt-center cl0 respon2">
                                خصومات كبيرة
                            </span>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                            <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                موسم جديد ومميز
                            </h2>
                        </div>
                        <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                            <a href="#contact" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                سارع الان
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-slick1-dots p-lr-10"></div>
    </div>
</section>
<div class="sec-banner bg0 p-t-95 p-b-55" dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('web')}}/images/banner-01.jpg" alt="IMG-BANNER">
                    <a href="{{url('showProducts/4')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                بدل رجالى
                            </span>
                            <span class="block1-info stext-102 trans-04 text-light">
                                تصميمات حديثة
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                كل المنتجات
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('web')}}/images/banner-02.jpg" alt="IMG-BANNER">
                    <a href="{{url('showProducts/1')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                            قمصان
                            </span>
                            <span class="block1-info stext-102 trans-04 text-light">
                                تصميمات حديثة
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                كل المنتجات
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('web')}}/images/banner.jpeg" alt="IMG-BANNER">
                    <a href="{{url('showProducts/4')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8 text-light">
                                بليزرات
                            </span>
                            <span class="block1-info stext-102 trans-04">
                                تصميمات حديثة
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                كل المنتجات
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('web')}}/images/banner-03.jpg" alt="IMG-BANNER">
                    <a href="{{url('showProducts/8')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8 text-light">
                                بناطيل
                            </span>
                            <span class="block1-info stext-102 trans-04">
                                تصميمات حديثة
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                كل المنتجات
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                <div class="block1 wrap-pic-w">
                    <img src="{{asset('web')}}/images/banner.jpeg" alt="IMG-BANNER">
                    <a href="{{url('showProducts/5')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8 text-light">
                                جاكيت
                            </span>
                            <span class="block1-info stext-102 trans-04">
                                تصميمات حديثة
                            </span>
                        </div>
                        <div class="block1-txt-child2 p-b-4 trans-05">
                            <div class="block1-link stext-101 cl0 trans-09">
                                كل المنتجات
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div id="about" class="about text-right"style="background-image: url('{{asset('web')}}/images/about2.jpg')">
    <div class="container" data-aos="fade-up">
      <div class="row text-right" dir="rtl">
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3 class="mb-3" style="color: #be9858;">متجر سالم لبيع الملابس</h3>
          <p style="font-size: 20px;width: 80%;line-height: 1.6;color: #d7dee5;">نقدم في محل سالم خدمة مميزة لتفصيل جميع الموديلات، متاح تفصيل أي تصميم، متاح جميع الألوان والمقاسات والأقمشة، يوجد ملابس جاهزة للبيع جملة وقطاعي.
            </p>
            <p class="mt-2" style="font-size: 20px;width: 80%;line-height: 1.6;color: #d7dee5;">استمتع بمنتجاتنا من:
            "قمصان، سويت شيرت، حريمي، جواكيت صيفي، جواكيت شتوي، تي شيرتات، بناطيل، بليزرات، بدل رجالي، بالطو، أطفال."</p>
        </div>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{asset('web')}}/images/about.jpg" alt="">
          </div>
        </div>
      </div>

    </div>
</div>
<div class="container mt-5">
    <div class="p-b-10 mb-2 text-right">
        <h3 class="ltext-103 cl5 ">
            اخر العروض
        </h3>
    </div>
    <div class="m-t-10 p-b-40" dir="rtl">
        <div class="row isotope-grid">
            @foreach ($offers as $product)
                <div class="col-sm-6 mb-3 col-md-4 col-lg-4 isotope-item {{$product->category->parent }}">
                    <div class="block2" style="    box-shadow: 0 0 1rem rgb(0 0 0 / 7%);">
                        <div class="block2-pic hov-img0  label-offer" data-label="{{$product->offer->time_ago}}">
                            <img src="{{$product->image->url}}" alt="IMG-PRODUCT">
                            <button
                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 show_model"
                            data-title="{{ $product->title }}"
                            data-description="{{ $product->description }}"
                            data-price="{{ $product->offer->price }}"
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
                                    {{$product->offer->price}} جنية <sub><del>{{$product->price}} جنية</del></sub>
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
@include('web.includes.contact')
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
@endpush
@endsection
