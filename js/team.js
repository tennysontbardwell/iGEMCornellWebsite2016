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

var currentOpenBio = -1;

function collapseAllBut(ref){
	photoNew = document.getElementById('photo'+ref);
	photoOld = document.getElementById('photo'+currentOpenBio);
	if (currentOpenBio != -1 && photoOld != null) {
		photoOld.className = photoOld.className.replace( /(?:^|\s)selected-team-member(?!\S)/g , '' )
	}
	if (currentOpenBio == ref){
		ref = -1;
		currentOpenBio = -1;
	} else {
		photoNew.className += " selected-team-member";
		// photoNew.style.border="thick solid #0000FF";
	}
	var i = 0;
	while(true){
		elem = document.getElementById('bio'+i);
		if (elem == null){
			break;
		}
		if (Math.floor(ref/6) == i){
			currentOpenBio = ref;
			changeBio(elem,ref);
			if (animation){
				$('#bio'+i).collapse('show');
			}
			else {
				elem.style="display:block;";
			}
		} else {
			if (animation){
				$('#bio'+i).collapse('hide');
			}
			else {
				elem.style="display:none;";
			}
			elem.innerHTML="";
		}
		i++;
	}
}
function changeBio(elem,bioNum){
	$default = "<h2>Desplaying bio number: "+bioNum+"</h2>";
	elem.innerHTML = getHTMLStringForBio(bioNum);
}