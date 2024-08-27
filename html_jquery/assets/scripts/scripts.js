// document.getElementById("btn-alert").addEventListener("click", function () {
//   alert("Clicked Me");
// });

$(document).ready(function () {
  $("#btn-alert").on("click", function () {
    $("#btn-alert").css({
      left: "100px",
      position: "absolute",
    });

    document.querySelector("#btn-alert").style.backgroundColor = "red";
    $(".progress-bar").addClass("progress-bar-animated");
    //set Interval
    setInterval(function () {
      if ($(".progress").width() > $(".progress-bar").width()) {
        let newWidth = $(".progress-bar").width() + 100;
        $(".progress-bar").css("width", newWidth + "px");
      }
    }, 1);
  });
});
