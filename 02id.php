<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Arianoi — PT Sinar Langit Hanoi (ID)</title>
  <link rel="stylesheet" href="../02style.css">
</head>
<body>

<header>
  <div class="header-left">
    <img src="../logo.png" alt="Logo PT Sinar Langit Hanoi">
    <span class="brand">PT Sinar Langit Hanoi</span>
  </div>

  <button id="hamburgerBtn" class="hamburger" aria-controls="menu" aria-expanded="false" aria-label="Buka atau tutup navigasi">
    <span class="bar" aria-hidden="true"></span>
    <span class="bar" aria-hidden="true"></span>
    <span class="bar" aria-hidden="true"></span>
  </button>

  <nav class="nav-menu" id="menu" aria-label="Navigasi utama" aria-hidden="true">
    <a href="index.html">Beranda</a>
    <a href="service.html">Layanan</a>
    <a href="contact.html">Kontak</a>

    <div class="lang-switch" role="group" aria-label="Ganti bahasa">
      <button aria-pressed="false" data-lang="en" title="English" onclick="location.href='../en/index.html'">EN</button>
      <button class="active" aria-pressed="true" data-lang="id" title="Bahasa Indonesia">ID</button>
    </div>
  </nav>
</header>

<main>
  <section class="hero">
    <h1>Mendukung pertumbuhan bisnis Anda secara cerdas di Asia Tenggara</h1>
    <p class="subtitle">Kami membantu bisnis berkembang lebih kuat melalui strategi yang jelas dan kemitraan terpercaya.</p>

    <a class="btn-primary" href="https://form.arianoi.com/1.php" target="_blank" rel="noopener">Mulai Layanan</a>
  </section>

  <section class="contact-section" aria-labelledby="contact-heading">
    <h2 id="contact-heading">Informasi Kontak</h2>

    <p>Email: <a href="mailto:support@arianoi.com">support@arianoi.com</a></p>
    <p>WhatsApp: <a href="https://wa.me/6289518327435" target="_blank" rel="noopener">wa.me/6289518327435</a></p>
    <p>Instagram: <a href="https://instagram.com/arianoi_asia" target="_blank" rel="noopener">@arianoi_asia</a></p>
    <p>Alamat: Jl. Nakula, PT Sinar Langit Hanoi, Tanjunganom, Nganjuk, Jawa Timur, Indonesia 64483</p>
  </section>
</main>

<footer>
  2025 PT Sinar Langit Hanoi. Hak Cipta Dilindungi.
</footer>

<script>
/* Same behavior as EN page: menu toggle + language buttons inside the menu */
(function () {
  const btn = document.getElementById('hamburgerBtn');
  const menu = document.getElementById('menu');
  const langButtons = menu.querySelectorAll('.lang-switch button');

  function setExpanded(expanded) {
    btn.setAttribute('aria-expanded', String(expanded));
    menu.classList.toggle('show', expanded);
    menu.setAttribute('aria-hidden', String(!expanded));
    btn.classList.toggle('is-open', expanded);
  }

  btn.addEventListener('click', function () {
    const opening = !menu.classList.contains('show');
    setExpanded(opening);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && menu.classList.contains('show')) {
      setExpanded(false);
    }
  });

  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !btn.contains(e.target) && menu.classList.contains('show')) {
      setExpanded(false);
    }
  });

  Array.from(menu.querySelectorAll('a')).forEach(function (link) {
    link.addEventListener('click', function () { setExpanded(false); });
  });

  langButtons.forEach(function (b) {
    b.addEventListener('click', function (e) {
      langButtons.forEach(x => { x.classList.remove('active'); x.setAttribute('aria-pressed', 'false'); });
      b.classList.add('active');
      b.setAttribute('aria-pressed', 'true');
    });
  });
})();
</script>

</body>
</html>
