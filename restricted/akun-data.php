
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