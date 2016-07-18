<?php
require_once 'controllers/Abstract.php';
require_once 'models/Index.php';

/**
 * IndexController
 * @author iLoiLohas
 */
class
	IndexController
extends
	ControllerAbstract
{

	public function init()
	{
		$this->_loginit(get_class($this));
	}
	public function preDispatch() {
		/* 各コントローラの共通前処理 */
		parent::_preDispatch();
	}
	/**
	 * ログイン処理
	 * route --> /customer
	 */
	public function indexAction() {
		$this->_log->debug(__CLASS__ . ":" . __FUNCTION__ . " called:(" . __LINE__ . ")");
}