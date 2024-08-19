const arrOfItems = [];
const arrOfCarts = [];

document.getElementById("btnAddItem").addEventListener("click", function () {
  let btn = document.getElementById("btnAddItem").innerText;

  let itemsku = document.getElementById("txtSku").value;
  let itemname = document.getElementById("txtItemName").value;
  let itemphoto = document.getElementById("txtItemPhoto").value;
  let itemprice = document.getElementById("txtItemPrice").value;

  if (btn == "Add Item") {
    let item = {
      itemsku: itemsku,
      itemname: itemname,
      itemphoto: itemphoto,
      itemprice: itemprice,
    };

    arrOfItems.push(item);
  } else {
    let itemindex = document.getElementById("txtIndex").value;
    arrOfItems[itemindex].itemsku = itemsku;
    arrOfItems[itemindex].itemname = itemname;
    arrOfItems[itemindex].itemphoto = itemphoto;
    arrOfItems[itemindex].itemprice = itemprice;

    document.getElementById("btnAddItem").innerText = "Add Item";
  }

  document.getElementById("txtSku").value = "";
  document.getElementById("txtItemName").value = "";
  document.getElementById("txtItemPhoto").value = "";
  document.getElementById("txtItemPrice").value = "";
  document.getElementById("txtIndex").value = "";
  mapItem();
});

function mapItem() {
  let Cards = "";
  for (let x = 0; x < arrOfItems.length; x++) {
    Cards +=
      `<div class="col-md-4 mt-2">
          <div class="card">
              <img class="card-img-top" src="` +
      arrOfItems[x].itemphoto +
      `" alt="Card image cap">
              <div class="card-body">
                  <h5 class="card-title">` +
      arrOfItems[x].itemname +
      `</h5>
              <p class="card-text">
                  Amount : ` +
      arrOfItems[x].itemprice +
      `
          </p>
          <button class="btn btn-success btn-sm" onclick='add(` +
      x +
      `)'>Cart</button>
          <button class="btn btn-warning btn-sm" onclick='edit(` +
      x +
      `)'>Modify</button>
          <button class="btn btn-danger btn-sm" onclick='remove(` +
      x +
      `)'>Remove</button>
          </div>
      </div>
  </div>`;
  }

  document.getElementById("div-cards").innerHTML = Cards;
}

function remove(index) {
  arrOfItems.splice(index, 1);
  mapItem();
}

function edit(index) {
  let iteminfo = arrOfItems[index];

  document.getElementById("txtSku").value = iteminfo.itemsku;
  document.getElementById("txtItemName").value = iteminfo.itemname;
  document.getElementById("txtItemPhoto").value = iteminfo.itemphoto;
  document.getElementById("txtItemPrice").value = iteminfo.itemprice;

  document.getElementById("txtIndex").value = index;
  document.getElementById("btnAddItem").innerText = "Update Item";
}

function add(index) {
  let card = arrOfItems[index];
  card.qty = 1;
  arrOfCarts.push(card);

  console.log(arrOfCarts);
}
