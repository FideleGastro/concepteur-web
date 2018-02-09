function ConnectIsValid(){
	let mail = document.getElementById("mail").value;
	//if (mail == 'test@test.fr')
	//	return true;
	//alert('=> Error : test@test.fr');
	return true;
}

//menu

function Mytoggle(){
	let bouton = document.querySelector('#toggle');
	let menu = document.querySelector('main > header nav ul');

	menu.classList.toggle('actif');
}

// inscription

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

const addPanier = async ($mail,$nom,$prenon) => {
   	const response = await fetch('/pascal/project-toto/query/addPanier.php?mail='+$mail+'&nom='+$nom+'&prenom='+$prenom+'');
    const status = await response.status;
    console.log('function: addUser //'+status);
    return status;
}

 async function autoComp($valeur) {
	let bouton = document.querySelector('input[name=cp]');
	let auto = document.querySelector('#autocomp');
   	let response = await fetch('/pascal/project-toto/query/autoComp.php?dep='+$valeur);
    let value = await response.json();
    
    auto.innerHTML = '';
    value.forEach(function(element) {
    auto.innerHTML += '<label onclick="addCP(this)" for="cp" data-cp="'+element['departement_code']+'"> '+element['departement_nom']+'</label><br>';
 	 console.log(element['departement_nom']);	 
	});
}

function addCP(elem){
	let bouton = document.querySelector('input[name=cp]');

	bouton.value = elem.dataset.cp;
	console.log('LABEL'+elem.dataset.cp);
}


async function check_resa(elem){
	
	console.log(elem.dataset.y+'/'+elem.dataset.m+'/'+elem.dataset.d);
	
	let current = document.querySelector('.actif');
	let submit = document.querySelector('input[name=reservation]');
	
	submit.classList.remove('hide');
	if(current)
		current.classList.remove('actif');
	elem.classList.add('actif');
	submit.dataset.y = elem.dataset.y;
	submit.dataset.m = elem.dataset.m;
	submit.dataset.d = elem.dataset.d;
	submit.value = 'Réserver pour le '+elem.dataset.y+'/'+elem.dataset.m+'/'+elem.dataset.d;
	
}

async function set_resa(elem){
	console.log('resa pour : '+elem.dataset.y+'/'+elem.dataset.m+'/'+elem.dataset.d)
}



