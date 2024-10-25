
document.getElementById("btnMenu").addEventListener("click", function() {
  let elemento = document.getElementById("navbar");
  if (elemento.classList.contains("navbar")) {
    elemento.classList.remove("navbar");
    elemento.classList.add("no_navbar");
  } else {
    elemento.classList.remove("no_navbar");
    elemento.classList.add("navbar");
  }


});

const nombre = document.querySelector("#nombre");
const telefono = document.querySelector("#tel");
const correo = document.querySelector("#email");
const mensaje = document.querySelector("#men");
const formulario = document.querySelector(".formulario");
formulario.addEventListener("submit", validarFormulario);

mensaje.style.backgroundColor = "green";

function validarFormulario(e) {
  e.preventDefault();
  if (nombre.value === "" || telefono.value === "" || mensaje.value === "" || correo.value === "") {
    mostrarErrores("Todos los campos son obligatorios");
    return;
  }

  alert("Hemos recibido sus datos, pronto nos pondremos en contacto");
  e.target.submit();
}

function mostrarErrores(mensaje) {
  const alerta = document.createElement("p");
  alerta.textContent = mensaje;
  alerta.style.background = "red";
  alerta.style.color = "white";
  alerta.style.padding = "10px";
  alerta.style.marginTop = "10px";
  formulario.appendChild(alerta);
  setTimeout(() => {
    alerta.remove();
  }, 5000);
}
