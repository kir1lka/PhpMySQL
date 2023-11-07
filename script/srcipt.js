/////////////////////////create
//const
const buttonOpen = document.querySelector(".buttonOpen");
const buttonClose = document.querySelector(".svg_close");

//function
function handleClickOpenPopup() {
  document.querySelector(".popup_bg").style.display = "inline";
  document.querySelector(".popup").style.display = "inline";
}

function handleClickClosePopup() {
  document.querySelector(".popup_bg").style.display = "none";
  document.querySelector(".popup").style.display = "none";
}

// events
buttonOpen.addEventListener("click", handleClickOpenPopup);
buttonClose.addEventListener("click", handleClickClosePopup);

/////////////////////////edit
//const
const buttonOpenEdit = document.querySelector(".button-edit");
const buttonCloseEdit = document.getElementById("svg_close_edit");

//function
function handleClickOpenPopupEdit() {
  document.getElementById("editPopupBg").style.display = "inline";
  document.getElementById("editPopup").style.display = "inline";
}

function handleClickClosePopupEdit() {
  document.getElementById("editPopupBg").style.display = "none";
  document.getElementById("editPopup").style.display = "none";
}

// events
buttonOpenEdit.addEventListener("click", handleClickOpenPopupEdit);
buttonCloseEdit.addEventListener("click", handleClickClosePopupEdit);

/////////////////////////edit
//const
document.addEventListener("DOMContentLoaded", function () {
  const editButtons = document.querySelectorAll(".button-edit");

  editButtons.forEach((button) => {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      const userId = button.getAttribute("data-id");
      openEditPopup(userId);
    });

    function openEditPopup(userId) {
      const editPopup = document.getElementById("editPopup");
      const user = document.querySelector(`[data-id="${userId}"]`);

      // Populate the form fields with user data
      editPopup.querySelector('input[name="id"]').value =
        user.getAttribute("data-id");
      editPopup.querySelector('input[name="name"]').value =
        user.getAttribute("data-name");
      editPopup.querySelector('input[name="surname"]').value =
        user.getAttribute("data-surname");
      editPopup.querySelector('input[name="patronymic"]').value =
        user.getAttribute("data-patronymic");
      editPopup.querySelector('input[name="email"]').value =
        user.getAttribute("data-email");
      editPopup.querySelector('input[name="country"]').value =
        user.getAttribute("data-country");
      editPopup.querySelector('input[name="city"]').value =
        user.getAttribute("data-city");
      editPopup.querySelector('input[name="login"]').value =
        user.getAttribute("data-login");
      editPopup.querySelector('input[name="password"]').value =
        user.getAttribute("data-password");

      // Display the edit popup
      document.getElementById("editPopupBg").style.display = "inline";
      editPopup.style.display = "inline";
    }

    const editButtons = document.querySelectorAll(".button-edit");

    editButtons.forEach((button) => {
      button.addEventListener("click", function (event) {
        event.preventDefault();
        const userId = button.getAttribute("data-id");
        openEditPopup(userId);
      });
    });
  });
});
