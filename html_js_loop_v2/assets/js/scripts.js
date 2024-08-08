// while
// if (condition) {
//   // run the statement
// } else {
//   // fallback
// }

// let x = 0;
// while (x <= 10) {

//   console.log(x);
//   x++;
// }
// console.log("end");

// do while
// let y = 0;
// do {
//   console.log(y);
//   y++;
// } while (y <= 10);
// console.log("end");

// for loop
//initialization
//condition
//statement
//incrementation / decrementation
// for (let z = 0; z <= 10; z++) {
//   console.log(z);
// }
// console.log("end");

let multiplier = 5;
let multiplicand = 5;

let table = `<table class='table table-striped'>`;
for (let col = 1; col <= multiplicand; col++) {
  table += `<tr>`;

  //col = 2
  for (let row = 1; row <= multiplier; row++) {
    table += `<td>${col * row}</td>`;
  }

  table += `</tr>`;
}

table += `</table>`;

console.log(table);
document.body.innerHTML = table;
