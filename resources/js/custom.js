function validateForm() {
    let name = document.getElementById("name");
    let vid = document.getElementById("vid");
    let phone = document.getElementById("phone");
    let address = document.getElementById("address");
    if (!name.value){
        alert("Name must be filled out");
        name.focus();
        return false;
    }
    else if (!fname.value){
        alert("Father's Name must be filled out");
        fname.focus();
        return false;
    }
    else if (!vid.value){
        alert("Voter Id must be filled out");
        vid.focus();
        return false;
    }
    else if (!phone.value){
        alert("Phone no must be filled out");
        phone.focus();
        return false;
    }   
    else if (!address.value){
        alert("Address must be filled out");
        address.focus();
        return false;
    }
    return true;
}