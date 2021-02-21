<?php

/******************************************************************************/
/******************************************************************************/

class Portada_ThemeInstagram
{
	/**************************************************************************/
	
	function __construct()
	{
		
	}
	
	/**************************************************************************/
	
	function getLatestUserFeed($userID,$accessToken,$count)
	{
		$html=null;
		$Validation=new Portada_ThemeValidation();

		$FileSystem=new Portada_ThemeWPFileSystem();
		
		if(($content=$FileSystem->get_contents('https://api.instagram.com/v1/users/'.$userID.'/media/recent/?access_token='.$accessToken))===false)
			return($html);
		
		$feed=json_decode($content);
		
		if(!isset($feed->data,$feed->data)) return($html);
		
		if(!count($feed->data)) return($html);

		$i=0;
		foreach($feed->data as $value)
		{
			if($value->type!='image') continue;
			if(($i++)==$count) break;

			$link=
			'
				<a href="'.esc_url($value->link).'" target="_blank">
					<img src="'.esc_url($value->images->standard_resolution->url).'" alt="">
				</a>
			';
			$button=null;
			
			if($Validation->isNotEmpty(Portada_ThemeOption::getOption('social_profile_address_instagram')))
			{
				if($i==1)
					$button='<a href="'.esc_url(Portada_ThemeOption::getOption('social_profile_address_instagram')).'" target="_blank" class="theme-instagram-feed-button theme-button-3">'.esc_html__('My Instagram','portada').'</a>';
			}
			
			$html.='<li>'.$link.$button.'</li>';
		}
		
		if($Validation->isNotEmpty($html))
		{
			$html=
			'
				<ul class="theme-instagram-feed theme-reset-list theme-clear-fix">
					'.$html.'
				</ul>
			';
		}
		
		return($html);
	}
	
	/**************************************************************************/
}

/******************************************************************************/
/******************************************************************************/