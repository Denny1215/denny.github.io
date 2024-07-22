document.getElementById("btn-add").addEventListener("click", function () {
  let num1 = document.getElementById("num1").value; //string
  let num2 = document.getElementById("num2").value;

  let total = parseInt(num1) + parseInt(num2);
  console.log(total);

  document.getElementById("p-total").innerText = total;
});

document.getElementById("btn-sub").addEventListener("click", function () {
  let num1 = document.getElementById("num1").value; //string
  let num2 = document.getElementById("num2").value;

  let total = parseInt(num1) - parseInt(num2);
  console.log(total);
  document.getElementById("p-total").innerText = total;
});

document.getElementById("btn-mul").addEventListener("click", function () {
  let num1 = document.getElementById("num1").value; //string
  let num2 = document.getElementById("num2").value;

  let total = parseInt(num1) * parseInt(num2);
  console.log(total);
  document.getElementById("p-total").innerText = total;
});

document.getElementById("btn-div").addEventListener("click", function () {
  let num1 = document.getElementById("num1").value; //string
  let num2 = document.getElementById("num2").value;

  let total = parseInt(num1) / parseInt(num2);
  console.log(total);
  document.getElementById("p-total").innerText = total;
});
