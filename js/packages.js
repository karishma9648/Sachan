function toggleDropdown(id){
  document.querySelectorAll('.mmt-dropdown').forEach(el=>{
    if(el.id !== id) el.style.display = 'none';
  });

  let el = document.getElementById(id);
  el.style.display = (el.style.display === 'block') ? 'none' : 'block';
}

function closeDropdown(id){
  document.getElementById(id).style.display = 'none';
}

function selectCity(value, target, dropdown){
  document.getElementById(target).innerText = value;
  closeDropdown(dropdown);
}

let adults = 2;
let children = 0;

function changeCount(type, val){
  if(type === 'adult'){
    adults = Math.max(1, adults + val);
    document.getElementById('adultCount').innerText = String(adults).padStart(2,'0');
  }
  else{
    children = Math.max(0, children + val);
    document.getElementById('childCount').innerText = String(children).padStart(2,'0');
  }
}

function applyGuests(){
  document.getElementById('guestText').innerText =
    adults + " Adults, " + children + " Children";

  document.getElementById('roomDrop').style.display = 'none';
}

function showTab(tab){
  document.querySelectorAll('.mmt-tab-content').forEach(el=>{
    el.classList.remove('active');
  });

  document.querySelectorAll('.mmt-tabs span').forEach(el=>{
    el.classList.remove('active');
  });

  document.getElementById(tab).classList.add('active');

  event.target.classList.add('active');
}

const durationFilters = document.querySelectorAll('.filter-duration');
const themeFilters = document.querySelectorAll('.filter-theme');
const cards = document.querySelectorAll('.mmt-card');

function applyFilters(){
  let selectedDurations = [...durationFilters]
    .filter(c => c.checked)
    .map(c => c.value);

  let selectedThemes = [...themeFilters]
    .filter(c => c.checked)
    .map(c => c.value);

  cards.forEach(card => {

    let duration = card.dataset.duration;
    let theme = card.dataset.theme;

    let durationMatch = selectedDurations.length === 0 || selectedDurations.includes(duration);
    let themeMatch = selectedThemes.length === 0 || selectedThemes.includes(theme);

    if(durationMatch && themeMatch){
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }

  });
}

// EVENT LISTENERS
durationFilters.forEach(cb => cb.addEventListener('change', applyFilters));
themeFilters.forEach(cb => cb.addEventListener('change', applyFilters));


const tabs = document.querySelectorAll('.mmt-tabs span');
const cards = document.querySelectorAll('.mmt-card-item');

tabs.forEach(tab => {
  tab.addEventListener('click', function(){

    // active tab change
    tabs.forEach(t => t.classList.remove('active'));
    this.classList.add('active');

    let selected = this.getAttribute('data-tab');

    cards.forEach(card => {
      let category = card.getAttribute('data-category');

      if(selected === 'all' || category.includes(selected)){
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });

  });
});