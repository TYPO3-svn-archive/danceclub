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
 * Controller for the Tournament object
 */
class Tx_Danceclub_Controller_TournamentController extends Tx_Extbase_MVC_Controller_ActionController {



	/**
	 * Displays all Tournaments
	 *
	 * @return void
	 */
	public function listAction() {
		$tournaments = $this->tournamentRepository->findAll();
		$this->view->assign('tournaments', $tournaments);
	}


	/**
	 * Displays a form for creating a new  Tournament
	 *
	 * @param Tx_Danceclub_Domain_Model_Tournament $newTournament a fresh Tournament object which has not yet been added to the repository
	 * @return void
	 * @dontvalidate $newTournament
	 */
	public function newAction(Tx_Danceclub_Domain_Model_Tournament $newTournament = NULL) {
		$this->view->assign('newTournament', $newTournament);
	}


	/**
	 * Creates a new Tournament and forwards to the list action.
	 *
	 * @param Tx_Danceclub_Domain_Model_Tournament $newTournament a fresh Tournament object which has not yet been added to the repository
	 * @return void
	 */
	public function createAction(Tx_Danceclub_Domain_Model_Tournament $newTournament) {
		$this->tournamentRepository->add($newTournament);
		$this->flashMessageContainer->add('Your new Tournament was created.');
		
			
		$this->redirect('list');
	}


	
	/**
	 * Displays a form for editing an existing Tournament
	 *
	 * @param Tx_Danceclub_Domain_Model_Tournament $tournament the Tournament to display
	 * @return string A form to edit a Tournament 
	 */
	public function editAction(Tx_Danceclub_Domain_Model_Tournament $tournament) {
		$this->view->assign('tournament', $tournament);
	}



	/**
	 * Updates an existing Tournament and forwards to the list action afterwards.
	 *
	 * @param Tx_Danceclub_Domain_Model_Tournament $tournament the Tournament to display
	 */
	public function updateAction(Tx_Danceclub_Domain_Model_Tournament $tournament) {
		$this->tournamentRepository->update($tournament);
		$this->flashMessageContainer->add('Your Tournament was updated.');
		$this->redirect('list');
	}


}
?>