var animation = true;
// if animations are turned off then it opens all the banners
function teamSectionSetup(){
	if (!animation){
		var i = 0;
		while(true){
			elem = document.getElementById('bio'+i);
			if (elem == null){
				break;
			}
			$('#bio'+i).collapse('show');
			elem.style="display:none;";
			i++;
		}
	}
}

function getperrow(){
	var size = findBootstrapEnvironment();
	if( size === 'xs' ) {
	    return 2;
	}
	if( size === 'sm' ) {
	    return 3;
	}
	if( size === 'md' ) {
	    return 6;
	}
	if( size === 'lg' ) {
	    return 6;
	}
}

// from http://stackoverflow.com/questions/19462672/jquery-detect-bootstrap-3-state
function findBootstrapEnvironment() {
    var envs = ["ExtraSmall", "Small", "Medium", "Large"];
    var envValues = ["xs", "sm", "md", "lg"];

    var $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envValues.length - 1; i >= 0; i--) {
        var envVal = envValues[i];

        $el.addClass('hidden-'+envVal);
        if ($el.is(':hidden')) {
            $el.remove();
            return envValues[i]
        }
    };
}

var currentOpenBio = {
	after: -1,
	ref: -1,
	div: null
};

function collapseCurrent(){
	var temp = $('#active-bio');
	temp.removeAttr('id');
	temp.collapse('hide');
}

$(window).resize(function(){
	collapseCurrent();
});

function collapseAllBut(ref){
	var perrow = getperrow();
	var team = $("#team").get(0);
	var after = Math.min((Math.floor(ref/perrow)+1)*perrow-1, data_highest_bio_num);
	var div;
	if (ref === currentOpenBio.ref){
		collapseCurrent();
		currentOpenBio = {
			after: -1,
			ref: -1,
			div: null
		};
		return;
	}
	if (currentOpenBio.after === after){
		$('#active-bio').html(getHTMLStringForBio(ref));
	} else {
		if (currentOpenBio.div !== null){
			collapseCurrent();
		}
		div = document.createElement('div');
		div.innerHTML = getWrappedBio(ref);
		var bioToInsertAfter = $('#bioholder_' + after).get(0);
		bioToInsertAfter.parentNode.insertBefore(div, bioToInsertAfter.nextSibling);
		$('#active-bio').collapse('show');
		$('#active-bio').on('hiden', function() {
			$(this).remove();
		});
	}
	// console.log('#bioholder_' + after);
	// console.log(bioToInsertAfter);
	currentOpenBio = {
		after: after,
		ref: ref,
		div: div
	};
}