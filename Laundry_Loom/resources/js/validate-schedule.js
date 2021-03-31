let typingTimer;              
let typingInterval = 500;  
let greenbag = document.getElementById("greenbag");
let specialbag = document.getElementById("specialbag");
let bluebag = document.getElementById("bluebag");

greenbag.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (greenbag.value) {
        typingTimer = setTimeout(bagTyping, typingInterval);
    }
});

bluebag.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (bluebag.value) {
        typingTimer = setTimeout(bagTyping, typingInterval);
    }
});

specialbag.addEventListener('keyup', () => {
    clearTimeout(typingTimer);
    if (specialbag.value) {
        typingTimer = setTimeout(bagTyping, typingInterval);
    }
});

specialbag.addEventListener('mouseup', () => {
    clearTimeout(typingTimer);
    if (specialbag.value) {
        typingTimer = setTimeout(bagTyping, typingInterval);
    }
});

function bagTyping(){
    
    let value = greenbag.value + bluebag.value + specialbag.value;
    if (value.length == 3 && value != "000"){
        document.getElementById("proceed").disabled = false;
    }
}