/******************************************************************************/
/******************************************************************************/

;(function($,doc,win) 
{
	"use strict";
	
	var responsiveTable=function(object,option)
	{
		/**********************************************************************/
		
		var $this=$(object);
		
		var $optionDefault=
		{
			width		:	760
		};
		
		var $option=$.extend($optionDefault,option);
		
		/**********************************************************************/

		this.create=function() 
		{
            $().windowDimensionListener({change:function(width,height)
            {
                if(width)
                {
                    var tableResponsiveWidth=parseInt($this.data('table-responisve-width'));
                    if(isNaN(tableResponsiveWidth)) tableResponsiveWidth=$option.width;
                    
                    if($this.parent().actual('width')<tableResponsiveWidth)
                    {
                        $this.find('th').each(function(index) 
                        {
                            $this.find('td:not(.theme-table-responsive-cell-no-title)').eq(index).attr('data-title',$(this).text());
                        });                       
                        
                        $this.addClass('theme-table-responsive');
                    }
                    else
                    {
                        $this.removeClass('theme-table-responsive');
                    }
                }
            }});
		};
		
		/**********************************************************************/
	};
	
	/**************************************************************************/
	
	$.fn.responsiveTable=function(option) 
	{
        $(this).each(function() 
        {
            var table=new responsiveTable(this,option);
            table.create();           
        });
	};
	
	/**************************************************************************/

})(jQuery,document,window);