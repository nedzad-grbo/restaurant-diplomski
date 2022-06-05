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

function addNew() {
  let name = $("#name").val();
  let description = $("#description").val();
  let price = $("#price").val();
  let image = $("#image").val();

  if (name == "") {
    toastr.error("Name is required");
  } else if (description == "") {
    toastr.error("Description is required");
  } else if (price == "") {
    toastr.error("Price is required");
  } else if (image == "") {
    toastr.error("Image is required");
  } else {
    $.ajax({
      url:
        "./php/add.php?task=add&name=" +
        name +
        "&description=" +
        description +
        "&price=" +
        price +
        "&image=" +
        image,
      success: function (data) {
        if (data.indexOf("add") > -1) {
          toastr.success(" Added Successfully");
          window.location.href = "./admin.php";
        } else {
          toastr.error("Error");
        }
      },
      error: function (data, err) {
        toastr.error("An error occured, please try again later");
      },
    });
  }
}
