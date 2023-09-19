<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Home_Model extends CI_Model
{

	function __construct()
    {
        parent::__construct();
    }
    function get_type_name_by_id($type, $type_id = '', $field = 'name')
    {
        if ($type_id != '')
        {
            $col = substr($type, 4);
            $l = $this
                ->db
                ->get_where($type, array(
                $col . '_id' => $type_id
            ));
            $n = $l->num_rows();
            if ($n > 0)
            {
                return $l->row()->$field;
            }
        }
    }

	function test(){
		
	}



}

?>
