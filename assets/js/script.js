
document.getElementById("btn_iniciar_sesion").addEventListener("click", iniciarsesion);
document.getElementById("btn_registrate").addEventListener("click", register);
window.addEventListener("resize", anchopagina);

/*Declaracion de variables*/
var contenedor__login_register = document.querySelector(".contenedor_login-register");
var formulario__login = document.querySelector(".formulario_login");
var formulario__register = document.querySelector(".formulario_register");
var caja__trasera__login = document.querySelector(".caja_trasera_login");
var caja__trasera__register = document.querySelector(".caja_trasera_register");

function anchopagina(){
    if(window.innerWidth > 850){
        caja__trasera__login.style.display = "block";
        caja__trasera__register.style.display = "block";
    }else{
        caja__trasera__register.style.display = "block";
        caja__trasera__register.style.opacity = "1";
        caja__trasera__login.style.display = "none";
        formulario__login.style.display = "block";
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "0"; 
    }

}

anchopagina();

function iniciarsesion(){ 

    if(window.innerWidth > 850){
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "10px";
        formulario__login.style.display = "block";
        caja__trasera__register.style.opacity = "1";
        caja__trasera__login.style.opacity = "0";
    }else{
        formulario__register.style.display = "none";
        contenedor__login_register.style.left = "10px";
        formulario__login.style.display = "block";
        caja__trasera__register.style.display = "block";
        caja__trasera__login.style.display = "none";}




}

function register(){
    
    if(window.innerWidth > 850) {
        formulario__register.style.display = "block";
        contenedor__login_register.style.left = "410px";
        formulario__login.style.display = "none";
        caja__trasera__register.style.opacity = "0";
        caja__trasera__login.style.opacity = "1";   
    }else{
        formulario__register.style.display = "block";
        contenedor__login_register.style.left = "0px";
        formulario__login.style.display = "none";
        caja__trasera__register.style.display = "none";
        caja__trasera__login.style.display = "block";
        caja__trasera__login.style.opacity = "1";

    }
}