<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeFancybox
{
	/**************************************************************************/

	function __construct()
	{
		$this->transitionType=array
		(
			'elastic'	=>	array(__('Elastic','portada')),
			'fade'		=>	array(__('Fade','portada')),
			'none'		=>	array(__('None','portada')),
		);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/