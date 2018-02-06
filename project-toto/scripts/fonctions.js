function ConnectIsValid(){
	let mail = document.getElementById("mail").value;
	if (mail == 'toto.fr')
		return true;
	alert('=> Error : toto.fr');
	return false;
}