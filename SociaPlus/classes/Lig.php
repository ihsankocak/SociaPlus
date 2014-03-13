<?php
require "classes/Fixture.php";
class Lig {
	private $fixture;
	function playTheWeek($week){
		error_log("ulaoxlim: ".$week);
		$this->fixture->getFixture()[$week][0]->play();
		$this->fixture->getFixture()[$week][1]->play();
		$this->fixture->sortTeams();
		
		
	}
	function __construct() {
		$this->fixture=new Fixture();
		
	}
	/**
	 * @return the $fixture
	 */
	public function getFixture() {
		return $this->fixture;
	}

	/**
	 * @param Fixture $fixture
	 */
	public function setFixture($fixture) {
		$this->fixture = $fixture;
	}

	
	
	

	
}

?>