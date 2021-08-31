@include('admin.includes.head')
@include('admin.includes.sidebarltr')
<div id="right-panel" class="right-panel">
@include('admin.includes.header')
@yield('content')
</div>
@include('admin.includes.sidebarrtl')
@include('admin.includes.footer')
