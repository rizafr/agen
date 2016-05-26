<script type="text/javascript">
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
            $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>

<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Langkah 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Langkah 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Selesai</p>
            </div>
        </div>
    </div>
    <form role="form" action="<?php echo base_url();?>pickupme/create" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Langkah 1</h3>
                            <div class="form-group">
                                <label class="control-label">Nama Pengirim</label>
                                <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat pickup</label>
                                <textarea name="alamat_pickup"  class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat detail</label>
                                <textarea  class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                               <label class="control-label">Kota / Kab</label>
                               <div>
                                   <select name="kota" class="col-md-12">
                                       <option value="Jakarta">Jakarta</option>
                                       <option value="Bandung">Bandung</option>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="control-label">Kecamatan</label>
                               <div>
                                <select name="kecamatan" id="kecamatan" class="col-md-12">
                                    <option value="Campaka">-Pilih Kecamatan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Kode Pos</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Kode Pos"  />
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Langkah 2</h3>
                        <div class="form-group">
                            <label class="control-label">Nama Tujuan/Penerima</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Alamat Tujuan/Penerima</label>
                            <textarea name="alamat_delivery" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                           <label class="control-label">Kota / Kab</label>
                           <div>
                               <select name="kota" class="col-md-12">
                                   <option value="Jakarta">Jakarta</option>
                                   <option value="Bandung">Bandung</option>
                               </select>
                           </div>
                       </div>
                       <div class="form-group">
                           <label class="control-label">Kecamatan</label>
                           <div>
                            <select name="kecamatan" id="kecamatan" class="col-md-12">
                                <option value="Campaka">-Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Kode Pos</label>
                        <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Kode Pos"  />
                    </div>
                    <hr />
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Jenis Barang</label>
                            <input name="detail_barang" maxlength="100" type="text" required="required" class="form-control" />
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Berat (Gr)</label>
                            <input  maxlength="100" type="text" required="required" class="form-control"  />
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Panjang (Cm)</label>
                            <input  maxlength="100" type="text" required="required" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Tinggi (Cm)</label>
                            <input  maxlength="100" type="text" required="required" class="form-control"  />
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Lebar (Cm)</label>
                            <input  maxlength="100" type="text" required="required" class="form-control"  />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">Harga Kisaran (Rp)</label>
                            <input  maxlength="100" type="text" required="required" class="form-control"  />
                        </div>
                    </div>
                    <hr />
                    <button class="btn btn-primary nextBtn btn-lg pull-right ml5" type="button" >Next</button>
                    <button class="btn btn-info btn-lg pull-right" type="button" data-toggle="modal" data-target="#modalPrice">Cek Harga</button>
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                <h3> Selesai</h3>
                    <input type="submit" class="btn btn-success btn-lg pull-right" value="Finish!">
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</div>

<!-- Modal -->
<div class="modal fade" id="modalPrice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Info Harga</h4>
          </div>
          <div class="modal-body">

              Rp 25000

          </div>
          <div class="modal-footer">
              <button data-dismiss="modal" class="btn <?php echo ($msg['status'] == 0 ? 'btn-danger' : 'btn-primary'); ?>" type="button">Close</button>
          </div>
      </div>
  </div>
</div>
        <!-- modal -->