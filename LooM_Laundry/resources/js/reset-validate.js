let typingTimer;              
let typingInterval = 1000;  

let password_error = document.getElementById("password-error");
let password_validation = document.getElementById("password-validation");
let password = document.getElementById("password");
let confirmpassword = document.getElementById("confirmpassword");

let emailError = document.getElementById("email-error");
let email = document.getElementById("email");
// let tick = document.getElementById("tick");
// let agree = document.getElementById("agree");
// let form = document.getElementById("register-form");
let timeout = null

let emailexist = document.getElementById("email-exist");
let license_error = document.getElementById("license-error");

let isError = false;

// usertypes.onclick = function(){
//     alert('it works link name');
// }
function checkClass(element){
    if (element.classList.contains("hide-id")){
        return true;
    }
    else{
        return false;
    }
}



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

// phoneNumber.addEventListener('keyup', () => {
//     clearTimeout(typingTimer);
//     if (phoneNumber.value) {
//         typingTimer = setTimeout(phonenoTyping, typingInterval);
//     }
// });

email.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (email.value) {
        typingTimer = setTimeout(emailTyping, typingInterval);
    }
});

function isSSN(str)
{
    regexp = /^(?!000|666)[0-8][0-9]{2}-(?!00)[0-9]{2}-(?!0000)[0-9]{4}$/;
    
    if (regexp.test(str))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function ssndriverTyping(){
    // alert(ssndriver.value);
    if (isSSN(ssndriver.value)){
        // alert("ssndriver.value");
        ssn_error.classList.remove("d-none");
        isError = true;
    }
    else{
        // alert(ssndriver.value);
        ssn_error.classList.add("d-none");
        isError = false;
    }
}

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

function licenseTyping(){
    if (license.value.length != 8 && license.value.length != 9){
        license_error.classList.remove("d-none");
        isError = true;
        // tick.classList.remove("d-none");
    }
    else{
        license_error.classList.add("d-none");
        isError = false;
        // tick.classList.add("d-none");
        
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

    let data = Array;
    $.ajax({
        url:"./controllers/EmailExistController.php",
        type:"POST",
        data: {email : email.value},
        success:function(msg){

            if (msg=="false"){
                emailexist.classList.add("d-none");
                isError = false;
            }
            else{
                emailexist.classList.remove("d-none");
                isError = true;
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr);
        },
    });
}

// agree.addEventListener("change", function() {
//     if (agree.checked){
//         document.getElementById("sign-in").disabled = false;
//     }
//     else{
//         document.getElementById("sign-in").disabled = true;
//     }
// });

function errorTyping(){
    if (agree.checked){
        document.getElementById("sign-in").disabled = false;
    }
    else{
        document.getElementById("sign-in").disabled = true;
    }
}

function between(x, min, max) {
    return x >= min && x <= max;
}