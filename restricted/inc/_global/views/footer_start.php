<!-- Codebase Core JS -->
<script src="../<?php echo $cb->assets_folder; ?>/js/codebase.core.min.js"></script>

<!-- Codebase JS -->
<?php $cb->get_js('js/codebase.app.min.js'); ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/select2/js/select2.full.min.js'); ?>

<?php $cb->get_js('js/plugins/jquery-validation/jquery.validate.min.js'); ?>
<?php $cb->get_js('js/plugins/jquery-validation/additional-methods.js'); ?>
<?php $cb->get_js('js/plugins/datatables/jquery.dataTables.min.js'); ?>
<?php $cb->get_js('js/plugins/datatables/dataTables.bootstrap4.min.js'); ?>
<?php $cb->get_js('js/plugins/sweetalert2/sweetalert2.min.js'); ?>


<!-- Page JS Helpers (Select2 plugin) -->
<script>jQuery(function(){ Codebase.helpers('select2'); }); </script>

<!-- Page JS Code -->
<?php $cb->get_js('js/pages/be_forms_validation.min.js'); ?>
<?php $cb->get_js('js/pages/be_tables_datatables.min.js'); ?>

        <script type="text/javascript">
            $(document).ready(function(){
            //$('.dataAkun').load("data.php");
            $("#subAkun").click(function(){
                var data = $('.form-tambah-user').serialize();
                var username = document.getElementById("username").value;
                var nama = document.getElementById("nama").value;
                var katasandi = document.getElementById("katasandi").value;
                var email = document.getElementById("email").value;
                var akses = document.getElementById("akses").value;
               

                if (username!="" && nama!="") {
                    $.ajax({
                        type: 'POST',
                        url: "akun-tambah.php",
                        data: data,
                        success: function() {
                            swal("Success!", "Message sent!", "success");   
                            $('.dataAkun').load("akun-data.php");
                            document.getElementById("id").value = "";
                            document.getElementById("form-tambah-user").reset();
                        }
                    });
                }
                
            });
        });
        </script>

