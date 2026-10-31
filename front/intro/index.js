let saludo = "Hola mundo desde archivo JS!!!!";
console.log(saludo);
// var, let, const
let nombre = "Pepe";
nombre = "María";

let apellido = "Gomez"; //string
let edad = 32; //number
let suledo = 12000.5; //number
let estado = true; //boolean

console.log(typeof edad);

let name = null;
let text = "missing";
text = 30;
let result = name ?? text;
console.log(result);

const numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for (let i = 0; i < numeros.length; i++) {
  if (numeros[i] % 2 == 0) {
    console.log(numeros[i]);
  }
}

let i = 0;
while (i < numeros.length) {
  if (numeros[i] % 2 == 0) {
    console.log(numeros[i]);
  }
  i++;
}

numeros.forEach((value) => {
  if (value % 2 == 0) {
    console.log(value);
  }
});
const pares = numeros.filter((value) => {
  return value % 2 == 0;
});
console.log(pares);

function validar_numero(num) {
  if (num % 2 == 0) {
    return "El numero es par";
  } else {
    return "El numero es impar";
  }
}

console.log(validar_numero(2));
console.log(validar_numero(3));
console.log(validar_numero(4));
console.log(validar_numero(5));

const validar_numero_2 = (num) => {
  if (num % 2 == 0) {
    console.log("El numero es par");
  } else {
    console.log("El numero es impar");
  }
};

validar_numero_2(2);
validar_numero_2(3);
validar_numero_2(4);
validar_numero_2(5);

const validar_numero_3 = function (num) {
  if (num % 2 == 0) {
    console.log("El numero es par");
  } else {
    console.log("El numero es impar");
  }
};

// document.addEventListener("DOMContentLoaded", () => {
const contenido1 = document.getElementById("contenido1");

contenido1.textContent = "Hola dese el <b>código</b> de js!!!!";
contenido1.innerHTML += "Hola dese el <b>código</b> de js!!!!";
contenido1.style.color = "blue";

for (let i = 0; i < numeros.length; i++) {
  // let div = '<div>';
  // div += numeros[i];
  // div += '</div>';
  // contenido1.innerHTML += div;

  const button = document.createElement("div");
  button.textContent = numeros[i];

  contenido1.appendChild(button);
}

const saludar = () => {
  alert("Hola!!!!!!");
};

document.getElementById("saludoBtn").addEventListener("click", () => {
  saludar();
});

// });
const msg = document.getElementById('msg');
const validarForm = document.forms["validarForm"];
validarForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const numero = validarForm["numero"].value;
  if (numero % 2 == 0) {
    // alert("El numero es par");
    msg.textContent = "El numero es par";
  } else {
    // alert("El numero es impar");
    msg.textContent = "El numero es impar";
  }
});

validarForm["numero"].addEventListener('keyup',()=>{
    const numero = validarForm["numero"].value;
  if (numero % 2 == 0) {
    // alert("El numero es par");
    msg.textContent = "El numero es par";
  } else {
    // alert("El numero es impar");
    msg.textContent = "El numero es impar";
  }
});
