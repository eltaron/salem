@extends('web.layouts.app')
@section('content')
<section class="bg-img1 txt-center p-lr-15 p-tb-120" style="background-image: url('{{asset('web')}}/images/bg-7.jpeg')">
    <h2 class="ltext-105 cl0 txt-center">
        من نحن
    </h2>
</section>
<!-- End About Section -->
<!-- Content page -->
<section class="bg0 p-t-75 p-b-120">
    <div class="container">
        <div class="row p-b-148">
            <div class="col-md-7 col-lg-8">
                <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                    <h3 class="mtext-111 cl2 p-b-16">
                        <strong>من نحن؟</strong>
                    </h3>
                    <p style="font-size: 20px;width: 80%;line-height: 1.6;float: right;direction: rtl;">نقدم في محل سالم خدمة مميزة لتفصيل جميع الموديلات، متاح تفصيل أي تصميم، متاح جميع الألوان والمقاسات والأقمشة، يوجد ملابس جاهزة للبيع جملة وقطاعي.
            </p>
            <p class="mt-2" style="font-size: 20px;width: 80%;line-height: 1.6;float: right;direction: rtl;">استمتع بمنتجاتنا من:
            "قمصان، سويت شيرت، حريمي، جواكيت صيفي، جواكيت شتوي، تي شيرتات، بناطيل، بليزرات، بدل رجالي، بالطو، أطفال."</p>

                </div>
            </div>
            <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                <div class="how-bor1 ">
                    <div class="hov-img0">
                        <img src="{{asset('web')}}/images/logo.jpg" alt="IMG">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="about" class="about text-right"style="background-image: url('{{asset('web')}}/images/about2.jpg')">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                <h3 class="mb-3" style="color: #be9858;">متجر سالم لبيع الملابس</h3>
          <p style="font-size: 20px;width: 80%;line-height: 1.6;color: #d7dee5;    float: right;">نقدم في محل سالم خدمة مميزة لتفصيل جميع الموديلات، متاح تفصيل أي تصميم، متاح جميع الألوان والمقاسات والأقمشة، يوجد ملابس جاهزة للبيع جملة وقطاعي.
            </p>
            <p class="mt-2" style="font-size: 20px;width: 80%;line-height: 1.6;color: #d7dee5;    float: right;">استمتع بمنتجاتنا من:
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

</section>
@include('web.includes.contact')
@include('web.includes.footer_inner')
@endsection
