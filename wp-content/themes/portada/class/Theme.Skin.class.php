<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeSkin
{
	/**************************************************************************/
	
	function __construct()
	{
		$this->skin=array
		(
			'general'															=>	array
			(
				'landing_url'													=>	'http://quanticalabs.com/Landing/Portada/'
			),
			'skin'																=>	array
			(
				1																=>	array
				(			
					'name'														=>	__('Portada (default)','portada')
				),
				2																=>	array
				(			
					'name'														=>	__('Dublin','portada')
				),
				3																=>	array
				(			
					'name'														=>	__('Bergen','portada')
				)
			)
		);
	}
	
	/**************************************************************************/
	
	function getSkinDictionary()
	{
		return($this->skin);
	}

	/**************************************************************************/
	
	function getSkin()
	{
		return(get_option(PORTADA_THEME_SKIN_OPTION_NAME,1));
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/