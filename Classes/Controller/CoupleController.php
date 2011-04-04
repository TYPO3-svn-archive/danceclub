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
 * Controller for the Couple object
 */
class Tx_Danceclub_Controller_CoupleController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Danceclub_Domain_Repository_CoupleRepository
	 */
	protected $coupleRepository;

	/**
	 * @param Tx_Danceclub_Domain_Repository_CoupleRepository $coupleRepository
 	 * @return void
-	 */
	public function injectCoupleRepository(Tx_Danceclub_Domain_Repository_CoupleRepository $coupleRepository) {
		$this->coupleRepository = $coupleRepository;
	}



	/**
	 * Displays all Couples
	 *
	 * @return void
	 */
	public function listAction() {
		$couples = $this->coupleRepository->findAll();
		$this->view->assign('couples', $couples);
	}


	/**
	 * Displays a single Couple
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $couple the Couple to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Danceclub_Domain_Model_Couple $couple) {
		$this->view->assign('couple', $couple);
	}


	/**
	 * Displays a form for creating a new  Couple
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $newCouple a fresh Couple object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newCouple
	 */
	public function newAction(Tx_Danceclub_Domain_Model_Couple $newCouple = NULL) {
		$this->view->assign('newCouple', $newCouple);
	}


	/**
	 * Creates a new Couple and forwards to the list action.
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $newCouple a fresh Couple object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Danceclub_Domain_Model_Couple $newCouple) {
		$this->coupleRepository->add($newCouple);
		$this->flashMessageContainer->add('Your new Couple was created.');
		
			
		$this->redirect('list');
	}


	
	/**
	 * Displays a form for editing an existing Couple
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $couple the Couple to display
	 * @return string A form to edit a Couple 
	 */
	public function editAction(Tx_Danceclub_Domain_Model_Couple $couple) {
		$this->view->assign('couple', $couple);
	}



	/**
	 * Updates an existing Couple and forwards to the list action afterwards.
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $couple the Couple to display
	 */
	public function updateAction(Tx_Danceclub_Domain_Model_Couple $couple) {
		$this->coupleRepository->update($couple);
		$this->flashMessageContainer->add('Your Couple was updated.');
		$this->redirect('list');
	}


			/**
	 * Deletes an existing Couple
	 *
	 * @param Tx_Danceclub_Domain_Model_Couple $couple the Couple to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Danceclub_Domain_Model_Couple $couple) {
		$this->coupleRepository->remove($couple);
		$this->flashMessageContainer->add('Your Couple was removed.');
		$this->redirect('list');
	}


}
?>