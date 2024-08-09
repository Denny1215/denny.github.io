// Arrays
// let name1 = "Jess";
// let name2 = "Denny";
// let name3 = "Mark";
// let name4 = "Joel";
// let name5 = "Dennis";

//indexes => key 0,1,2,3
let arrName = ["Jess", "Denny", "Mark", "Joel", "Dennis"];

// .push();
// adding of new item at the end
arrName.push("end");

// at the start of an array
arrName.unshift("front");

//remove item at the end of an array
let item_removed_end = arrName.pop(); //array function

//remove item at the end of an array
let item_removed_start = arrName.shift(); //array function

// console.log(item_removed_start);
// console.log(item_removed_end);

let item_removed_specific = arrName.splice(0, 2);

// console.log(arrName);

//multi dimensional array
let arrStudents = [
  ["Jess", 34, "1st Year", "A"], //0
  ["Denny", 23, "1st Year", "A"], //1
];
let studentName = arrStudents[0];
// console.log(studentName[0]);

// let arrFruits = [
//   ["Apple", 400],
//   ["Mango", 200],
//   ["Grapes", 100],
//   ["Avocado", 600],
//   ["Dragon Fruit", 350],
//   ["Guyabano", 150],
// ];

let arrFruits = [];
document.getElementById("btn-add").addEventListener("click", function () {
  let FruitName = document.getElementById("txtFruit").value;
  let FruitPrice = document.getElementById("txtPrice").value;
  let FruitPhoto = document.getElementById("txtPhoto").value;

  let arrFruit = [FruitName, FruitPrice, FruitPhoto];

  arrFruits.push(arrFruit);

  let table = ``;
  for (let index = 0; index < arrFruits.length; index++) {
    table += `<div class="card" style="width: 18rem;">
                <img src="${arrFruits[index][2]}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">${arrFruits[index][0]}</h5>
                  <p class="card-text">${arrFruits[index][1]}</p>
                  <a href="#" class="btn btn-primary">Add To Card</a>
                </div>
              </div>`;
  }
  document.getElementById("data").innerHTML = table;

  document.getElementById("txtFruit").value = "";
  document.getElementById("txtPrice").value = "";
  document.getElementById("txtPhoto").value = "";

  document.getElementById("txtFruit").focus();
});

//string to array

let Address = "1210 ME Brgy Halang Calamba Laguna";
let arrAddress = Address.split(" ");
console.log(arrAddress);

// array to string
let arrSkills = [
  "Driving",
  "Video Editing",
  "Basketball",
  "Swimming",
  "Volleyball",
];

let Skills = arrSkills.join(" | ");
console.log(Skills);
