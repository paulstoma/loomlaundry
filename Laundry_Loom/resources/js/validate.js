let typingTimer;              
let typingInterval = 1000;  
let zipcode = document.getElementById('zipcode');
let element = document.getElementById("zipcode-error");
let password_error = document.getElementById("password-error");
let password_validation = document.getElementById("password-validation");
let password = document.getElementById("password");
let confirmpassword = document.getElementById("confirmpassword");
let phoneNumber = document.getElementById("phonenumber");
let phoneNumberError = document.getElementById("phoneno-error");
let emailError = document.getElementById("email-error");
let email = document.getElementById("email");
let tick = document.getElementById("tick");
let agree = document.getElementById("agree");
let timeout = null

let isError = false;

zipcode.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (zipcode.value) {
        typingTimer = setTimeout(zipcodeTyping, typingInterval);
    }
});

confirmpassword.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (confirmpassword.value) {
        typingTimer = setTimeout(passwordTyping, typingInterval);
    }
});

password.addEventListener('keyup', () => {

    clearTimeout(typingTimer);
    if (password.value) {
        typingTimer = setTimeout(passwordValidation, typingInterval);
    }
});

phoneNumber.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (phoneNumber.value) {
        typingTimer = setTimeout(phonenoTyping, typingInterval);
    }
});

email.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (email.value) {
        typingTimer = setTimeout(emailTyping, typingInterval);
    }
});



function passwordTyping(){
    
    if (password.value != confirmpassword.value){
        password_error.classList.remove("d-none");
        isError = true;
    }
    else{
        password_error.classList.add("d-none");
        isError = false;
    }
}
function passwordValidation(){
    
    if (password.value.includes("$") && password.value.includes("%") && password.value.length >= 8){
        password_validation.classList.add("d-none");
        isError = false;
        tick.classList.remove("d-none");
    }
    else{
        password_validation.classList.remove("d-none");
        isError = true;
        tick.classList.add("d-none");
        
    }
}

function zipcodeTyping () {

    // let data = Array;
    // $.ajax({
    //     url:"./controllers/ZipcodeController.php",
    //     type:"POST",
    //     data: {zipcod : zipcode.value},
    //     success:function(msg){
    //         if (JSON.parse(msg).indexOf(zipcode.value)>=0){
    //             element.classList.add("d-none");
    //             isError = false;
    //         }
    //         else{
    //             element.classList.remove("d-none");
    //             isError = true;
    //         }
    //     },
    //     error: function(xhr, status, error) {
    //         console.error(xhr);
    //     },
    // });

    if (between(parseInt(zipcode.value),48001,49971)){
        element.classList.add("d-none");
        isError = false;
    }
    else{
        element.classList.remove("d-none");
        isError = true;
    }
}

function phonenoTyping () {
    // alert("Hi");
    if (!phoneNumber.value.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)) {
        phoneNumberError.classList.remove("d-none");
        isError = true;
    }
    else{
        isError = false;
        phoneNumberError.classList.add("d-none");
    }
}

function emailTyping(){
    if (!email.value.includes("@")){
        emailError.classList.remove("d-none");
        isError = true;
    }
    else{
        emailError.classList.add("d-none");
        isError = false;
    }
}

agree.onclick = function (){
    if (agree.checked && !isError){
        document.getElementById("sign-in").disabled = false;
    }
    else{
        document.getElementById("sign-in").disabled = true;
    }
}

function between(x, min, max) {
    return x >= min && x <= max;
}