<?php
require 'classes/Team.php';
require 'classes/Game.php';
class Fixture {
	private $fixture;
	private $teams;
	
/**
	 * @return the $fixture
	 */
	public function getFixture() {
		return $this->fixture;
	}

	function __construct() {
		$this->teams = array(new Team("gs"),new Team("fb"),new Team("bjk"),new Team("ts"));
		$this->fixture[0][0]=new Game($this->getTeams()[0],$this->getTeams()[3]);
		$this->fixture[0][1]=new Game($this->getTeams()[1],$this->getTeams()[2]);
		
		$this->fixture[1][0]=new Game($this->getTeams()[2],$this->getTeams()[0]);
		$this->fixture[1][1]=new Game($this->getTeams()[1],$this->getTeams()[3]);
		
		$this->fixture[2][0]=new Game($this->getTeams()[0],$this->getTeams()[1]);
		$this->fixture[2][1]=new Game($this->getTeams()[2],$this->getTeams()[3]);
		
		$this->fixture[3][0]=new Game($this->getTeams()[3],$this->getTeams()[0]);
		$this->fixture[3][1]=new Game($this->getTeams()[2],$this->getTeams()[1]);
		
		$this->fixture[4][0]=new Game($this->getTeams()[0],$this->getTeams()[2]);
		$this->fixture[4][1]=new Game($this->getTeams()[3],$this->getTeams()[1]);
		
		$this->fixture[5][0]=new Game($this->getTeams()[1],$this->getTeams()[0]);
		$this->fixture[5][1]=new Game($this->getTeams()[3],$this->getTeams()[2]);
	}
	
	public function compare($team1,$team2){
		if($team1->getPoint()!=$team2->getPoint()){
			return $team1->getPoint()<$team2->getPoint();
		}
		elseif($team1->getAverage()!=$team2->getAverage()){
			return $team1->getAverage()< $team2->getAverage();
			
		}
		else{
			return $team1->getTeamName()< $team2->getTeamName();
		}
	}
	public  function sortTeams(){
		usort($this->teams,array($this,"compare"));
	}
	
	/**
	 * @param field_type $fixture
	 */
	public function setFixture($fixture) {
		$this->fixture = $fixture;
	}

	/**
	 * @return the $teams
	 */
	public function getTeams() {
		return $this->teams;
	}
	
	/**
	 * @param field_type $teams
	 */
	public function setTeams($teams) {
		$this->teams = $teams;
	}
}

?>