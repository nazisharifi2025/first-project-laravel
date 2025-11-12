<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Document</title>
    @yield("styles")
</head>
<body>

  <!-- NAVBAR -->
  <nav class="nav" aria-label="ناوبری اصلی">
    <div class="container">
      <div class="brand">
        <div class="logo" aria-hidden="true">ش</div>
        <div>
          <div style="font-size:14px">شرکت نمونه</div>
          <div style="font-size:11px;opacity:0.9">طراحی زیبا • ساده</div>
        </div>
      </div>

      <div class="nav-links" role="navigation" aria-label="لینک‌های ناوبری">
        <a href="HomeSection">خانه</a>
        <a href="fetcher">ویژگی‌ها</a>
        <a href="price">قیمت‌ها</a>
        <a href="tamas">تماس</a>
      </div>

      <div style="display:flex;align-items:center;gap:12px">
        <a class="cta" href="#signup">شروع کن</a>
        <button class="menu-btn" aria-expanded="false" aria-controls="mobile-menu">☰</button>
      </div>
    </div>
  </nav>
  <!-- Heder -->
    @yield("Hero")
  <!-- FOOTER -->
  <footer id="contact">
    <div class="footer-inner">
      <div class="footer-col">
        <h4>درباره ما</h4>
        <p style="color: #dff7f6; opacity:0.92; line-height:1.6;">
          تیم نمونه ما محصولات ساده، سریع و زیبا می‌سازد. هدف: تجربهٔ بهتر برای کاربران.
        </p>
        <div class="legal">© ۲۰۲۵ شرکت نمونه — همه حقوق محفوظ است.</div>
      </div>

      <div class="footer-col">
        <h4>لینک‌های مفید</h4>
        <a href="page">خانه</a>
        <a href="fetcher">ویژگی‌ها</a>
        <a href="price">قیمت‌ها</a>
        <a href="tamas">تماس</a>
      </div>

      <div class="footer-col">
        <h4>تماس و شبکه‌ها</h4>
        <div style="margin-bottom:8px;">ایمیل: <a href="mailto:info@example.com" style="color:inherit; text-decoration:underline;">info@example.com</a></div>
        <div class="socials">
          <a href="#" aria-label="توییتر">ت</a>
          <a href="#" aria-label="اینستاگرام">ا</a>
          <a href="#" aria-label="لینکدین">ل</a>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
