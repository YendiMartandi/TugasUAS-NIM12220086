<!-- <div> HALAMAN AWAL DASHBOARD </div> -->

<!-- Begin Page Content --> 
<div class="container-fluid"> 
    <!-- row ux--> 
    <div class="row"> 
        <div class="col-xl-3 col-md-6 mb-4"> 
            <div class="card border-left-danger shadow h-100 py-2 bg-primary"> 
                <div class="card-body"> 
                    <div class="row no-gutters align-items-center"> 
                        <div class="col mr-2"> 
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Data Anggota</div> 
                            <div class="h1 mb-0 font-weight-bold text-white"><?= 
                                $this->ModelUser->getUserWhere(['role_id' => 2])->num_rows(); ?></div> 
                        </div> 
                        <div class="col-auto"> 
                            <a href="<?= base_url('user/anggota'); ?>">
                                <i class="fas fa-users fa-3x text-warning"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>

        <div class="col-xl-3 col-md-6 mb-4"> 
            <div class="card border-left-primary shadow h-100 py-2 bg-warning"> 
                <div class="card-body"> 
                    <div class="row no-gutters align-items-center"> 
                        <div class="col mr-2"> 
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Buku</div> 
                            <div class="h1 mb-0 font-weight-bold text-white"> <?php 
                                $where = ['stok != 0']; 
                                $totalstok = $this->ModelBuku->total('stok', $where); 
                                echo $totalstok; ?> </div> 
                        </div> 
                            <div class="col-auto"> 
                                <a href="<?= base_url('buku'); ?>">
                                    <i class="fas fa-book fa-3x text-primary"></i>
                                </a> 
                            </div> 
                    </div> 
                </div> 
            </div> 
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 bg-danger"> 
                <div class="card-body"> 
                    <div class="row no-gutters align-items-center"> 
                        <div class="col mr-2"> 
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dipinjam</div> 
                            <div class="h1 mb-0 font-weight-bold text-white"> <?php 
                                $where = ['dipinjam != 0']; 
                                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where); 
                                echo $totaldipinjam; ?> 
                            </div>
                        </div> 
                        <div class="col-auto"> 
                            <a href="<?= base_url('pinjam'); ?>">
                                <i class="fas fa-user-tag fa-3x text-success"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div>

        <div class="col-xl-3 col-md-6 mb-4"> 
            <div class="card border-left-warning shadow h-100 py-2 bg-success"> 
                <div class="card-body"> 
                    <div class="row no-gutters align-items-center"> 
                        <div class="col mr-2"> 
                            <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dibooking</div> 
                            <div class="h1 mb-0 font-weight-bold text-white"> <?php 
                                $where = ['dibooking !=0']; 
                                $totaldibooking = $this->ModelBuku->total('dibooking', $where); 
                                echo $totaldibooking; ?> 
                            </div> 
                        </div> 
                        <div class="col-auto"> 
                            <a href="<?= base_url('pinjam/daftarBooking'); ?>">
                                <i class="fas fa-shopping-cart fa-3x text-danger"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    <!-- end row ux-->
</div> 
<!-- /.container-fluid --> 

</div> 
<!-- End of Main Content -->