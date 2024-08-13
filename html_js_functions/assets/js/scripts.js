// default functions
// alert();
// console.log();

//invoke
let multi = mathOperation(20, 4, "*");
let sum = mathOperation(100, 4, "+");

function mathOperation(num1, num2, operation) {
  let total = 0;
  if (operation == "+") {
    total = num1 + num2;
  } else if (operation == "*") {
    total = num1 * num2;
  } else if (operation == "/") {
    total = num1 / num2;
  } else if (operation == "-") {
    total = num1 - num2;
  } else {
    total = "Invalid Operation";
  }

  console.log(total);
}

// 3 types of functions

//function declaration
// function funcName() {}

// function variable
// let funcName = function () {};

//arrow function
// let funcName = () => {};
