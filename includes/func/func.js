const $form = document.querySelector('.mi-form');

$form.addEventListener('submit', (event) => {

   /*  event.preventDefault(); */
  alert(`Se registro exitosamente ${$form.email.value}`)
  
})