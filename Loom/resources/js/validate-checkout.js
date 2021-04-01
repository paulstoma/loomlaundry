let typingTimer;              
let typingInterval = 1000;  
let cardno = document.getElementById("cardno");
let card_error = document.getElementById("card-validation");
let cvc = document.getElementById("cvc");
let cvc_error = document.getElementById("cvc-validation");

cardno.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (cardno.value) {
        typingTimer = setTimeout(cardnoTyping, typingInterval);
    }
});
// alert("Hello");
function cardnoTyping(){
    if (cardno.value.length != 16){
        card_error.classList.remove("d-none");
        // isError = true;
        // tick.classList.remove("d-none");
    }
    else{
        card_error.classList.add("d-none");
        // isError = false;
        // tick.classList.add("d-none");
        
    }
}

cvc.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (cvc.value) {
        typingTimer = setTimeout(cvcTyping, typingInterval);
    }
});
// alert("Hello");
function cvcTyping(){
    if (cvc.value.length != 3){
        cvc_error.classList.remove("d-none");
        // isError = true;
        // tick.classList.remove("d-none");
    }
    else{
        cvc_error.classList.add("d-none");
        // isError = false;
        // tick.classList.add("d-none");
        
    }
}