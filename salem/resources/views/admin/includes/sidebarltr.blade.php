<aside id="left-panel" class="left-panel d-block d-md-none">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{asset('admin')}}/images/logo.png" style="width: 100%"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('admin')}}/images/logo2.png" alt="Logo"></a>
        </div>
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <h3 class="menu-title">الرئيسية</h3>
                <li class="active">
                    <a href="{{aurl('/')}}"> <i class="menu-icon fa fa-dashboard"></i>الرئيسية </a>
                </li>
                <li>
                    <a href="{{aurl('categories')}}"> <i class="menu-icon fa fa-stack-exchange"></i>الاقسام </a>
                </li>
                <h3 class="menu-title">جميع المنتجات</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>المنتجات</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-th"></i><a href="{{aurl('products')}}">كل المنتجات</a></li>
                        <li><i class="fa fa-plus-square-o"></i><a href="{{aurl('products/add')}}">اضافة منتج جديد</a></li>
                    </ul>
                </li>
                <li  class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gift"></i>كل العروض </a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-offers"></i><a href="{{aurl('offers')}}">كل العروض</a></li>
                        <li><i class="fa fa-plus-square-o"></i><a href="{{aurl('offers/add')}}">اضافة عرض جديد</a></li>
                    </ul>
                </li>
                <li  class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit"></i>المهام والمواعيد</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-edit"></i><a href="{{aurl('tasks')}}">المهام والمواعيد المعلقة</a></li>
                        <li><i class="fa fa-edit"></i><a href="{{aurl('tasks/end')}}">المهام والمواعيد المنتهية</a></li>
                        <li><i class="fa fa-plus-square-o"></i><a href="{{aurl('tasks/add')}}">اضافة موعد جديد</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">الحساب</h3><!-- /.menu-title -->
                <li>
                    <a href="{{aurl('messages')}}"> <i class="menu-icon fa fa-envelope"></i>جميع الرسائل </a>
                    <a href="{{url('')}}"> <i class="menu-icon fa fa-desktop"></i>واجة الموقع </a>
                    <a href="{{aurl('logout')}}"> <i class="menu-icon fa fa-power-off"></i>تسجيل الخروج </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
