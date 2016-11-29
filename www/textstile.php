<?php
class stytxt
{
	protected  $text;
	protected  $style;
	function __construct($text, $style)
	{
		$this->text=$text;
		$this->style=$style;
	}

	function s_echo()
	{
		echo(file_get_contents($text));
    }

}

?>