$(document).ready(function () {
  $("#nav-icon").click(function () {
    // Toggle the main menu button between bars and cross styling.
    $("#nav-icon").toggleClass("open");
    // Toggle the modal menu
    $(".menu-banner").toggleClass("open");
    // Adjust main page width for menu.
    $(".main").toggleClass("open");
  });

  // Listens for clicks on the modal and checks to see if the event target is the menu element.
  $(".menu-banner").click(function (event) {
    if (!$(event.target).closest(".menu-wrapper").length) {
      // Toggle the main menu button between bars and cross styling.
      $("#nav-icon").toggleClass("open");
      // Toggle the modal menu
      $(".menu-banner").toggleClass("open");
      // Adjust main page width for menu.
      $(".main").toggleClass("open");
    }
  });
});
