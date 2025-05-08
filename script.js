// check if Fist name is up to 3 characters
$("#fName").on("input", function () {
    let firstName = $(this).val();

    if(firstName.length < 3){
        $("#fNameError").html("Invalid First Name").fadeIn();
        setTimeout(function(){
            $("#fNameError").html("Invalid First Name").fadeOut();
        }, 5000);
    } else {
        $("#fNameError").html("Invalid First Name").fadeOut(); // Clear error
    }

});


// check if Last name is up to 3 characters
$("#lName").on("input", function () {
    let lasttName = $(this).val();

    if(lasttName.length < 3){
        $("#lNameError").html("Invalid Last Name").fadeIn();
        setTimeout(function(){
            $("#lNameError").html("Invalid Last Name").fadeOut();
        }, 5000);
    } else {
        $("#lNameError").html("Invalid Last Name").fadeOut(); // Clear error
    }

});


// check if phone number matches Nigeria phone number pattern
$("#phoneNumber").on("input", function () {
    let phoneNumber = $(this).val();

    // Nigerian phone number regex pattern
    let pattern = /^(0)(7|8|9)(0|1)[0-9]{8}$/;

    if (!pattern.test(phoneNumber)) {
        $("#phoneError").html("Invalid Nigerian Phone Number").fadeIn();
        setTimeout(function(){
            $("#phoneError").html("Invalid Nigerian Phone Number").fadeOut();
        }, 5000);
    } else {
        $("#phoneError").fadeOut();
    }
});


// chech if email matches email format
$("#email").on("input", function() {
    let email = $(this).val();

    // email regex pattern
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!emailPattern.test(email)){
        $("#emailError").html("Invalid Email Address").fadeIn();
        setTimeout(function(){
            $("#emailError").html("Invalid Email Address").fadeOut();
        }, 5000);
    } else {
        $("#emailError").fadeOut();
    }

});



$("#password").on("input", function () {
    let password = $(this).val();
    let strengthMessage = $("#strengthMessage");
    let barFill = $("#barFill");

    // Check patterns
    let hasLower = /[a-z]/.test(password);
    let hasUpper = /[A-Z]/.test(password);
    let hasNumber = /\d/.test(password);
    let hasSymbol = /[\W_]/.test(password);
    let length = password.length;

    let score = 0;
    if (hasLower) score++;
    if (hasUpper) score++;
    if (hasNumber) score++;
    if (hasSymbol) score++;
    if (length > 8) score++;

    // Update strength bar and message
    if (score <= 2) {
        strengthMessage.html("Weak Password").css("color", "red");
        barFill.css({ borderRadius: "25px", width: "25%", background: "red" });
    } else if (score === 3 || score === 4) {
        strengthMessage.html("Medium Strength").css("color", "orange");
        barFill.css({borderRadius: "25px", width: "60%", background: "orange" });
    } else {
        strengthMessage.html("Strong Password!").css("color", "green");
        barFill.css({borderRadius: "25px", width: "100%", background: "green" });
    }
});




$("#cPassword").on("input", function () {
    let confirmPassword = $("#cPassword").val();
    let password = $("#password").val();
    let erroMessage = $("#cPasswordError");


    if (confirmPassword != password) {
        erroMessage.html("Password Doesn't Match!").css("color", "red").fadeIn();
    }
    else{
        erroMessage.html("Password Match").css("color", "green").fadeIn();
    }
});







