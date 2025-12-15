// Variables to track scroll behavior
let lastScrollTop = 0;
let scrollTimeout;
let isNavbarHidden = false;
let isLogoSmall = false;
const navbar = document.getElementById("navbar");
const logo = document.getElementById("logo");

// Handle scroll event
window.addEventListener("scroll", function () {
  const currentScroll =
    window.pageYOffset || document.documentElement.scrollTop;

  // ⚠️ CHANGE: Only clear timeout if navbar is not hidden yet
  if (scrollTimeout && !isNavbarHidden) {
    clearTimeout(scrollTimeout);
  }

  // If scrolling down
  if (currentScroll > lastScrollTop && currentScroll > 100) {
    if (!isNavbarHidden) {
      navbar.classList.add("navbar-hidden");
      isNavbarHidden = true;

      // ⚠️ CHANGE: Start timeout immediately when navbar hides
      scrollTimeout = setTimeout(function () {
        navbar.classList.remove("navbar-hidden");
        isNavbarHidden = false;

        // Shrink logo when navbar reappears
        if (!isLogoSmall) {
          logo.classList.remove("w-16", "lg:w-32");
          logo.classList.add("w-12");
          isLogoSmall = true;
        }
      }, 500); // ⚠️ CHANGE: Changed from 1000 to 500 milliseconds
    }
  }
  // If scrolling up or at top
  else if (currentScroll < lastScrollTop || currentScroll <= 100) {
    navbar.classList.remove("navbar-hidden");
    isNavbarHidden = false;

    // ⚠️ CHANGE: Clear timeout when scrolling up
    if (scrollTimeout) {
      clearTimeout(scrollTimeout);
      scrollTimeout = null;
    }

    // Restore original logo size when at top
    if (currentScroll <= 100 && isLogoSmall) {
      logo.classList.remove("w-12");
      logo.classList.add("w-16", "lg:w-32");
      isLogoSmall = false;
    }
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
});

function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("sidebarOverlay");

  if (sidebar.classList.contains("-translate-x-full")) {
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
    document.body.style.overflow = "hidden";
  } else {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
    document.body.style.overflow = "";
  }
}

function switchTab(tab) {
  const menuTab = document.getElementById("menuTab");
  const categoriesTab = document.getElementById("categoriesTab");
  const menuContent = document.getElementById("menuContent");
  const categoriesContent = document.getElementById("categoriesContent");

  if (tab === "menu") {
    menuTab.classList.add(
      "text-black",
      "border-primary",
      "bg-[#E9E9E9]",
      "border-b-2"
    );
    menuTab.classList.remove("text-gray-400", "bg-[#F5F5F5]");
    categoriesTab.classList.add("text-gray-400", "bg-[#F5F5F5]");
    categoriesTab.classList.remove(
      "text-black",
      "border-primary",
      "bg-[#E9E9E9]",
      "border-b-2"
    );

    menuContent.classList.remove("hidden");
    categoriesContent.classList.add("hidden");
  } else {
    categoriesTab.classList.add(
      "text-black",
      "border-primary",
      "bg-[#E9E9E9]",
      "border-b-2"
    );
    categoriesTab.classList.remove("text-gray-400", "bg-[#F5F5F5]");
    menuTab.classList.add("text-gray-400", "bg-[#F5F5F5]");
    menuTab.classList.remove(
      "text-black",
      "border-primary",
      "bg-[#E9E9E9]",
      "border-b-2"
    );

    categoriesContent.classList.remove("hidden");
    menuContent.classList.add("hidden");
  }
}

function toggleCategory(categoryId) {
  const category = document.getElementById(categoryId);
  const icon = document.getElementById(categoryId + "-icon");

  if (category.classList.contains("hidden")) {
    category.classList.remove("hidden");
    icon.classList.add("rotate-90");
  } else {
    category.classList.add("hidden");
    icon.classList.remove("rotate-90");
  }
}

// Close sidebar on escape key
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    const sidebar = document.getElementById("sidebar");
    if (!sidebar.classList.contains("-translate-x-full")) {
      toggleSidebar();
    }
  }
});

// ========== ⭐ NEW: CART SIDEBAR FUNCTIONS ==========

