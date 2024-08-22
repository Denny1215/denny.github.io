//sinetup ung function

// let element = document.getElementById("btn-danger");
// let element = document.getElementsByClassName("btn");
// let element = document.getElementsByTagName("button");
// let element = document.querySelector(".btn");

//while
//do while
//for (initializatio, condition, incrementation/decrementation) { statement; }

//for of special loop for array

//for (variable of array_variable)

// let elements = document.querySelectorAll(".btn");
// for (const element of elements) {
//   let elemBgColor = element.className;
//   element.addEventListener("click", function () {
//     changeColor(elemBgColor);
//   });
// }
document.querySelector("#btn-danger").addEventListener("click", function () {
  changeColor("#dc3545");
});

function changeColor(backColor) {
  document.getElementById("body").style.backgroundColor = backColor;
}

//tinawag ung function
// changeColor("pink");
