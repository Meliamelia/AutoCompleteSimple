<?PHP  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mmapping extends CI_Model
{
	function Mmapping(){
		parent::__construct();
	}
	
	function GetInstance(){
		$q = $this->db->query("select distinct TOP 10 InstanceName from instance 
								INNER JOIN dailystat 
								on dailystat.InstanceId = instance.InstanceId 
								");
		if($q->num_rows() > 0){
			return $q->result_array();
		}
		return false;
	}
	
	function GetTermData($q){
		$query = $this->db->query("select distinct TOP 10 InstanceName from instance where InstanceName LIKE '%$q%'");
			if($query->num_rows() > 0){
				foreach ($query->result_array() as $row){
					$row_set[] = htmlentities(stripslashes($row['InstanceName'])); //build an array
				}
				echo json_encode($row_set); //format the array into json data
			}
	}

}

