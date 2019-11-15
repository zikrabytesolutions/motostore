
    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
           Moto Store
        </span>
         2019-2020
    </footer>

</div>


<!-- Vendor scripts -->
<script src="<?= base_url('assets/vendor/jquery/dist/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/slimScroll/jquery.slimscroll.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/metisMenu/dist/metisMenu.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/iCheck/icheck.min.js')?>"></script>
<script src="<?= base_url('assets/vendor/sparkline/index.js')?>"></script>
<script src="<?= base_url('assets/vendor/summernote/dist/summernote.min.js')?>"></script>

<!-- App scripts -->
<script src="<?= base_url('assets/scripts/homer.js')?>"></script>


<script>

$(function () {

    // Initialize summernote plugin
    $('.summernote').summernote();

});

</script>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>

</html>