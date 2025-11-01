

const listarContactos = () => {
    fetch('http://127.0.0.1:8000/contactos/', {
        method: 'get',
        headers: { 
            Authorization: 'Bearer 12345' 
        }
    }).then();
}
listarContactos();