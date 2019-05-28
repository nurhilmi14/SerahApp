<h2 class="content-heading">Data User</h2>
        <div class="block">
            <div class="block block-mode-hidden">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Tambah <small> Data User</small></h3>
                    <div class="block-options">
                        <!-- To toggle block's content, just add the following properties to your button: data-toggle="block-option" data-action="content_toggle" -->
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <!-- Sign In Form -->
                    <div class="row justify-content-center px-5">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js -->
                            <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <form method="post" class="form-tambah-user" id="form-tambah-user">
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="username" name="username">
                                            <label>Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="nama" name="nama">
                                            <label>Nama Lengkap</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="password" class="form-control" id="katasandi" name="katasandi">
                                            <label>Kata Sandi</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material floating">
                                            <input type="text" class="form-control" id="email" name="email">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-material">
                                        <select class="form-control" id="akses" name="akses">
                                            <option value="0">Akun Biasa</option>
                                            <option value="1">Kasir Tempat Makan</option>
                                            <option value="2">Admin Tempat Makan</option>
                                            <option value="3">Administrator</option>
                                        </select>
                                        <label for="val-skill2">Hak Akses</label>
                                    </div>
                                </div><br>
                                <div class="form-group row gutters-tiny">
                                    <div class="col-12 mb-10">
                                        <button id=subAkun name="subAkun" class="tombol-simpan btn btn-block btn-square btn-noborder btn-primary">
                                            <i class="fa fa-plus"></i> Tambah Data
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
            </div>
        </div>

        <!-- Dynamic Table Full -->
        <div class="dataAkun">
            <!-- DataTableLoadJquery -->
            
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Table Data</small></h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Name</th>
                                <th class="d-none d-sm-table-cell">Username</th>
                                <th class="d-none d-sm-table-cell" style="width: 15%;">Email</th>
                                <th class="text-center" style="width: 15%;">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                                require '../koneksi.php';
                                $sql= "SELECT * FROM tbakun";
                                $qry= mysql_query($sql);
                                while($row= mysql_fetch_assoc($qry)){
                                    echo '
                                        <tr>
                                            <td class="text-center">'.$no.'</td>
                                            <td>'.$row['nama'].'</td>
                                            <td class="d-none d-sm-table-cell">'.$row['username'].'</td>
                                            <td class="d-none d-sm-table-cell">'.$row['email'].'</td>
                                    ';
                            ?>
                                
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                        <i class="fa fa-user"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php  
                                $no++;}
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->

        