
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="refresh" content="60">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>FRM.ICT.02_(Rev.05) – Laporan Backup Data Harian</title>
		<link rel="icon" href="<?=base_url() ?>assets/img/database-solid.svg">
		
		<!-- Custom fonts for this template-->
		<!--<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css" >-->
		<!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">-->

		<!-- Custom styles for this template-->
		<link href="<?=base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
		<style>
			.degree {
				position: absolute;
				left: 50%;
				transform: translate(-50%, 0);
				font-size: 40px;
				bottom: 0;
			}
		</style>
	</head>

	<body id="page-top">
		<!-- <a href="#" data-toggle="tooltip" title="Hooray!">Hover over me</a>-->
		<div class="container-fluid">		
		<br />
		<div class="align-items-right justify-content-between mb-4 text-right"><b></b></div>
		<br />
		<br />
			<div class="align-items-center justify-content-between mb-4 text-center">
				<a href="<?=base_url()?>">
					<img class="d-block mx-auto" src="<?=base_url() ?>assets/img/PT Tirta Varia Intipratama.png" alt="" width="72" height="72">
				</a>
				<h2 class="mb-0 text-gray-800"><?php echo strtoupper("Laporan Backup Data Harian") ?></h2>
				<p>Today: <?php  echo date('d-m-Y H:i:s')  ?></p>
			</div>
			
			
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<div class="row">
						<div class="col-md-6">
							<h6 class="m-0 font-weight-bold text-primary">Daily Report Backup Database</h6>
						</div>
						<div class="col-md-6">
							<h6 class="m-0 font-weight-bold text-primary text-right">FRM.ICT.02_(Rev.06)</h6>
						</div>
					</div>
					<h6 class="m-0 font-weight-bold text-primary"> </h6>
				</div>
							
				<div class="card-body">
					<div class="table-responsive">
					
					<table class="table table-bordered table-sm" >
						<thead class="text-center thead-dark">
							<tr>
								<th rowspan="2" scope="col">Bulan</th>
								<th rowspan="2" scope="col">Host</th>
								<th colspan="31" scope="col">Tanggal</th>
							</tr>	
							<tr>
<?php for ($i=1;$i<=9;$i++) { echo "<th>0".$i."</th>";}?>
<?php for ($j=10;$j<=31;$j++) { echo "<th>".$j."</th>";}?>
							</tr>&nbsp;
						</thead>
						<tbody class="thead-dark text-center">
          <!--=====================================================================================-->
<?php
//var_dump($bln);
$oct = date_create("2020-10-01");
$nov = date_create("2020-11-01");
$dec = date_create("2020-12-01");
$jan21 = date_create("2021-01-01");
$feb21 = date_create("2021-02-01");
$mar21 = date_create("2021-03-01");
$apr21 = date_create("2021-04-01");
$may21 = date_create("2021-05-01");
$jun21 = date_create("2021-06-01");
$jul21 = date_create("2021-07-01");
$agt21 = date_create("2021-08-01");
$sep21 = date_create("2021-09-01");
$okt21 = date_create("2021-10-01");
$nov21 = date_create("2021-11-01");


