// Descripcion Nike
const descrCardNike = "El gigante deportivo se ha centrado en el último año en implementar un movimiento de estrategia de distribución selectiva, reduciendo el número de tiendas minoristas que venden sus productos, con el objetivo de recuperar el control de la relación de marca con el cliente y mejorar los márgenes de beneficio.";
const subStrNike  = descrCardNike.substring(0,210)+'...';
const nike = document.getElementById('nike');
nike.textContent = subStrNike;
// Descripcion Adidas
const descrCardAdidas = "Adidas es una de las marcas más reconocidas en el mercado deportivo, es la favorita por muchos atletas y produce además de calzado deportivo, otros artículos tipo sport. Adidas es una multinacional alemana que diseña y fabrica calzado deportivo, ropa y accesorios.";
const subStrAdidas = descrCardAdidas.substring(0,210)+'...';
const adidas = document.getElementById('adidas');
adidas.textContent = subStrAdidas;
// Descripcion Puma
const descrCardPuma = "La marca Puma desarrolla su identidad en el futbol queriendo mostrarse como aquellas personas que buscan el poder, la velocidad y el máximo control confeccionando productos que buscan desbordar los instintos de cada deportista.";
const subStrPuma = descrCardPuma.substring(0,210)+'...';
const puma = document.getElementById('puma');
puma.textContent = subStrPuma;
// Descripcion Fila
const descrCardFila = "Fila se fundó en Biella (Piamonte, Italia) de la mano de Giansevero Fila en (1911). Originalmente fabricaba ropa para los habitantes de los Alpes italianos y actualmente fabrica ropa deportiva masculina, femenina, para niños y para atletas.";
const subStrFila = descrCardFila.substring(0,210)+'...';
const fila = document.getElementById('fila');
fila.textContent = subStrFila;
// Descripcion Reebok
const descrCardReebok = "Inspirado en un antílope africano llamado rhebok, el logo representa un antílope simplificado llamado 'vector'. La marca también simplificó el nombre a Reebok. Le gusto también el sonido de la palabra que esta pasó a ser el nuevo nombre de la compañía.";
const subStrReebok = descrCardReebok.substring(0,210)+'...';
const reebok = document.getElementById('reebok');
reebok.textContent = subStrReebok;
// Descripcion TNF
const descrCardTNF = "The North Face® lleva su nombre inspirado en uno de las partes más e implacables del monte Half Dome, ubicado en el parque natural de Yosemite en el condado de Mariposa en California, Estados Unidos. Hemos apoyado a los mejores exploradores del mundo a alcanzar las alturas más insondables de la cordillera del Himalaya.";
const subStrTNF = descrCardTNF.substring(0,210)+'...';
const tnf = document.getElementById('tnf');
tnf.textContent = subStrTNF;

// Funcion para de mostrar la informacion
function mostrarInf(elem) {
    var descripcion = elem.getElementsByClassName('descripcion');
    console.log(descripcion);
    for (let i = 0; i < descripcion.length; i++) {
        descripcion[i].style.display = 'block';
    }
}
// Funcion para ocultar la informacion
function ocultarInf(elem) {
    var descripcion = elem.getElementsByClassName('descripcion');
    console.log(descripcion);
    for (let i = 0; i < descripcion.length; i++) {
        descripcion[i].style.display = 'none';
        
    }
}

const email = document.getElementById('email');
const pass = document.getElementById('contrasena');
const error = document.getElementById('error');
error.style.color = 'red';

function envioForm() {
    console.log(pass.value);

    var mensajeError = [];

        if (email.value === null || email.value === ' ') {
            mensajeError.push('Este campo no puede estar vacio')
        }

        if (pass.value === null || pass.value === ' ') {
            mensajeError.push('Este campo no puede estar vacio')
        }
        error.innerHTML = mensajeError.join(', ');
}   