<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */
$data = $ARSql->getOne('produk','id_prod',$_GET['id']);
?>
<script type="text/javascript">
$(document).ready(function() {
	$(window).on('load', function(){
		$('html, body').delay(500).animate({scrollTop:120}, 500);
	});
});
</script>
<div class="row">
<div class="span16">
    <div class="box">
        <div class="box-header">
            <i class="icon-book"></i>
            <h5>Edit Peoduk</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=e-book&media_app=produk&action=aksi_produk" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit Produk :</h2>
            <p>
                Anda dapat mengubah data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
            </p>
        </div>
                <div class="alert alert-block alert-warning">
            <h2>File Upload :</h2>
            <p>
                Apabila Anda tidak ingin mengubah <i>file</i> yang telah di upload sebelumnya, Anda dapat mengosongkan pada field upload.
            </p>
        </div>
            </div>
            
            
            <div class="span7">
                <fieldset>
                    <legend>Informasi Produk <a href="admin.php?mod_apps=e-book&media_app=produk" style="font-weight: normal; margin-top: 5px;" class="pull-right btn-info btn btn-small"><i class="icon-circle-arrow-left"></i>&nbsp; Kembali</a></legend>
                    <div class="control-group ">
                        <label class="control-label">Merk <span class="required">*</span></label>
                        <div class="controls">
                            <input type="hidden" name="id_prod" value="<?php echo $data->id_prod;?>">
                            <input value="<?php echo $data->merk;?>" required name="merk" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Fungsi <span class="required">*</span></label>
                        <div class="controls">
                            <input value="<?php echo $data->fungsi;?>" required name="fungsi" class="span8" type="text" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Negara Asal <span class="required">*</span></label>
                        <div class="controls">
                            <input value="<?php echo $data->asal;?>" required name="negara" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Perusahaan / Agent <span class="required">*</span></label>
                        <div class="controls">
                            <input value="<?php echo $data->agent;?>" required name="agent" class="span8" type="text" value="" autocomplete="false">
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Contact Person <span class="required">*</span></label>
                        <div class="controls">
                            <input value="<?php echo $data->kontak;?>" required name="contact" class="span8" type="text" value="" autocomplete="false">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Keterangan <span class="required">*</span></label>
                        <div class="controls">
                            <textarea required name="ket" class="ckeditor"><?php echo $data->ket;?></textarea>

                        </div>
                    </div>
                      <?php
                    if($data->filename!='') {
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: #0080FF'><i class='icon-file'></i> $data->filename </em>
                            </p>
                         </div>
                         </div><br>";
                    }else{
                        echo"<div class='control-group'>
                            <label class='control-label'>Filename</label>
                            <div class='controls'>
                
                            <p>
                            <em style='color: red'><i class='icon-info-sign'></i> Tidak ada file yang di upload !</em>
                            </p>
                         </div>
                         </div><br>";
                    }
                    ?>
                  <div class="control-group ">
                        <label class="control-label">Upload File</label>
                        <div class="controls">
                            <input class="form-control" type="file" name="fupload">
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="submit_edit" value="CONFIRM">Save</button>&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="back();" value="CANCEL">Cancel</button>
        </footer>
            </form>
        </div>
    </div>
</div>
</div>
