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
*  the Free Software Foundation; either version 2 of the License, or
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
 * Testcase for class Tx_Danceclub_Domain_Model_Tournament.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Dance-Club
 * 
 * @author Sven Kalbhenn <sven@skom.de>
 */
class Tx_Danceclub_Domain_Model_TournamentTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Danceclub_Domain_Model_Tournament
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Danceclub_Domain_Model_Tournament();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDateForStringSetsDate() { 
		$this->fixture->setDate('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDate()
		);
	}
	
	/**
	 * @test
	 */
	public function getOrganizerReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setOrganizerForStringSetsOrganizer() { 
		$this->fixture->setOrganizer('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getOrganizer()
		);
	}
	
	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() { 
		$this->fixture->setCity('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCity()
		);
	}
	
	/**
	 * @test
	 */
	public function getNumberReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNumberForStringSetsNumber() { 
		$this->fixture->setNumber('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getNumber()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTypeForStringSetsType() { 
		$this->fixture->setType('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getClassReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setClassForStringSetsClass() { 
		$this->fixture->setClass('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getClass()
		);
	}
	
	/**
	 * @test
	 */
	public function getAgeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAgeForStringSetsAge() { 
		$this->fixture->setAge('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAge()
		);
	}
	
	/**
	 * @test
	 */
	public function getAnnounceDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setAnnounceDateForDateTimeSetsAnnounceDate() { }
	
	/**
	 * @test
	 */
	public function getStatusReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setStatusForStringSetsStatus() { 
		$this->fixture->setStatus('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getStatus()
		);
	}
	
	/**
	 * @test
	 */
	public function getResultReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setResultForStringSetsResult() { 
		$this->fixture->setResult('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getResult()
		);
	}
	
	/**
	 * @test
	 */
	public function getParticipantsReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getParticipants()
		);
	}

	/**
	 * @test
	 */
	public function setParticipantsForIntegerSetsParticipants() { 
		$this->fixture->setParticipants(12);

		$this->assertSame(
			12,
			$this->fixture->getParticipants()
		);
	}
	
	/**
	 * @test
	 */
	public function getRankReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setRankForStringSetsRank() { 
		$this->fixture->setRank('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getRank()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getDanceCoupleReturnsInitialValueForObjectStorageContainingTx_Danceclub_Domain_Model_Couple() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getDanceCouple()
		);
	}

	/**
	 * @test
	 */
	public function setDanceCoupleForObjectStorageContainingTx_Danceclub_Domain_Model_CoupleSetsDanceCouple() { 
		$danceCouple = new Tx_Danceclub_Domain_Model_Couple();
		$objectStorageHoldingExactlyOneDanceCouple = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneDanceCouple->attach($danceCouple);
		$this->fixture->setDanceCouple($objectStorageHoldingExactlyOneDanceCouple);

		$this->assertSame(
			$objectStorageHoldingExactlyOneDanceCouple,
			$this->fixture->getDanceCouple()
		);
	}
	
	/**
	 * @test
	 */
	public function addDanceCoupleToObjectStorageHoldingDanceCouple() {
		$danceCouple = new Tx_Danceclub_Domain_Model_Couple();
		$objectStorageHoldingExactlyOneDanceCouple = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneDanceCouple->attach($danceCouple);
		$this->fixture->addDanceCouple($danceCouple);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneDanceCouple,
			$this->fixture->getDanceCouple()
		);
	}

	/**
	 * @test
	 */
	public function removeDanceCoupleFromObjectStorageHoldingDanceCouple() {
		$danceCouple = new Tx_Danceclub_Domain_Model_Couple();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($danceCouple);
		$localObjectStorage->detach($danceCouple);
		$this->fixture->addDanceCouple($danceCouple);
		$this->fixture->removeDanceCouple($danceCouple);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getDanceCouple()
		);
	}
	
}
?>