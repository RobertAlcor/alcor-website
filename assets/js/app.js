document.addEventListener("DOMContentLoaded", function () {
  // Initial cookie consent check
  checkCookieConsent();

  // Initialize event listeners
  initEventListeners();

  // Lazy loading images
  initLazyLoading();

  // Update opening hours
  updateOpeningHours();

  // Scroll event for shrinking navigation
  handleScroll();

  // Fetch and display reviews
  fetchReviews();

  // Update year dynamically
  updateYear();

  // Initialize animations
  initializeWarumAlcorAnimations();
  initializeMarquee();

  // Cache management for new visit
  manageCacheForNewVisit();

  // Initialize FAQ and feature headers
  initFAQ();
  initFeatureHeaders();
});

function $(selector) {
  return document.querySelector(selector);
}

function $$(selector) {
  return document.querySelectorAll(selector);
}

// Check cookie consent and display the banner if not accepted
function checkCookieConsent() {
  if (localStorage.getItem('cookiesAccepted') === 'true') {
    initializeCookies();
  } else {
    showCookieBanner();
  }
}

function initEventListeners() {
  const eventMap = [
    { selector: '#acceptCookies', event: 'click', handler: acceptCookies },
    { selector: '#settingsCookies', event: 'click', handler: openCookieSettings },
    { selector: '#saveCookieSettings', event: 'click', handler: saveCookieSettings }
  ];

  eventMap.forEach(({ selector, event, handler }) => {
    const element = $(selector);
    if (element) element.addEventListener(event, handler);
  });
}

function initLazyLoading() {
  $$('img').forEach(img => img.setAttribute('loading', 'lazy'));
}

function updateOpeningHours() {
  const now = new Date();
  const open = now.getDay() >= 1 && now.getDay() <= 5 && now.getHours() >= 9 && now.getHours() < 18;

  const openingHoursElement = $('#opening-hours');
  if (openingHoursElement) {
    openingHoursElement.textContent = open ? 'Open' : 'Closed';
    openingHoursElement.classList.toggle('bg-success', open);
    openingHoursElement.classList.toggle('bg-danger', !open);
  }
}

function handleScroll() {
  const navbar = $('.navbar');
  if (navbar) {
    window.addEventListener('scroll', () => {
      window.requestAnimationFrame(() => {
        const scrolled = window.scrollY > 50;
        navbar.classList.toggle('shrink', scrolled);
        navbar.classList.toggle('transparent', !scrolled);
      });
    });
  }
}

async function fetchReviews() {
  try {
    const response = await fetch('assets/json/filtered_reviews.json');
    const reviews = await response.json();
    displayReviews(reviews);
  } catch (error) {
    console.error('Error loading reviews:', error);
  }
}

function displayReviews(reviews) {
  const reviewCustomers = $('.review-customers');
  const reviewContent = $('.review-customers-content');
  const averageScoreElement = $('#average-score');
  const averageStarsElement = $('#average-stars');

  if (!reviewCustomers || !reviewContent || !averageScoreElement || !averageStarsElement) return;

  const fragment = document.createDocumentFragment();
  let totalScore = 0;

  reviews.forEach((review, index) => {
    const imgElement = createReviewImage(review, index);
    fragment.appendChild(imgElement);
    totalScore += review.rating;
  });

  reviewCustomers.appendChild(fragment);

  const averageScore = (totalScore / reviews.length).toFixed(1);
  averageScoreElement.textContent = averageScore;
  averageStarsElement.innerHTML = getStars(averageScore);

  let currentIndex = 0;
  showReview(reviews, currentIndex, reviewContent);

  setInterval(() => {
    currentIndex = (currentIndex + 1) % reviews.length;
    showReview(reviews, currentIndex, reviewContent);
  }, 5000);

  reviewCustomers.addEventListener('click', event => {
    if (event.target.classList.contains('review-img')) {
      currentIndex = parseInt(event.target.dataset.index);
      showReview(reviews, currentIndex, reviewContent);
    }
  });
}

function createReviewImage(review, index) {
  const imgElement = document.createElement('img');
  imgElement.src = review.image;
  imgElement.alt = review.name;
  imgElement.classList.add('review-img', 'rounded-circle');
  imgElement.dataset.index = index;
  return imgElement;
}

function showReview(reviews, index, reviewContent) {
  const review = reviews[index];
  if (reviewContent) {
    reviewContent.innerHTML = `
      <div class="review-item review-active">
        <h5 class="review-name">${review.name}</h5>
        <div class="review-rating text-warning mb-2">${getStars(review.rating)}</div>
        <p class="review-content">${review.content}</p>
      </div>`;
  }

  const reviewItem = $('.review-item');
  if (reviewItem) {
    reviewItem.style.opacity = '0';
    reviewItem.style.transform = 'translateX(-50px)';
    requestAnimationFrame(() => {
      reviewItem.style.transition = 'opacity 1s, transform 1s';
      reviewItem.style.opacity = '1';
      reviewItem.style.transform = 'translateX(0)';
    });
  }

  $$('.review-img').forEach(img => img.classList.remove('active'));
  const activeImg = $(`.review-img[data-index="${index}"]`);
  if (activeImg) activeImg.classList.add('active');
}

function getStars(rating) {
  const fullStar = '<i class="bi bi-star-fill"></i>';
  const halfStar = '<i class="bi bi-star-half"></i>';
  const emptyStar = '<i class="bi bi-star"></i>';

  const fullStars = Math.floor(rating);
  const halfStars = (rating - fullStars >= 0.5) ? 1 : 0;
  const emptyStars = 5 - fullStars - halfStars;

  return fullStar.repeat(fullStars) + halfStar.repeat(halfStars) + emptyStar.repeat(emptyStars);
}

