<?php 
   Class Main_model extends CI_Model { 
	
		Public function __construct() { 
		 parent::__construct(); 
		} 

    	public function get_next_match(){
	      	$sql= "SELECT * FROM fixtures WHERE played=0 ORDER BY date LIMIT 1";
	   		$data=$this->db->query($sql);
	   		$result = $data->row_array();   // extracts ONE row from result
	   		return $result;
      	}

     	public function get_matches_3(){
	      	$sql= "SELECT * FROM fixtures WHERE played=0 ORDER BY date LIMIT 3";
	   		$data=$this->db->query($sql);
	   		return $data->result();
     	}

		public function get_team_details(){
			$sql= "SELECT * FROM teams ORDER BY POINTS desc";
			$data = $this->db->query($sql);
			return $data->result();
		}  

		public function get_player_details_full(){
			$sql = "SELECT * FROM players";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_matches_join_fixtures(){
			# INNER JOIN joins intersecting rows ONLY
			$sql= "SELECT * FROM matches INNER JOIN fixtures ON matches.match_id = fixtures.game_id ";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_fixtures(){
			$sql = "SELECT * FROM fixtures WHERE played=0";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_matches_join_fixtures_one_row($id){
			$sql = "SELECT * FROM matches INNER JOIN fixtures ON matches.match_id = fixtures.game_id
					WHERE match_id = $id 
					";
			$data = $this->db->query($sql);
			$result = $data->row_array();   // extracts ONE row from result
	   		return $result;
		}

		public function get_games($id){
			# query is ordered to obtain results in scorecard so that players NOT OUT are displayed last
			$sql = "SELECT * FROM games INNER JOIN players ON games.player_id = players.ID
					WHERE game_id = $id ORDER BY games.balls_faced desc"; 
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_comments($id){
			$sql = "SELECT * FROM comments WHERE match_id = $id";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_team_details_one_row($id){
			$sql = "SELECT * FROM teams WHERE TEAM_ID = $id";
			$data = $this->db->query($sql);
			$result = $data->row_array();
			return $result;
		}

		public function get_player_details($team_name){
			$sql = "SELECT * FROM players WHERE TEAM = '$team_name' ";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_games_players_full(){
			$sql = "SELECT * FROM games INNER JOIN players ON games.player_id = players.ID";
			$data = $this->db->query($sql);
			return $data->result();
		}

		public function get_all_player() { 
			$query = $this->db->get('players'); 
			return $query->result();
		}
       
		public function get_one_player($id){
			$sql="SELECT *  from players where id='$id' ";
			$row= $this->db->query($sql);
			return $row->row();
	    }
		 
		public function get_all_game($id=0){ 
			$sql="SELECT *  from games where player_id='$id'";
			$row= $this->db->query($sql);
			return $row->result(); 
		} 

		public function get_desc_player() { 
			$sql="SELECT *  from players order by price desc";
			$row= $this->db->query($sql);
			return $row->result(); 
		}




		 public function put_contact_details($data){
		   $this->db->insert('contact', $data); 
		  }


		public function put_comments($data){
			$this->db->insert('comments',$data);
		}

		public function put_game_details($data){
			$this->db->insert('games', $data); 
		}

		public function put_match_details($data){
			# USE {} in ARRAY variable
			$this->db->insert('matches',$data);
			$sql = "SELECT * FROM fixtures WHERE game_id='{$data['match_id']}'";
			$x = $this->db->query($sql);
			$fixtures = $x->row_array();   // extracts ONE row from result
			if($data['win_type'] != 'draw'){
				if($data['win_team'] == $fixtures['play_team_1'] ){
					$sql = "UPDATE teams SET WON=WON+1 WHERE NAME='{$fixtures['play_team_1']}'";
					$this->db->query($sql);
					$sql = "UPDATE teams SET POINTS=POINTS+3 WHERE NAME='{$fixtures['play_team_1']}'";
					$this->db->query($sql);
					$sql = "UPDATE teams SET LOSS=LOSS+1 WHERE NAME='{$fixtures['play_team_2']}'";
					$this->db->query($sql);
				}
				else{
					$sql = "UPDATE teams SET WON=WON+1 WHERE NAME='{$fixtures['play_team_2']}'";
					$this->db->query($sql);
					$sql = "UPDATE teams SET POINTS=POINTS+3 WHERE NAME='{$fixtures['play_team_2']}'";
					$this->db->query($sql);
					$sql = "UPDATE teams SET LOSS=LOSS+1 WHERE NAME='{$fixtures['play_team_1']}'";
					$this->db->query($sql);
				}
			}
			else
			{
					$sql = "UPDATE teams SET POINTS=POINTS+1 WHERE NAME='{$fixtures['play_team_2']}'";
					$this->db->query($sql);
					$sql = "UPDATE teams SET POINTS=POINTS+1 WHERE NAME='{$fixtures['play_team_1']}'";
					$this->db->query($sql);
			}
			$sql = "UPDATE fixtures SET played=1 WHERE game_id='{$data['match_id']}'";
			$this->db->query($sql);
		}
		
    }
?>