// Toggle cart sidebar
function toggleCart() {
  const cartSidebar = document.getElementById("cartSidebar");
  const cartOverlay = document.getElementById("cartOverlay");
  const body = document.body;

  cartSidebar.classList.toggle("open");

  if (cartSidebar.classList.contains("open")) {
    cartOverlay.classList.remove("hidden");
    cartOverlay.classList.add("show");
    body.classList.add("cart-open");
  } else {
    cartOverlay.classList.remove("show");
    setTimeout(() => {
      cartOverlay.classList.add("hidden");
    }, 300);
    body.classList.remove("cart-open");
  }
}

// Close cart when window is resized (optional)
window.addEventListener("resize", function () {
  const cartSidebar = document.getElementById("cartSidebar");
  const cartOverlay = document.getElementById("cartOverlay");
  const body = document.body;

  // Optional: Close cart on resize
  // Uncomment if you want this behavior
  /*
  if (cartSidebar.classList.contains('open')) {
    cartSidebar.classList.remove('open');
    cartOverlay.classList.remove('show');
    cartOverlay.classList.add('hidden');
    body.classList.remove('cart-open');
  }
  */
});

// Hero banner slider with auto-fade
$(document).ready(function () {
  $(".banner-slider").slick({
    dots: true,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: true, // No buttons as requested
    fade: false, // Auto-fade effect
    cssEase: "ease-in-out",
    pauseOnHover: false,
    pauseOnFocus: false,
    draggable: true,
    swipe: true,
    touchMove: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          dots: true,
          fade: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          fade: false,
        },
      },
    ],
  });
});
// Vegetables products slider with Auto-loop
$(document).ready(function () {
  $(".vegetablesSlider").slick({
    dots: true,
    infinite: true,
    speed: 800,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3500,
    arrows: true, // Show arrows on desktop
    fade: false,
    cssEase: "ease-in-out",
    pauseOnHover: true,
    pauseOnFocus: true,
    draggable: true, // Enable mouse dragging
    swipe: true, // Enable touch swipe
    touchMove: true, // Enable touch movement (was false - this was blocking swipe!)
    swipeToSlide: true, // Swipe to any slide
    touchThreshold: 10, // Sensitivity for swipe
    responsive: [
      {
        breakpoint: 1280, // XL screens
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 1024, // Large screens
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 768, // Tablet
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
        },
      },
      {
        breakpoint: 480, // Mobile
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,
          centerMode: true, // Center the card on mobile
          centerPadding: "20px", // Show slight preview of next card
        },
      },
    ],
  });
});

// Quick modal open when click the search button in products card
function openQuickView() {
  const overlay = document.getElementById("modalOverlay");
  const spinner = document.getElementById("loadingSpinner");
  const content = document.getElementById("modalContent");

  // Show overlay and spinner
  overlay.classList.remove("hidden");
  overlay.classList.add("flex");
  spinner.classList.remove("hidden");
  content.classList.add("hidden");

  // Prevent body scroll
  document.body.style.overflow = "hidden";

  // Simulate loading (replace with actual data fetching)
  setTimeout(() => {
    spinner.classList.add("hidden");
    content.classList.remove("hidden");
  }, 800);
}

function closeQuickView(event) {
  // Only close if clicking overlay, not the modal content
  if (event && event.target.id !== "modalOverlay") return;

  const overlay = document.getElementById("modalOverlay");
  const spinner = document.getElementById("loadingSpinner");
  const content = document.getElementById("modalContent");

  overlay.classList.add("hidden");
  overlay.classList.remove("flex");
  content.classList.add("hidden");
  spinner.classList.remove("hidden");

  // Restore body scroll
  document.body.style.overflow = "";
}

function incrementModalQuantity() {
  const input = document.getElementById("modalQuantity");
  let value = parseInt(input.value);
  input.value = value + 1;
}

function decrementModalQuantity() {
  const input = document.getElementById("modalQuantity");
  let value = parseInt(input.value);
  if (value > 1) {
    input.value = value - 1;
  }
}

// Close modal on ESC key
document.addEventListener("keydown", function (e) {
  if (e.key === "Escape") {
    closeQuickView();
  }
});
