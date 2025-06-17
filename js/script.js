const mySwiper = new Swiper('.my-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay: true,

    // Custom Swiper animation
    on: {
        init: function () {
            const slides = this.slides;
            slides.forEach(slide => {
                slide.style.transform = 'scale(0.8)';
                slide.style.transition = 'transform 0.5s';
            });
            slides[this.activeIndex].style.transform = 'scale(1)';
        },
        slideChange: function () {
            const slides = this.slides;
            slides.forEach(slide => {
                slide.style.transform = 'scale(0.8)';
            });
            slides[this.activeIndex].style.transform = 'scale(1)';
        }
    }
});
// index stats 5 odometer counters
// Updated JavaScript to use data-count attributes
document.addEventListener('DOMContentLoaded', function() {
  // Initialize odometers first
  const counters = document.querySelectorAll('.odometer');
  counters.forEach(counter => {
    new Odometer({
      el: counter,
      value: 0,
      format: '(,ddd)',
      duration: 2000
    });
  });

  // Animate when section comes into view
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        counters.forEach(counter => {
          const target = parseInt(counter.getAttribute('data-count'));
          counter.innerHTML = target;
        });
      }
    });
  }, {threshold: 0.5});

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) {
    observer.observe(statsSection);
  }
});