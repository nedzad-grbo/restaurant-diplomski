$("#newsBtn").click(function () {
  let email = $("#userEmail").val();

  function validateEmail($emailSign) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($emailSign);
  }

  if (email == "") {
    toastr.error(
      "Please enter your email address to subscribe to our newsletter"
    );
  } else if (!validateEmail(email)) {
    toastr.warning("Please enter a valid email address");
  } else {
    $.ajax({
      url: "php/newsletter.php?task=news&email=" + email,
      success: function (data) {
        if (data.indexOf("sent") > -1) {
          toastr.success("You have been subscribed to our newsletter");
          $("#userEmail").val("");
        } else {
          toastr.error("An error occured, please try again later");
        }
      },
      error: function (data, err) {
        toastr.error("An error occured, please try again later");
      },
    });
  }
});
