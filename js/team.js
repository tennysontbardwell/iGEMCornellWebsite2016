function collapseAllBut(ref){
	var i = 0
	while(true){
		elem = 'bio'+i;
		if (document.getElementById(elem) == null){
			break;
		}
		if (ref == i){
			$('#bio'+i).collapse('show');
		} else {
			$('#bio'+i).collapse('hide');
		}
		i++;
	}
}