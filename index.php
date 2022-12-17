<?php
class IndexController extends Yaf_Controller_Abstract {
   /* действие по умолчанию */
   public function indexAction() {
       $this->_view->word = "hello world";
       //или
       // $this->getView()->word = "hello world";
   }
}
?>
