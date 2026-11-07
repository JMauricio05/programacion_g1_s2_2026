const registrarBtn = document.getElementById("registrar-btn");
const userFormContent = document.getElementById("user-form-content");
// const userForm = document.forms["userForm"];

//--------Eventos-------------------------
registrarBtn.addEventListener("click", () => {
  userFormContent.classList.add("open");
});

userForm.addEventListener("reset", (evt) => {
  userFormContent.classList.remove("open");
});
