<?php if (!defined('BASEPATH')) exit('No direct access allowed');
/**
* 
*/
class Services extends CI_Model
{

	/**
	 *
	 */
	// public function services($id)
	// {
	// 	$id = "5";
	// 	$q = $this->db->select('')
	// 		->from('Services')
	// 		->where('BranchID',$id);//eg. where('employee_id','5')
	// 	$ret['rows'] = $q->get()->result();
	// 	return $ret;
	// }
//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////
	public function selecting_all()
	{
		$q = $this->db->select('')
			->from('table_name');
		$ret['rows'] = $q->get()->result();
		return $ret;
//		print_r($ret);
	}

	public function selecting_with_condition()
	{
		$q = $this->db->select('')
			->from('table_name')
			->where('column','data');//eg. where('employee_id','5')
		$ret['rows'] = $q->get()->result();
		return $ret;
//		print_r($ret);
	}


	public function update()
	{
		$sql2 = "UPDATE table SET attribute = 'variable' WHERE attribute='variable'";
		$this->db->query($sql2);
		return true;
	}

	public function join()
	{
		$q = $this->db->select('table.attribute, table.attribute')
			->from('table')
			->where('table.attribute','variable')//if theres a where.... ->where('table.attribute',$sth) or ->where('table.attribute','predefined_variable')
			->join('XTable', 'XTable.attribute = Table.attribute');

		$ret['rows'] = $q->get()->result();

		return $ret;
	}

	public function Insert()
	{
		$sql = "INSERT INTO tablename()
		VALUES(
			".$this->db->escape().",
			".$this->db->escape()."

			)";

		$result=$this->db->query($sql);
	}
	 public function get_service()
	 {
        $query = $this->db->query('SELECT ServiceID, ServiceName FROM services WHERE BranchID = 5 ');
        return $query->result();
    }

	public function get_staff_by_service($service)
	{
		$bid = "5";
		$q = $this->db->select('FirstName,LastName,NickName')
			->from('staff')
			->join('staffservices','staffservices.StaffID=staff.StaffID')
			->where('BranchID',$bid)
			->where('staffservices.ServiceID',$service);//eg. where('employee_id','5')
		$ret['rows'] = $q->get()->result();
		return $ret;
    }
    	public function get_price_by_service($service)
	{
		$bid = "5";
		$q = $this->db->select('FullPrice,LongestDuration')
			->from('services')
			->where('BranchID',$bid)
			->where('ServiceID',$service);//eg. where('employee_id','5')
		$ret['rows'] = $q->get()->result();
		return $ret;
    }

    public function get_time_by_branch($appointmentdate)
	{
		$bid = "5";
		$q = $this->db->select('DateBooked,TimeBooked')
			->from('appointment')
			->where('BranchID',$bid);
			if ($q->get()->result() == TRUE) {
				
			}
    }   
}
?>