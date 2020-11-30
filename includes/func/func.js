const $form = document.querySelector('.mi-form');

$form.addEventListener('submit', (event) => {

   /*  event.preventDefault(); */
  alert(`Se registro exitosamente ${$form.email.value}`)
  
})


//template strings o plantillas literales

//comillas invertidas permite usar variables dentro del string

//interpolacion de una variable ${laVariable}

//se puede usar funciones dentro de template strings