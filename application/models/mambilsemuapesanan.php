<?php
    
    class mambilsemuapesanan extends CI_Model
    {
        function prosesambilsemuapesanan()
		{
			$sql="select * from memesan";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$hasil[]=$row;
				}	
			}
			else
			{
				$hasil="";	
			}
			return $hasil;	
		}
    }
?>