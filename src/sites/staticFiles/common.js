const politic = document.querySelector(".politic");
const oferta = document.querySelector(".oferta");
const btnOferta = document.querySelector(".btnOferta");

function toggleOfertta(){
	oferta.classList.toggle("hidden");
}

politic.addEventListener("click", (e)=>{
	e.preventDefault();
	toggleOfertta();
});

btnOferta.addEventListener("click", (e)=>{
	e.preventDefault();
	toggleOfertta();
});