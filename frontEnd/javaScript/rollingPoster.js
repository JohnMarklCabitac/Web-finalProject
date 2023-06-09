// Get the required elements
const slidesContainer = document.querySelector('.slides');
const dotTracker = document.querySelector('.dot-tracker');

// Add the dot tracker
for (let i = 0; i < slidesContainer.children.length; i++) {
  const dot = document.createElement('span');
  dot.addEventListener('click', () => {
    setActiveDot(i);
    goToSlide(i);
  });
  dotTracker.appendChild(dot);
}

// Set the initial active dot and position
let activeDotIndex = 0;
setActiveDot(activeDotIndex);

// Function to set the active dot
function setActiveDot(index) {
  const dots = dotTracker.querySelectorAll('span');
  dots.forEach((dot, i) => {
    dot.classList.toggle('active', i === index);
  });

  activeDotIndex = index;
}

// Function to go to a specific slide
function goToSlide(index) {
  slidesContainer.style.transform = `translateX(-${index * 100}%)`;
}

// Interval to automatically move the slideshow
let interval;

function startInterval() {
  interval = setInterval(() => {
    activeDotIndex++;
    if (activeDotIndex === slidesContainer.children.length) {
      activeDotIndex = 0;
    }
    setActiveDot(activeDotIndex);
    goToSlide(activeDotIndex);
  }, 3000);
}

function stopInterval() {
  clearInterval(interval);
}

// Start the interval
startInterval();

// Pause the interval on hover
slidesContainer.addEventListener('mouseover', stopInterval);

// Resume the interval on mouseout
slidesContainer.addEventListener('mouseout', startInterval);
