<?php

class MyDisquesController extends \ControllerBase {
	/**
	 * Affiches les disques de l'utilisateur
	 */
	public function indexAction(){
		$pb=$this->jquery->bootstrap()->htmlProgressbar("pb");
		$pb->showCaption(true);
		$pb->setActive(true);
		$pb->setStriped(true);

		$pb->setStyleLimits(["info"=>0,"success"=>10,"warning"=>50,"danger"=>80] );


		$pb1=$this->jquery->bootstrap()->htmlProgressbar("pb1");
		$pb1->showCaption(true);
		$pb1->setActive(true);
		$pb1->setStriped(true);
		$pb1->setValue(50	);
		$pb1->setStyleLimits(["info"=>0,"success"=>10,"warning"=>50,"danger"=>80] );

		$pb2=$this->jquery->bootstrap()->htmlProgressbar("pb2");
		$pb2->showCaption(true);
		$pb2->setActive(true);
		$pb2->setStriped(true);
		$pb2->setStyleLimits(["info"=>0,"success"=>10,"warning"=>50,"danger"=>80] );


		//TODO 4.2
		$this->jquery->compile($this->view);
	}

	public function connectUserAction(){
		Auth::getUser();
	}


	/*public function QuotaAction(){
		$disque1=$this->config->cloud;
		$this->session->set("disque1",$disque1);
	}*/

}