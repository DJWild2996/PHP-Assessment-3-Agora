<?php


class StaticController extends AbstractController {
	private $path;
	public function __construct(IContext $context) {
		parent::__construct($context);
		$this->path=$context->getURI()->getRemainingParts();
	}
	
	protected function getView($isPostback) {
	
		$db=$this->getDB();
		$model = new StaticModel($this->getContext(), $this->path);
		
		$view=new StaticView($this->getContext());
	
		$view->setModel($model);
		$view->setTemplate('html/login.html');
		$path=explode("/",$this->path);
		$title=ucwords(implode(' ',$path));
		$view->setTemplateField('pagename',$title);
		return $view;
	}
}
