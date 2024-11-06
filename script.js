var s = skrollr.init();
let button = document.querySelector(".menu-cross");

const observer = new IntersectionObserver(entries => {
  // Loop over the entries
  entries.forEach(entry => {
  // If the element is visible
  if (entry.isIntersecting) {
    // Add the animation class
    entry.target.classList.add("lineUp");
  }
  });
});

observer.observe(document.querySelector(".story > h2 span"));
observer.observe(document.querySelector("#characters span"));
observer.observe(document.querySelector("#place span"));
observer.observe(document.querySelector("#studio span"));
observer.observe(document.querySelector(".oscar span"));

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});

( function() {

  const siteNavigation = document.getElementById( 'site-navigation' );

	// Return early if the navigation doesn't exist.
	if ( ! siteNavigation ) {
		return;
	}

button.addEventListener( 'click', function() {
  siteNavigation.classList.toggle( 'toggled' );
} );

// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
document.addEventListener( 'click', function( event ) {
  const isClickInside = siteNavigation.contains( event.target );

  if ( ! isClickInside ) {
    siteNavigation.classList.remove( 'toggled' );
  }
} );

}() );