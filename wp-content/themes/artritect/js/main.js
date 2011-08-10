$(document).ready(function(){	
	initMenu()
	
	$('.single a img').parent('a').attr('class','facy')	 	
	$("a.facy").fancybox();
	var count=$('.PostContents li').size()
	if(count!=0){
		$('.MainCotent').append('<div class="paging"></a>')
		$('.PostContents li').each(function(index){
											index=index+1;
			$(this).attr('class','item'+index)
			$('.paging').append('<a href="#" class="item'+index+'">'+index+'</a>')
		})	
		
		$('.PostContents li:first').show();
		$('.paging a').click(function(){
									  var x=$(this).text()
									  $('.PostContents li').slideUp();
									  $('.PostContents li:nth-child('+x+')').slideDown() 
									  })
		
	}
	$('.categoryCT .thumb1').mouseover(function(){
											tem=$(this).prev()
								tem.css('opacity','0.8')	
								if( tem.is(':visible')) tem.hide()
								else tem.show()
								$('.categoryCT .postCT a').mouseout(function(){
									tem.hide()	
								})
												})
	$('.categoryCT1 .postCT a').bind('mousemove','mouseover',function(e){
								tem=$(this).prev()
								tem.css('opacity','0.8')
								tem.css('left',e.pageX)
								tem.css('top',e.pageY)
								if( tem.is(':visible')) tem.hide()
								else tem.show()
								$('.categoryCT1 .postCT a').mouseout(function(){
									tem.hide()	
								})
							})
		
	var tem=$(".categoryCT .postCT ").size();
	if(tem>6){
		var x=Math.floor(tem/2)
		for(i=0;i<=tem;i++) {				
			$(".carousel11 #foo2").append($(".categoryCT .postCT:eq("+i+")"))
				if (i==x)break;
			}
			$('#foo').carouFredSel({
			direction           : "right",
			auto:true,
			items           : 3,
			scroll : {
				   items           : 1,          
				   duration        : 400,                        
				   pauseOnHover    : true
					}				
			});
				$('#foo2').carouFredSel({
			direction           : "left",
			auto:true,
			items           : 3,
			scroll : {
				   items           : 1,          
				   duration        : 400,                        
				   pauseOnHover    : true
					}				
			});
		
		}			
		$('#scrollbar1').tinyscrollbar({  axis:  135 });
				
});
	function initMenu() {
    $('.MenuLeft ul').hide();
    $('.MenuLeft li a').hover(
		function() {
			var checkElement = $(this).next();
				if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
				return false;
			}
			if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
				$('.MenuLeft ul:visible').slideUp('normal');
				checkElement.slideDown('normal');
				return false;
			}
    	});
    } 