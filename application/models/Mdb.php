<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdb extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	function input($data)
	{
		$this->db->insert('temp', $data);
	}
	function showall()
	{
		//$query = $this->db->query("SELECT tgl, temperature FROM temp WHERE tgl LIKE '2020-08%' GROUP BY tgl ORDER BY tgl");
		$query = $this->db->select('tgl, temperature, humidity')
		              ->order_by('tgl','ASC')
		              ->group_by('tgl')
		              //->limit(10)
					  ->get('temp');
					  
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$hasil[] = $data;
			}
			return $hasil;

		}
		
	}
	function agustus()
	{
		$query = $this->db->query('SELECT tgl, MAX(temperature) AS t, MAX(humidity) AS h FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp WHERE MONTH(tgl) = 8 ORDER BY tgl DESC) AS waktu GROUP BY hari ');
		return $query->result();
	}
	/*function september()
	{
		$query = $this->db->query('SELECT * FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp WHERE MONTH(tgl) = 9 ORDER BY tgl DESC) AS waktu GROUP BY hari');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}*/
	function september()
	{
		$query = $this->db->query('SELECT DATE_FORMAT(tgl,"%Y-%m-%d") AS tanggal, MAX(temperature) AS max_temp, humidity FROM temp WHERE MONTH(tgl) = 9 GROUP BY DATE_FORMAT(tgl,"%Y-%m-%d")');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	/*function oktober()
	{
		$query = $this->db->query('SELECT * FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp WHERE MONTH(tgl) = 10 ORDER BY tgl DESC) AS waktu GROUP BY hari ');
		if ($query->num_rows() > 0) {
			return $query->result();	
		}else{
			return array();
		}
	}*/
	function oktober()
	{
		$query = $this->db->query('SELECT * FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp WHERE MONTH(tgl) = 10 ORDER BY tgl DESC) AS waktu GROUP BY hari ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function showalldata()
	{
		$query = $this->db->query("SELECT * FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp ORDER BY tgl DESC) AS waktu GROUP BY hari ");
		return $query->result();
	}
	function showdata($bln, $tahun)
	{
		//var_dump($bln);
		$query = $this->db->query("SELECT * FROM (SELECT *, DAY(tgl) AS hari, MONTH (tgl) AS bln, YEAR(tgl) AS thn FROM temp WHERE MONTH(tgl) = $bln and YEAR(tgl) = $tahun ORDER BY tgl DESC) AS waktu GROUP BY hari ");
		return $query->result();
	}
	
	
	/*SELECT *
	FROM temp
	INNER JOIN (
		SELECT tgl, MAX(temperature) t, humidity
		FROM temp WHERE MONTH(tgl) = 10
		GROUP BY tgl
	)MaxTemp
	ON maxtemp.tgl = temp.tgl
	AND maxtemp.t = temp.temperature
	
	SELECT DATE_FORMAT(tgl,'%Y-%m-%d') AS tanggal, MAX(temperature) AS max_temp
	FROM temp WHERE MONTH(tgl) = 9
	GROUP BY DATE_FORMAT(tgl,'%Y-%m-%d')  
	
	SELECT CAST(t.tgl AS DATE), MAX(t.temperature) AS t, MAX(t.humidity) AS h 
	FROM temp t WHERE MONTH(t.tgl) = 10 
	GROUP BY CAST(t.tgl AS DATE)
	*/

	
}