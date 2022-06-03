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

function contact() {
  let name = $("#name").val();
  let email = $("#email").val();
  let phone = $("#phone").val();
  let message = $("#message").val();

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
  } else if (phone == "") {
    toastr.error("Please enter your phone number");
  } else if (message == "") {
    toastr.error("Please enter your message");
  } else {
    $.ajax({
      url:
        "./php/contact.php?task=contact&name=" +
        name +
        "&email=" +
        email +
        "&phone=" +
        phone +
        "&message=" +
        message,
      success: function (data) {
        if (data.indexOf("success") > -1) {
          toastr.success("Your message has been sent");
        } else {
          toastr.error("An error occurred, please try again later");
        }
      },
      error: function (data, err) {
        toastr.error("An error occurred, please try again later");
      },
    });
  }
}
