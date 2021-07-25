//questionComp
$(function () {
    $(".toggler").click(function () {
      $(this).next().toggleClass("collapsed");
      $(this).toggleClass("toggled"); 
    });
  });
//questcomp
