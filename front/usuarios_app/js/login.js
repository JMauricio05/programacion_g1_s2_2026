const loginForm = document.forms["login-form"];

const login = async () => {
  try {
    const data = {
        username: loginForm['username'].value,
        password: loginForm['password'].value
    };
    const response = await fetch("http://127.0.0.1:8000/login", {
      method: "post",
      headers: {
        "Content-type": "application/json",
      },
      body: JSON.stringify(data),
    });
    if (response.status == 200) {
        const user = await response.json();
        sessionStorage.setItem('user.name', user.nombre);
        
        window.location.href = "home.html";
    } else {
      throw new Error("Datos incorrectos");
    }
  } catch (error) {
    alert(error);
  }
};

loginForm.addEventListener('submit', (evt)=>{
    evt.preventDefault();
    login();
});
