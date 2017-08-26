<?php
	class Main extends CI_Controller{

		public function index(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_next_match();
			$x['next_match'] = $data;
			$data = $this->Main_model->get_matches_3();
			$x['next_matches_3'] = $data; 
			$data = $this->Main_model->get_team_details();
			$x['team_details'] = $data;
			$data = $this->Main_model->get_games_players_full();
			$x['games_players'] = $data;
			$data = $this->Main_model->get_player_details_full();
			$x['player_details_full'] = $data;
			$this->load->view('homepage',$x);
		}

		public function latest_result(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_matches_join_fixtures();
			$x['matches'] = $data;
			$this->load->view('latest_result',$x);
		}

		public function fixtures(){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_fixtures();
			$x['fixtures'] = $data;
			$this->load->view('fixtures',$x);
		}

		public function scorecard($id){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_matches_join_fixtures_one_row($id);
			$x['all_details'] = $data;
			$data = $this->Main_model->get_team_details();
			$x['team_details'] = $data;
			$data = $this->Main_model->get_games($id);
			$x['player_game'] = $data;
			$data = $this->Main_model->get_comments($id);
			$x['comments'] = $data;
			$x['id'] = $id;
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->view('scorecard',$x,$id);
			# id is used to indicate match_id
		}

		public function put_comments($id){
			$this->load->helper('form');
			$this->load->model('Main_model');
			$data = array( 
				'match_id' => $id,
            	'username' => $this->input->post('username'), 
            	'comment' => $this->input->post('comment')
            );
            if($data['username'] == NULL){
            	$data['username'] = "unkndown";
            }
            $this->Main_model->put_comments($data);  
            $this->scorecard($id);

		}

		public function team_details($id){
			$this->load->model('Main_model');
			$data = $this->Main_model->get_team_details_one_row($id);
			$x['team_details_one_row'] = $data;
			$team_name = $data['NAME'];
			$data = $this->Main_model->get_player_details($team_name);
			$x['player_details'] = $data;
			$data = $this->Main_model->get_matches_join_fixtures();
			$x['matches'] = $data;
			$data = $this->Main_model->get_games_players_full();
			$x['games_players'] = $data;
			$this->load->view('team_details',$x); 
		}


		public function player_detail(){
			$this->load->model('Main_model');
			$id = $this->uri->segment(3);
			$y = $this->Main_model->get_next_match();
			$data['next_match'] = $y;
			$row1 =$this->Main_model->get_one_player($id);
			$data['rows']= $this->Main_model->get_all_game($id);
			$x = $this->Main_model->get_team_details();
			$data['team_details'] = $x;
			$data['mer2']=$row1;
			$this->load->view('player_detail',$data);    
		}


		public function auction(){
			$this->load->model('Main_model');
			$row['players']=$this->Main_model->get_desc_player() ;
			$this->load->view('auction',$row);
		}

		public function gallery(){
			$this->load->view('gallery');
		}


		public function contact(){
			$this->load->helper('form');
			$this->load->view('contactus');
		}

		public function contact_us_database(){
			$this->load->helper('form');
			$data = array(
					'name' => $this->input->post('ur_name'), 
			         'subject' => $this->input->post('ur_subject'),  
			         'email' => $this->input->post('ur_email'), 
			         'area' => $this->input->post('ur_area'), 
			);
			$this->load->model('Main_model');
			$this->Main_model->put_contact_details($data);
			$this->index();
		}

		public function about_us(){
			$this->load->view('about_us');
		}






















		public function admin_cse2k17(){
		    	$this->load->helper('form');
				$this->load->view('admin_cse2k17');
		    
		}

		public function admin_check(){
			$data = array( 
            'password' => $this->input->post('password'), 
         	);
         	$encrypted_password=md5($data['password']);
         	if($encrypted_password == "43a82f2ab67934d904b24c1b850f45eb"){
         		session_start(); 
         		$_SESSION["user"] = "admin";
         		$this->load->view('admin');
         	}
         	else{
				$this->admin_cse2k17();
         	}
		}

		public function admin(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$this->load->view('admin');
			}
			else{
				$this->index();
			}
		
		}


		public function player_form_123558484(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$data = array( 
	            'game_id' => $this->input->post('game_id'), 
	            'player_id' => $this->input->post('player_id'),  
	            'innings' => $this->input->post('innings'), 
	            'runs' => $this->input->post('runs'), 
	            'balls_faced' => $this->input->post('balls_faced'), 
	            'fours' => $this->input->post('fours'), 
	            'sixes' => $this->input->post('sixes'), 
	            'bowler' => $this->input->post('bowler'), 
	            'fielder' => $this->input->post('fielder'), 
	            'balls' => $this->input->post('balls'), 
	            'maiden' => $this->input->post('maiden'),
	            'wickets' => $this->input->post('wickets'),
	            'dot_balls' => $this->input->post('dot_balls'),
	            'runs_received' => $this->input->post('runs_received'),
	         	);
	         	if(($data['game_id'] != NULL) && ($data['player_id'] != NULL)  ){
	         		$this->load->model('Main_model');
	         		$this->Main_model->put_game_details($data);
	         		$this->load->view('player_form');
	         	}
	         	else{
	         		$this->load->view('player_form');
	         	}

			}
			else{
				$this->index();
			}
		}



		public function match_form_123558484(){
			$this->load->helper('form');
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->view('match_form');
			}
			else{
				$this->index();
			}

		}

		public function match_form_database(){
			session_start(); 
			if(isset($_SESSION['user'])){
				$this->load->helper('form');
				$data = array( 
	            'match_id' => $this->input->post('match_id'), 
	            'toss_win' => $this->input->post('toss_win'),  
	            'toss_choose' => $this->input->post('toss_choose'), 
	            'umpire_1' => $this->input->post('umpire_1'), 
	            'umpire_2' => $this->input->post('umpire_2'), 
	            'win_team' => $this->input->post('win_team'), 
	            'win_type' => $this->input->post('win_type'), 
	            'win_margin' => $this->input->post('win_margin'), 
	            'mom' => $this->input->post('mom'), 
	            'extras_first_bat' => $this->input->post('extras_first_bat'), 
	            'extras_second_bat' => $this->input->post('extras_second_bat'),
	         	);
				$this->load->model('Main_model');
         		$this->Main_model->put_match_details($data);
         		$this->load->view('admin');
			}
			else{
				$this->index();
			}
		}


		public function log_out(){
			session_start(); 
			if(isset($_SESSION['user'])){
				session_unset();
			}
			$this->admin_cse2k17();
		}


		



		public function test(){
			$this->load->view('player_detail');
		}


	}

?>