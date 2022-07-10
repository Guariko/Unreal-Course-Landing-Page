/* TODO: Functions start */

function toggleClass(elementToUse, classToToggle) {
    elementToUse.classList.toggle(classToToggle);
}

function removeClass(elementToUse, classToRemove) {
    elementToUse.classList.remove(classToRemove);
}

/* TODO: Header starts */

const video = document.querySelector(".video");
const videoClicked = document.querySelector(".video__clicked");
const closeVideo = document.querySelector(".video__clicked .fa-times");
const classToShowElement = "active";

video.addEventListener("click", () => {
    toggleClass(videoClicked, classToShowElement);
});

closeVideo.addEventListener("click", () => {
    removeClass(videoClicked, classToShowElement);
});
