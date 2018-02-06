function ConnectIsValid(){
	let mail = document.getElementById("mail").value;
	//if (mail == 'test@test.fr')
	//	return true;
	//alert('=> Error : test@test.fr');
	return true;
}

function Mytoggle(){
	let bouton = document.querySelector('#toggle');
	let menu = document.querySelector('main > header nav ul');

	menu.classList.toggle('actif');
}

