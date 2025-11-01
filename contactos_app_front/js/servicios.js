const contactosTb = document.getElementById('contactosTb');

const cargarTabla = (datos) => {
    const tbody = contactosTb.getElementsByTagName('tbody')[0];
    tbody.innerHTML = '';
    datos.forEach(item => {
        const tr = document.createElement('tr');
        const nombreTd = document.createElement('td');
        nombreTd.textContent = item.nombre;
        
        const telTd = document.createElement('td');
        telTd.textContent = item.telefono;

        const emailTd = document.createElement('td');
        emailTd.textContent = item.email;

        tr.appendChild(nombreTd);
        tr.appendChild(telTd);
        tr.appendChild(emailTd);
        tbody.appendChild(tr);
    });
}

const listarContactos = () => {
    fetch('http://127.0.0.1:8000/contactos/', {
        method: 'GET',
        headers: {
            Authorization: 'Bearer 12345'
        }
    }).then(body => {
        if (body.status >= 400) {
            throw new Error("Error en la conexión");
        }
        return body.json()
    }).then(data => {
        console.log(data);
        cargarTabla(data);
    }).catch(ex => {
        alert(ex);
    }).finally(() => {
        console.log('Consumo completado');
    });
}
listarContactos();

const listarContactos2 = async () => {
    try {
        const response = await fetch('http://127.0.0.1:8000/contactos/', {
            method: 'GET',
            headers: {
                Authorization: 'Bearer 123456'
            }
        });
        if (response.status >= 400) {
            throw new Error("Error en la conexión!!!");
        }
        const data = await response.json();
        console.log(data);
        cargarTabla(data);
    } catch (ex) {
        alert(ex);
    }
}
listarContactos2();