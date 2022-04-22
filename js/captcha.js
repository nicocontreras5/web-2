
    "use strict"

    function createCaptcha(){
        let captcha = document.getElementById("captcha");
        if(captcha)
        captcha.value = Math.floor((Math.random() * 10000) + 1);
    }

    createCaptcha();

    function validateCaptcha(){
        let inputCaptchaUser = document.getElementById("captcha-user");
        let captchaUSer = inputCaptchaUser.value;
        let captcha = document.getElementById("captcha").value;
        if (captchaUSer == captcha){
            alert("Suscripcion completada con exito.");
        }
        else {
            alert("Codigo incorrecto, ingreselo nuevamente.");
        }
        createCaptcha();
        inputCaptchaUser.value = "";
        inputCaptchaUser.focus();
    }
           
        document.getElementById("btn-submit").addEventListener("click", validateCaptcha);


