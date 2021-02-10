<!-- /.content-wrapper -->
<footer class="main-footer text-center">
    <strong>Copyright &copy; <?= date('Y') ?> <a href="http://adminlte.io" class="">KKN UAD unit XI.A.2</a></strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('./assets') ?>/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('./assets') ?>/AdminLTE/dist/js/demo.js"></script>

<!-- Error Sweetalert -->
<script src="<?= base_url('./assets') ?>/js/sweetalert2.all.min.js"></script>
<script src="<?= base_url('./assets') ?>/js/myscript.js"></script>

<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('./assets') ?>/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script>
    $(function() {
        $('#only-number').on('keydown', '#title', function(e) {
            -1 !== $
                .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
                (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
    })
</script>
<!-- page script -->

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>

</html>