//var_dump($dmsasaapr21);
?>
<!--==========================================des23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $des23 = date_create("2023-12-01"); echo date_format($des23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasades23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasades23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipdes23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipdes23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisdes23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisdes23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterindes21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterindes23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutdes23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutdes23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustdes23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustdes23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================nov23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $nov23 = date_create("2023-11-01"); echo date_format($nov23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasanov23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasanov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipnov23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipnov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisnov23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisnov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinnov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutnov23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutnov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustnov23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustnov23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================okt23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $okt23 = date_create("2023-10-01"); echo date_format($okt23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasaokt23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasaokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipokt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisokt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutokt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustokt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustokt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================sep23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $sep23 = date_create("2023-09-01"); echo date_format($sep23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasasep23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasasep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipsep23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipsep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrissep23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrissep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinsep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutsep23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutsep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustsep23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustsep23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================agt23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $agt23 = date_create("2023-08-01"); echo date_format($agt23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasaagt23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasaagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipagt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisagt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutagt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustagt23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustagt23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================jul23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $jul23 = date_create("2023-07-01"); echo date_format($jul23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasajul23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasajul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipjul23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipjul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisjul23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisjul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinjul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutjul23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutjul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustjul23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustjul23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================jun23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $jun23 = date_create("2023-06-01"); echo date_format($jun23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasajun23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasajun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipjun23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipjun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisjun23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisjun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinjun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutjun23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutjun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustjun23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustjun23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================mei23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $may23 = date_create("2023-05-01"); echo date_format($may23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasamei23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasamei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipmei23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipmei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrismei23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrismei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinmei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutmei23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutmei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustmei23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustmei23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--==========================================apr23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $april23 = date_create("2023-04-01"); echo date_format($april23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasaapr23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasaapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
			<?php echo strtoupper($dmstvipapr23[0]->name) ?>
		</a>
	</th>
<?php foreach ($dmstvipapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
			<?php echo strtoupper($hrisapr23[0]->name) ?>
		</a>
	</th>
<?php foreach ($hrisapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
			<?php echo strtoupper($waterinnov21[0]->name) ?>
		</a>
	</th>
<?php foreach ($waterinapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
			<?php echo strtoupper($wateroutapr23[0]->name) ?>
		</a>
	</th>
<?php foreach ($wateroutapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<tr>
	<th>
		<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
			<?php echo strtoupper($modustapr23[0]->name) ?>
		</a>
	</th>
<?php foreach ($modustapr23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
<?php } ?>
</tr>
<!--===========================================mar23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $maret23 = date_create("2023-03-01"); echo date_format($maret23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasamar23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasamar23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipmar23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipmar23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrismar23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrismar23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinmar23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutmar23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutmar23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustmar23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustmar23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================feb23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $feb23 = date_create("2023-02-01"); echo date_format($feb23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php  echo strtoupper($dmsasafeb23[0]->name) ?>
		</a>
	</th>
	<?php foreach ($dmsasafeb23 as $row) { ?>
	<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
	<?php } ?>
</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipfeb23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipfeb23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisfeb23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisfeb23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinfeb23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutfeb23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutfeb23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustfeb23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustfeb23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================jan23==========================================-->
								
<tr>
	<th rowspan="6" >&nbsp;&nbsp;<?php $jan23 = date_create("2023-01-01"); echo date_format($jan23, "M-Y") ?></th>
	<th>
		<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
			<?php echo strtoupper($dmsasajan23[0]->name) ?>
		</a>
	</th>
									<?php
								foreach ($dmsasajan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjan23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjan23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjan23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjan23[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjan23 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>	
								
<! -- ================================================ -->								
						</tbody>
					</table>
<!--===========================================tes====================================================================-->					
					
					</div>
					<div>
						<h5>Note:</h5>
						<p>- 0 = Tidak ter-backup di NAS <br />
							- 1 = Ter-backup 1x di NAS<br />
							- 2 = Ter-backup 2x di NAS<br />
						- 3 = Ter-backup 3x di NAS</p>
					</div>
				</div>
			</div>
	<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#B2022" aria-expanded="true" aria-controls="B2022">
          Daily Report Backup Database 2022
        </button>
      </h2>
    </div>

    <div id="B2022" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="table-responsive">
			<table class="table table-bordered table-sm" >
				<thead class="text-center thead-dark">
					<tr>
						<th rowspan="2" scope="col">Bulan</th>
						<th rowspan="2" scope="col">Host</th>
						<th colspan="31" scope="col">Tanggal</th>
					</tr>	
					<tr>
<?php for ($i=1;$i<=9;$i++) { echo "<th>0".$i."</th>";}?>
<?php for ($j=10;$j<=31;$j++) { echo "<th>".$j."</th>";}?>
					</tr>&nbsp;
				</thead>
				<tbody class="thead-dark text-center">
					<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $dec22 = date_create("2022-12-01"); echo date_format($dec22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasadec22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasadec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipdec22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipdec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisdec22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisdec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterindec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutdec22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutdec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustdec22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustdec22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================nov22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $nov22 = date_create("2022-11-01"); echo date_format($nov22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasanov22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasanov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipnov22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipnov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisnov22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisnov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinnov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutnov22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutnov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustnov22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustnov22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================oct22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $oct22 = date_create("2022-10-01"); echo date_format($oct22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaoct22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasaoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipoct22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisoct22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutoct22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustoct22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustoct22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================sep22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $sep22 = date_create("2022-09-01"); echo date_format($sep22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasasep22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasasep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipsep22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipsep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrissep22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrissep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinsep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutsep22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutsep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustsep22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustsep22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================agt22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $agt22 = date_create("2022-08-01"); echo date_format($agt22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaagt22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasaagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipagt22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisagt22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutagt22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustagt22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustagt22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================jul22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $jul22 = date_create("2022-07-01"); echo date_format($jul22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajul22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasajul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjul22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjul22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjul22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjul22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjul22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================jun22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $jun22 = date_create("2022-06-01"); echo date_format($jun22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajun22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasajun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjun22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjun22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjun22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjun22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjun22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================mei22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $mei22 = date_create("2022-05-01"); echo date_format($mei22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasamei22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasamei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipmei22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipmei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrismei22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrismei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinmei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutmei22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutmei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustmei22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustmei22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================apr22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $apr22 = date_create("2022-04-01"); echo date_format($apr22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaapr22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasaapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipapr22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisapr22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutapr22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustapr22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustapr22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================mar22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $mar22 = date_create("2022-03-01"); echo date_format($mar22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasamar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipmar22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipmar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrismar22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrismar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinmar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutmar22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutmar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustmar22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustmar22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================feb22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $feb22 = date_create("2022-02-01"); echo date_format($feb22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasafeb22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasafeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipfeb22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipfeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisfeb22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisfeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinfeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutfeb22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutfeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustfeb22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustfeb22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================jan22==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $jan22 = date_create("2022-01-01"); echo date_format($jan22, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasajan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjan22[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjan22 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
				</tbody>
			</table>
		</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#B2021" aria-expanded="false" aria-controls="B2021">
          Daily Report Backup Database 2021
        </button>
      </h2>
    </div>
    <div id="B2021" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="table-responsive">
			<table class="table table-bordered table-sm" >
				<thead class="text-center thead-dark">
					<tr>
						<th rowspan="2" scope="col">Bulan</th>
						<th rowspan="2" scope="col">Host</th>
						<th colspan="31" scope="col">Tanggal</th>
					</tr>	
					<tr>
<?php for ($i=1;$i<=9;$i++) { echo "<th>0".$i."</th>";}?>
<?php for ($j=10;$j<=31;$j++) { echo "<th>".$j."</th>";}?>
					</tr>&nbsp;
				</thead>
				<tbody class="thead-dark text-center">
					<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php $des21 = date_create("2021-12-01"); echo date_format($des21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasades21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasades21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipdes21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipdes21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisdes21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisdes21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterindes21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutdes21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutdes21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustdes21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustdes21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================nov21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($nov21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasanov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasanov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipnov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisnov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinnov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutnov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustnov21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustnov21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================okt21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($okt21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasaokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustokt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustokt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================sep21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($sep21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasasep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasasep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipsep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipsep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrissep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrissep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinsep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinsep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutsep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutsep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustsep21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustsep21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>

<!--===========================================agt21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($agt21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasaagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustagt21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustagt21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>

<!--===========================================jul21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($jul21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasajul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinjul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjul21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjul21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>

<!--===========================================jun21==========================================-->
								<tr>
									<th rowspan="6" >&nbsp;&nbsp;<?php echo date_format($jun21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasajun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipjun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisjun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinjun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinjun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/fVwEmdP8F" target="_blank">
											<?php echo strtoupper($modustjun21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($modustjun21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================may21==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($may21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasamay21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmsasamay21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipmay21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmstvipmay21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrismay21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($hrismay21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinmay21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($waterinmay21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutmay21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutmay21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================apr21==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($apr21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasaapr21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmsasaapr21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipapr21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmstvipapr21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisapr21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($hrisapr21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinapr21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($waterinapr21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutapr21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutapr21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================mar21==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($mar21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasamar21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmsasamar21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipmar21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmstvipmar21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrismar21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($hrismar21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinmar21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($waterinmar21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutmar21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutmar21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================feb21==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($feb21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasafeb21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmsasafeb21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipfeb21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmstvipfeb21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisfeb21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($hrisfeb21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinfeb21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($waterinfeb21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutfeb21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutfeb21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
<!--===========================================jan21==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($jan21, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasajan21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmsasajan21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvipjan21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($dmstvipjan21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hrisjan21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($hrisjan21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterinjan21[0]->name) ?>
										</a>
									</th>
									<?php
									foreach ($waterinjan21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($wateroutjan21[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutjan21 as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
				</tbody>
			</table>
		</div>
      </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#B2020" aria-expanded="false" aria-controls="B2020">
          Daily Report Backup Database 2020
        </button>
      </h2>
    </div>
    <div id="B2020" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <div class="table-responsive">
			<table class="table table-bordered table-sm" >
				<thead class="text-center thead-dark">
					<tr>
						<th rowspan="2" scope="col">Bulan</th>
						<th rowspan="2" scope="col">Host</th>
						<th colspan="31" scope="col">Tanggal</th>
					</tr>	
					<tr>
<?php for ($i=1;$i<=9;$i++) { echo "<th>0".$i."</th>";}?>
<?php for ($j=10;$j<=31;$j++) { echo "<th>".$j."</th>";}?>
					</tr>&nbsp;
				</thead>
				<tbody class="thead-dark text-center">
					<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($dec, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasa[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasad as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvip[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipd as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hris[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisd as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterin[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterind as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($waterout[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutd as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
	<!--===========================================November==========================================-->
								<tr>
									<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($nov, "M-Y") ?></th>
									<th>
										<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
											<?php echo strtoupper($dmsasa[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmsasan as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>


								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
											<?php echo strtoupper($dmstvip[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($dmstvipn as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
											<?php echo strtoupper($hris[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($hrisn as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
											<?php echo strtoupper($waterin[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($waterinn as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>
								<tr>
									<th>
										<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
											<?php echo strtoupper($waterout[0]->name) ?>
										</a>
									</th>
									<?php
								foreach ($wateroutn as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
									<?php } ?>
								</tr>

	<!--===========================================October==========================================-->							
							<tr>
								<th rowspan="5" >&nbsp;&nbsp;<?php echo date_format($oct, "M-Y") ?></th>
								<th>
									<a href="http://192.168.3.254:5000/fsdownload/fRrHWGqNo/asa" target="_blank">
									<?php echo strtoupper($dmsasa[0]->name) ?>
									</a>
								</th>								
								<?php foreach ($dmsasa as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>
									<a href="http://192.168.3.254:5000/sharing/2R9Lo20Na" target="_blank">
									<?php echo strtoupper($dmstvip[0]->name) ?>
									</a>
								</th>
								<?php foreach ($dmstvip as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>
									<a href="http://192.168.3.254:5000/sharing/MHULNk15u" target="_blank">
									<?php echo strtoupper($hris[0]->name) ?>
									</a>
								</th>
								<?php foreach ($hris as $row) { ?>
								<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>
									<a href="http://192.168.3.254:5000/sharing/uB9AKKzp3" target="_blank">
									<?php echo strtoupper($waterin[0]->name) ?>
									</a>
								</th>
								<?php foreach ($waterin as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
								<?php } ?>
							</tr>
							<tr>
								<th>
									<a href="http://192.168.3.254:5000/sharing/17rhJKyfL" target="_blank">
									<?php echo strtoupper($waterout[0]->name) ?>
									</a>
								</th>
								<?php foreach ($waterout as $row) { ?>
									<td title="<?php echo $row->datelog ?>" ><?php echo $row->success ?></td>
								<?php } ?>
							</tr>
				</tbody>
			</table>
		</div>
      </div>
    </div>
  </div>
</div>			

	</div> <!-- =========================================div container=============================================== -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; ICT Infrastructure 2020</span>
				</div>
			</div>
		</footer>
		<script src="<?=base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js" > </script>
		<script src="<?=base_url() ?>assets/vendor/jquery/jquery.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!--	<script src="<?=base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"> </script>
		<script src="<?=base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"> </script>-->

		<!-- Page level custom scripts -->
		<!--<script src="<?=base_url() ?>assets/js/demo/datatables-demo.js"> </script>-->
		<script>
			$(document).ready(function() {
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>

</html>
