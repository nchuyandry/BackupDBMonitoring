<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDB extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->database();
		date_default_timezone_set('Asia/Jakarta');
	}
	public function hostname()
	{
		$query = $this->db->query('SELECT * FROM tabel_log WHERE MONTH(created_on) = 10 ORDER BY backup_name ASC ');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	public function bulan()
	{
		$query = $this->db->query('SELECT datefield FROM calendar');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	public function kpi()
	{
		$query = $this->db->query('SELECT tabel_log.created_on AS datelog, tabel_log.* ,calendar.datefield AS DATE,	IFNULL(tabel_log.success,0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield WHERE (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) ORDER BY DATE ASC');

		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	/*SELECT tabel_log.`created_on` AS datelog, tabel_log.* ,calendar.datefield AS DATE,
	IFNULL(tabel_log.success,0) AS success
	FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.`created_on`)) = calendar.datefield
	WHERE (calendar.datefield BETWEEN (SELECT MIN(DATE('2020-10-01')) FROM tabel_log) AND (SELECT MAX(DATE('2020-10-31')) FROM tabel_log))
	ORDER BY DATE ASC*/
	
	//=============================================oktober====================================================================
	function hris()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "hris" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	
	function dmsasa()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3asa" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	/*SELECT * FROM tabel_log WHERE MONTH(created_on) = 10 AND backup_name = "dms3asa"*/
	/*SELECT calendar.datefield AS DATE, tabel_log.`created_on` AS datelog,  tabel_log.`backup_name` ,calendar.name,
	IFNULL(tabel_log.success,0) AS success
	FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.`created_on`)) = calendar.datefield AND tabel_log.`backup_name` = calendar.`name`
	WHERE calendar.`name` = 'hris' AND (calendar.datefield BETWEEN (SELECT MIN(DATE('2020-10-01')) FROM tabel_log) AND (SELECT MAX(DATE('2020-10-31')) FROM tabel_log)) ORDER BY DATE ASC
	
	DELIMITER |
	CREATE PROCEDURE fill_calendar5(start_date DATE, end_date DATE, name1 VARCHAR(20))
	BEGIN
	DECLARE crt_date DATE;
	DECLARE crtname VARCHAR(20);
	SET crt_date=start_date;
	SET crtname=name1;
	WHILE
		crt_date <= end_date
	DO
		INSERT INTO calendar VALUES(crt_date, crtname);
	SET crt_date = ADDDATE(crt_date, INTERVAL 1 DAY);
	END WHILE;
	END |
	DELIMITER ;
	
	CALL fill_calendar5('2020-11-01', '2020-11-30', 'waterout');
	
	
	*/
	function dmstvip()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3tvip" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterin()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterin" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterout()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterout" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-10-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================november=================================================
	function hrisn()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "hris" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-11-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasan()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3asa" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-11-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	
	function dmstvipn()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3tvip" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-11-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinn()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterin" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-11-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutn()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterout" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-11-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================desember=================================================
	function hrisd()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "hris" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-12-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasad()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3asa" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-12-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipd()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "dms3tvip" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-12-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterind()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterin" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-12-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutd()
	{
		$query = $this->db->query('SELECT calendar.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar.name,
IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar ON (DATE(tabel_log.created_on)) = calendar.datefield AND tabel_log.backup_name = calendar.name WHERE calendar.name = "waterout" AND (calendar.datefield BETWEEN (SELECT MIN(DATE("2020-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2020-12-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================jan 2021=================================================
	function hrisjan21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-01-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasajan21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-01-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipjan21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-01-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinjan21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-01-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutjan21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-01-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================feb 2021=================================================
	function hrisfeb21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-02-28")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasafeb21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-02-28")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipfeb21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-02-28")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinfeb21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-02-28")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutfeb21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-02-28")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================mar 2021=================================================
	function hrismar21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-03-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasamar21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-03-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipmar21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-03-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinmar21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-03-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutmar21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-03-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	//============================================apr 2021=================================================
	function hrisapr21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-04-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasaapr21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-04-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipapr21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-04-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinapr21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-04-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutapr21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-04-30")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
//	========================================================may 2021=====================================================================
function hrismay21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-05-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmsasamay21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-05-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}

	function dmstvipmay21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-05-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function waterinmay21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-05-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
	function wateroutmay21()
	{
		$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-05-31")) FROM tabel_log)) GROUP BY DATE ');
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return array();
		}
	}
//	============================================================juni==============================================================
function hrisjun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjun21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//	============================================================juli=========================================================================================================================================================
function hrisjul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjul21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=====================================================================================================================================
//	============================================================agustus=========================================================================================================================================================
function hrisagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustagt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//	============================================================agustus=========================================================================================================================================================
function hrissep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasasep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipsep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinsep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutsep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustsep21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustokt21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisnov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasanov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipnov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinnov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutnov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustnov21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisdes21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "hris" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasades21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3asa" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipdes21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "dms3tvip" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterindes21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterin" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutdes21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "waterout" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustdes21()
{
	$query = $this->db->query('SELECT calendar2021.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2021.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2021 ON (DATE(tabel_log.created_on)) = calendar2021.datefield AND tabel_log.backup_name = calendar2021.name WHERE calendar2021.name = "modust" AND (calendar2021.datefield BETWEEN (SELECT MIN(DATE("2021-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2021-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisjan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjan22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=====================================================================================================================================
function hrisfeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasafeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipfeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinfeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutfeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustfeb22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=====================================================================================================================================
function hrismar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasamar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipmar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinmar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutmar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustmar22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustapr22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrismei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasamei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipmei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinmei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutmei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustmei22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisjun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjun22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisjul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjul22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustagt22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================

function hrissep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasasep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipsep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinsep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutsep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustsep22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================

function hrisoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustoct22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisnov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasanov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipnov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinnov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutnov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustnov22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
function hrisdec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasadec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipdec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterindec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutdec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustdec22()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2022-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2022-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//==================================================================================================================================
//=====================================================================================================================================
function hrisjan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjan23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-01-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-01-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=====================================================================================================================================
function hrisfeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasafeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipfeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinfeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutfeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustfeb23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-02-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-02-28")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrismar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasamar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipmar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinmar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutmar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustmar23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-03-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-03-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustapr23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-04-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-04-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrismei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasamei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipmei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinmei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutmei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustmei23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-05-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-05-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisjun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjun23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-06-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-06-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisjul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasajul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipjul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinjul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutjul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustjul23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-07-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-07-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustagt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-08-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-08-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrissep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasasep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipsep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinsep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutsep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustsep23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-09-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-09-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
function hrisokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasaokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustokt23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-10-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-10-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=====================================================================================================================================
function hrisnov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasanov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipnov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterinnov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutnov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustnov23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-11-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-11-30")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
//=======================================================des2023==============================================================================
function hrisdes23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "hris" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmsasades23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3asa" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}

function dmstvipdes23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "dms3tvip" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function waterindes23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterin" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function wateroutdes23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "waterout" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
function modustdes23()
{
	$query = $this->db->query('SELECT calendar2022.datefield AS DATE, tabel_log.created_on AS datelog,  tabel_log.backup_name ,calendar2022.name,
	IFNULL(SUM(tabel_log.success),0) AS success FROM tabel_log RIGHT JOIN calendar2022 ON (DATE(tabel_log.created_on)) = calendar2022.datefield AND tabel_log.backup_name = calendar2022.name WHERE calendar2022.name = "modust" AND (calendar2022.datefield BETWEEN (SELECT MIN(DATE("2023-12-01")) FROM tabel_log) AND (SELECT MAX(DATE("2023-12-31")) FROM tabel_log)) GROUP BY DATE ');
	if ($query->num_rows() > 0) {
		return $query->result();
	} else {
		return array();
	}
}
//=====================================================================================================================================
	function simpan($data)
	{
		$this->db->insert('tabel_log', $data);
	}
}