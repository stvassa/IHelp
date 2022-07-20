function i() {
  let custom = document.getElementById("custom3");
  let selectCustom = custom.options[custom.selectedIndex].value;
  let isCustom = selectCustom == "other"
  let show = document.getElementById("show");
  show.style.display = isCustom ? 'inherit' : 'none';
}
