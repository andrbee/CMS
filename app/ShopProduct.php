<?php 
namespace app;		
class ShopProduct {
	public $title = "Стандартный товар";
	public $producerMainName = "Doe";
	public $producerFirstName = "John";
	public $price = 100;

	

	function getProducer(){
		return $this->producerFirstName." ".$this->producerMainName;
	}

}