// Init fullpage js

let footerShown = false;

new fullpage("#fullpage", {
  anchors: ["firstPage", "secondPage", "footer"],
  sectionsColor: ["yellow", "blue", "green"],
  navigation: true,
  slidesNavigation: true,
  slidesNavPosition: "bottom",
});
