<?php
system("NET USE \\192.168.3.254\1.backup-dms3\tvip /USER:server Databa53@tvip.co.id");
		
		$dirtvip = "\\\\192.168.3.254\\1.backup-dms3\\tvip";
		opendir($dirtvip);
		$filetvip = '\\\\192.168.3.254\1.backup-dms3\tvip\dms-tvip-'. date('Ymd').'.sql';
		//VAR_DUMP($filename);
		if (file_exists($filetvip) && filesize($filetvip) > 0) {

			$data = array(
			'backup_name' => 'dms3tvip',
			'created_on' => date('Y-m-d H:i:s'),
			'success' => '1'
			);
			//$this->ModelDB->simpan($data);
			echo "ada";
		} else {
			echo "no";
		}
?>
