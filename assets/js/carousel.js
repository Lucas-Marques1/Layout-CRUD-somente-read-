let form = document.querySelectorAll(".carousel-item");

let form2 = document.querySelectorAll(".carousel-indicators");

function updateActive() {
    let active0 = form[0].className.includes('active') ? 1 : 0;
    active0 == 1 ? form2[0].children[0].children[0].classList.add('active-slide'): form2[0].children[0].children[0].classList.remove("active-slide");

    let active1 = form[1].className.includes('active') ? 1 : 0;
    active1 == 1 ? form2[0].children[0].children[1].classList.add('active-slide'): form2[0].children[0].children[1].classList.remove("active-slide");

    let active2 = form[2].className.includes('active') ? 1 : 0;
    active2 == 1 ? form2[0].children[0].children[2].classList.add('active-slide'): form2[0].children[0].children[2].classList.remove("active-slide");

    let active3 = form[3].className.includes('active') ? 1 : 0;
    active3 == 1 ? form2[0].children[0].children[3].classList.add('active-slide'): form2[0].children[0].children[3].classList.remove("active-slide");
}
setInterval(function() { updateActive() }, 1);