toastr.options.closeDuration = 300;
toastr.options.showEasing = "swing";
toastr.options.hideEasing = "linear";
toastr.options.closeEasing = "linear";
toastr.options.showMethod = "slideDown";
toastr.options.hideMethod = "slideUp";
toastr.options.closeMethod = "slideUp";
toastr.options.preventDuplicates = true;
toastr.options.closeButton = true;
toastr.options.progressBar = true;

function register() {
  let name = $("#nameReg").val();
  let email = $("#emailReg").val();
  let password = $("#passwordReg").val();

  function validateEmail($emailSign) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($emailSign);
  }

  if (name == "") {
    toastr.error("Please enter your name");
  } else if (email == "") {
    toastr.error("Please enter your email");
  } else if (!validateEmail(email)) {
    toastr.warning("Please enter a valid email");
  } else if (password == "") {
    toastr.error("Please enter your password");
  } else {
    $.ajax({
      url:
        "./php/register.php?task=register&name=" +
        name +
        "&email=" +
        email +
        "&password=" +
        password,
      success: function (data) {
        if (data.indexOf("success") > -1) {
          toastr.success("You have successfully registered");
        } else {
          toastr.error("Email already exists");
        }
      },
      error: function (data, err) {
        toastr.error("An error occurred, please try again later");
      },
    });
  }
}
