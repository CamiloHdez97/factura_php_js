var myModal = document.querySelector('.mymodal')
var myInput = document.querySelector('.boton')

myModal.addEventListener('shown.bs.modal', function () {
  myInput.focus()
})
