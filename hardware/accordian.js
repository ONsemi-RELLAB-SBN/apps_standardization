/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

$(".accordion-item .heading").on("click", function (e) {
    e.preventDefault();

    // Add the correct active class
    if ($(this).closest(".accordion-item").hasClass("active")) {
        // Remove active classes
        $(".accordion-item").removeClass("active");
    } else {
        // Remove active classes
        $(".accordion-item").removeClass("active");

        // Add the active class
        $(this).closest(".accordion-item").addClass("active");
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $(".accordion-item .content").not($content).slideUp("fast");
});
