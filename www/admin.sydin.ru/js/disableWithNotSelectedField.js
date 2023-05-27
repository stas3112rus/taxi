function disableWithNotSelectedField(){
    const selectSite = document.querySelector(".select-site");
    const buttons = document.querySelectorAll(".btn-synchronization");

   if (selectSite.value){
        buttons.forEach(btn => btn.disabled = false);     
   }

    selectSite.addEventListener("change", (event)=>{
        buttons.forEach(btn=>{
            event.target.value ? 
                btn.disabled = false :  
                btn.disabled = true;           
        })       
    })
}

disableWithNotSelectedField();