<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usersModel
 *
 * @author Temmy Rustandi Hidayat
 */
class Crud_courier extends CI_Model
{

	function __construct()
    {
      parent::__construct();
	  
    }

	function read($table)
	{
		$get = $this->db->get($table);
		return $get->result();
	}

	function get_src($id)
	{
		if($id == 1)
		{
			$this->db->where_not_in('password',array(md5(0)));
			$get = $this->db->get('couriers');
		}
		else
		{
			$this->db->where('password',md5(0));
			$this->db->where('login_state','0');
			$get = $this->db->get('couriers');
		}
		
		return $get->result();
	}
	
	function create($table,$data)
	{
		$this->db->insert($table,$data);
	}
	
	function look($post,$triger)
	{
		$this->db->where($triger,$post);
		$get = $this->db->get('couriers');
		
		return $get->num_rows();
	}
	
	function look2($id,$post,$triger)
	{
		$this->db->where($triger,$post);
		$this->db->where_not_in('courier_id',$id);
		$get = $this->db->get('couriers');
		
		return $get->num_rows();
	}
	
	function get_courier($id,$triger,$table)
	{
		$this->db->where($triger,$id);
		$get = $this->db->get($table);
		
		return $get->result();
	}
	
	function update($id,$triger,$data,$table)
	{
		$this->db->where($triger,$id);
		$this->db->update($table,$data);
	}
	
	function delete($id,$triger,$table)
	{
		$this->db->where($triger,$id);
		$this->db->delete($table);
	}
	
	function non_aktif($id,$data)
	{
		$this->db->where('courier_id',$id);
		$this->db->update('couriers',$data);
	}
	
	function aktif($id,$data)
	{
		$this->db->where('courier_id',$id);
		$this->db->update('couriers',$data);
	}

}