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

$("#submit_post").submit(function (event) {
    event.preventDefault();

    event.currentTarget.onsubmit()
})

console.log('scripts are working')


// Deletes posts in admin page
function deletePost(url)
{
  console.log(url)
  var r = confirm("Are you sure you want to delete this posts");
  if (r == true) {
    window.location.href = url
  } 

}