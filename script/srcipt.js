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
