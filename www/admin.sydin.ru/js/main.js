function checkAndUncheckAllCheckBoxes(){
   const inputs = document.querySelectorAll('.form-check-input');

   const buttonCheckAll = document.querySelector('.check-all');
   const buttonUnCheckAll = document.querySelector('.uncheck-all');

    setChecked(buttonCheckAll, true);
    setChecked(buttonUnCheckAll, false);

   function setChecked(button, isChecked){
    button.addEventListener("click", e => {
        e.preventDefault();
            inputs.forEach(input => input.checked = isChecked);
       })
   }
}

checkAndUncheckAllCheckBoxes();