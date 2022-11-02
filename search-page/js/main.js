var textPresetVal = new Choices("#choices-text-preset-values", {
  removeItemButton: true,
  renderItem: true,
});

/*document.getElementById("searchForm").addEventListener("submit", (e) => {
  e.preventDefault();
  let data = new FormData(document.getElementById("searchForm"));
  for (var [key, value] of data) {
    console.log(key, value)
}
});*/

/*Dropdown Menu*/
$(".dropdown").click(function () {
  $(this).attr("tabindex", 1).focus();
  $(this).toggleClass("active");
  $(this).find(".dropdown-menu").slideToggle(300);
});
$(".dropdown").focusout(function () {
  $(this).removeClass("active");
  $(this).find(".dropdown-menu").slideUp(300);
});
$(".dropdown .dropdown-menu li").click(function () {
  $(this).parents(".dropdown").find("span").text($(this).text());
  $(this).parents(".dropdown").find("input").attr("value", $(this).attr("id"));
});
/*End Dropdown Menu*/

$(".dropdown-menu li").click(function () {
  var input =
      "<strong>" +
      $(this).parents(".dropdown").find("input").val() +
      "</strong>",
    msg = '<span class="msg">Search option: ';
  $(".msg").html(msg + input + "</span>");
});

