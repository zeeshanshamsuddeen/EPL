<?php 
   Class User_model extends CI_Model { 
	
      Public function __construct() { 
         parent::__construct(); 
      } 

      public function f_insert(){

      	echo 'database';


			$sql= "SELECT * FROM test";
       		$data=$this->db->query($sql);
       		#$query=$this->db->get();
       		return $data->result();
       		#$result1 = $query->result();
       		#$this->load->view('data',$result1);

      	#$id=10;
   		#$sql = "INSERT INTO test (temp) VALUES (".$id_temp.")";  //another way to execute query
		#$this->db->query($sql);


		#another way.. This uses the variable passed as parameter ie data
     	#$this->db->insert("test",$data);  //test is table name
		}
   } 

  

  
?> 