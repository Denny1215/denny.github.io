let arrItems = [];
document.getElementById("btn-add").addEventListener("click", function () {
  let SerialNo = document.getElementById("SerialNo").value;
  let itemName = document.getElementById("itemName").value;
  let itemPhoto = document.getElementById("itemPhoto").value;
  let itemPrice = document.getElementById("itemPrice").value;

  let arrItem = [SerialNo, itemName, itemPhoto, itemPrice];
  arrItems.push(arrItem);

  let table = `<div class="row">`;
  for (let index = 0; index < arrItems.length; index++) {
    table += `
      <div class="col-3">
        <div class="card shadow-sm" style="width: 100%; height: 100%; overflow: hidden;">
          <img src="${arrItems[index][2]}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title" style="color: #343a40;">${arrItems[index][1]}</h5>
            <p class="card-text" style="color: #6c757d;">Amount: ${arrItems[index][3]}</p>
            <div class="d-flex">
              <button class="btn btn-success btn-sm">Add</a>
              <button class="btn btn-warning btn-sm" onclick="Modify(${index});">Modify</button>
              <button class="btn btn-danger btn-sm" onclick="Remove(${index});">Remove</button>
            </div>
          </div>
        </div>
      </div>`;


  }
  table += `</div>`;
  document.getElementById("data").innerHTML = table;

  document.getElementById("SerialNo").value = "";
  document.getElementById("itemName").value = "";
  document.getElementById("itemPhoto").value = "";
  document.getElementById("itemPrice").value = "";

  document.getElementById("SerialNo").focus();

});

function Remove(index){
  arrItems.splice(index, 1);
  let table = `<div class="row">`;
  for (let index = 0; index < arrItems.length; index++) {
    table += `
      <div class="col-3">
        <div class="card shadow-sm" style="width: 100%; height: 100%; overflow: hidden;">
          <img src="${arrItems[index][2]}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title" style="color: #343a40;">${arrItems[index][1]}</h5>
            <p class="card-text" style="color: #6c757d;">Amount: ${arrItems[index][3]}</p>
            <div class="d-flex">
              <button class="btn btn-success btn-sm">Add</button>
              <button class="btn btn-warning btn-sm" onclick="Modify(${index});">Modify</button>
              <button class="btn btn-danger btn-sm" onclick="Remove(${index});">RemoveItem</button>
            </div>
          </div>
        </div>
      </div>`;
  }
  table += `</div>`;
  document.getElementById("data").innerHTML = table;
  console.log(arrItems);
}

function Modify(index){
  arrItems.mod
}