@if ($errors->any())
<div class="col-md-12">
    <div class="alert alert-danger text-right" dir="rtl" role="alert">
        <h4 class="text-danger"><strong>يوجد خطأ</strong></h4>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{-- @foreach($errors->all() as $error)
        <p>* {{ $error }}</p>
        @endforeach --}}
    </div>
</div>
@endif

<div class="col-md-12">
    @if(session()->has('success'))
    <div class="alert alert-info alert-dismissible fade show text-right"  dir="rtl" role="alert">
        <strong>تم بنجاح</strong> {{ session('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    @endif
    @if(session()->has('faild'))
    <div class="alert alert-danger alert-dismissible fade show text-right"  dir="rtl" role="alert">
        <strong>يوجد خطأ</strong> {{ session('faild') }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
    @endif
</div>
