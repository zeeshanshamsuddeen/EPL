<?php 
   class Test extends CI_Controller {
  
  	#defualt function when class is called
      public function index() { 
         echo "Hello World!"; 
         #$this->load->helper('url');  // to DO linking in this function
         #$this->load->view('test');		//loads the test.php view
         #if you want a URL access to a resource (such as css, js, image), use base_url(), otherwise, site_url() is better in VIEW
        

         #print 'over';


          #$this->load->model('User_model');   
         # $data = array(
         #	'temp'=>'12333'  //temp is the name of coloumn
      	#	);
         # $id_temp=1156;
       	  #$id=4;
        # $this->load->model('User_model');
         #$data = $this->User_model->f_insert();
         
         $this->load->view('test');
		#$x['result'] = $data;
		#$this->load->view('data', $x);

         #$this->load->view("data",$data1);
       	#print_r($data);


		#$this->db->query($sql);
		#$this->db->insert("test",$data); 

        #$this->User_model->f_insert($data,$id_temp);  //f_insert is function in model to go


      } 

      public function test_new(){
         $this->load->helper('url');  // to DO linking in this function
         $this->load->view('index');

      }
      public function hello() {
      	echo "hello funciton";
      	 $query = $this->db->get("test"); 
         $data['records'] = $query->result(); 
		echo '<pre>'; print_r($data); echo '</pre>';    //to print array

 	  }

   		# accept id variable from test view
   		public function linker($id){
   			echo 'link';
   			echo $id;
   		}

   		public function form_test(){
	         $this->load->helper('url');  // to DO linking in this function
   			$this->load->helper('form');
	        $this->load->view('form');		//loads the form.php view

   		}

   		public function after_form(){
   			$data = array( 
            'username' => $this->input->post('username'), 
         	);
         	echo $data['username'];
 	        

		
   		}


      


   } 
?>