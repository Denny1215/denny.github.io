//loop statement

//while
let start = 1;
let end = 100;

// while (end >= start) {
//   console.log(start);
//   document.write(end + "<br />");
//   end--; //start = start + 1; incrementation / decrementation

//   start++ : start = start + 1;
//   end-- : end = end - 1;
// }

//do while
start = 1; //re-assignment
end = 100; //re-assignment
// do {
//   document.write(start + "<br />");
//   start++;
// } while (start <= 100);

//for
// 1st. initialization
// 2nd. condition
// 3rd. statements
// 4th. incrementation / decrementation
// for (start = 1; start <= 10; start++) {
//   document.write(start + "<br />");
// }

document.getElementById("btn-add").addEventListener("click", function () {
  let no_of_inputs = document.getElementById("txt-number").value;
  let start = 1;
  let output = "";

  let name = "Denny";
  let age = "21";

  //   console.log("My name is " + name + ", I am " + age + " years of age.");

  //   console.log(`My name is ${name} I am ${age} years of age.`);

  while (start <= no_of_inputs) {
    output += `
    <div class="form-group mt-2">
        <input type="text" class=" form-control" placeholder="Enter your grade">
    </div>`;
    start++;
  }

  document.getElementById("div-inputs").innerHTML = output;
});
