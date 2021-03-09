
function validation_fn() {
    if ((document.getElementById("type1").checked == false) && (document.getElementById("type2").checked == false)) {
        alert("Please select valid type");
        document.getElementById("type1").focus();
        return false;
    } else if (document.getElementById("name").value == "") {
        alert("Please enter  name");
        document.getElementById("name").focus();
        return false;
    } else if (document.getElementById("dob").value == "") {
        alert("Please pick date of birth");
        document.getElementById("dob").focus();
        return false;
    } else if (document.getElementById("mail").value == "") {
        alert("Please enter email id");
        document.getElementById("mail").focus();
        return false;
    }  else if (document.getElementById("phone").value == "") {
        alert("Please enter mobile number");
        document.getElementById("phone").focus();
        return false;
    }  else if (document.getElementById("state").value == "") {
        alert("Please chose state");
        document.getElementById("state").focus();
        return false;
    } else if (document.getElementById("district").value == "") {
        alert("Please chose district");
        document.getElementById("district").focus();
        return false;
    } else if (document.getElementById("block").value == "") {
        alert("Please chose block");
        document.getElementById("block").focus();
        return false;
    } else if (document.getElementById("village").value == "") {
        alert("Please chose village");
        document.getElementById("village").focus();
        return false;
    } else {
        return true;
    }
}