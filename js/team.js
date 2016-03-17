var currentOpenBio = -1;

function collapseAllBut(ref){
	photoNew = document.getElementById('photo'+ref);
	photoOld = document.getElementById('photo'+currentOpenBio);
	var i = 0;
	if (currentOpenBio != -1) {
		photoOld.style.border="0px";
	}
	if (currentOpenBio == ref){
		ref = -1;
		currentOpenBio = -1;
	} else {
		photoNew.style.border="thick solid #0000FF";
	}
	while(true){
		elem = document.getElementById('bio'+i);
		if (elem == null){
			break;
		}
		if (Math.floor(ref/6) == i){
			currentOpenBio = ref;
			changeBio(elem,ref);
			$('#bio'+i).collapse('show');
		} else {
			$('#bio'+i).collapse('hide');
		}
		i++;
	}
}
function changeBio(elem,bioNum){
	elem.innerHTML = "<h2>Desplaying bio number: "+bioNum+"</h2>"
}