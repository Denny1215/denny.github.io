//condition / choices

//conditional statement
// if (condition) {
// }

let minorAge = 17; //17 years old and below is a minor
let Age = 18;

//  = : assignment
// 15 > 17 ? => false
// comparison operators

// == "equals" => comparing if the same value > parehas ba?
// > "greater than" => mas malaki ba?
// < "lesser than  " => mas maliit ba?
// >= "greater than or equal" => mas malaki or kaparehas ba?
// <= "lesser than or equal" => mas maliit or kaparehas ba?

// != " not equal " => hindi ba magkaprehas?
//if else
if (Age <= minorAge) {
  console.log("You are NOT ALLOWED to use this application!");
} else {
  //fallback
  console.log("You are ALLOWED to use this application!");
}

let Gender = "Male";

if (Gender == "Male") {
  console.log("CR is on your RIGHT");
  document.getElementById("h1-text").innerHTML = "CR is on your RIGHT";
} else if (Gender == "Female") {
  console.log("CR is on your LEFT");
  document.getElementById("h1-text").innerText = "CR is on your LEFT";
} else {
  console.log("CR is on your CENTER");
  document.getElementById("h1-text").innerText = "CR is on your CENTER";
}

let TaxableSalary = 600; //integer
let Salary = "600"; //string

// === "strict equals" => comparing if the same value and the same data type
// string, boolean, integer, float
// && => and => atsaka

// console.log(typeof Salary, " || ", typeof TaxableSalary);
// console.log(Salary === TaxableSalary);
if (typeof Salary == typeof TaxableSalary && Salary >= TaxableSalary) {
  console.log("Your salary needs to be taxed!");
} else {
  console.log("Your salary is for poor people!");
}
