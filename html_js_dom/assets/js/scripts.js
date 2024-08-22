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

let elements = document.querySelectorAll(".btn-colors"); //DOM selecting elements
for (let elem of elements) {
  elem.addEventListener("click", function () {
    let bgColor = elem.getAttribute("data-bg");
    let id = elem.getAttribute("id");
    changeColor(bgColor);
  });
}

document.querySelector("#btn-add").addEventListener("click", function () {
  let btn = document.createElement("input");
  btn.className = "form-control mt-2";
  btn.placeholder = "New Item";

  document.querySelector("#div-buttons").append(btn);
});

function changeColor(backColor) {
  console.log(backColor);
  document.getElementById("body").style.backgroundColor = backColor;
}

//tinawag ung function
// changeColor("pink");
