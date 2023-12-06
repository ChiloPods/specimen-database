// Toggle class active

const navbarNav = document.querySelector(".navbar-nav");

// ketika menu di klik
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar sidebar untuk menghilangkan nav
const menu = document.querySelector("#menu");
document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Ketika Dropdown di klik
function dropdownFunc() {
  document.getElementById("typeDropdown").classList.toggle("show");
}

//Menutup dropdown ketika di klik di tempat lain/di luarnya
window.onclick = function (event) {
  if (!event.target.matches(".dropbtn")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

//Fungsi show modal
function showModal() {
  document.getElementById("id01").style.display = "block";
}

// Fungsi hide modal
function hideModal() {
  document.getElementById("id01").style.display = "none";
}

// Menempel fungsi pada button
document.querySelector(".addbtn").addEventListener("click", showModal);
document.querySelector(".cancelbtn").addEventListener("click", hideModal);
