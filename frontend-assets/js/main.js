$(function() {
    $("#password-field").each(function (index, input) {
      var $input = $(input);
      $("button#show-hide").click(function () {
        var change = "";
        if ($(this).html() === "Show") {
          $(this).html("Hide")
          change = "text";
        } else {
          $(this).html("Show");
          change = "password";
        }

        $("#password-field").attr('type', change);
        $("#retype-password-field").attr('type', change);

       })
    });
});