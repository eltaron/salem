@extends('web.layouts.app')
@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{asset('web')}}/images/bg-6.jpeg')">
    <h2 class="ltext-105 cl0 txt-center">
        العروض
    </h2>
</section>
<section class="bg0 p-t-50" dir="rtl">
    <div class="container">
        <div class="p-b-10">
            <h3 class="ltext-103 cl5">
                أحدث العروض
            </h3>
        </div>
        <div class="flex-w flex-sb-m p-b-32">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-l-32 m-tb-5 how-active1" data-filter="*">
                    كل العروض
                </button>
                @foreach ($categories as $i => $category)
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-l-32 m-tb-5" data-filter=".{{$category->id}}">
                        {{$category->title}}
                    </button>
                @endforeach
            </div>
        </div>
        <div class="row isotope-grid">
            @foreach ($products as $product)
                @if ( date('Y-m-d H:i:s', strtotime($product->offer->end_at)) >= date('Y-m-d H:i:s'))
                    <div class="col-sm-6 col-md-4 col-lg-4 isotope-item {{$product->category->parent }}">
                        <div class="block2" style="    box-shadow: 0 0 1rem rgb(0 0 0 / 7%);">
                            <div class="block2-pic hov-img0  label-offer" data-label="{{$product->offer->time_ago}}">
                                <img src="{{$product->image->url}}" alt="IMG-PRODUCT">
                                <button
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn12 p-lr-15 trans-04 show_model"
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
                @endif
            @endforeach
        </div>
        <div class="flex-c-m flex-w w-full p-t-38">
            {{ $products->links('web.pagination.index') }}
        </div>
    </div>
</section>
@include('web.includes.contact')
<div class="modal fade wrap-modal1 js-modal1 p-t-60 p-b-20" id="show_modelModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="overlay-modal1 js-hide-modal1">
            </div>
            <div class="container">
                <div class="bg0 p-t-20 p-b-30 p-lr-15-lg how-pos3-parent">
                    <button class="how-pos3 hov3 trans-04 js-hide-modal1" data-dismiss="modal">
                        <img src="{{asset('web')}}/images/icons/icon-close.png" alt="CLOSE">
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
@endpush
@endsection
