let gender = "Queer";

// if (gender == male)

switch (gender) {
  case "Male":
    console.log("Your CR is on the right");
    break;

  case "Female":
    console.log("Your CR is on the left");
    break;

  default: //else
    console.log("Your CR is on the center");
    break;
}

//97-100 => 1
//95-96.9 => 1.25
//92-94.9 => 1.50
//89-91.9 => 1.75
//86-88.9 => 2
//83-85.9 => 2.25
//80-82.9 => 2.50
//76-79.9 => 2.75
//75-75.9 => 3
// < 75 => 5

document.getElementById("btnGrade").addEventListener("click", function () {
  let Grade = document.getElementById("txtGrade").value;

  if (Grade >= 97 && Grade <= 100) {
    document.getElementById("spnGrade").innerText = 1;
  } else if (Grade >= 95 && Grade <= 96.9) {
    document.getElementById("spnGrade").innerText = 1.25;
  } else {
    document.getElementById("spnGrade").innerText = 1.5;
  }
});
