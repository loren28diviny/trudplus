<?php
//setlocale(LC_CTYPE, 'ru_RU');
class TextGui
{
	public   $text;
	//protected  $style;
	function TextGui($text, $style)
	{
		$this->text=file($text);
		$this->style=file_get_contents($style);
		
	}

	 function Text_echo()
	{
		foreach ($this->text as $sb) {
		
		echo $sb;
		}
    }

}

?>