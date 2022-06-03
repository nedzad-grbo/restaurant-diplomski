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

function login() {
  let email = $("#emailLog").val();
  let password = $("#passwordLog").val();

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
        "./php/login.php?task=login&email=" + email + "&password=" + password,
      success: function (data) {
        if (data.indexOf("success") > -1) {
          toastr.success("You have successfully logged in");

          if (
            window.location.href ==
              "http://localhost/grbo-restoran/Spicyo%20Free%20Website%20Template%20-%20Free-CSS.com/spicyo/login.html" ||
            window.location.href ==
              "http://localhost/grbo-restoran/Spicyo%20Free%20Website%20Template%20-%20Free-CSS.com/spicyo/login"
          ) {
            var old = document.referrer;
            console.log(old);

            var arr = old.match(/verify.php?(.*)/);
            /* if (arr != null) { // Did it match?
                        alert(arr[1]);
                    } */
            setTimeout(function () {
              if (arr != null) {
                window.location.replace("index.php");
              } else {
                window.history.back();
              }
            }, 1500);
          } else {
            var delay = 1500;
            setTimeout(function () {
              console.log(window.location.replace(window.location.href));
            }, delay);
          }
        } else if (data.indexOf("pass") > -1) {
          toastr.error("Incorrect password");
        } else {
          toastr.error("Email not found");
        }
      },
      error: function (data, err) {
        toastr.error("An error occurred, please try again later");
      },
    });
  }
}
