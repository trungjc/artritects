jQuery(document).ready(function(){	
		
	
		
		var tem=jQuery(".categoryCT .postCT ").size();
		if(tem>6){
			
			var x=Math.floor(tem/2)
			for(i=0;i<=tem;i++) {				
				jQuery(".jCarouselLite .jcarol").append(jQuery(".categoryCT .postCT:eq("+i+")"))
					if (i==x)break;
				}
				
					jQuery('#foo').carouFredSel({
				direction           : "right",
					auto:true,
         items           : 3,
             scroll : {
	            items           : 1,
          
	            duration        : 400,                        
            pauseOnHover    : true
	        }       
       
				
				});
			
				jQuery(".jCarouselLite").jCarouselLite({
				auto:true,
				visible:3,
			 	  btnNext: ".next",
				  btnPrev: ".prev",
				  speed: 1000,
		
					});	
				
			}
			
		jQuery('#scrollbar1').tinyscrollbar({  axis:  135 });
			
		
});
 