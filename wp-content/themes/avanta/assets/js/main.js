<script>
	document.addEventListener("DOMContentLoaded", function () {
	  new Swiper(".testSwiper", {
	    loop: true,
	    spaceBetween: 30,

	    slidesPerView: 1,
	    breakpoints: {
	      768: {
	        slidesPerView: 2
	      },
	      1024: {
	        slidesPerView: 3
	      }
	    },

	    navigation: {
	      nextEl: ".swiper-button-next",
	      prevEl: ".swiper-button-prev",
	    },

	    autoplay: {
	      delay: 4000,
	      disableOnInteraction: false,
	    },
	  });
	});

		
	Fancybox.bind("[data-fancybox='gallery']", {
	    Thumbs: false,
	    Toolbar: {
	      display: [
	        "close"
	      ]
	    }
	});
	
	document.addEventListener("DOMContentLoaded", function () {

	    const items = document.querySelectorAll(".dynamic-item");
	    const dynamicText = document.getElementById("dynamicText");
	    const wrapper = document.getElementById("announcementWrapper");

	    let index = 0;
	    let interval;
	    let isPaused = false;

	    function showText(i) {
	        if (items.length === 0) return;

	        dynamicText.classList.remove("show");

	        setTimeout(() => {
	            // Copy full HTML (icon + text)
	            dynamicText.innerHTML = items[i].innerHTML;
	            dynamicText.classList.add("show");
	        }, 400);
	    }

	    function startRotation() {
	        interval = setInterval(() => {
	            if (!isPaused) {
	                index = (index + 1) % items.length;
	                showText(index);
	            }
	        }, 3000);
	    }

	    // Initial load
	    if (items.length > 0) {
	        showText(0);
	        startRotation();
	    }

	    if (wrapper) {
		  wrapper.addEventListener("mouseenter", () => isPaused = true);
		  wrapper.addEventListener("mouseleave", () => isPaused = false);
		}
	});
		
	// Navbar scroll — hide top bar on scroll, move nav to top
	const nav = document.getElementById('navbar');
	const topBar = document.getElementById('topBar');
	window.addEventListener('scroll', () => {
	  const scrolled = window.scrollY > 80;
	  nav.classList.toggle('scrolled', scrolled);
	  if (topBar) topBar.style.transform = scrolled ? 'translateY(-100%)' : 'translateY(0)';
	  if (topBar) topBar.style.transition = 'transform 0.4s ease';
	});

	// Mobile menu
	const toggle = document.getElementById('mobileToggle');
	const links = document.getElementById('navLinks');
	if (toggle && links) {
  		toggle.addEventListener('click', () => links.classList.toggle('open'));
	}
	links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('open')));

	// Live IST Clock
	function updateClock() {
	  const now = new Date();
	  const ist = new Date(now.toLocaleString('en-US', { timeZone: 'Asia/Kolkata' }));
	  const h = String(ist.getHours()).padStart(2, '0');
	  const m = String(ist.getMinutes()).padStart(2, '0');
	  const s = String(ist.getSeconds()).padStart(2, '0');
	  document.getElementById('liveTime').textContent = h + ':' + m + ':' + s;
	}
	updateClock();
	setInterval(updateClock, 1000);

	// Live Weather (Srinagar)
	async function fetchWeather() {
	  try {
	    const res = await fetch(
	      'https://api.weatherapi.com/v1/current.json?key=da62864d7186458599b93034260104&q=Srinagar&aqi=no'
	    );

	    if (!res.ok) throw new Error('API error');

	    const data = await res.json();

	    const temp = Math.round(data.current.temp_c) + '°C';
	    const condition = data.current.condition.text.toLowerCase();

	    const weatherTemp = document.getElementById('weatherTemp');

		if (weatherTemp) {
		  weatherTemp.textContent = temp;
		}

	    let icon = '⛅';

	    if (condition.includes('sunny') || condition.includes('clear')) icon = '☀️';
	    else if (condition.includes('rain')) icon = '🌧️';
	    else if (condition.includes('snow')) icon = '❄️';
	    else if (condition.includes('cloud')) icon = '☁️';
	    else if (condition.includes('mist') || condition.includes('fog')) icon = '🌫️';

	    document.querySelector('.tb-weather-icon').textContent = icon;

	  } catch (e) {
	    console.error(e);
	    document.getElementById('weatherTemp').textContent = 'N/A';
	  }
	}

	fetchWeather();

	/* Booking Bar Sticky */
	window.addEventListener("scroll", function () {
	  const bar = document.querySelector(".booking-bar");
	  const trigger = document.querySelector(".hero").offsetHeight - 120;

	  if (window.scrollY > trigger) {
	    bar.classList.add("is-sticky");
	  } else {
	    bar.classList.remove("is-sticky");
	  }
	});

	// Account dropdown
	function toggleAccountMenu() {
	  const dd = document.getElementById('accountDropdown');
	  dd.classList.toggle('open');
	}
	document.addEventListener('click', function(e) {
	  const acct = document.getElementById('accountToggle');
	  const dd = document.getElementById('accountDropdown');
	  if (acct && !acct.contains(e.target)) dd.classList.remove('open');
	});

	// Scroll reveal
	const observer = new IntersectionObserver((entries) => {
	  entries.forEach((entry, i) => {
	    if (entry.isIntersecting) {
	      setTimeout(() => entry.target.classList.add('visible'), i * 80);
	      observer.unobserve(entry.target);
	    }
	  });
	}, { threshold: 0.1 });
	document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

	// Default dates & validation
	const today = new Date();
	const t1 = new Date(today); t1.setDate(t1.getDate() + 1);
	const t2 = new Date(today); t2.setDate(t2.getDate() + 2);
	const fmt = d => d.toISOString().split('T')[0];
	const ciInput = document.getElementById('bookCheckin');
	const coInput = document.getElementById('bookCheckout');

	if (ciInput && coInput) {
	  ciInput.value = fmt(t1);
	  coInput.value = fmt(t2);
	}
	ciInput.min = fmt(today);
	coInput.min = fmt(t1);
	ciInput.addEventListener('change', function() {
	  const ciDate = new Date(this.value);
	  const nextDay = new Date(ciDate); nextDay.setDate(nextDay.getDate() + 1);
	  coInput.min = fmt(nextDay);
	  if (coInput.value && new Date(coInput.value) <= ciDate) {
	    coInput.value = fmt(nextDay);
	  }
	});
	coInput.addEventListener('change', function() {
	  if (this.value && ciInput.value && new Date(this.value) <= new Date(ciInput.value)) {
	    const nextDay = new Date(ciInput.value); nextDay.setDate(nextDay.getDate() + 1);
	    this.value = fmt(nextDay);
	  }
	});

	// Room select
	function selectRoom(id, price) {
	  const b = {
	    roomId: id, price,
	    checkin: document.getElementById('bookCheckin').value,
	    checkout: document.getElementById('bookCheckout').value,
	    guests: document.getElementById('bookGuests').value,
	    rooms: document.getElementById('bookRooms').value
	  };
	  localStorage.setItem('avantaBooking', JSON.stringify(b));
	  window.location.href = 'rooms.html?select=' + id;
	}
	function goToRooms() {
	  const b = {
	    checkin: document.getElementById('bookCheckin').value,
	    checkout: document.getElementById('bookCheckout').value,
	    guests: document.getElementById('bookGuests').value,
	    rooms: document.getElementById('bookRooms').value
	  };
	  localStorage.setItem('avantaBooking', JSON.stringify(b));
	  window.location.href = 'rooms.html';
	}

	// Reels carousel
	let currentReel = 1;
	const reelData = [0, 1, 2, 3];
	function slideReels(dir) {
	  const phones = document.querySelectorAll('.reel-phone');
	  currentReel += dir;
	  if (currentReel < 1) currentReel = 1;
	  if (currentReel > reelData.length - 2) currentReel = reelData.length - 2;
	  phones.forEach(p => {
	    const idx = parseInt(p.dataset.reel);
	    p.style.display = 'none';
	    p.classList.remove('center', 'side');
	  });
	  // Show 3: current-1, current, current+1
	  const show = [currentReel - 1, currentReel, currentReel + 1];
	  show.forEach(i => {
	    const p = document.querySelector('[data-reel="' + i + '"]');
	    if (p) {
	      p.style.display = 'block';
	      if (i === currentReel) p.classList.add('center');
	      else p.classList.add('side');
	    }
	  });
	}
</script>