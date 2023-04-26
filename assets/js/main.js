const navLinks = document.querySelectorAll('.nav-link');
const columns = document.querySelectorAll('.item');
const page_title = document.querySelector('.main-title h2');

navLinks.forEach(navLink => {
  navLink.addEventListener('click', (e) => {
    e.preventDefault();

    const category = navLink.dataset.category;
    const categoryText = navLink.innerText;

    // hide all columns
    columns.forEach(column => {
      column.classList.add('animate__animated', 'animate__fadeOut');
      setTimeout(() => {
        column.classList.add('d-none');
      }, 400); 
      column.classList.remove('animate__animated', 'animate__fadeIn');
    });

  
    if (category === 'all') {
      setTimeout(() => {
        columns.forEach(column => {
          column.classList.remove('d-none');
          column.classList.remove('animate__fadeOut');
          column.classList.add('animate__animated', 'animate__fadeIn');
          page_title.innerHTML="All Posts"
        });
      }, 400); 
    } else {
      setTimeout(() => {
        page_title.innerHTML= categoryText.toLowerCase(); 
        const categoryColumns = document.querySelectorAll(`.item[data-category="${category}"]`);
        categoryColumns.forEach(column => {
          column.classList.remove('d-none');
          column.classList.remove('animate__fadeOut');
          column.classList.add('animate__animated', 'animate__fadeIn');
        });
      }, 400);
    }
  });
});




// nav Js

$(document).ready(function() {
  // Mobile menu toggle button
  $(".toggle-btn").on("click", function() {
    $("#breadcrumb-menu").toggleClass("active");
    $(".nav-container").toggleClass("active");
  });

  // Navigation links click event
  $(".nav-link").on("click", function(e) {
    e.preventDefault();

    // Get the category data attribute
    var category = $(this).data("category");

    // Show/hide the posts with the selected category
    $(".post-column").each(function() {
      var $this = $(this);
      if ($this.data("category") === category || category === "all") {
        $this.show();
      } else {
        $this.hide();
      }
    });

    // Reset the breadcrumb menu
    $("#breadcrumb-menu").removeClass("active");
    $(".toggle-btn").css("transform", "");
  });
});
