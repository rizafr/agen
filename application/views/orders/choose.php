<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-chosen.css" />
	<link href="<?php echo base_url(); ?>css/date.css" rel="stylesheet">
<div class="row">
	<div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Historis Order</h3>
		<div class="panel panel-default">
		<?php 
		if($this->session->flashdata('alert') == TRUE)
		{
			$msg = $this->session->flashdata('alert');
		?>
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			  <div class="modal-content">
				  <div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title"><?php echo $msg['title']; ?></h4>
				  </div>
				  <div class="modal-body">

					  <?php echo $msg['msg']; ?>

				  </div>
				  <div class="modal-footer">
					  <button data-dismiss="modal" class="btn <?php echo ($msg['status'] == 0 ? 'btn-danger' : 'btn-primary'); ?>" type="button">Close</button>
				  </div>
			  </div>
		  </div>
		</div>
		<!-- modal -->
		<?php
		}
		?>
			<div class="panel-heading">
				<h2><strong>Pilih historis order yang akan di-tracking</strong></h2>
			</div>
			
			<div class="panel-body-map">
			
			<div class="col-lg-3">
			
			</div>
			
			<div class="col-lg-6">
			
			<form role="form" class="form-horizontal" action="<?php echo base_url(); ?>order/logs" method="post">
			  ``<div class="form-group">
				  <label class="control-label col-lg-5" for="exampleInputEmail2"><b>Pilih Berdasarkan</b></label>
				  <div class="col-lg-5">
				  <!--<input type="email" class="form-control" id="demo-input-local" placeholder="Enter Customer">-->
				  <select class="form-control" name="subjek" onchange="this.form.submit()">
					<option value="" >Pilih</option>
					<option value="customers">Pelanggan</option>
					<option value="couriers">Pengantar</option>
				  </select>
				  </div>
				</div>
			</form>
			
			</div>
			
			<div class="col-lg-3">
			
			</div>
	
			</div>
		</div>
	</div>
</div>