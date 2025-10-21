const open = document.getElementById("open");
const dialog = document.getElementById("popup");
const close = document.getElementById("close");

open.addEventListener("click", () => {dialog.showModal();});
close.addEventListener("click", () => {dialog.close();})