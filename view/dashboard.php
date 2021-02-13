<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Selamat datang di Aplikasi <span class="text-primary">E - OFFICE</span></h4>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow">
        <!-- Arsip Surat Masuk -->
        <?php
        if($HakAkses->sm == "W" OR $HakAkses->sm == "R"){?>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Arsip Surat Masuk</h6>
                    </div>
                    <div class="row">
                    <div class="col-3">
                        <h1 class="text-primary">
                            <button class="btn btn-success btn-icon">
                                <i data-feather="send"></i>
                            </button>
                        </h1>
                    </div>
                    <div class="col-5">
                        <?php $JlhArsipSM = $this->model->selectprepare("arsip_sm", $field=null, $params=null, $where=null, $order=null);?>
                        <h3 class=" mt-2"><?php echo $JlhArsipSM->rowCount(); ?></h3>
                        <div class="d-flex align-items-baseline">
                        <a href="./index.php?op=sm" class="text-success">
                            <span>View</span>
                            <i data-feather="arrow-right" class="icon-sm mb-1"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php
        } ?>

      <!-- Arsip Surat Keluar -->
        <?php
        if($HakAkses->sk == "W" OR $HakAkses->sk == "R"){?>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Arsip Surat Keluar</h6>
                    </div>
                    <div class="row">
                    <div class="col-3">
                        <h1 class="text-primary">
                            <button class="btn btn-primary btn-icon">
                                <i data-feather="external-link"></i>
                            </button>
                        </h1>
                    </div>
                    <div class="col-5">
                        <?php
                        //statistik
                        $JlhArsipSK = $this->model->selectprepare("arsip_sk", $field=null, $params=null, $where=null, $order=null);?>
                        <h3 class=" mt-2"><?php echo $JlhArsipSK->rowCount(); ?></h3>
                        <div class="d-flex align-items-baseline">
                        <a href="./index.php?op=sk" class="text-success">
                            <span>View</span>
                            <i data-feather="arrow-right" class="icon-sm mb-1"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php
        } ?>
        
        <!-- Memo -->
        <?php
        if($HakAkses->info == "Y"){
            $HitInfo = $this->model->selectprepare("info", $field=null, $params=null, $where=null, $order=null);?>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Memo</h6>
                    </div>
                    <div class="row">
                    <div class="col-3">
                        <h1 class="text-primary">
                            <button class="btn btn-warning btn-icon text-white">
                                <i data-feather="book"></i>
                            </button>
                        </h1>
                    </div>
                    <div class="col-5">
                        <h3 class=" mt-2"><?php echo $HitInfo->rowCount();?></h3>
                        <div class="d-flex align-items-baseline">
                        <a href="./index.php?op=info" class="text-success">
                            <span>View</span>
                            <i data-feather="arrow-right" class="icon-sm mb-1"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php
        } ?>

        <!-- Arsip File Digital -->
        <?php
        if($HakAkses->arsip == "W" OR $HakAkses->arsip == "R"){
            $arsip_file = $this->model->selectprepare("arsip_file", $field=null, $params=null, $where=null, $order=null);?>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline">
                        <h6 class="card-title mb-0">Arsip File Digital</h6>
                    </div>
                    <div class="row">
                    <div class="col-3">
                        <h1 class="text-primary">
                            <button class="btn btn-secondary btn-icon">
                                <i data-feather="smartphone"></i>
                            </button>
                        </h1>
                    </div>
                    <div class="col-5">
                        <h3 class=" mt-2"><?php echo $arsip_file->rowCount();?></h3>
                        <div class="d-flex align-items-baseline">
                        <a href="./index.php?op=arsip_file" class="text-success">
                            <span>View</span>
                            <i data-feather="arrow-right" class="icon-sm mb-1"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        <?php
        } ?>

    </div>
  </div>
</div> <!-- row -->