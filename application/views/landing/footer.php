<!-- SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/smoothscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/landing/js/custom.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script>
  $(function() {
    $("#datatable_01").DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "dom": 'lfrtip',
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

</body>

</html>