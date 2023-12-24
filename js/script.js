
//navbar
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
  
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function toggleSearchInput() {
    const searchInput = document.getElementById("search-input");

    if (searchInput.style.display === "none" || searchInput.style.display === "") {
        searchInput.style.display = "block";
        searchInput.focus(); // Automatically focus on the input when it's displayed
    } else {
        searchInput.style.display = "none";
    }
}


// slide move 
var swiper = new Swiper('.swiper', {
  slidesPerView: 3,
  direction: getDirection(),
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {
    resize: function () {
      swiper.changeDirection(getDirection());
    },
  },
});

function getDirection() {
  var windowWidth = window.innerWidth;
  var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

  return direction;
}