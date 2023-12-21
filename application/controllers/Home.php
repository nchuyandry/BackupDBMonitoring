<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	var $LINK ="";
	function __construct()
	{
		//error_reporting(0);
    	//ini_set('display_errors', 0); 
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->library('session');
		$this->load->library('Curl');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('ModelDB');
		
		
	}
	function index()
	{
		$data['host'] = $this->ModelDB->hostname();
		$data['bln'] = $this->ModelDB->bulan();
		$data['kpi'] = $this->ModelDB->kpi();
		$data['hris'] = $this->ModelDB->hris();
		$data['hrisn'] = $this->ModelDB->hrisn();
		$data['hrisd'] = $this->ModelDB->hrisd();
		$data['dmsasa'] = $this->ModelDB->dmsasa();
		$data['dmsasan'] = $this->ModelDB->dmsasan();
		$data['dmsasad'] = $this->ModelDB->dmsasad();
		$data['dmstvip'] = $this->ModelDB->dmstvip();
		$data['dmstvipn'] = $this->ModelDB->dmstvipn();
		$data['dmstvipd'] = $this->ModelDB->dmstvipd();
		$data['waterin'] = $this->ModelDB->waterin();
		$data['waterinn'] = $this->ModelDB->waterinn();
		$data['waterind'] = $this->ModelDB->waterind();
		$data['waterout'] = $this->ModelDB->waterout();
		$data['wateroutn'] = $this->ModelDB->wateroutn();
		$data['wateroutd'] = $this->ModelDB->wateroutd();
		
		$data['hrisjan21'] = $this->ModelDB->hrisjan21();
		$data['dmsasajan21'] = $this->ModelDB->dmsasajan21();
		$data['dmstvipjan21'] = $this->ModelDB->dmstvipjan21();
		$data['waterinjan21'] = $this->ModelDB->waterinjan21();
		$data['wateroutjan21'] = $this->ModelDB->wateroutjan21();
		
		$data['hrisfeb21'] = $this->ModelDB->hrisfeb21();
		$data['dmsasafeb21'] = $this->ModelDB->dmsasafeb21();
		$data['dmstvipfeb21'] = $this->ModelDB->dmstvipfeb21();
		$data['waterinfeb21'] = $this->ModelDB->waterinfeb21();
		$data['wateroutfeb21'] = $this->ModelDB->wateroutfeb21();
		
		$data['hrismar21'] = $this->ModelDB->hrismar21();
		$data['dmsasamar21'] = $this->ModelDB->dmsasamar21();
		$data['dmstvipmar21'] = $this->ModelDB->dmstvipmar21();
		$data['waterinmar21'] = $this->ModelDB->waterinmar21();
		$data['wateroutmar21'] = $this->ModelDB->wateroutmar21();
		
		$data['hrisapr21'] = $this->ModelDB->hrisapr21();
		$data['dmsasaapr21'] = $this->ModelDB->dmsasaapr21();
		$data['dmstvipapr21'] = $this->ModelDB->dmstvipapr21();
		$data['waterinapr21'] = $this->ModelDB->waterinapr21();
		$data['wateroutapr21'] = $this->ModelDB->wateroutapr21();
		
		$data['hrismay21'] = $this->ModelDB->hrismay21();
		$data['dmsasamay21'] = $this->ModelDB->dmsasamay21();
		$data['dmstvipmay21'] = $this->ModelDB->dmstvipmay21();
		$data['waterinmay21'] = $this->ModelDB->waterinmay21();
		$data['wateroutmay21'] = $this->ModelDB->wateroutmay21();
		
		$data['hrisjun21'] = $this->ModelDB->hrisjun21();
		$data['dmsasajun21'] = $this->ModelDB->dmsasajun21();
		$data['dmstvipjun21'] = $this->ModelDB->dmstvipjun21();
		$data['waterinjun21'] = $this->ModelDB->waterinjun21();
		$data['wateroutjun21'] = $this->ModelDB->wateroutjun21();
		$data['modustjun21'] = $this->ModelDB->modustjun21();
		
		$data['hrisjul21'] = $this->ModelDB->hrisjul21();
		$data['dmsasajul21'] = $this->ModelDB->dmsasajul21();
		$data['dmstvipjul21'] = $this->ModelDB->dmstvipjul21();
		$data['waterinjul21'] = $this->ModelDB->waterinjul21();
		$data['wateroutjul21'] = $this->ModelDB->wateroutjul21();
		$data['modustjul21'] = $this->ModelDB->modustjul21();
		
		$data['hrisagt21'] = $this->ModelDB->hrisagt21();
		$data['dmsasaagt21'] = $this->ModelDB->dmsasaagt21();
		$data['dmstvipagt21'] = $this->ModelDB->dmstvipagt21();
		$data['waterinagt21'] = $this->ModelDB->waterinagt21();
		$data['wateroutagt21'] = $this->ModelDB->wateroutagt21();
		$data['modustagt21'] = $this->ModelDB->modustagt21();
		
		$data['hrissep21'] = $this->ModelDB->hrissep21();
		$data['dmsasasep21'] = $this->ModelDB->dmsasasep21();
		$data['dmstvipsep21'] = $this->ModelDB->dmstvipsep21();
		$data['waterinsep21'] = $this->ModelDB->waterinsep21();
		$data['wateroutsep21'] = $this->ModelDB->wateroutsep21();
		$data['modustsep21'] = $this->ModelDB->modustsep21();
		
		$data['hrisokt21'] = $this->ModelDB->hrisokt21();
		$data['dmsasaokt21'] = $this->ModelDB->dmsasaokt21();
		$data['dmstvipokt21'] = $this->ModelDB->dmstvipokt21();
		$data['waterinokt21'] = $this->ModelDB->waterinokt21();
		$data['wateroutokt21'] = $this->ModelDB->wateroutokt21();
		$data['modustokt21'] = $this->ModelDB->modustokt21();
		
		$data['hrisnov21'] = $this->ModelDB->hrisnov21();
		$data['dmsasanov21'] = $this->ModelDB->dmsasanov21();
		$data['dmstvipnov21'] = $this->ModelDB->dmstvipnov21();
		$data['waterinnov21'] = $this->ModelDB->waterinnov21();
		$data['wateroutnov21'] = $this->ModelDB->wateroutnov21();
		$data['modustnov21'] = $this->ModelDB->modustnov21();
		
		$data['hrisdes21'] = $this->ModelDB->hrisdes21();
		$data['dmsasades21'] = $this->ModelDB->dmsasades21();
		$data['dmstvipdes21'] = $this->ModelDB->dmstvipdes21();
		$data['waterindes21'] = $this->ModelDB->waterindes21();
		$data['wateroutdes21'] = $this->ModelDB->wateroutdes21();
		$data['modustdes21'] = $this->ModelDB->modustdes21();
		
		$data['hrisjan22'] = $this->ModelDB->hrisjan22();
		$data['dmsasajan22'] = $this->ModelDB->dmsasajan22();
		$data['dmstvipjan22'] = $this->ModelDB->dmstvipjan22();
		$data['waterinjan22'] = $this->ModelDB->waterinjan22();
		$data['wateroutjan22'] = $this->ModelDB->wateroutjan22();
		$data['modustjan22'] = $this->ModelDB->modustjan22();
		
		$data['hrisfeb22'] = $this->ModelDB->hrisfeb22();
		$data['dmsasafeb22'] = $this->ModelDB->dmsasafeb22();
		$data['dmstvipfeb22'] = $this->ModelDB->dmstvipfeb22();
		$data['waterinfeb22'] = $this->ModelDB->waterinfeb22();
		$data['wateroutfeb22'] = $this->ModelDB->wateroutfeb22();
		$data['modustfeb22'] = $this->ModelDB->modustfeb22();
		
		$data['hrismar22'] = $this->ModelDB->hrismar22();
		$data['dmsasamar22'] = $this->ModelDB->dmsasamar22();
		$data['dmstvipmar22'] = $this->ModelDB->dmstvipmar22();
		$data['waterinmar22'] = $this->ModelDB->waterinmar22();
		$data['wateroutmar22'] = $this->ModelDB->wateroutmar22();
		$data['modustmar22'] = $this->ModelDB->modustmar22();
		
		$data['hrisapr22'] = $this->ModelDB->hrisapr22();
		$data['dmsasaapr22'] = $this->ModelDB->dmsasaapr22();
		$data['dmstvipapr22'] = $this->ModelDB->dmstvipapr22();
		$data['waterinapr22'] = $this->ModelDB->waterinapr22();
		$data['wateroutapr22'] = $this->ModelDB->wateroutapr22();
		$data['modustapr22'] = $this->ModelDB->modustapr22();
		
		$data['hrismei22'] = $this->ModelDB->hrismei22();
		$data['dmsasamei22'] = $this->ModelDB->dmsasamei22();
		$data['dmstvipmei22'] = $this->ModelDB->dmstvipmei22();
		$data['waterinmei22'] = $this->ModelDB->waterinmei22();
		$data['wateroutmei22'] = $this->ModelDB->wateroutmei22();
		$data['modustmei22'] = $this->ModelDB->modustmei22();
		
		$data['hrisjun22'] = $this->ModelDB->hrisjun22();
		$data['dmsasajun22'] = $this->ModelDB->dmsasajun22();
		$data['dmstvipjun22'] = $this->ModelDB->dmstvipjun22();
		$data['waterinjun22'] = $this->ModelDB->waterinjun22();
		$data['wateroutjun22'] = $this->ModelDB->wateroutjun22();
		$data['modustjun22'] = $this->ModelDB->modustjun22();
		
		$data['hrisjul22'] = $this->ModelDB->hrisjul22();
		$data['dmsasajul22'] = $this->ModelDB->dmsasajul22();
		$data['dmstvipjul22'] = $this->ModelDB->dmstvipjul22();
		$data['waterinjul22'] = $this->ModelDB->waterinjul22();
		$data['wateroutjul22'] = $this->ModelDB->wateroutjul22();
		$data['modustjul22'] = $this->ModelDB->modustjul22();
		
		$data['hrisagt22'] = $this->ModelDB->hrisagt22();
		$data['dmsasaagt22'] = $this->ModelDB->dmsasaagt22();
		$data['dmstvipagt22'] = $this->ModelDB->dmstvipagt22();
		$data['waterinagt22'] = $this->ModelDB->waterinagt22();
		$data['wateroutagt22'] = $this->ModelDB->wateroutagt22();
		$data['modustagt22'] = $this->ModelDB->modustagt22();
		
		$data['hrissep22'] = $this->ModelDB->hrissep22();
		$data['dmsasasep22'] = $this->ModelDB->dmsasasep22();
		$data['dmstvipsep22'] = $this->ModelDB->dmstvipsep22();
		$data['waterinsep22'] = $this->ModelDB->waterinsep22();
		$data['wateroutsep22'] = $this->ModelDB->wateroutsep22();
		$data['modustsep22'] = $this->ModelDB->modustsep22();
		
		$data['hrisoct22'] = $this->ModelDB->hrisoct22();
		$data['dmsasaoct22'] = $this->ModelDB->dmsasaoct22();
		$data['dmstvipoct22'] = $this->ModelDB->dmstvipoct22();
		$data['waterinoct22'] = $this->ModelDB->waterinoct22();
		$data['wateroutoct22'] = $this->ModelDB->wateroutoct22();
		$data['modustoct22'] = $this->ModelDB->modustoct22();
		
		$data['hrisnov22'] = $this->ModelDB->hrisnov22();
		$data['dmsasanov22'] = $this->ModelDB->dmsasanov22();
		$data['dmstvipnov22'] = $this->ModelDB->dmstvipnov22();
		$data['waterinnov22'] = $this->ModelDB->waterinnov22();
		$data['wateroutnov22'] = $this->ModelDB->wateroutnov22();
		$data['modustnov22'] = $this->ModelDB->modustnov22();
		
		$data['hrisdec22'] = $this->ModelDB->hrisdec22();
		$data['dmsasadec22'] = $this->ModelDB->dmsasadec22();
		$data['dmstvipdec22'] = $this->ModelDB->dmstvipdec22();
		$data['waterindec22'] = $this->ModelDB->waterindec22();
		$data['wateroutdec22'] = $this->ModelDB->wateroutdec22();
		$data['modustdec22'] = $this->ModelDB->modustdec22();
		
		$data['hrisjan23'] = $this->ModelDB->hrisjan23();
		$data['dmsasajan23'] = $this->ModelDB->dmsasajan23();
		$data['dmstvipjan23'] = $this->ModelDB->dmstvipjan23();
		$data['waterinjan23'] = $this->ModelDB->waterinjan23();
		$data['wateroutjan23'] = $this->ModelDB->wateroutjan23();
		$data['modustjan23'] = $this->ModelDB->modustjan23();
		
		$data['hrisfeb23'] = $this->ModelDB->hrisfeb23();
		$data['dmsasafeb23'] = $this->ModelDB->dmsasafeb23();
		$data['dmstvipfeb23'] = $this->ModelDB->dmstvipfeb23();
		$data['waterinfeb23'] = $this->ModelDB->waterinfeb23();
		$data['wateroutfeb23'] = $this->ModelDB->wateroutfeb23();
		$data['modustfeb23'] = $this->ModelDB->modustfeb23();
		
		$data['hrismar23'] = $this->ModelDB->hrismar23();
		$data['dmsasamar23'] = $this->ModelDB->dmsasamar23();
		$data['dmstvipmar23'] = $this->ModelDB->dmstvipmar23();
		$data['waterinmar23'] = $this->ModelDB->waterinmar23();
		$data['wateroutmar23'] = $this->ModelDB->wateroutmar23();
		$data['modustmar23'] = $this->ModelDB->modustmar23();
		
		$data['hrisapr23'] = $this->ModelDB->hrisapr23();
		$data['dmsasaapr23'] = $this->ModelDB->dmsasaapr23();
		$data['dmstvipapr23'] = $this->ModelDB->dmstvipapr23();
		$data['waterinapr23'] = $this->ModelDB->waterinapr23();
		$data['wateroutapr23'] = $this->ModelDB->wateroutapr23();
		$data['modustapr23'] = $this->ModelDB->modustapr23();
		
		$data['hrismei23'] = $this->ModelDB->hrismei23();
		$data['dmsasamei23'] = $this->ModelDB->dmsasamei23();
		$data['dmstvipmei23'] = $this->ModelDB->dmstvipmei23();
		$data['waterinmei23'] = $this->ModelDB->waterinmei23();
		$data['wateroutmei23'] = $this->ModelDB->wateroutmei23();
		$data['modustmei23'] = $this->ModelDB->modustmei23();
		
		$data['hrisjun23'] = $this->ModelDB->hrisjun23();
		$data['dmsasajun23'] = $this->ModelDB->dmsasajun23();
		$data['dmstvipjun23'] = $this->ModelDB->dmstvipjun23();
		$data['waterinjun23'] = $this->ModelDB->waterinjun23();
		$data['wateroutjun23'] = $this->ModelDB->wateroutjun23();
		$data['modustjun23'] = $this->ModelDB->modustjun23();
		
		$data['hrisjul23'] = $this->ModelDB->hrisjul23();
		$data['dmsasajul23'] = $this->ModelDB->dmsasajul23();
		$data['dmstvipjul23'] = $this->ModelDB->dmstvipjul23();
		$data['waterinjul23'] = $this->ModelDB->waterinjul23();
		$data['wateroutjul23'] = $this->ModelDB->wateroutjul23();
		$data['modustjul23'] = $this->ModelDB->modustjul23();
		
		$data['hrisagt23'] = $this->ModelDB->hrisagt23();
		$data['dmsasaagt23'] = $this->ModelDB->dmsasaagt23();
		$data['dmstvipagt23'] = $this->ModelDB->dmstvipagt23();
		$data['waterinagt23'] = $this->ModelDB->waterinagt23();
		$data['wateroutagt23'] = $this->ModelDB->wateroutagt23();
		$data['modustagt23'] = $this->ModelDB->modustagt23();
		
		$data['hrissep23'] = $this->ModelDB->hrissep23();
		$data['dmsasasep23'] = $this->ModelDB->dmsasasep23();
		$data['dmstvipsep23'] = $this->ModelDB->dmstvipsep23();
		$data['waterinsep23'] = $this->ModelDB->waterinsep23();
		$data['wateroutsep23'] = $this->ModelDB->wateroutsep23();
		$data['modustsep23'] = $this->ModelDB->modustsep23();
		
		$data['hrisokt23'] = $this->ModelDB->hrisokt23();
		$data['dmsasaokt23'] = $this->ModelDB->dmsasaokt23();
		$data['dmstvipokt23'] = $this->ModelDB->dmstvipokt23();
		$data['waterinokt23'] = $this->ModelDB->waterinokt23();
		$data['wateroutokt23'] = $this->ModelDB->wateroutokt23();
		$data['modustokt23'] = $this->ModelDB->modustokt23();
		
		$data['hrisnov23'] = $this->ModelDB->hrisnov23();
		$data['dmsasanov23'] = $this->ModelDB->dmsasanov23();
		$data['dmstvipnov23'] = $this->ModelDB->dmstvipnov23();
		$data['waterinnov23'] = $this->ModelDB->waterinnov23();
		$data['wateroutnov23'] = $this->ModelDB->wateroutnov23();
		$data['modustnov23'] = $this->ModelDB->modustnov23();
		
		$data['hrisdes23'] = $this->ModelDB->hrisdes23();
		$data['dmsasades23'] = $this->ModelDB->dmsasades23();
		$data['dmstvipdes23'] = $this->ModelDB->dmstvipdes23();
		$data['waterindes23'] = $this->ModelDB->waterindes23();
		$data['wateroutdes23'] = $this->ModelDB->wateroutdes23();
		$data['modustdes23'] = $this->ModelDB->modustdes23();
		
		$this->load->view('home', $data);

	}
	function url()
	{
		//$this->LINK="http://192.168.3.254:5000";
		//$data['url'] = $this->curl->simple_get($this->LINK);
		//var_dump($this->curl->simple_get($this->LINK));
		$this->load->view('curl');
	}
	function test(){
		system("net use \\192.168.3.254\4.backup-hris\full /user:server Databa53@tvip.co.id");
		
		$dirasa = "\\\\192.168.3.254\\1.backup-dms3";
		var_dump($dirasa);
		opendir($dirasa);
		$fileasa = '\\\\192.168.3.254\1.backup-dms3\asa\dms-asa-20201214.sql';
		//VAR_DUMP($filename);
		if ( filesize($fileasa) > 0) {
			echo $fileasa;
			echo filesize($fileasa) . "bytes";
		} else {
			echo "no";
		}
	}
	function backupdms3asa00()
	{
		// Map the drive
		system("net use  \\192.168.3.254\1.backup-dms3\asa /user:backup Databa53");

		$dirasa0 = "\\\\192.168.3.254\\1.backup-dms3\\asa";
		opendir($dirasa0);
		$fileasa0 = '\\\\192.168.3.254\1.backup-dms3\asa\dms-asa-'. date('Ymd').'- 0.sql';
		//$fileasa = '\\\\192.168.3.254\1.backup-dms3\asa\dms-asa-20201128.sql';
		//var_dump($fileasa);
		echo "$fileasa0";
		if (file_exists($fileasa0)) {
			$data = array(
			'backup_name' => 'dms3asa',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "dms3asa.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'DMS3ASA Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database DMS3ASA Gagal Backup");
			$this->email->message("Peringatan!<br/> Database DMS3ASA tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupdms3asa()
	{
		// Map the drive
		system("net use  \\192.168.3.254\1.backup-dms3\asa /user:backup Databa53");

		$dirasa = "\\\\192.168.3.254\\1.backup-dms3\\asa";
		opendir($dirasa);
		$fileasa = '\\\\192.168.3.254\1.backup-dms3\asa\dms-asa-'. date('Ymd').'-12.sql.gz';
		//$fileasa = '\\\\192.168.3.254\1.backup-dms3\asa\dms-asa-20201128.sql';
		//var_dump($fileasa);
		if (file_exists($fileasa)) {
			$data = array(
			'backup_name' => 'dms3asa',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "dms3asa.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'DMS3ASA Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database DMS3ASA Gagal Backup");
			$this->email->message("Peringatan!<br/> Database DMS3ASA tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupdms3tvip00()
	{
		system("NET USE \\192.168.3.254\1.backup-dms3\tvip /USER:backup Databa53");
		
		$dirtvip0 = "\\\\192.168.3.254\\1.backup-dms3\\tvip";
		opendir($dirtvip0);
		$filetvip0 = '\\\\192.168.3.254\1.backup-dms3\tvip\dms-tvip-'. date('Ymd').'- 0.sql';
		//var_dump($filetvip);
		if (file_exists($filetvip0)) {

			$data = array(
			'backup_name' => 'dms3tvip',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "dms3tvip.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'DMS3TVIP Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database DMS3TVIP Gagal Back up");
			$this->email->message("Peringatan!<br/> Database DMS3TVIP tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupdms3tvip()
	{
		system("NET USE \\192.168.3.254\1.backup-dms3\tvip /USER:server Databa53@tvip.co.id");
		
		$dirtvip = "\\\\192.168.3.254\\1.backup-dms3\\tvip";
		opendir($dirtvip);
		$filetvip = '\\\\192.168.3.254\1.backup-dms3\tvip\dms-tvip-'. date('Ymd').'-12.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($filetvip)) {

			$data = array(
			'backup_name' => 'dms3tvip',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "dms3tvip.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'DMS3TVIP Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database DMS3TVIP Gagal Back up");
			$this->email->message("Peringatan!<br/> Database DMS3TVIP tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backuphris()
	{
		system("net use \\192.168.3.254\4.backup-hris\full /user:server Databa53@tvip.co.id");
		
		$dirhris= "\\\\192.168.3.254\\4.backup-hris\\full";
		opendir($dirhris);
		$fileadms = '\\\\192.168.3.254\4.backup-hris\full\adms_db-'. date('Ymd').'-12.sql.gz';
		$fileabsen = '\\\\192.168.3.254\4.backup-hris\full\absensi_new-'. date('Ymd').'-12.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($fileadms) || file_exists($fileabsen)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'hris',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "hris.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'HRIS Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database HRIS Gagal Back up");
			$this->email->message("Peringatan!<br/> Database HRIS tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupwaterin()
	{
		system("net use \\192.168.3.254\2.backup-waterin\full /user:server Databa53@tvip.co.id");
		$dirwaterin= "\\\\192.168.3.254\\2.backup-waterin\\full";
		opendir($dirwaterin);
		$filewaterin = '\\\\192.168.3.254\2.backup-waterin\full\db_sc_modust-'. date('Ymd').'-12.sql.gz';
		VAR_DUMP($filewaterin);
		if (file_exists($filewaterin)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'waterin',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "waterin.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Waterin Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Waterin Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Waterin tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupwaterout()
	{
		system("net use \\192.168.3.254\ /user:server Databa53@tvip.co.id");
		$dirwaterout= "\\\\192.168.3.254\\5.backup-waterout\\full";
		opendir($dirwaterout);
		$filewaterout = '\\\\192.168.3.254\5.backup-waterout\full\bs-'. date('Ymd').'-12.sql.gz';
		//VAR_DUMP('bs-'. date('Ymd').'- 0.sql.gz');
		if (file_exists($filewaterout)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'waterout',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		}else{
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "waterout.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Waterout Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Waterout Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Waterout tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupmodust()
	{
		system("net use \\192.168.3.254\ /user:server Databa53@tvip.co.id");
		$dirmodust= "\\\\192.168.3.254\\3.backup-modust\\full";
		opendir($dirmodust);
		$filemodust = '\\\\192.168.3.254\3.backup-modust\full\db_modust_utility-'. date('Ymd').'-12.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($filemodust)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'modust',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "modust.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Modust Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Modust Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Modust tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	
	function backuphris00()
	{
		system("net use \\192.168.3.254\4.backup-hris\full /user:server Databa53@tvip.co.id");
		
		$dirhris= "\\\\192.168.3.254\\4.backup-hris\\full";
		opendir($dirhris);
		$fileadms = '\\\\192.168.3.254\4.backup-hris\full\adms_db-'. date('Ymd').'- 0.sql.gz';
		$fileabsen = '\\\\192.168.3.254\4.backup-hris\full\absensi_new-'. date('Ymd').'- 0.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($fileadms) || file_exists($fileabsen)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'hris',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "hris.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'HRIS Backup');
			//$this->email->to("it@tvip.co.id");
			$this->email->to("infra@tvip.co.id");
			$this->email->subject("Database HRIS Gagal Back up");
			$this->email->message("Peringatan!<br/> Database HRIS tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupwaterin00()
	{
		system("net use \\192.168.3.254\2.backup-waterin\full /user:server Databa53@tvip.co.id");
		$dirwaterin= "\\\\192.168.3.254\\2.backup-waterin\\full";
		opendir($dirwaterin);
		$filewaterin = '\\\\192.168.3.254\2.backup-waterin\full\db_sc_modust-'. date('Ymd').'- 0.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($filewaterin)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'waterin',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "waterin.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Waterin Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Waterin Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Waterin tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupwaterout00()
	{
		system("net use \\192.168.3.254\ /user:server Databa53@tvip.co.id");
		$dirwaterout= "\\\\192.168.3.254\\5.backup-waterout\\full";
		opendir($dirwaterout);
		$filewaterout = '\\\\192.168.3.254\5.backup-waterout\full\bs-'. date('Ymd').'- 0.sql.gz';
		VAR_DUMP('bs-'. date('Ymd').'- 0.sql.gz');
		if (file_exists($filewaterout)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'waterout',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		}else{
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "waterout.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Waterout Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Waterout Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Waterout tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
	function backupmodust00()
	{
		system("net use \\192.168.3.254\ /user:server Databa53@tvip.co.id");
		$dirmodust= "\\\\192.168.3.254\\3.backup-modust\\full";
		opendir($dirmodust);
		$filemodust = '\\\\192.168.3.254\3.backup-modust\full\db_modust_utility-'. date('Ymd').'- 0.sql.gz';
		//VAR_DUMP($filename);
		if (file_exists($filemodust)) {
			//echo " $fileadms exist";
			$data = array(
			'backup_name' => 'modust',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			$this->ModelDB->simpan($data);
		} else {
			$this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "192.168.4.100";//pengaturan smtp
			$config['smtp_port']= "25";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "modust.backup@tvip.co.id";
			$config['crlf']="\r\n";
			$config['newline']="\r\n";
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user'], 'Modust Backup');
			$this->email->to("infra@tvip.co.id");
			//$this->email->to("ict.network@tvip.co.id");
			$this->email->subject("Database Modust Gagal Back up");
			$this->email->message("Peringatan!<br/> Database Modust tidak terback-up di NAS 192.168.3.254, <br/> Harap segera melakukan backup manual!<br/> Link: http://192.168.4.50/backupdb/");
			$this->email->send(); //send mail
		}
	}
}
