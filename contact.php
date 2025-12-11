<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact — Arianoi</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<header>
    <div class="header-left">
        <img src="../logo.png" alt="PT Sinar Langit Hanoi logo">
        <span class="brand">PT Sinar Langit Hanoi</span>
    </div>

    <button id="hamburgerBtn" class="hamburger" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bar" aria-hidden="true"></span>
        <span class="bar" aria-hidden="true"></span>
        <span class="bar" aria-hidden="true"></span>
    </button>

    <nav class="nav-menu" id="menu" aria-label="Main navigation" aria-hidden="true">
        <a href="index.php">Home</a>
        <a href="service.php">Service</a>
        <a href="contact.php" aria-current="page">Contact</a>

        <div class="lang-switch" role="group" aria-label="Language switch">
            <button class="active" aria-pressed="true" data-lang="en" title="English">EN</button>
            <button aria-pressed="false" data-lang="id" title="Bahasa Indonesia" onclick="location.href='../id/contact.php'">ID</button>
        </div>
    </nav>
</header>

<main>
    <section class="hero small-hero">
        <h1>Contact Information</h1>
        <p class="subtitle">We are ready to assist your business needs.</p>
    </section>

    <section class="contact-container">
        <div class="contact-box">
            <h3>Email</h3>
            <p><a href="mailto:support@arianoi.com">support@arianoi.com</a></p>
        </div>

        <div class="contact-box">
            <h3>WhatsApp</h3>
            <p><a href="https://wa.me/6289518327435" target="_blank" rel="noopener">wa.me/6289518327435</a></p>
        </div>

        <div class="contact-box">
            <h3>Instagram</h3>
            <p><a href="https://instagram.com/arianoi_asia" target="_blank" rel="noopener">@arianoi_asia</a></p>
        </div>

        <div class="contact-box">
            <h3>Address</h3>
            <p>Jl. Nakula, PT Sinar Langit Hanoi<br>
            Tanjunganom, Nganjuk, Jawa Timur, Indonesia 64483</p>
        </div>
    </section>
</main>

<footer>
    2025 PT Sinar Langit Hanoi. All Rights Reserved.
</footer>

<script>
/* Accessible menu toggle: updates aria attributes, closes on ESC/outside click,
   and marks language buttons visually. */
(function () {
  const btn = document.getElementById('hamburgerBtn');
  const menu = document.getElementById('menu');

  function setExpanded(expanded) {
    btn.setAttribute('aria-expanded', String(expanded));
    menu.classList.toggle('show', expanded);
    menu.setAttribute('aria-hidden', String(!expanded));
    btn.classList.toggle('is-open', expanded);
  }

  btn.addEventListener('click', function () {
    setExpanded(!menu.classList.contains('show'));
  });

  // Close on ESC
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && menu.classList.contains('show')) {
      setExpanded(false);
    }
  });

  // Close when clicking outside
  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !btn.contains(e.target) && menu.classList.contains('show')) {
      setExpanded(false);
    }
  });

  // Close when a nav link is clicked
  Array.from(menu.querySelectorAll('a')).forEach(function (link) {
    link.addEventListener('click', function () { setExpanded(false); });
  });

  // Language button client-side active state (visual only)
  const langButtons = menu.querySelectorAll('.lang-switch button');
  langButtons.forEach(function (b) {
    b.addEventListener('click', function () {
      // If button navigates (has onclick), navigation happens; still update visual state pre-navigation.
      langButtons.forEach(x => { x.classList.remove('active'); x.setAttribute('aria-pressed', 'false'); });
      b.classList.add('active');
      b.setAttribute('aria-pressed', 'true');
    });
  });
})();
</script>

</body>
</html>
