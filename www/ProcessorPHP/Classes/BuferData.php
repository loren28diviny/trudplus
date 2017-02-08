<?php
class BuferData
{
	private $category;
	private $subcategory;
	private $itname;
	private $photo;
	private $description;
	public function getData( $category, $subcategory, $itname, $photo, $description)
	{
		$this->$category=$category;
		$this->$subcategory=$subcategory;
		$this->$itname=$itname;
		$this->$photo=$photo;
		$this->$description=$description;
		
	}
	public function sendData( $category, $subcategory, $itname, $photo, $description)
	{
		$category=$this->$category;
		$subcategory=$this->$subcategory;
		$itname=$this->$itname;
		$photo=$this->$photo;
		$description=$this->$description;
	
	}
	
	
}
?>