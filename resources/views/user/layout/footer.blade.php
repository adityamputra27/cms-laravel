<div class="footer">
    <div class="container justify-content-center mt-3">
        <div class="text text-center">
        	<p class="text-dark">&copy; Copyright BelajarKoding {{ date('Y') }}</p>
        </div>
    </div>
</div>
<script src="{{ asset('assets') }}/user/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/user/vendor/bootstrap/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/user/vendor/aos/aos.js"></script>
<script src="{{ asset('assets') }}/user/vendor/aos/script.js"></script>
<script src="{{ asset('assets') }}/user/plugins/granim/dist/granim.min.js"></script>
<script src="{{ asset('assets') }}/admin/plugins/prism/prism.js"></script>
<script src="{{ asset('assets') }}/user/plugins/highlight-master/src/highlight.pack.js"></script>
<script src="{{ asset('assets') }}/user/plugins/highlight-master/src/script.js"></script>
<script src="{{ asset('assets') }}/user/vendor/main/script.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
@section('js')
@show
</body>
</html>