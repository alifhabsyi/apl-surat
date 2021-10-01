<?php
class M_main extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_main');
		$this->load->library('session');
	}
	function getpos($table)
	{


		$this->db->where("(STATUS='KIRIM' OR STATUS='RESI')");

		return $query = $this->db->get($table)->result();
	}
	function getres(){		
		$hsl=$this->db->query("SELECT COUNT(NO_SK) as jum from SURVEI where MONTH(TANGGAL_SURVEI)=MONTH(CURRENT_DATE)");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$ctsm=$data->jum;
					
			}
		}
		return $ctsm;
	}
	function getp($where){		
		$hsl=$this->db->query("SELECT COUNT(NO_SK) as jum from SURVEI where PENDIDIKAN='$where'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$ctsm=$data->jum;
					
			}
		}
		return $ctsm;
	}
	function getj($where){		
		$hsl=$this->db->query("SELECT COUNT(NO_SK) as jum from SURVEI where JENIS_KELAMIN='$where'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$ctsm=$data->jum;
					
			}
		}
		return $ctsm;
	}
	
	function getindb($p,$month){		
		$hsl=$this->db->query("select sum($p)/count(NO_SK) as A from survei where month(TANGGAL_SURVEI)=$month and year(TANGGAL_SURVEI)=year(CURRENT_DATE)");
		
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getrata($p){		
		$hsl=$this->db->query("select sum($p)/count(NO_SK) as A from survei where year(TANGGAL_SURVEI)=year(CURRENT_DATE)");
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getskmb($month){		
		$hsl=$this->db->query("	SELECT (sum(P1)+sum(P2)+sum(P3)+sum(P4)+sum(P5)+sum(P6)+sum(P7)+sum(P8)+sum(P9))/(9*4*count(NO_SK))*100 as A from survei where month(TANGGAL_SURVEI)=$month");
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getrespb($month){		
		$hsl=$this->db->query("select count(NO_SK) as A from survei where month(TANGGAL_SURVEI)=$month");
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getinrb($month){		
		$hsl=$this->db->query("SELECT (sum(P1)+sum(P2)+sum(P3)+sum(P4)+sum(P5)+sum(P6)+sum(P7)+sum(P8)+sum(P9))/(9*count(NO_SK)) as A from survei where month(TANGGAL_SURVEI)=$month");
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getrat($p){		
		$hsl=$this->db->query("select sum($p)/count(NO_SK) as A from survei where year(TANGGAL_SURVEI)=year(CURRENT_DATE)");
		foreach ($hsl->result() as $data) {
			$ctsm=$data->A;
				
		}
		return $ctsm;;
	}
	function getikm(){		
		$hsl=$this->db->query("SELECT (sum(P1)+sum(P2)+sum(P3)+sum(P4)+sum(P5)+sum(P6)+sum(P7)+sum(P8)+sum(P9))/(36*COUNT(NO_SK))*100 as hsl from survei where month(TANGGAL_SURVEI)=month(CURRENT_DATE)");
		
		return $hsl->result();
	}
	function delete($table, $where)
	{
		$result = $this->db->delete($table, $where);
		return $result;
	}

	function getwhere($table, $where)
	{
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function getnotif()
	{
		$hsl=$this->db->query("SELECT * FROM SK WHERE TANGGAL_AKHIR_SK BETWEEN CURRENT_DATE-7 AND CURRENT_DATE+7 and NOTIF NOT BETWEEN CURRENT_DATE-7 AND CURRENT_DATE+7 ");
		return $hsl->result();
	}
	function getnotifn($where)
	{
		$hsl=$this->db->query("SELECT * FROM SK WHERE TANGGAL_AKHIR_SK BETWEEN CURRENT_DATE-7 AND CURRENT_DATE+7 and JENIS='$where' and NOTIF NOT BETWEEN CURRENT_DATE-7 AND CURRENT_DATE+7");
		return $hsl->result();
	}
	function get1data($table, $where)
	{
		$this->db->where($where);
		return $query = $this->db->get($table)->result();
	}
	function joinskterima()
	{
		$this->db->select('*');
		$this->db->from('sk');
		$this->db->join('sk_terima', 'sk.NO_SK = sk_terima.NO_SK');
		return $query = $this->db->get()->result();
	}
	function update($where, $dataup, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $dataup);
	}
	function insert($table, $datain)
	{
		$result = $this->db->insert($table, $datain);
		return $result;
	}
	function cekada($table, $where)
	{
		return $this->db->get_where($table, $where);
	}
	function getlist($table)
	{

		return $query = $this->db->get($table)->result();
	}
	function joinkurir($table,$where){
		$this->db->select('*');
		$this->db->join('kurir', 'sk_terima.ID_KURIR = kurir.ID_KURIR','left');
		$this->db->where($where);
		return $query = $this->db->get($table)->result();

	}
}
