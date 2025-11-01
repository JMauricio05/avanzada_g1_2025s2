

const listarContactos = () => {
    fetch('http://127.0.0.1:8000/contactos/listar', {
        method: 'GET',
        headers: { 
            Authorization: 'Bearer 12345' 
        }
    }).then();
}
listarContactos();