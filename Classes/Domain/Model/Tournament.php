<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Sven Kalbhenn <sven@skom.de>, SKom
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Tournaments
 */
class Tx_Danceclub_Domain_Model_Tournament extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Date of the tournament
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * Organizer of the tournament
	 *
	 * @var string
	 */
	protected $organizer;

	/**
	 * City of the tournament
	 *
	 * @var string
	 */
	protected $city;

	/**
	 * Number of the tournament
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $number;

	/**
	 * Type of tournament
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * Class of the tournament
	 *
	 * @var string
	 */
	protected $class;

	/**
	 * Age Class of the tournament
	 *
	 * @var string
	 */
	protected $age;

	/**
	 * announce Date
	 *
	 * @var DateTime
	 */
	protected $announceDate;

	/**
	 * Status of the announcement
	 *
	 * @var string
	 */
	protected $status;

	/**
	 * reached result
	 *
	 * @var string
	 */
	protected $result;

	/**
	 * Amount of participant
	 *
	 * @var integer
	 */
	protected $participants;

	/**
	 * rank
	 *
	 * @var string
	 */
	protected $rank;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * danceCouple
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Couple>
	 */
	protected $danceCouple;


	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage instances.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		* Do not modify this method!
		* It will be rewritten on each save in the kickstarter
		* You may modify the constructor of this class instead
		*/
		$this->danceCouple = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @param string $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * @return string
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @param string $organizer
	 * @return void
	 */
	public function setOrganizer($organizer) {
		$this->organizer = $organizer;
	}

	/**
	 * @return string
	 */
	public function getOrganizer() {
		return $this->organizer;
	}

	/**
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * @param string $number
	 * @return void
	 */
	public function setNumber($number) {
		$this->number = $number;
	}

	/**
	 * @return string
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $class
	 * @return void
	 */
	public function setClass($class) {
		$this->class = $class;
	}

	/**
	 * @return string
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * @param string $age
	 * @return void
	 */
	public function setAge($age) {
		$this->age = $age;
	}

	/**
	 * @return string
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * @param DateTime $announceDate
	 * @return void
	 */
	public function setAnnounceDate(DateTime $announceDate) {
		$this->announceDate = $announceDate;
	}

	/**
	 * @return DateTime
	 */
	public function getAnnounceDate() {
		return $this->announceDate;
	}

	/**
	 * @param string $status
	 * @return void
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $result
	 * @return void
	 */
	public function setResult($result) {
		$this->result = $result;
	}

	/**
	 * @return string
	 */
	public function getResult() {
		return $this->result;
	}

	/**
	 * @param integer $participants
	 * @return void
	 */
	public function setParticipants($participants) {
		$this->participants = $participants;
	}

	/**
	 * @return integer
	 */
	public function getParticipants() {
		return $this->participants;
	}

	/**
	 * @param string $rank
	 * @return void
	 */
	public function setRank($rank) {
		$this->rank = $rank;
	}

	/**
	 * @return string
	 */
	public function getRank() {
		return $this->rank;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Couple> $danceCouple
	 * @return void
	 */
	public function setDanceCouple(Tx_Extbase_Persistence_ObjectStorage $danceCouple) {
		$this->danceCouple = $danceCouple;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Couple>
	 */
	public function getDanceCouple() {
		return $this->danceCouple;
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Couple the Couple to be added
	 * @return void
	 */
	public function addDanceCouple(Tx_Danceclub_Domain_Model_Couple $danceCouple) {
		$this->danceCouple->attach($danceCouple);
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Couple the Couple to be removed
	 * @return void
	 */
	public function removeDanceCouple(Tx_Danceclub_Domain_Model_Couple $danceCoupleToRemove) {
		$this->danceCouple->detach($danceCoupleToRemove);
	}

}
?>