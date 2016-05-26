<?php
if(isset($param)){
	$file = strip_tags($param).".php";
	include $file;
}
else
{
	echo '
	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>

			<div class="col-md-12">	
				<div class="panel panel-default">
					<div class="panel-body">
						Selamat datang '.$this->session->userdata('name').'
					</div>
				</div>
			</div>
		</div>
	</div>
	';
?>
<div class="row">

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_tarif.png">
				<div class="card-title">Tarif</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_kirim_src.png">
				<div class="card-title">Jejak Lacak</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_kantorpos.png">
				<div class="card-title">Info Kode Pos</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_kantorpos2.png">
				<div class="card-title">Kantor Pos Terdekat</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">

		<div class="card">
			<div class="card-image">
				<a href="<?php echo base_url(); ?>pickupme">
					<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_pickme.png">
					<div class="card-title">Pickup Me</div>
				</a>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_payment.png">
				<div class="card-title">Pospay</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_wesel.png">
				<div class="card-title">Wesel / Remitance</div>
			</div>
		</div>
	</div>

	<div class="col-md-3 col-xs-4">
		<div class="card">
			<div class="card-image">
				<img class="img-responsive" src="<?php echo base_url(); ?>img/pic/icon_pickup_service.png">
				<div class="card-title">Pickup Agency</div>
			</div>
		</div>
	</div>

</div>
<?php
}
?>