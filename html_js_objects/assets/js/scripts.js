let student = ["Denny", "Gelilio", 23, "Calamba", "Philippines"];

// key: value;
let obj_student = {
  first_name: "Denny",
  last_name: "Gelilio",
  age: 23,
  city: "Calamba",
  country: "Philippines",
  skills: ["Driving", "Swimming", "Web Development"],
  address: {
    house_no: "1210 ME",
    street: "",
    brgy: "Halang",
  },
};

let animals = [
  {
    id: 1,
    type: "Dog",
    breed: "Golden Retriever",
  },
  {
    id: 2,
    type: "Dog",
    breed: "German Shepherd",
  },
  {
    id: 3,
    type: "Cat",
    breed: "Siamese Cat",
  },
  {
    id: 4,
    type: "Cat",
    breed: "Persian",
  },
];

//Special Loop for Arrays (for in)
// for (const index in animals) {
//   console.log(
//     animals[index].id + " " + animals[index].type + " " + animals[index].breed
//   );

//   console.log("\n");
// }

let info = {
  first_name: "Jess",
  last_name: "Morales",
};

info.first_name = "Jesthony";
// var  - redeclare and reassign
// let - cant redeclare but can reassign
// const - cant redeclare and cant reassign

const fruits = ["apple", "mango"];
fruits.push("grapes");

//spread operator
const names = {
  firstName: "Jess",
  middleName: "Bernal",
  lastName: "Morales",
  nickName: "Jess",
  suffixName: "Jr",
};

const obj_name = { ...names };

// console.log(obj_name);

//Destructuring

let { firstName, lastName, ...others } = names;

let new_names = { ...others, alias: "kugkug" };

console.log(firstName);
console.log(lastName);
console.log(others);
console.log(new_names);
