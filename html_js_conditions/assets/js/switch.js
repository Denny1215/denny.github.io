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
  //get.average of the grades sum of the grades / 5
  //get the GWA
  //use addition and if else

  let Grade1 = document.getElementById("txtGrade1").value;
  let Grade2 = document.getElementById("txtGrade2").value;
  let Grade3 = document.getElementById("txtGrade3").value;
  let Grade4 = document.getElementById("txtGrade4").value;
  let Grade5 = document.getElementById("txtGrade5").value;

  let total =
    parseInt(Grade1) +
    parseInt(Grade2) +
    parseInt(Grade3) +
    parseInt(Grade4) +
    parseInt(Grade5);
  console.log(total);

  Average = total / 5;
  console.log(Average);

  if (Average > 100) {
    alert("you've entered an invalid grade");
    document.getElementById("spnGrade").innerText = 0;
  } else {
    if (Average >= 97 && Average <= 100) {
      document.getElementById("spnGrade").innerText = 1;
    } else if (Average >= 95 && Average <= 96.9) {
      document.getElementById("spnGrade").innerText = 1.25;
    } else if (Average >= 92 && Average <= 94.9) {
      document.getElementById("spnGrade").innerText = 1.5;
    } else if (Average >= 89 && Average <= 91.9) {
      document.getElementById("spnGrade").innerText = 1.75;
    } else if (Average >= 86 && Average <= 88.9) {
      document.getElementById("spnGrade").innerText = 2;
    } else if (Average >= 83 && Average <= 85.9) {
      document.getElementById("spnGrade").innerText = 2.25;
    } else if (Average >= 80 && Average <= 82.9) {
      document.getElementById("spnGrade").innerText = 2.5;
    } else if (Average >= 76 && Average <= 79.9) {
      document.getElementById("spnGrade").innerText = 2.75;
    } else if (Average >= 75 && Average <= 75.9) {
      document.getElementById("spnGrade").innerText = 3;
    } else {
      document.getElementById("spnGrade").innerText = 5;
    }
  }
});
