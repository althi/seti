
// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Preencha todos os campos !");
} else {
document.getElementById('form').submit();
alert("Contato enviado com sucessp...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}


//Function To Display Popup
function div_show() {
document.getElementById('def').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('def').style.display = "none";
}