

function toggleOpen(){
	let cardhide = this.querySelector('.modifhide')
	let cardshow = this.querySelector('.modifshow')
	cardshow.classList.replace('modifshow','modifhide')
	cardhide.classList.replace('modifhide','modifshow')
	
}

modifs.forEach(modif => modif.addEventListener('click',toggleOpen))
