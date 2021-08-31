    <script src="{{asset('web')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="{{asset('web')}}/vendor/animsition/js/animsition.min.js"></script>
	<script src="{{asset('web')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{asset('web')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('web')}}/vendor/slick/slick.min.js"></script>
	<script src="{{asset('web')}}/js/slick-custom.js"></script>
	<script src="{{asset('web')}}/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="{{asset('web')}}/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.toast__close').click(function(e){
                e.preventDefault();
                var parent = $(this).parent('.toast');
                parent.fadeOut("slow", function() { $(this).remove(); } );
            });
            $('#show_item').click(function(e){
                $(this).next('.main_item').toggleClass('view_specific_item')
            });
        });
    </script>
    @stack('script')
</body>
</html>
