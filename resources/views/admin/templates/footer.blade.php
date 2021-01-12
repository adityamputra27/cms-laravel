        <footer>
          <div class="pull-right">
            &copy; Copyright BelajarKoding {{ date('Y') }}
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
  <!-- TEMPLATE ASSETS -->

  <!-- jQuery -->
    <script src="{{ asset('assets') }}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets') }}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets') }}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets') }}/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets') }}/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets') }}/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets') }}/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets') }}/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{ asset('assets') }}/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets') }}/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets') }}/admin/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets') }}/admin/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets') }}/admin/vendors/moment/min/moment.min.js"></script>
    <script src="{{ asset('assets') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets') }}/admin/build/js/custom.min.js"></script>

  <!-- END TEMPLATE ASSETS -->
    
  <script src="{{ asset('assets') }}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets') }}/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script src="{{ asset('assets') }}/admin/bootstrap-notify/bootstrap-notify.min.js"></script>
  <script src="{{ asset('assets') }}/user/plugins/select2/select2.full.min.js"></script>
  <script src="{{ asset('assets') }}/admin/plugins/sweetalert/sweetalert2.all.min.js"></script>
  <script src="{{ asset('assets') }}/admin/plugins/ckeditor-with-plugins/ckeditor.js"></script>
  <script src="{{ asset('assets') }}/admin/plugins/prism/prism.js"></script>
  <script src="{{ asset('assets') }}/user/plugins/highlight-master/src/highlight.pack.js"></script>
  <script src="{{ asset('assets') }}/user/plugins/highlight-master/src/script.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  
  @section('js')
  @show
</body>
</html>