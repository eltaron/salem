<section class="bg4 p-t-50 p-b-116" id="contact">
    <div class="container">
        <div class="p-b-10 mb-2 text-right">
            <h3 class="ltext-103 cl5 ">
                تواصل معنا
            </h3>
        </div>
        <div class="flex-w flex-tr" dir="rtl">
            <div class="w-full" style="box-shadow: 0 0 2rem rgb(0 0 0 / 10%);">
                <div class="flex-w w-full p-b-42">
                    <div data-aos="fade-up" style="width: 100%">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d882.8701215350308!2d30.9395258!3d31.1141769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7abd42a5e5e37%3A0x7dd12996e9e69c!2z2YXYrdmEINiz2KfZhNmFINin2YTYqtix2LLZiQ!5e1!3m2!1sar!2seg!4v1630343514057!5m2!1sar!2seg" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-lr-15-lg p-lr-70 mt-5">
                        <div class="flex-w w-full p-b-42">
                            <span class="fs-18 cl5 txt-center size-211">
                                <i class="zmdi zmdi-google-maps main_i"></i>
                            </span>
                            <div class="size-212 p-t-2 pr-3">
                                <span class="mtext-110 cl2">
                                    العنوان
                                </span>
                                <p class="stext-115 cl1 size-213 p-t-18">
                                    شارع الخلفاء الراشدين عمارة الخياط بمحافظة كفر الشيخ
                                </p>
                            </div>
                        </div>
                        <div class="flex-w w-full p-b-42">
                            <span class="fs-18 cl5 txt-center size-211">
                                <i class="zmdi zmdi-smartphone-android main_i"></i>
                            </span>
                            <div class="size-212 p-t-2 pr-3">
                                <span class="mtext-110 cl2">
                                    الهاتف
                                </span>
                                <p class="stext-115 cl1 size-213 p-t-18">
                                    01064142161
                                </p>
                            </div>
                        </div>
                        <div class="flex-w w-full">
                            <span class="fs-18 cl5 txt-center size-211">
                                <i class="zmdi zmdi-email main_i"></i>
                            </span>
                            <div class="size-212 p-t-2 pr-3 mb-3">
                                <span class="mtext-110 cl2">
                                    البريد الإلكترونى
                                </span>
                                <p class="stext-115 cl1 size-213 p-t-18">
                                    salem.store.1980@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="{{url('contact')}}" method="POST" class="p-lr-70 p-t-5 p-b-70 p-lr-15-lg">
                            @csrf
                            <h4 class="mtext-105 cl2 txt-center p-b-30">
                                تواصل برسالة
                            </h4>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="username" required placeholder="اسم المستخدم">
                                <img class="how-pos4 pointer-none" src="{{asset('web')}}/images/icons/icon-user.png" alt="ICON">
                            </div>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="البريد الألكترونى">
                                <img class="how-pos4 pointer-none" src="{{asset('web')}}/images/icons/icon-email.png" alt="ICON">
                            </div>
                            <div class="bor8 m-b-20 how-pos4-parent">
                                <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="number" name="phone" placeholder="رقم الهاتف">
                                <img class="how-pos4 pointer-none" src="{{asset('web')}}/images/icons/icon-phone.png" alt="ICON">
                            </div>
                            <div class="bor8 m-b-30">
                                <textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="رسالتك"></textarea>
                            </div>
                            <button type="submit" class="flex-c-m stext-101 cl0 size-121 bg12 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                                إرسال
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
