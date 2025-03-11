function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close dropdown when clicking outside
window.onclick = function(event) {
  if (!event.target.classList.contains('profile-button')) {
      let dropdowns = document.getElementsByClassName("dropdown-content");
      for (let i = 0; i < dropdowns.length; i++) {
          let openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
              openDropdown.classList.remove('show');
          }
      }
  }
};