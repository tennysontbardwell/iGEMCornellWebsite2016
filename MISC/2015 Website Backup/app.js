(function($){  
  $(function(){
    $(document).foundationMediaQueryViewer();
    
    $(document).foundationAlerts();
    $(document).foundationAccordion();
    $(document).tooltips();
    $('input, textarea').placeholder();
    
    
    
    $(document).foundationButtons();
    
    
    
    $(document).foundationNavigation();
    
    
    
    $(document).foundationCustomForms();
    
    
    
      
      $(document).foundationTabs({callback:$.foundation.customForms.appendCustomMarkup});
      
    
    
    
    $("#featured").orbit();
    
    //Fix the fragment reference
	$('dl.tabs').each(function() {
		//Get all tabs
		var tabs = $(this).children('dd').children('a');
		tabs.click(function(e) {
			activateTab($(this));
			return false;
		});
	});
	
    // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
    // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'left'});
    // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'left'});
    // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'left'});
    // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'left'});
  });
  
})(jQuery);
