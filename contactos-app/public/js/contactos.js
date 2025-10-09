const borrarContactoModal = document.getElementById('borrarContactoModal');
const borrarContactoForm = document.forms['borrarContacto'];

const onClickBorrar = (id) => {
    borrarContactoForm['cod'].value = id;
    borrarContactoModal.classList.add('open');
}

borrarContactoForm.addEventListener('reset', () => {
    borrarContactoForm['cod'].value = "";
    borrarContactoModal.classList.remove('open');
});