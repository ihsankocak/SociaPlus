<?php



 class Team {
	private  $teamName;
	private $played;
	private $point;
	private $eat;
	private $scored;
	private $average;
	private $lost;
	private $win;
	private $equal;
	function __construct($teamName) {
		$this->teamName=$teamName;
		$this->played=0;
		$this->eat=0;
		$this->point=0;
		$this->scored=0;
		$this->average=0;
		$this->lost=0;
		$this->win=0;
		$this->equal=0;
		error_log("constructeddddd");
	}
	/**
	 * @return the $lost
	 */
	public function getLost() {
		return $this->lost;
	}

	/**
	 * @return the $win
	 */
	public function getWin() {
		return $this->win;
	}

	/**
	 * @return the $equal
	 */
	public function getEqual() {
		return $this->equal;
	}

	/**
	 * @param field_type $lost
	 */
	public function setLost($lost) {
		$this->lost = $lost;
	}

	/**
	 * @param field_type $win
	 */
	public function setWin($win) {
		$this->win = $win;
	}

	/**
	 * @param field_type $equal
	 */
	public function setEqual($equal) {
		$this->equal = $equal;
	}

	/**
	 * @return the $point
	 */
	public function getPoint() {
		return $this->point;
	}

	/**
	 * @param field_type $point
	 */
	public function setPoint($point) {
		$this->point = $point;
	}

	/**
	 * @return the $teamName
	 */
	public function getTeamName() {
		return $this->teamName;
	}

	/**
	 * @param field_type $teamName
	 */
	public function setTeamName($teamName) {
		$this->teamName = $teamName;
	}
	

	/**
	 * @return the $played
	 */
	public function getPlayed() {
		return $this->played;
	}

	/**
	 * @return the $eat
	 */
	public function getEat() {
		return $this->eat;
	}

	/**
	 * @return the $scored
	 */
	public function getScored() {
		return $this->scored;
	}

	/**
	 * @return the $average
	 */
	public function getAverage() {
		return $this->average;
	}

	/**
	 * @param field_type $played
	 */
	public function setPlayed($played) {
		$this->played = $played;
	}

	/**
	 * @param field_type $eat
	 */
	public function setEat($eat) {
		$this->eat = $eat;
	}

	/**
	 * @param field_type $scored
	 */
	public function setScored($scored) {
		$this->scored = $scored;
	}

	/**
	 * @param field_type $average
	 */
	public function setAverage($average) {
		$this->average = $average;
	}

	
}

?>