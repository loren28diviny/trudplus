<?php

class Item 
{
	protected static $end;
	protected static $ctgry;
	protected static $sctgry;
	protected static $dscrpt;
	protected static $photopth;
	protected static $ED;
	protected static $EQ;
	protected static $ob;
	protected static $cb;
	protected static $ov;
	protected static $cv;
	private $category;
	private $subcategory;
	private $itname;
	private $photo;
	private $description;
	private $arr;
	public function __construct($ov='"',$cb=']',$ob='[',$ED="\r\n", $end="endconf;",$ctgry="Category=",$sctgry="SCategory=",$dscrpt="Description=",$photopth="PathPhoto=")
	{
		$this->end=$end;
		$this->ctgry=$ctgry;
		$this->sctgry=$sctgry;
		$this->dscrpt=$dscrpt;
		$this->photopth=$photopth;
		$this->ED=$ED;
		$this->cb=$cb;
		$this->ob=$ob;
		$this->ov=$ov;
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
	
		$this->begin="$this->ob$this->itname$this->cb";
		$lal="bd/'$this->category'.txt";
		$string="$this->begin$this->ED$this->ctgry$this->ov$this->category$this->ov$this->ED$this->sctgry$this->ov$this->subcategory$this->ov$this->ED$this->photopth$this->ov$this->photo$this->ov$this->ED$this->dscrpt$this->ov$this->description$this->ov$this->ED$this->ED";
		$fp = fopen($lal, 'a');
		fwrite($fp, $string);
		fclose($fp);
		
	}
	
	public function getfromfile ()
	{
		$dir    = "bd";
		$filenamearr = scandir($dir);
		print_r($filenamearr);
		for ($i=0;$i<=count($filenamearr);$i++)
		{
			$sfn=$filenamearr[$i];
			echo($sfn);
			$arr = parse_ini_file($sfn, true);
			foreach($arr as $key => $value)
			{
				foreach($arr as $key2 => $valuet)
				{
				echo " $valuet <br />";
				}
			}
		}
		//$files2 = scandir($dir, 1);
		
		//print_r($files1);
		//print_r($files2);
	}
	
	
}
?>