function updateYear() {
  const currentYearElement = $('#currentYear');
  if (currentYearElement) currentYearElement.textContent = new Date().getFullYear();
}

function initializeWarumAlcorAnimations() {
  $$('#warum-alcor .col-md-3').forEach(element => {
    element.style.cursor = 'pointer';
    element.addEventListener('mouseenter', () => animateCard(element, true));
    element.addEventListener('mouseleave', () => animateCard(element, false));
  });
}

function animateCard(element, isEntering) {
  const card = element.querySelector('.card-custom');
  const h2 = element.querySelector('h2');
  const p = element.querySelector('p');
  card.style.transition = 'transform 0.3s';
  card.style.transform = isEntering ? 'scale(1.1)' : 'scale(1)';
  h2.style.transition = 'color 0.3s';
  h2.style.color = isEntering ? 'var(--accent)' : 'var(--black)';
  p.style.transition = 'color 0.3s';
  p.style.color = isEntering ? 'var(--black)' : 'var(--dark)';
}

function initializeMarquee() {
  const marqueeContainer = $('.marquee-container');
  const marqueeContent = $('.marquee-content');

  if (marqueeContainer && marqueeContent) {
    for (let i = 0; i < 2; i++) {
      marqueeContainer.appendChild(marqueeContent.cloneNode(true));
    }

    const marqueeItems = $$('.marquee-content');
    let offset = 0;

    const animateMarquee = () => {
      offset -= 1;
      if (offset <= -marqueeContent.offsetWidth) offset = 0;
      marqueeItems.forEach(item => {
        item.style.transform = `translateX(${offset}px)`;
      });
      requestAnimationFrame(animateMarquee);
    };

    animateMarquee();
  }
}

function initFeatureHeaders() {
  $$('.feature-header').forEach(header => {
    header.addEventListener('click', () => {
      const target = $(header.getAttribute('data-target'));
      const isOpen = target.classList.contains('show');
      $$('.feature-content.show').forEach(content => content.classList.remove('show'));
      if (!isOpen) target.classList.add('show');
    });
  });
}

function initFAQ() {
  const faqCategories = $$('.faq-categories li');
  const faqCategoryContents = $$('.faq-category');
  faqCategories.forEach(category => {
    category.addEventListener('click', () => {
      faqCategories.forEach(cat => cat.classList.remove('active'));
      category.classList.add('active');
      const selectedCategory = category.getAttribute('data-category');
      faqCategoryContents.forEach(content => {
        content.style.display = content.getAttribute('data-category') === selectedCategory ? 'block' : 'none';
      });
    });
  });

  const faqs = $$('.faq');
  faqs.forEach(faq => {
    faq.addEventListener('click', () => {
      faq.classList.toggle('active');
      const content = faq.querySelector('.faq-content');
      const icon = faq.querySelector('.icon');
      if (faq.classList.contains('active')) {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.innerHTML = '&#9650;';
      } else {
        content.style.maxHeight = '0';
        icon.innerHTML = '&#9660;';
      }
    });
  });
}

function manageCacheForNewVisit() {
  if (!sessionStorage.getItem('visited')) {
    if ('caches' in window) {
      caches.keys().then(cacheNames => {
        Promise.all(cacheNames.map(cacheName => caches.delete(cacheName)))
          .then(() => {
            sessionStorage.setItem('visited', 'true');
            window.location.reload(true);
          });
      });
    } else {
      sessionStorage.setItem('visited', 'true');
      window.location.reload(true);
    }
  }
}

function showCookieBanner() {
  const cookieBanner = $('#cookieBanner');
  if (cookieBanner) {
    cookieBanner.classList.remove('d-none');
    cookieBanner.style.display = 'block';
  }
}

function hideCookieBanner() {
  const cookieBanner = $('#cookieBanner');
  if (cookieBanner) {
    cookieBanner.classList.add('d-none');
    cookieBanner.style.display = 'none';
  }
}

function acceptCookies() {
  localStorage.setItem('cookiesAccepted', 'true');
  localStorage.setItem('analyticsCookies', 'true');
  localStorage.setItem('marketingCookies', 'true');
  hideCookieBanner();
  initializeCookies();
}

function openCookieSettings() {
  const cookieSettingsModal = new bootstrap.Modal($('#cookieSettingsModal'));
  cookieSettingsModal.show();
}

function saveCookieSettings() {
  const analyticsCookies = $('#analyticsCookies').checked;
  const marketingCookies = $('#marketingCookies').checked;
  localStorage.setItem('analyticsCookies', analyticsCookies.toString());
  localStorage.setItem('marketingCookies', marketingCookies.toString());
  localStorage.setItem('cookiesAccepted', 'true');
  hideCookieBanner();
  initializeCookies();
}

function initializeCookies() {
  const analyticsCookies = localStorage.getItem('analyticsCookies') === 'true';
  const marketingCookies = localStorage.getItem('marketingCookies') === 'true';

  if (analyticsCookies) {
    console.log('Analytics cookies accepted, initializing Google Analytics...');
    const gtagScript = document.createElement('script');
    gtagScript.src = 'https://www.googletagmanager.com/gtag/js?id=G-JHZX0FXSC0';
    gtagScript.async = true;
    document.head.appendChild(gtagScript);

    gtagScript.onload = function () {
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());
      gtag('config', 'G-JHZX0FXSC0', {
        'anonymize_ip': true,
        'cookie_flags': 'SameSite=None;Secure'
      });
      console.log('Google Analytics initialized.');
    };

    gtagScript.onerror = function () {
      console.error('Failed to load Google Analytics script.');
    };
  } else {
    console.log('No consent given for analytics cookies.');
  }

  if (marketingCookies) {
    console.log('Marketing cookies accepted.');
  }
}
