const slider = document.querySelector(".slider");
let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID = 0;

slider.addEventListener("mousedown", (e) => {
  isDragging = true;
  startPos = e.clientX;
  slider.style.transition = "none";
  animationID = requestAnimationFrame(animation);
});

slider.addEventListener("mouseup", () => {
  isDragging = false;
  cancelAnimationFrame(animationID);
  const movedBy = currentTranslate - prevTranslate;

  if (movedBy < -100) {
    nextSlide();
  }

  if (movedBy > 100) {
    prevSlide();
  }

  slider.style.transition = "transform 0.4s ease-in-out";
  setPositionByIndex();
});

slider.addEventListener("mouseleave", () => {
  isDragging = false;
  cancelAnimationFrame(animationID);
  slider.style.transition = "transform 0.4s ease-in-out";
  setPositionByIndex();
});

slider.addEventListener("mousemove", (e) => {
  if (!isDragging) return;
  const currentPosition = e.clientX;
  const diff = currentPosition - startPos;
  currentTranslate = prevTranslate + diff;
});

function animation() {
  setSliderPosition();
  if (isDragging) requestAnimationFrame(animation);
}

function setSliderPosition() {
  slider.style.transform = `translateX(${currentTranslate}px)`;
}

function setPositionByIndex() {
  currentTranslate = -window.innerWidth;
  setSliderPosition();
  prevTranslate = currentTranslate;
}

function nextSlide() {
  currentTranslate -= window.innerWidth;
  setSliderPosition();
  prevTranslate = currentTranslate;
}

function prevSlide() {
  currentTranslate += window.innerWidth;
  setSliderPosition();
  prevTranslate = currentTranslate;
}