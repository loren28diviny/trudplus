<?php
class Item
{
	private $category;
	private $subcategory;
	private $itname;
	private $photo;
	private $description;
	public function getData( $category, $subcategory, $itname, $photo, $description)
	{
		$this->category=$category;
		$this->subcategory=$subcategory;
		$this->itname=$itname;
		$this->photo=$photo;
		$this->description=$description;
		
	}
	public function sendData( $category, $subcategory, $itname, $photo, $description)
	{
		$category=$this->category;
		$subcategory=$this->subcategory;
		$itname=$this->itname;
		$photo=$this->$photo;
		$description=$this->description;
	
	}
	
	public function writeData()
	{
		$lal="'$this->category'.txt";
		$string="$this->itname\n\t$this->category\n\t$this->subcategory\n\t$this->photo\n\t$this->description\r\n";
		$fp = fopen($lal, 'a');
		fwrite($fp, $string);
		fclose($fp);
		
	}
	
	
}
?>