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

function calculate() {
  var food = $("#food").val();
  var foodQuantity = parseFloat($("#foodQuantity").val());
  var drink = $("#drink").val();
  var drinkQuantity = parseFloat($("#drinkQuantity").val());
  var type = $("input[name='type']:checked").val();
  var total = 0;
  var foodTotal = 0;
  var drinkTotal = 0;

  var user = $("#user").val();

  if (food == undefined || food == null || food == "") {
    toastr.error("Please select food");
  } else if (
    foodQuantity == undefined ||
    foodQuantity == null ||
    foodQuantity == "" ||
    foodQuantity <= 0 ||
    isNaN(foodQuantity)
  ) {
    toastr.error("Please enter food quantity");
  } else if (drink == undefined || drink == null || drink == "") {
    total *= foodQuantity;
    toastr.error("Please select drink");
  } else if (
    drinkQuantity == undefined ||
    drinkQuantity == null ||
    drinkQuantity == "" ||
    drinkQuantity <= 0 ||
    isNaN(drinkQuantity)
  ) {
    toastr.error("Please enter drink quantity");
  } else if (type == undefined || type == null || type == "") {
    total *= foodQuantity;
    toastr.error("Please select type");
  } else {
    if (food === "hamburger") {
      foodTotal += 10;
    } else if (food === "pizza") {
      foodTotal += 15;
    } else if (food === "pasta") {
      foodTotal += 20;
    } else if (food === "pita") {
      foodTotal += 10;
    } else if (food === "cevapi") {
      foodTotal += 15;
    }
    foodTotal *= foodQuantity;

    if (drink === "cola") {
      drinkTotal += 5;
    } else if (drink === "pepsi") {
      drinkTotal += 5;
    } else if (drink === "water") {
      drinkTotal += 5;
    } else if (drink === "sprite") {
      drinkTotal += 5;
    } else if (drink === "jogurt") {
      drinkTotal += 5;
    }
    drinkTotal *= drinkQuantity;

    total = foodTotal + drinkTotal;
    $("#total_price").val(parseFloat(total));

    if (confirm("Price: " + total + " \nAre you sure you want to reserve?")) {
      $.ajax({
        url:
          "./php/reserve.php?task=reserve&food=" +
          food +
          "&foodQuantity=" +
          foodQuantity +
          "&drink=" +
          drink +
          "&drinkQuantity=" +
          drinkQuantity +
          "&type=" +
          type +
          "&total=" +
          total +
          "&user=" +
          user,
        success: function (data) {
          if (data.indexOf("success") > -1) {
            toastr.success(" Reservation added successfully");
            setTimeout(function () {
              window.location.href = "./index.php";
            }, 1500);
          } else {
            toastr.error("Error");
          }
        },
        error: function (data, err) {
          toastr.error("An error occurred, please try again later");
        },
      });
    }
  }
}
