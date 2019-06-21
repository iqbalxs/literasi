<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ asset('/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('/plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
<!-- Delete confimation -->
<script>
      $(".delete").on("submit", function(){
            return confirm("Apakah anda yakin akan menghapus ini?");
      });
</script>
@yield('js')

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
