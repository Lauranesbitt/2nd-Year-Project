<script>
function validatePassword() {
var cpassword,npassword,confirmpassword,output = true;

cpassword = document.frmChange.cpassword;
npassword = document.frmChange.npassword;
confirmpassword = document.frmChange.confirmpassword;

if(!cpassword.value) {
cpassword.focus();
document.getElementById("cpassword").innerHTML = "required";
output = false;
}
else if(!npassword.value) {
npassword.focus();
document.getElementById("npassword").innerHTML = "required";
output = false;
}
else if(!confirmpassword.value) {
confirmPassword.focus();
document.getElementById("confirmpassword").innerHTML = "required";
output = false;
}
if(npassword.value != confirmpassword.value) {
npassword.value="";
confirmpassword.value="";
npassword.focus();
document.getElementById("confirmpassword").innerHTML = "not same";
output = false;
} 	
return output;
}