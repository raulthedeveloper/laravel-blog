jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});




$("#submit_category").submit(function (event) {
    event.preventDefault();

    event.currentTarget.onsubmit()
})

$("#submit_portfolio_category").submit(function (event) {
  event.preventDefault();

  event.currentTarget.onsubmit()
})

$("#submit_post").submit(function (event) {
    event.preventDefault();

    event.currentTarget.onsubmit()
})



// Deletes posts in admin page
function deletePost(url)
{
  console.log(url)
  var r = confirm("Are you sure you want to delete this posts");
  if (r == true) {
    window.location.href = url
  } 

}



$('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});

// Carousel for portfolio single page
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    loop:true,
    dots:true,
    nav:true,
    margin:15,
    padding:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            padding:10

        },
        600:{
            items:3,
        },
        1000:{
            items:5,
            loop:false
        }
    }
})
  });
