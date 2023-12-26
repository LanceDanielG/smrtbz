const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    document.getElementById("emailinuse").style.display = "none";
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

$('#fname').on('input', ()=>{
    if (/[^a-zA-Z \t]+/.test($('#fname').val())){
        $('#fname').val('').addClass('is-invalid').removeClass('is-valid');
        toastr.error("Invalid First Name, Please Try Again");
    }
    else{
        $('#fname').removeClass('is-invalid');
        $('#fname').addClass('is-valid');
    }
});

$('#lname').on('input', ()=>{
    if (/[^a-zA-Z \t]+/.test($('#lname').val())){
        $('#lname').val('').addClass('is-invalid').removeClass('is-valid');
        toastr.error("Invalid Last Name, Please Try Again");
    }
    else{
        $('#lname').removeClass('is-invalid').addClass('is-valid');
    }
});

$(document).ready(function () {
    $('#submit').click(function () {
        var password = $('#password').val();
        var password2 = $('#password2').val();
        switch (true) {
            case $('#fname').val() == "":
                toastr.error('Firstname is Empty.');
                break;
        
            case $('#lname').val() == "":
                toastr.error('Lastname is Empty.');
                break;
        
            case $('#email').val() == "":
                toastr.error('Email is Empty.');
                break;

            case $('#password').val() == "":
                toastr.error('Password is Empty.');
                break;
        
            case $('#password').val() == "":
                toastr.error('Confirm Password is Empty.');
                break;
        
            case $('#password').val() == "":
                toastr.error('Confirm Password is Empty.');
                break;

            case $('#account-type').val() == "":
                toastr.error('Account Type is Not Selected.');
                break;

            case password !== password2:
                toastr.error('Passwords do not match.');
                break;
        
            default:
                // Form data
                var formData = new FormData($('#form')[0]);
                console.log(formData)
                // AJAX request
                $.ajax({
                    url: 'middleware/registerAccount.php',
                    method: 'POST',
                    data: formData,
                    processData: false,  // Ensure jQuery doesn't process data
                    contentType: false,  // Ensure jQuery doesn't set contentType
                    success: function (response) {
                        toastr.success('Account Registered');
                        $('#form').find('input:text, input:password, input:file, select, textarea').val('');
                        $('#form').find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
                    },
                    error: function () {
                        toastr.error('Error submitting the form.');
                        toastr.options.timeOut = 3000;
                    }
                });
                break;
        }
    });
});

function togglePassword() {
    var password = document.getElementById("password");
    var password2 = document.getElementById("password2");
    var toggleButton = document.getElementById("toggle-password");
    if ((password.type === "password") && (password2.type === 'password')){
        password.type = "text";
        password2.type = "text";
        toggleButton.querySelector("i").classList.remove("fa-eye");
        toggleButton.querySelector("i").classList.add("fa-eye-slash");
    } else {
        password.type = "password";
        password2.type = "password";
        toggleButton.querySelector("i").classList.remove("fa-eye-slash");
        toggleButton.querySelector("i").classList.add("fa-eye");
    }
}