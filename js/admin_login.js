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

function admin_login() {
  let email = $("#adminEmail").val();
  let password = $("#adminPassword").val();

  function validateEmail($emailSign) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($emailSign);
  }

  if (email == "") {
    toastr.error("Please enter your email");
  } else if (!validateEmail(email)) {
    toastr.warning("Please enter a valid email");
  } else if (password == "") {
    toastr.error("Please enter your password");
  } else {
    $.ajax({
      url:
        "./php/admin_login.php?task=login&email=" +
        email +
        "&password=" +
        password,
      success: function (data) {
        if (data.indexOf("success") > -1) {
          toastr.success("You have successfully logged in");
          setTimeout(function () {
            window.location.href = "./admin.php";
          }, 1500);
        } else {
          toastr.error("Invalid email or password");
        }
      },
      error: function (data, err) {
        toastr.error("An error occured, please try again later");
      },
    });
  }
}
