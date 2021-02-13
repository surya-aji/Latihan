<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <i class="ace-icon fa fa-check green"></i>
            Selamat datang di Aplikasi E - OFFICE
        </div>
        <center><?php
            if($HakAkses->sm == "W" OR $HakAkses->sm == "R"){?>
            <a href="./index.php?op=sm">
                <div class="infobox infobox-green">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-inbox"></i>
                    </div><?php
                    //statistik
                    $JlhArsipSM = $this->model->selectprepare("arsip_sm", $field=null, $params=null, $where=null, $order=null);?>
                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $JlhArsipSM->rowCount();?> Arsip</span>
                        <div class="infobox-content">Naskah Masuk</div>
                    </div>
                </div>
            </a><?php
            }
            if($HakAkses->sk == "W" OR $HakAkses->sk == "R"){?>
            <a href="./index.php?op=sk">
                <div class="infobox infobox-blue">
                    <div class="infobox-icon">
                        <i class="ace-icon fa fa-send-o"></i>
                    </div><?php
                    //statistik
                    $JlhArsipSK = $this->model->selectprepare("arsip_sk", $field=null, $params=null, $where=null, $order=null);?>
                    <div class="infobox-data">
                        <span class="infobox-data-number"><?php echo $JlhArsipSK->rowCount();?> Arsip</span>
                        <div class="infobox-content">Surat Keluar</div>
                    </div>
                </div>
            </a><?php
            }
            if($HakAkses->info == "Y"){
                $HitInfo = $this->model->selectprepare("info", $field=null, $params=null, $where=null, $order=null);?>
                <a href="./index.php?op=info">
                    <div class="infobox infobox-pink">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-comments-o"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number"><?php echo $HitInfo->rowCount();?></span>
                            <div class="infobox-content">Memo </div>
                        </div>
                    </div>
                </a><?php
            }
            if($HakAkses->arsip == "W" OR $HakAkses->arsip == "R"){
                $arsip_file = $this->model->selectprepare("arsip_file", $field=null, $params=null, $where=null, $order=null);?>
                <a href="./index.php?op=arsip_file">
                    <div class="infobox infobox-red">
                        <div class="infobox-icon">
                            <i class="ace-icon fa fa-book"></i>
                        </div>

                        <div class="infobox-data">
                            <span class="infobox-data-number"><?php echo $arsip_file->rowCount();?> Arsip</span>
                            <div class="infobox-content">File Digital </div>
                        </div>
                    </div>
                </a><?php
            }?>
        </center>
    </div>
</div><!-- /.row -->