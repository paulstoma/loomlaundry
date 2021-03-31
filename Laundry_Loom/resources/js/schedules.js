let b = 60;
let workinghours = [];
let aa = 420;
let tm = ['AM', 'PM'];
let dropdown = document.getElementById("hour-option");


for (let i=0;aa<22*60; i++) {
    let hh = Math.floor(aa/60);
    let mm = (aa%60);
    workinghours[i] = ("0" + (hh % 12)).slice(-2) + ':' + ("0" + mm).slice(-2) + tm[Math.floor(hh/12)];
    aa = aa + b;
}

console.log(workinghours.length);
for (let i = 0; i < workinghours.length - 1; i ++){
    timedifferences = workinghours[i] + " - " + workinghours[i+1];
    // console.log(timedifferences);
    let el = document.createElement("option");
    el.textContent = timedifferences;
    el.value = timedifferences;
    dropdown.appendChild(el);
}