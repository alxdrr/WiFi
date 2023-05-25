function setScrolledNavbar() {
    if (window.location.href.indexOf("homePage") === -1) {//bukan di home page shadow navbar akan langsung aktif
        navbar.classList.add("scrolled");
    } else {
        window.addEventListener("scroll", () => {//di home page shadow navbar aktif ketika discroll
            if (window.scrollY > navbar.offsetHeight) {
                navbar.classList.add("scrolled");
            }
            if (window.scrollY === 0) {
                navbar.classList.remove("scrolled");
            }
        });
    }
}

const navbar = document.querySelector(".nav");
setScrolledNavbar()