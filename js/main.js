// 
function i() {
  let custom = document.getElementById("custom3");
  let selectCustom = custom.options[custom.selectedIndex].value;
  let isCustom = selectCustom == "other"
  let show = document.getElementById("show");
  show.style.display = isCustom ? 'inherit' : 'none';
};


const achievementsBtn = document.querySelectorAll('.achievements-btn');
for (let i = 0; i < achievementsBtn.length; i++) {
  achievementsBtn[i].addEventListener('click', function () {
    this.innerHTML =
      (this.innerHTML === 'Read more') ? this.innerHTML = 'Roll up' : this.innerHTML = 'Read more';
  })
}
