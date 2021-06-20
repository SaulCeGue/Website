const nombre = document.getElementById('nombre');
const precio = document.getElementById('precio');
const descripcion = document.getElementById('desc');
const cant = document.getElementById('cantidad');
const agregar = document.getElementById('agregar');
const modificar = document.getElementById('modificar');

let id;

//Mostrar
const contenido = document.getElementById('contenido');

const tablaProduct = document.querySelector('.table-users');
const product = doc =>{
    const tr = `
    <tr data-id='${doc.id}'>
        <td>${doc.data().nombre_pro}</td>
        <td>${doc.data().precio_pro}</td>
        <td>${doc.data().descripcion_pro}</td>
        <td>${doc.data().cantidad_pro}</td>
        <td>
            <button class="btn btn-edit">Editar</button>
            <button class="btn btn-delete">Eliminar</button>
        </td>
    </tr>`;
    tablaProduct.insertAdjacentHTML('beforeend',tr);
    //Editar

    const btnEditar = document.querySelector(`[data-id='${doc.id}'] .btn-edit`);
    btnEditar.addEventListener('click', ()=> {
        id=doc.id;
        nombre.value = doc.data().nombre_pro;
        precio.value = doc.data().precio_pro;
        descripcion.value = doc.data().descripcion_pro;
        cantidad.value = doc.data().cantidad_pro;
    })
    //Eliminar
    const btnDelete = document.querySelector(`[data-id='${doc.id}'] .btn-delete`);
    btnDelete.addEventListener('click', ()=> {
        db.collection('productos').doc(`${doc.id}`).delete().then(() => {
            console.log('Elemento eliminado!');
        }).catch(err => {
            console.log('Error al eliminar',err);
        });
    });
}
//Obtener datos
//db.collection('productos').get().then(querySnapshot => {
//    querySnapshot.forEach(doc => {
//        product(doc);
//    })
//})
//Mostrar en tiempo real
db.collection('productos').onSnapshot(snapshot => {
    snapshot.docChanges().forEach(change => {
        if(change.type === 'added'){
            product(change.doc);
        }
        if(change.type === 'removed'){
            let tr = document.querySelector(`[data-id = '${change.doc.id}']`);
            let tbody = tr.parentElement;
            tablaProduct.removeChild(tbody);
        }
        if(change.type === 'modified'){
            let tr = document.querySelector(`[data-id = '${change.doc.id}']`);
            let tbody = tr.parentElement;
            tablaProduct.removeChild(tbody);
            product(change.doc);
        }
    })
})

//Agregar
const proForm = document.getElementById('form-pro');
agregar.addEventListener('click', (e) =>{
    e.preventDefault();
    db.collection('productos').add({
        nombre_pro:nombre.value,
        precio_pro:precio.value,
        descripcion_pro:descripcion.value,
        cantidad_pro:cant.value
    });
    proForm.reset();
})

//Modificar
modificar.addEventListener('click', (e) =>{
    e.preventDefault();
    db.collection('productos').doc(id).update({
        nombre_pro:nombre.value,
        precio_pro:precio.value,
        descripcion_pro:descripcion.value,
        cantidad_pro:cant.value
    });
    proForm.reset();
})