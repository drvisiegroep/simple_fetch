const form = document.getElementById("form");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  enterUser();
});

async function enterUser() {
  const formData = new FormData(form);
  await fetch("server/enteritems.php", {
    method: "post",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        getUsers();
      } else {
        throw `error with status ${response.status}`;
      }
    })
    .catch((error) => console.log(error));
}

async function getUsers() {
  const ul = document.getElementById("user-list");
  ul.innerHTML = "";
  const list = document.createDocumentFragment();
  const response = await fetch("server/getitems.php");
  const userList = await response.json();

  userList.map(function (user, index) {
    let tr = document.createElement("tr");
    let userID = document.createElement("td");
    let firstName = document.createElement("td");
    let lastName = document.createElement("td");
    let hasTeckel = document.createElement("td");
    let email = document.createElement("td");
    let deleteButton = document.createElement("td");

    userID.innerText = `${user.ID}`;
    firstName.innerText = `${user.FirstName}`;
    lastName.innerText = `${user.LastName}`;
    hasTeckel.innerText = `${user.Hasteckel}`;
    email.innerText = `${user.Email}`;
    deleteButton.innerHTML = `<div class="deletebtn">Delete ${user.ID}</div>`;

    tr.appendChild(userID);
    tr.appendChild(firstName);
    tr.appendChild(lastName);
    tr.appendChild(hasTeckel);
    tr.appendChild(email);
    tr.appendChild(deleteButton);

    list.appendChild(tr);
  });

  ul.appendChild(list);
}

async function deleteUser() {
  await fetch("server/deleteitems.php", {
    method: "post",
    body: ID,
  });
}

getUsers();
