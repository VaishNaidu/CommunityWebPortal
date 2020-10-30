// Get the modal
var payModal = document.getElementById("myPayModal");

// Get the button that opens the modal
var btn = document.querySelector(".btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("pay-close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  payModal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  payModal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == payModal) {
    payModal.style.display = "none";
  }
};