<?php
class Game {
	private $score;
	
	private $averages;
	private $team1;
	private $team2;
	
	function play(){
		$score= array(rand(0,4),rand(0,4));
		$this->setScore($score);
		
		error_log("ahaiste: ".$this->score[0]);
		
		$this->team1->setEat($this->team1->getEat()+$this->score[1]);
		$this->team2->setEat($this->team2->getEat()+$this->score[0]);
		
		$this->team1->setScored($this->team1->getScored()+$this->score[0]);
		$this->team2->setScored($this->team2->getScored()+$this->score[1]);
		
		$this->team1->setPlayed($this->team1->getPlayed()+1);
		$this->team2->setPlayed($this->team2->getPlayed()+1);
		
		$this->team1->setAverage($this->team1->getAverage()+($this->score[0]-$this->score[1]));
		$this->team2->setAverage($this->team2->getAverage()+($this->score[1]-$this->score[0]));
		
		
		
		if($this->score[0]==$this->score[1]){
			$this->team1->setEqual($this->team1->getEqual()+1);
			$this->team2->setEqual($this->team2->getEqual()+1);
			
			$this->team1->setPoint($this->team1->getPoint()+1);
			$this->team2->setPoint($this->team2->getPoint()+1);
		}
		elseif ($this->score[0]<$this->score[1]){
			$this->team1->setLost($this->team1->getLost()+1);
			$this->team2->setWin($this->team2->getWin()+1);
			
			$this->team2->setPoint($this->team2->getPoint()+3);
		}
		else {
			$this->team2->setLost($this->team2->getLost()+1);
			$this->team1->setWin($this->team1->getWin()+1);
			
			$this->team1->setPoint($this->team1->getPoint()+3);
		}
	}
	function __construct($team1,$team2) {
		$this->team1=$team1;
		$this->team2=$team2;
		
		$this->score[0]=0;
		$this->score[1]=0;
		
		$this->points[0]=1;
		$this->points[1]=1;
	}
	/**
	 * @return the $score
	 */
	public function getScore() {
		return $this->score;
	}

	
	

	/**
	 * @return the $averages
	 */
	public function getAverages() {
		return $this->averages;
	}

	/**
	 * @return the $team1
	 */
	public function getTeam1() {
		return $this->team1;
	}

	/**
	 * @return the $team2
	 */
	public function getTeam2() {
		return $this->team2;
	}

	/**
	 * @param field_type $averages
	 */
	public function setAverages($averages) {
		$this->averages = $averages;
	}

	/**
	 * @param field_type $team1
	 */
	public function setTeam1($team1) {
		$this->team1 = $team1;
	}

	/**
	 * @param field_type $team2
	 */
	public function setTeam2($team2) {
		$this->team2 = $team2;
	}

	/**
	 * @param string $score
	 */
	public function setScore($score) {
		$this->score = $score;
	}

	

	

	
}

?>