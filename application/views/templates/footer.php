 </div>
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
    </div>
</div>
</div>


   <!--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets') ?>/vendor/jquery/jquery.min.js"></script>

    <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    <script>

        $(document).ready(function(){
            $('#tablepenulis').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" :[],
                "ajax" : {
                    "url" : "<?= base_url('admin/getData'); ?>",
                    "type" : "POST"
                },
                "columnDefs":[{
                    "target" :[0],
                    "orderable" :false,
                }],
            });
        });
        $(document).ready(function(){
            $('#tablemenu').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" :[],
                "ajax" : {
                    "url" : "<?= base_url('admin/getDataMenu'); ?>",
                    "type" : "POST"
                },
                "columnDefs":[{
                    "target" :[0],
                    "orderable" :false,
                }],
            });
        });

        $(document).ready(function(){
            $('#tableactiviti').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" :[],
                "ajax" : {
                    "url" : "<?= base_url('admin/getDataActiviti'); ?>",
                    "type" : "POST"
                },
                "columnDefs":[{
                    "target" :[0],
                    "orderable" :false,
                }],
            });
        });



        // $(document).ready(function() {
        //     $('.tablehead').DataTable({
        //         "language" :{
        //            "sEmptyTable":    "Tidak Ada Data",
        //            "sProcessing":   "Sedang memproses...",
        //            "sLengthMenu":   "Tampilkan _MENU_  data",
        //            "sZeroRecords":  "Tidak ditemukan data yang sesuai",
        //            "sInfo":         "_END_ data dari total _TOTAL_ data",
        //            "sInfoEmpty":    "0 data",
        //            "sInfoFiltered": "(disaring dari _MAX_ data)",
        //            "sInfoPostFix":  "",
        //            "sSearch":       "Cari:",
        //            "sUrl":          "",
        //            "oPaginate": {
        //               "sFirst":    "Pertama",
        //               "sPrevious": "Kembali",
        //               "sNext":     "lanjut",
        //               "sLast":     "Terakhir"
        //           }

        //       }

        //   });

        // } );



    </script>



    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets') ?>/js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/vendor/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets')?>/vendor/datatables/dataTables.bootstrap4.min.js"></script>



    



    

</body>

</html>