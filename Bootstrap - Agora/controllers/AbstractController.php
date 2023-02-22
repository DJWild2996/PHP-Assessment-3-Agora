<?php

abstract class AbstractController {
	
	private $context;
	private $redirect;
	private $inputs;
	private $filters;
	
	public function __construct (IContext $context){
		$this->context=$context;
		$this->redirect=null;
		
		if (isset($_POST)){
			$this->inputs=$_POST;
			unset ($_POST);
		} else {
			$this->inputs=array();
		}
		if (isset($_GET)){
			$this->filters=$_GET;
			unset ($_GET);
		} else {
			$this->filters=array();
		}
		if (isset($_REQUEST)){
			unset ($_REQUEST);
		}
	}
	protected function getContext() {
		return $this->context;
	}
	protected function getDB() {
		return $this->context->getDB();
	}
	protected function getURI() {
		return $this->context->getURI();
	}
	protected function getConfig() {
		return $this->context->getConfig();
	}

	public function process() {
		$method=$this->getURI()->getRequestMethod();
		switch($method) {
			case 'GET':  	$view=$this->getView(false);	break;
			case 'POST':  	$view=$this->getView(true);		break;
			default:
				throw new InvalidRequestException ("Invalid Request verb");
		}
		if ($view!==null) {
			
			$site=$this->getURI()->getSite();
			$view->setTemplateField('site',$site);
			$session=$this->context->getSession();
			if ($session->isKeySet('feedback') ) {
				$feedback=$session->get('feedback');
				$feedback="<div class=\"feedback\">$feedback</div>";
				$session->unsetKey('feedback');
			} else {
				$feedback='';
			}
			$view->setTemplateField('feedback',$feedback);
			$view->render();
		} elseif ($this->redirect!==null) {
			header ('Location: '.$this->redirect);
		} else {
			throw new InvalidRequestException ("View not set");
		}
	}

	
	protected function getView($isPostback) {
		return null;
	}	
	
	protected function redirectTo ($page, $feedback=null) {
		$this->redirect=$this->context->getURI()->getSite().$page;
		if ($feedback!==null) {
			$this->context->getSession()->set('feedback',$feedback);
		}
	}
	
	protected function getInput($inputField) {
		if (!isset($this->inputs[$inputField])) {
			return null;
		}
		$input = trim($this->inputs[$inputField]); 
		return $input;
	}

	protected function getFilter($filterField) {
		if (!isset($this->filters[$filterField])) {
			return null;
		}
		return trim($this->filters[$filterField]); 
	}

	private function sanitise($input) {
		return htmlspecialchars($input, ENT_QUOTES);
	}	
}
