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
 * Dance Couple
 */
class Tx_Danceclub_Domain_Model_Couple extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Class Latin
	 *
	 * @var string
	 */
	protected $classLatin;

	/**
	 * Age Class Latin
	 *
	 * @var string
	 */
	protected $ageLatin;

	/**
	 * Class Standard
	 *
	 * @var string
	 */
	protected $classStandard;

	/**
	 * Age Class Standard
	 *
	 * @var string
	 */
	protected $ageStandard;

	/**
	 * Description of the Couple
	 *
	 * @var string
	 */
	protected $coupleDescription;

	/**
	 * Start-Date of the Couple
	 *
	 * @var DateTime
	 */
	protected $coupleStart;

	/**
	 * End-Date of the Couple
	 *
	 * @var string
	 */
	protected $coupleEnd;

	/**
	 * Male Dancer
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer>
	 */
	protected $mDancer;

	/**
	 * Female Dancer
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer>
	 */
	protected $fDancer;


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
		$this->mDancer = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->fDancer = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * @param string $classLatin
	 * @return void
	 */
	public function setClassLatin($classLatin) {
		$this->classLatin = $classLatin;
	}

	/**
	 * @return string
	 */
	public function getClassLatin() {
		return $this->classLatin;
	}

	/**
	 * @param string $ageLatin
	 * @return void
	 */
	public function setAgeLatin($ageLatin) {
		$this->ageLatin = $ageLatin;
	}

	/**
	 * @return string
	 */
	public function getAgeLatin() {
		return $this->ageLatin;
	}

	/**
	 * @param string $classStandard
	 * @return void
	 */
	public function setClassStandard($classStandard) {
		$this->classStandard = $classStandard;
	}

	/**
	 * @return string
	 */
	public function getClassStandard() {
		return $this->classStandard;
	}

	/**
	 * @param string $ageStandard
	 * @return void
	 */
	public function setAgeStandard($ageStandard) {
		$this->ageStandard = $ageStandard;
	}

	/**
	 * @return string
	 */
	public function getAgeStandard() {
		return $this->ageStandard;
	}

	/**
	 * @param string $coupleDescription
	 * @return void
	 */
	public function setCoupleDescription($coupleDescription) {
		$this->coupleDescription = $coupleDescription;
	}

	/**
	 * @return string
	 */
	public function getCoupleDescription() {
		return $this->coupleDescription;
	}

	/**
	 * @param DateTime $coupleStart
	 * @return void
	 */
	public function setCoupleStart(DateTime $coupleStart) {
		$this->coupleStart = $coupleStart;
	}

	/**
	 * @return DateTime
	 */
	public function getCoupleStart() {
		return $this->coupleStart;
	}

	/**
	 * @param string $coupleEnd
	 * @return void
	 */
	public function setCoupleEnd($coupleEnd) {
		$this->coupleEnd = $coupleEnd;
	}

	/**
	 * @return string
	 */
	public function getCoupleEnd() {
		return $this->coupleEnd;
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer> $mDancer
	 * @return void
	 */
	public function setMDancer(Tx_Extbase_Persistence_ObjectStorage $mDancer) {
		$this->mDancer = $mDancer;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer>
	 */
	public function getMDancer() {
		return $this->mDancer;
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Dancer the Dancer to be added
	 * @return void
	 */
	public function addMDancer(Tx_Danceclub_Domain_Model_Dancer $mDancer) {
		$this->mDancer->attach($mDancer);
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Dancer the Dancer to be removed
	 * @return void
	 */
	public function removeMDancer(Tx_Danceclub_Domain_Model_Dancer $mDancerToRemove) {
		$this->mDancer->detach($mDancerToRemove);
	}

	/**
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer> $fDancer
	 * @return void
	 */
	public function setFDancer(Tx_Extbase_Persistence_ObjectStorage $fDancer) {
		$this->fDancer = $fDancer;
	}

	/**
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Danceclub_Domain_Model_Dancer>
	 */
	public function getFDancer() {
		return $this->fDancer;
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Dancer the Dancer to be added
	 * @return void
	 */
	public function addFDancer(Tx_Danceclub_Domain_Model_Dancer $fDancer) {
		$this->fDancer->attach($fDancer);
	}

	/**
	 * @param Tx_Danceclub_Domain_Model_Dancer the Dancer to be removed
	 * @return void
	 */
	public function removeFDancer(Tx_Danceclub_Domain_Model_Dancer $fDancerToRemove) {
		$this->fDancer->detach($fDancerToRemove);
	}

}
?>