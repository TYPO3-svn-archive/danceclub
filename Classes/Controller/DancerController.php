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
 * Controller for the Dancer object
 */
class Tx_Danceclub_Controller_DancerController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_Danceclub_Domain_Repository_DancerRepository
	 */
	protected $dancerRepository;

	/**
	 * @param Tx_Danceclub_Domain_Repository_DancerRepository $dancerRepository
 	 * @return void
-	 */
	public function injectDancerRepository(Tx_Danceclub_Domain_Repository_DancerRepository $dancerRepository) {
		$this->dancerRepository = $dancerRepository;
	}



	/**
	 * Displays all Dancers
	 *
	 * @return void
	 */
	public function listAction() {
		$dancers = $this->dancerRepository->findAll();
		$this->view->assign('dancers', $dancers);
	}


	/**
	 * Displays a single Dancer
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $dancer the Dancer to display
	 * @return string The rendered view
	 */
	public function showAction(Tx_Danceclub_Domain_Model_Dancer $dancer) {
		$this->view->assign('dancer', $dancer);
	}


	/**
	 * Displays a form for creating a new  Dancer
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $newDancer a fresh Dancer object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newDancer
	 */
	public function newAction(Tx_Danceclub_Domain_Model_Dancer $newDancer = NULL) {
		$this->view->assign('newDancer', $newDancer);
	}


	/**
	 * Creates a new Dancer and forwards to the list action.
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $newDancer a fresh Dancer object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Danceclub_Domain_Model_Dancer $newDancer) {
		$this->dancerRepository->add($newDancer);
		$this->flashMessageContainer->add('Your new Dancer was created.');
		
			
		$this->redirect('list');
	}


	
	/**
	 * Displays a form for editing an existing Dancer
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $dancer the Dancer to display
	 * @return string A form to edit a Dancer 
	 */
	public function editAction(Tx_Danceclub_Domain_Model_Dancer $dancer) {
		$this->view->assign('dancer', $dancer);
	}



	/**
	 * Updates an existing Dancer and forwards to the list action afterwards.
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $dancer the Dancer to display
	 */
	public function updateAction(Tx_Danceclub_Domain_Model_Dancer $dancer) {
		$this->dancerRepository->update($dancer);
		$this->flashMessageContainer->add('Your Dancer was updated.');
		$this->redirect('list');
	}


			/**
	 * Deletes an existing Dancer
	 *
	 * @param Tx_Danceclub_Domain_Model_Dancer $dancer the Dancer to be deleted
	 * @return void
	 */
	public function deleteAction(Tx_Danceclub_Domain_Model_Dancer $dancer) {
		$this->dancerRepository->remove($dancer);
		$this->flashMessageContainer->add('Your Dancer was removed.');
		$this->redirect('list');
	}


}
?>