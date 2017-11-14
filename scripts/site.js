$(document).ready(function() {
  $("#form").on("submit", function() {
    var formValid = true;

    // No email provided
    var email = $("#userEmail").prop("validity").valueMissing;
    if(email) {
      $("#emailMissing").show();
      formValid = false;
    } else {
      $("#emailMissing").hide();
    }

    // Validate form on submit
    var emailIsValid = $("#userEmail").prop("validity").typeMismatch;
    if(emailIsValid) {
      $("#emailError").show();
      formValid = false;
    } else {
      $("#emailError").hide();
    }

    // No name provided
    var name = $("#userName").prop("validity").valueMissing;
    if(name) {
      $("#nameError").show();
      formValid = false;
    } else {
      $("#nameError").hide();
    }

    // No address provided
    var address = $("#userAddress").prop("validity").valueMissing;
    if(address) {
      $("#addressError").show();
      formValid = false;
    } else {
      $("#addressError").hide();
    }

    // No necklace type selected
    var necklace = $("#userCategory").val();
    if(necklace == "") {
      $("#typeError").show();
      formValid = false;
    } else {
      $("#typeError").hide();
    }

    // No color selected
    var color = $("#userColor").val();
    if(color == "") {
      $("#colorError").show();
      formValid = false;
    } else {
      $("#colorError").hide();
    }

    // No message inputted
    var msg = $("#userMessage").val();
    if(msg == "") {
      $("#messageError").show();
      formValid = false;
    } else {
      $("#messageError").hide();
    }
    return formValid;




  });
});
