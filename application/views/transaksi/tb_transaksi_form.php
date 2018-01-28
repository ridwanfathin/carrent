
<div class="content-wrapper">
        <section class="content-header">
            <h1>Halaman Pesanan Mobil<small>Detail Data</small></h1>
            <ol class="breadcrumb">
                <li>
                    <a href="#"><i class="fa fa-dashboard"></i> Level</a>
                </li>
                <li class="active">Here</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pesanan Mobil</h3>
                        </div>
                    <!-- </div> -->
                    <div class="box-body">         
                        <form action="<?php echo $action; ?>" method="post">
                    	    <div class="form-group">
                                <label for="NAMA_USER">NAMA USER</label>
                                <input type="text" class="form-control" name="NAMA_USER" id="NAMA_USER" placeholder="NAMA USER" required/>
                            </div>
                            <div class="form-group">
                                <label for="NIK">NIK</label>
                                <input type="int" class="form-control" name="NIK" id="NIK" placeholder="NIK" required/>
                            </div>
                            <div class="form-group">
                                <label for="MOBIL">MOBIL</label>
                                <select name="MOBIL" id="MOBIL" class="form-control" required>
                                    <option value="">Pilih Mobil</option>
                                    <?php 
                                    foreach($mobil as $m){ 
                                    ?>
                                      <option value="<?php echo $m->ID_MOBIL;?>"><?php echo $m->NAMA_MOBIL."(".$m->TAHUN_MOBIL.") Rp.".$m->HARGA_MOBIL;?></option>
                                    <?php } ?>
                                </select>
                            </div>                    	    
                            <div class="form-group">
                                <label for="TGL_SEWA">TGL SEWA</label>
                                <input type="date" class="form-control" name="TGL_SEWA" id="TGL_SEWA" placeholder="TGL ORDER" required/>
                            </div>
                             <div class="form-group">
                                <label for="TGL_AKHIR_PENYEWAAN">TGL AKHIR PENYEWAAN</label>
                                <input type="date" class="form-control" name="TGL_AKHIR_PENYEWAAN" id="TGL_AKHIR_PENYEWAAN" placeholder="TGL ORDER" required/>
                            </div>
                    	    <div class="form-group">
                                <label for="TOTAL_PEMBAYARAN">TOTAL PEMBAYARAN <?php echo form_error('TOTAL_PEMBAYARAN') ?></label>
                                <input type="decimal" class="form-control" name="TOTAL_PEMBAYARAN" id="TOTAL_PEMBAYARAN" placeholder="TOTAL PEMBAYARAN" value="<?php echo $TOTAL_PEMBAYARAN; ?>" />
                            </div>
                    	    <div class="form-group">
                                <label for="STATUS_PEMBAYARAN">STATUS PEMBAYARAN <?php echo form_error('STATUS_PEMBAYARAN') ?></label>
                                <!-- <input type="text" class="form-control" name="STATUS_PEMBAYARAN" id="STATUS_PEMBAYARAN" placeholder="STATUS PEMBAYARAN" value="<?php echo $STATUS_PEMBAYARAN; ?>" /> -->
                                <select class="form-control" name="STATUS_PEMBAYARAN" id="SSTATUS_PEMBAYARAN">
                                    <option value="0" <?php if ($STATUS_PEMBAYARAN==0) echo "selected" ?> >Belum Lunas</option>
                                    <option value="1" <?php if ($STATUS_PEMBAYARAN==1) echo "selected" ?> >Lunas</option>
                                </select> 
                            </div>
                    	    <!-- <div class="form-group">
                                <label for="int">STATUS TRANSAKSI <?php echo form_error('STATUS_TRANSAKSI') ?></label>
                                <input type="hidden" class="form-control" name="STATUS_TRANSAKSI" id="STATUS_TRANSAKSI" placeholder="STATUS TRANSAKSI" value="<?php echo $STATUS_TRANSAKSI; ?>" />
                            </div> -->
                    	    <!-- <input type="hidden" name="KODE_TRANSAKSI" value="<?php echo $KODE_TRANSAKSI; ?>" />  -->
                    	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                    	    <a href="<?php echo site_url('transaksi') ?>" class="btn btn-default">Cancel</a>
                	       </form>
                        </div>
                        </div>         
                    </div>
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->



