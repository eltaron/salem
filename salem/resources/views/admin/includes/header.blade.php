<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-12">
            <a id="menuToggle" class="menutoggle pull-right"><i class="fa fa fa-tasks"></i></a>
            <div class="header-right ">
                <h2 style="float: right;color: #878787;font-weight: bold;">لوحة التحكم</h2>
            </div>
            <div class="header-left">
                <div class="dropdown for-message">
                    <button class="btn btn-secondary dropdown-toggle" type="button"
                        id="message"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="count bg-primary">{{messages()->count()}}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="message">
                        <p class="red text-right">لديك {{messages()->count()}} من الرسايل</p>
                        @foreach (messages() as $item)
                            <a class="dropdown-item media bg-flat-color-1 p-3 mb-2" dir="rtl" href="{{aurl('messages')}}">
                                <span class="photo media-left"><img alt="avatar" src="{{asset('admin')}}/images/avatar/1.png"></span>
                                <span class="message media-body">
                                    <span class="name float-right"><strong>{{$item->name}}</strong></span>
                                    <p class="text-right" style=" color: #0c0b09 !important;">{{ \Illuminate\Support\Str::limit($item->message, 30, '...') }}</p>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="user-area  float-left">
                    <a href="{{aurl('logout')}}">
                        <i class="fa fa-sign-out fa-6" aria-hidden="true" style="font-size: 23px;padding: 9px;"></i>
                    </a>
                </div>
                <div class="user-area  float-left">
                    <a href="{{url('')}}">
                        <i class="fa fa-desktop fa-6" aria-hidden="true" style="font-size: 23px;padding: 9px;"></i>
                    </a>
                </div>
        </div>
    </div>
</header>
