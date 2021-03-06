<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

$data = $ARSql->getOne('read_coc','id_rcoc',$_GET['id']);
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
            <h5>COC</h5>
        </div>
        <div class="box-content">
            <form enctype="multipart/form-data" action="admin.php?mod_apps=report&media_app=coc&action=aksi_coc" method="post">
    
        
        <div class="row">
            <div class="span7">
                <div class="alert alert-block alert-info">
            <h2>Edit COC :</h2>
            <p>
                Masukan data pada setiap field dengan katentuan tanda <b>*</b> adalah mutlak atau harus diisi tidak boleh sampai null/kosong.
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
                    <legend><span class="badge badge-info"> Informasi COC</span><?php echo btnBack('report', 'coc');?></legend><br>
                     <div class="control-group ">
                        <label class="control-label">Unit <span class="required">*</span></label>
                        <div class="controls">   
                            <input required name="d" value="<?php echo $data->unit;?>" class="span8" type="text">

                        </div>
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Description <span class="required">*</span></label>
                        <div class="controls">  
                             <input type="hidden" name="id_coc" value="<?php echo $data->id_rcoc;?>">
                             <textarea required name="a"  class="span8 ckeditor" type="text"><?php echo $data->readness;?></textarea>

                        </div>
                    
                    </div>
                     <div class="control-group ">
                        <label class="control-label">Tahun <span class="required">*</span></label>
                        <div class="controls">   
                            <input required name="b" value="<?php echo $data->tahun;?>" class="span2" type="text">

                        </div>
                    </div>
                      <div class="control-group ">
                        <label class="control-label">Keterangan<span class="required">*</span></label>
                        <div class="controls">
                            
                            <textarea id="current-pass-control"  required name="c" class="ckeditor" type="text" ><?php echo $data->ket;?></textarea>

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
                        <label class="control-label">Upload File <span class="required">*</span></label>
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

