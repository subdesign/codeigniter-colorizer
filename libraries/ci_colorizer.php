<?php 

/**
 *  Colorizer
 *
 *  Colorizer is a text colorizer library
 *
 *  @version 0.1
 *	@author Barna Szalai <sz.b@subdesign.hu>
 *  @param string $text input text
 *  $param string $colors optional colors  
 *  @return string
 */

class Ci_colorizer
{
	private $text;
	private $text_array = array();
	private $colors = array();
	private $constant_colors = array('Aqua', 'Black', 'Blue', 'Brown', 'Cyan', 'Gold', 'Gray', 'Green', 'Lime', 'Magenta', 'Navy', 'Orange', 'Orchid', 'Purple', 'Red', 'Silver', 'Violet', 'Yellow');

	public function colorize($text, $colors = '')
	{
		$this->text = $text;
		
		$this->text_array = explode(" ", $this->text);
		
		if(strlen($colors)) 
		{
			$this->colors = $colors;
			$this->colors = explode(", ", $this->colors);
		}

		$result = '';
		
		if(count($this->colors) > 0)
		{
			for($i = 0; $i < count($this->text_array); $i++)
			{
				$result .= '<span style="color:'.$this->colors[array_rand($this->colors, 1)].'">'.$this->text_array[$i].' </span>';
			}
		}
		else
		{
			for($i = 0; $i < count($this->text_array); $i++)
			{
				$result .= '<span style="color:'.$this->constant_colors[array_rand($this->constant_colors, 1)].'">'.$this->text_array[$i].' </span>';
			}
		}
		
		return $result;	
	}	
}