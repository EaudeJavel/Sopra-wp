// Init fullpage js

let footerShown = false;

new fullpage("#fullpage", {
  anchors: ["firstPage", "secondPage", "footer"],
  navigation: true,
  slidesNavigation: true,
  slidesNavPosition: "bottom",
});
