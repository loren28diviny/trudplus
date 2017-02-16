<?php

class Item 
{
	protected static $begin;
	protected static $end;
	protected static $ctgry;
	protected static $sctgry;
	protected static $dscrpt;
	protected static $photopth;
	protected static $ED;
	private $category;
	private $subcategory;
	private $itname;
	private $photo;
	private $description;
	private $arr;
	public function __construct($ED="\r\n",$begin="BnName: ", $end="EdName: ",$ctgry="Category: ",$sctgry="SCategory: ",$dscrpt="Description: ",$photopth="PathPhoto: ")
	{
		$this->begin=$begin;
		$this->end=$end;
		$this->ctgry=$ctgry;
		$this->sctgry=$sctgry;
		$this->dscrpt=$dscrpt;
		$this->photopth=$photopth;
		$this->ED=$ED;
		$this->arr=array($this->begin=>$this->itname,
				$this->ctgry=>$this->category,
				$this->sctgry=>$this->subcategory,
				$this->photopth=>$this->photo,
				$this->dscrpt=>$this->description);
	}
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
		$string="$this->begin$this->itname$this->ED$this->ctgry$this->category$this->ED$this->sctgry$this->subcategory$this->ED$this->photopth$this->photo$this->ED$this->dscrpt$this->description$this->ED$this->end$this->itname$this->ED$this->ED";
		$fp = fopen($lal, 'a');
		fwrite($fp, $string);
		fclose($fp);
		
	}
	
	public function getfromfile ()
	{
		
	}
	
	
}
?>