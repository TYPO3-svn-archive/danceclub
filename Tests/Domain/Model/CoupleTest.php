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
 * Testcase for class Tx_Danceclub_Domain_Model_Couple.
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
class Tx_Danceclub_Domain_Model_CoupleTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Danceclub_Domain_Model_Couple
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Danceclub_Domain_Model_Couple();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getClassLatinReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setClassLatinForStringSetsClassLatin() { 
		$this->fixture->setClassLatin('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getClassLatin()
		);
	}
	
	/**
	 * @test
	 */
	public function getAgeLatinReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAgeLatinForStringSetsAgeLatin() { 
		$this->fixture->setAgeLatin('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAgeLatin()
		);
	}
	
	/**
	 * @test
	 */
	public function getClassStandardReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setClassStandardForStringSetsClassStandard() { 
		$this->fixture->setClassStandard('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getClassStandard()
		);
	}
	
	/**
	 * @test
	 */
	public function getAgeStandardReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setAgeStandardForStringSetsAgeStandard() { 
		$this->fixture->setAgeStandard('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getAgeStandard()
		);
	}
	
	/**
	 * @test
	 */
	public function getCoupleDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCoupleDescriptionForStringSetsCoupleDescription() { 
		$this->fixture->setCoupleDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCoupleDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getCoupleStartReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setCoupleStartForDateTimeSetsCoupleStart() { }
	
	/**
	 * @test
	 */
	public function getCoupleEndReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCoupleEndForStringSetsCoupleEnd() { 
		$this->fixture->setCoupleEnd('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCoupleEnd()
		);
	}
	
	/**
	 * @test
	 */
	public function getMDancerReturnsInitialValueForObjectStorageContainingTx_Danceclub_Domain_Model_Dancer() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMDancer()
		);
	}

	/**
	 * @test
	 */
	public function setMDancerForObjectStorageContainingTx_Danceclub_Domain_Model_DancerSetsMDancer() { 
		$mDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$objectStorageHoldingExactlyOneMDancer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMDancer->attach($mDancer);
		$this->fixture->setMDancer($objectStorageHoldingExactlyOneMDancer);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMDancer,
			$this->fixture->getMDancer()
		);
	}
	
	/**
	 * @test
	 */
	public function addMDancerToObjectStorageHoldingMDancer() {
		$mDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$objectStorageHoldingExactlyOneMDancer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMDancer->attach($mDancer);
		$this->fixture->addMDancer($mDancer);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMDancer,
			$this->fixture->getMDancer()
		);
	}

	/**
	 * @test
	 */
	public function removeMDancerFromObjectStorageHoldingMDancer() {
		$mDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($mDancer);
		$localObjectStorage->detach($mDancer);
		$this->fixture->addMDancer($mDancer);
		$this->fixture->removeMDancer($mDancer);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMDancer()
		);
	}
	
	/**
	 * @test
	 */
	public function getFDancerReturnsInitialValueForObjectStorageContainingTx_Danceclub_Domain_Model_Dancer() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFDancer()
		);
	}

	/**
	 * @test
	 */
	public function setFDancerForObjectStorageContainingTx_Danceclub_Domain_Model_DancerSetsFDancer() { 
		$fDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$objectStorageHoldingExactlyOneFDancer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFDancer->attach($fDancer);
		$this->fixture->setFDancer($objectStorageHoldingExactlyOneFDancer);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFDancer,
			$this->fixture->getFDancer()
		);
	}
	
	/**
	 * @test
	 */
	public function addFDancerToObjectStorageHoldingFDancer() {
		$fDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$objectStorageHoldingExactlyOneFDancer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFDancer->attach($fDancer);
		$this->fixture->addFDancer($fDancer);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFDancer,
			$this->fixture->getFDancer()
		);
	}

	/**
	 * @test
	 */
	public function removeFDancerFromObjectStorageHoldingFDancer() {
		$fDancer = new Tx_Danceclub_Domain_Model_Dancer();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($fDancer);
		$localObjectStorage->detach($fDancer);
		$this->fixture->addFDancer($fDancer);
		$this->fixture->removeFDancer($fDancer);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFDancer()
		);
	}
	
}
?>