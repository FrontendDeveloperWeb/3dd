

// Get Quote Form validation

(function () {
  "use strict";
  var forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false,
    );
  });
})();

$(document).ready(function () {
  $(".navdesktop").hover(
    function () {
      $(this).addClass("show");
      $(this).find(".dropdown-navdesktop").first().addClass("show");
    },
    function () {
      $(this).removeClass("show");
      $(this).find(".dropdown-navdesktop").first().removeClass("show");
    },
  );
});

// Sticky header

window.addEventListener("scroll", function () {
  var header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY > 0);
});

// ==================================
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter-value");
  const speed = 200; // Lower number = faster animation, Higher number = slower animation

  const startCounter = (counter) => {
    const target = +counter.getAttribute("data-target");
    let count = 0;

    // Calculate increment based on target size to ensure they finish roughly together
    const increment = target / speed;

    const updateCount = () => {
      count += increment;

      if (count < target) {
        counter.innerText = Math.ceil(count);
        setTimeout(updateCount, 1);
      } else {
        counter.innerText = target; // Ensure it lands exactly on the target number
      }
    };

    updateCount();
  };

  // Setup Intersection Observer to trigger when the counter section is visible
  const observerOptions = {
    root: null, // viewport
    threshold: 0.2 // Triggers when 20% of the element is visible
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        startCounter(counter);
        observer.unobserve(counter); // Stop observing once animated
      }
    });
  }, observerOptions);

  // Attach observer to each counter element
  counters.forEach(counter => observer.observe(counter));
});

document.addEventListener("DOMContentLoaded", () => {
  const sliderContainer = document.querySelector(
    ".comparison-slider-container",
  );

  if (!sliderContainer) return;

  const afterImageLayer = sliderContainer.querySelector(".image-after");
  const dragHandle = sliderContainer.querySelector(".slider-handle");
  let isDragging = false;

  const moveSlider = (clientX) => {
    const containerRect = sliderContainer.getBoundingClientRect();
    const containerWidth = containerRect.width;
    const containerLeft = containerRect.left;

    // Calculate positioning relative to slider bounding box area
    let pointerOffset = clientX - containerLeft;

    // Apply strict clamp limits to slider boundary edges
    if (pointerOffset < 0) pointerOffset = 0;
    if (pointerOffset > containerWidth) pointerOffset = containerWidth;

    // Convert tracking pixels values safely to clean percentage scales
    const percentage = (pointerOffset / containerWidth) * 100;

    // Update the handle position
    dragHandle.style.left = `${percentage}%`;

    // Dynamically slice the view from the left side down using standard inset clip properties
    // inset(top right bottom left) -> we slice away everything up to the handle position from the left side
    afterImageLayer.style.clipPath = `inset(0 0 0 ${percentage}%)`;
  };

  // --- Interaction Mapping Target Listeners ---

  // Desktop Core Click Actions
  dragHandle.addEventListener("mousedown", () => {
    isDragging = true;
  });
  window.addEventListener("mouseup", () => {
    isDragging = false;
  });

  window.addEventListener("mousemove", (e) => {
    if (!isDragging) return;
    moveSlider(e.clientX);
  });

  // Mobile Responsive Touch Actions
  dragHandle.addEventListener(
    "touchstart",
    () => {
      isDragging = true;
    },
    { passive: true },
  );
  window.addEventListener("touchend", () => {
    isDragging = false;
  });

  window.addEventListener(
    "touchmove",
    (e) => {
      if (!isDragging) return;
      if (e.touches.length > 0) {
        moveSlider(e.touches[0].clientX);
      }
    },
    { passive: true },
  );
});

const initializedSwipers = {};

function initCategorySwiper(blockId) {
  if (initializedSwipers[blockId]) return;

  const targetBlock = document.getElementById(blockId);
  const swiperContainer = targetBlock.querySelector('.portfolioSwiper');
  const nextBtn = targetBlock.querySelector('.swiper-button-next');
  const prevBtn = targetBlock.querySelector('.swiper-button-prev');
  const paginationEl = targetBlock.querySelector('.swiper-pagination');

  initializedSwipers[blockId] = new Swiper(swiperContainer, {
    loop: true,
    speed: 800,
    grabCursor: true,
    navigation: {
      nextEl: nextBtn,
      prevEl: prevBtn,
    },
    pagination: {
      el: paginationEl,
      clickable: true,
    },
  });
}

// 1. Initial State Load setup
document.addEventListener('DOMContentLoaded', () => {
  const baseActiveBlock = document.getElementById('living-rooms');
  initCategorySwiper('living-rooms');

  // Smoothly apply the entry transform trigger on page load
  setTimeout(() => {
    baseActiveBlock.classList.add('active-slide-in');
  }, 50);
});

// 2. Multi-Swiper Animation Tab Controller
document.querySelectorAll('.portfolio-tab-btn').forEach(button => {
  button.addEventListener('click', function () {
    const targetTabId = this.getAttribute('data-tab');
    const currentActiveBlock = document.querySelector('.portfolio-slider-block.active');
    const nextActiveBlock = document.getElementById(targetTabId);

    if (currentActiveBlock.id === targetTabId) return; // Prevent clicking active tab

    // Toggle Active States on Filter Navigation Row
    document.querySelector('.portfolio-tab-btn.active').classList.remove('active');
    this.classList.add('active');

    // Step A: Strip animation class and drop opacity out smoothly
    currentActiveBlock.classList.remove('active-slide-in');

    // Step B: Wait for the 150ms fade-out transition to complete before rearranging display states
    setTimeout(() => {
      currentActiveBlock.classList.remove('active');

      // Step C: Make next slider display: block inside DOM thread layout
      nextActiveBlock.classList.add('active');

      // Initialize Swiper context layer rules safely
      initCategorySwiper(targetTabId);

      // Step D: Trigger hardware accelerated translate/lift animation layer up into view
      setTimeout(() => {
        nextActiveBlock.classList.add('active-slide-in');
      }, 50);

    }, 200);

    // Notify scroll monitoring engine
    if (typeof AOS !== 'undefined') {
      AOS.refresh();
    }
  });
});


// =======================================Testi monials Carousel=============================================
document.addEventListener('DOMContentLoaded', () => {
  const testimonialSwiperInstance = new Swiper('.testimonialsSwiper', {
    slidesPerView: 1,       // Forces exactly 1 card to consume focal layout bounds
    centeredSlides: true,   // Locks the primary active slide in the center of the column
    loop: true,
    speed: 850,
    spaceBetween: 40,       // Generates wide negative clean air gap separation space between cards
    grabCursor: true,
    autoplay: {
      delay: 7000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.testimonials-controls-row .btn-next',
      prevEl: '.testimonials-controls-row .btn-prev',
    },
    pagination: {
      el: '.testimonials-controls-row .testimonials-pagination',
      clickable: true,
    }
  });
});


// =======================================footer form=============================================

document.addEventListener('DOMContentLoaded', () => {
    const newsletterForm = document.querySelector('.footer-newsletter-form');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', (e) => {
            const inputField = newsletterForm.querySelector('.newsletter-input');
            
            // Allow all domain extensions cleanly
            if (!newsletterForm.checkValidity() || !inputField.value.trim()) {
                e.preventDefault();
                e.stopPropagation();
                inputField.classList.add('is-invalid');
            } else {
                e.preventDefault();
                inputField.classList.remove('is-invalid');
                alert('Subscribed successfully!');
                newsletterForm.reset();
            }
        });
    }
});