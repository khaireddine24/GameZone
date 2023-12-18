function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



window.onload = function(){ document.querySelector(".preloader").style.display = "none"; }

   function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
  }
  
  function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
  }
  window.onkeyup = function (event) {
		if (event.keyCode == 27) {
      document.getElementById("myOverlay").style.display = "none";
		}
  }

 