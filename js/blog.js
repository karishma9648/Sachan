  
// blog page


const slides = [
  {
    img: "../image/IMG_5735.png",
    title: "OUR RECENT STAY: SOUTH AFRICA",
    desc: "This November, the Explorateur Travel team embarked on an unforgettable FAM trip..."
  },
  {
    img: "../image/IMG_7570.png",
    title: "EXPLORING PARIS",
    desc: "A beautiful journey through Paris..."
  },
  {
    img: "../image/JT-Edgartown-Harbor-Lighthouse-scaled.jpg",
    title: "DISCOVERING BALI",
    desc: "Experience Bali like never before..."
  }
];

let current = 0;

function updateSlide() {
  document.getElementById("travelImg").src = slides[current].img;
  document.getElementById("travelTitle").innerText = slides[current].title;
  document.getElementById("travelDesc").innerText = slides[current].desc;
}

function nextSlide() {
  current = (current + 1) % slides.length;
  updateSlide();
}

function prevSlide() {
  current = (current - 1 + slides.length) % slides.length;
  updateSlide();
}