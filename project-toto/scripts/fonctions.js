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

const checkUser = async ($mail) => {

   	const response = await fetch('/pascal/project-toto/query/checkUser.php?mail='+ $mail);
    const status = await response.status;
    console.log('function: checkUser //'+status);
    return status;
}

const addUser = async ($mail,$nom,$prenom,$adresse,$cp,$ville,$tel) => {
   	const response = await fetch('/pascal/project-toto/query/addUser.php?mail='+$mail+'&nom='+$nom+'&prenom='+$prenom+'&adresse='+$adresse+'&cp='+$cp+'&ville='+$ville+'&tel='+$tel);
    const status = await response.status;
    
    console.log('function: addUser //'+status);
    return status;
}


