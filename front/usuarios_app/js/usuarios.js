//---------------Variables globales------------------------
const url_user = "http://127.0.0.1:8000/usuarios";
const user_tb = document.getElementById("usuariosTb");
const reloadBtn = document.getElementById("reloadBtn");
const userForm = document.forms["userForm"];
const modalBorrar = document.getElementById("modal");
let registro_id = 0;
const userName = document.getElementById("user-name");
const userSession = sessionStorage.getItem("user.name");
const cerrarSesionBtn = document.getElementById("cerrarSesionBtn");

if (!userSession) {
  window.location.href = "index.html";
}
userName.textContent = sessionStorage.getItem("user.name");

//---------------Funciones------------------------
const consultarUsuarios = () => {
  fetch(url_user)
    .then((response) => response.json())
    .then((data) => {
      mostrarDatos(data);
    })
    .catch((error) => console.error("Error en el servicio: ", error))
    .finally(() => console.info("---Fin del consumo del api---"));
};
consultarUsuarios();

const queryUsers = async () => {
  try {
    const response = await fetch(url_user);
    const data = await response.json();
    mostrarDatos(data);
  } catch (error) {
    console.error("Error en el servicio: ", error);
  }
  console.info("---Fin del consumo del api 2---");
};
queryUsers();

const mostrarDatos = (lista) => {
  const tbody = user_tb.getElementsByTagName("tbody")[0];
  tbody.textContent = "";
  lista.forEach((item, index) => {
    const tdNo = document.createElement("td");
    tdNo.textContent = index + 1;
    const tdName = document.createElement("td");
    tdName.textContent = item.nombre;
    const tdUsername = document.createElement("td");
    tdUsername.textContent = item.username;

    const borrarBtn = document.createElement("button");
    borrarBtn.textContent = "Borrar";
    borrarBtn.addEventListener("click", () => {
      modalBorrar.classList.remove("close");
      registro_id = item.id;
      //borrar(item.id)
    });
    const tdbotones = document.createElement("td");
    tdbotones.appendChild(borrarBtn);

    const tr = document.createElement("tr");
    tr.appendChild(tdNo);
    tr.appendChild(tdName);
    tr.appendChild(tdUsername);
    tr.appendChild(tdbotones);

    tbody.appendChild(tr);
  });
};

const registrar = async () => {
  try {
    const user = {
      nombre: userForm["nombre"].value,
      username: userForm["username"].value,
      password: userForm["pwd"].value,
    };
    const response = await fetch(url_user, {
      method: "post",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(user),
    });
    if (response.status == 200) {
      userForm.reset();
      await queryUsers();
    } else {
      throw new Error("Error al registrar un usuario");
    }
  } catch (error) {
    console.error("Error en el servicio: ", error);
  }
  console.info("---Fin del consumo del api de registro---");
};

const borrar = async (id) => {
  try {
    const response = await fetch(url_user + "/" + id, {
      method: "delete",
    });
    if (response.status == 200) {
      await queryUsers();
    } else {
      throw new Error("Error al borrar un usuario");
    }
  } catch (error) {
    console.error("Error en el servicio: ", error);
  }
  console.info("---Fin del consumo del api de borrar---");
};

//---------------Eventos------------------------
reloadBtn.addEventListener("click", () => {
  queryUsers();
});

userForm.addEventListener("submit", (evt) => {
  evt.preventDefault();
  registrar();
});

document.getElementById("cancelarModalBtn").addEventListener("click", () => {
  modalBorrar.classList.add("close");
});

document.getElementById("borrarModalBtn").addEventListener("click", () => {
  borrar(registro_id).then(() => {
    modalBorrar.classList.add("close");
  });
});

cerrarSesionBtn.addEventListener("click", () => {
  // sessionStorage.removeItem('user.name');
  sessionStorage.clear();
  window.location.href = "index.html";
});
