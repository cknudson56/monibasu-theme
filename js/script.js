var siteHeading = document.getElementById('site-heading');
var screenWidth = window.innerWidth;

function changeColumns() {
  if(screenWidth > 800){
    siteHeading.classList.add('four columns');
    siteHeading.classList.remove('nine columns');
  } else {
    siteHeading.classList.add('nine columns');
    siteHeading.classList.remove('four columns');
  }
}
window.addEventListener("resize", changeColumns);
changeColumns();
