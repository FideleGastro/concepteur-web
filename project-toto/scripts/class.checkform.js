class checkForm {

	constructor(){
		this.erreur = false;
		this.reg;
		this.nom = document.querySelector('#inscription input[name=nom]');
		this.prenom = document.querySelector('#inscription input[name=prenom]');
		this.email = document.querySelector('#inscription input[name=email]');
		this.adresse = document.querySelector('#inscription input[name=adresse]');
		this.cp = document.querySelector('#inscription input[name=cp]');
		this.ville = document.querySelector('#inscription input[name=ville]');
		this.tel = document.querySelector('#inscription input[name=tel]');
	}

	check(){
		this.reset();	
		if(this.nom.value == ''){
			console.log('method: check // no value => nom');	
			this.nom.classList.add('erreur');
			this.erreur = true;
			
		}
		if(this.prenom.value == ''){
			console.log('method: check // no value => prenom');	
			this.prenom.classList.add('erreur');
			this.erreur = true;
			
		} 
		if(this.email.value == ''){
			console.log('method: check // no value => email');	
			this.email.classList.add('erreur');
			this.erreur = true;
			
		} 
		if(this.adresse.value == ''){
			console.log('method: check // no value => adresse');	
			this.adresse.classList.add('erreur');
			this.erreur = true;
			
		} 
		if(this.cp.value == ''){
			console.log('method: check // no value => cp');	
			this.cp.classList.add('erreur');
			this.erreur = true;
			
		}  

		if(this.ville.value == ''){
			console.log('method: check // no value => ville');	
			this.ville.classList.add('erreur');
			this.erreur = true;
			
		} 
		if((this.tel.value == '') || !(this.istel(this.tel.value))){
			console.log('method: check // no value => tel');	
			this.tel.classList.add('erreur');
			this.erreur = true;	
		} 

		if(this.erreur == true)
			return false;

		console.log('method: check //'+checkUser(this.email.value));
		checkUser(this.email.value);
			addUser(this.email.value, this.nom.value, this.prenom.value, this.email.value,this.adresse.value,this.cp.value,this.ville.value, this.tel.value);
		console.log('method: check // END');
		return false;
	}

	reset(){
		if(this.nom.classList.contains('erreur')){this.nom.classList.remove('erreur');}
		if(this.prenom.classList.contains('erreur')){this.prenom.classList.remove('erreur');}
		if(this.email.classList.contains('erreur')){this.email.classList.remove('erreur');}
		if(this.adresse.classList.contains('erreur')){this.adresse.classList.remove('erreur');}
		if(this.cp.classList.contains('erreur')){this.cp.classList.remove('erreur');}
		if(this.ville.classList.contains('erreur')){this.ville.classList.remove('erreur');}
		if(this.tel.classList.contains('erreur')){this.tel.classList.remove('erreur');}
	}

	istel(numero){
		this.reg = new RegExp("^0[0-9][ .-]?([0-9]{2}[ .-]?){3}[0-9]{2}$");
		return this.reg.test(numero);
		// return true;
	}
}