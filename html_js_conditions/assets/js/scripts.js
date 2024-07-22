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

let PastorJhunAge = 50;
let PastAge = 49;


if (PastorJhunAge == PastAge) {
  console.log("you are 50 years old")
} else {
  console.log("this is your past age as 49 years old")
}

let GelilioSiblings = 24
let firstchild = 24
let secondchild = 23
let thirdchild = 18

if (GelilioSiblings < firstchild){
  console.log("you are the first child 24 years old")
} else if (secondchild >= thirdchild){
  console.log ("you are the secondchild 23 years old")
} else  {
  console.log("you are the thirdchild 18 years old")
}


let Kuya= 50;
let Bunso = 47;

if (Kuya >= Bunso) {
  console.log("YOU DON'T HAVE THE DOMINION!");
  document.getElementById("h1-message").innerText = "YOU DON'T HAVE THE DOMINION!";
} else {
  console.log("You HAVE THE DOMINION!");
}