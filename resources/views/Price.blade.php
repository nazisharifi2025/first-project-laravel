@extends("layout.layoutfile")
  @section("styles")
  <style>
    /* Reset مختصر */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    html,body { height: 100%; font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; background:#f5f7fb; color:#0f1724; }

    /* --- Navbar --- */
    .nav {
      background: linear-gradient(90deg, #0ea5a4 0%, #06b6d4 100%);
      color: white;
      padding: 12px 20px;
      position: sticky;
      top: 0;
      z-index: 40;
      box-shadow: 0 6px 18px rgba(6,30,40,0.12);
    }
    .nav .container { display:flex; align-items:center; justify-content:space-between; gap:16px; max-width:1100px; margin:0 auto; }
    .brand { display:flex; align-items:center; gap:10px; font-weight:700; font-size:18px; letter-spacing:0.2px; }
    .brand .logo {
      width:40px;height:40px;border-radius:10px;
      display:inline-grid;place-items:center;font-weight:800;
      background:rgba(255,255,255,0.14);
      box-shadow: 0 4px 10px rgba(2,6,23,0.12);
    }
    .nav-links { display:flex; gap:12px; align-items:center; }
    .nav-links a { color:rgba(255,255,255,0.95); text-decoration:none; padding:8px 12px; border-radius:8px; font-size:14px; }
    .nav-links a:hover { background:rgba(255,255,255,0.08); }
    .cta { background: white; color:#064e52; padding:8px 12px; border-radius:10px; font-weight:700; text-decoration:none; box-shadow: 0 6px 18px rgba(3,105,118,0.12); }
    .cta:hover { transform: translateY(-2px); transition: all .15s ease; }

    /* mobile menu button */
    .menu-btn { display:none; background:transparent; border:0; color:white; font-size:20px; }

    /* --- Hero / Header --- */
    .Hero {
      max-width:1100px; margin:36px auto; padding:36px; background:linear-gradient(180deg,#ffffff, #f8fbfd);
      border-radius:16px; box-shadow: 0 12px 30px rgba(2,8,23,0.06); overflow:hidden;
      display:flex; gap:28px; align-items:center;
      justify-content: center;
      height: 70vh;
      font-size: 40px;
    }

    
    /* --- Footer --- */
    footer { margin-top:36px; background:#022f2f; color: #dff7f6; padding:36px 20px; }
    .footer-inner { max-width:1100px; margin:0 auto; display:grid; grid-template-columns: repeat(3,1fr); gap:18px; align-items:start; }
    .footer-col h4 { margin-bottom:12px; font-size:16px; color:#dff7f6; }
    .footer-col a { display:block; color:rgba(255,255,255,0.9); text-decoration:none; margin-bottom:8px; font-size:14px; opacity:0.95; }
    .socials { display:flex; gap:10px; margin-top:8px; }
    .socials a { width:40px; height:40px; display:inline-grid; place-items:center; border-radius:8px; background:rgba(255,255,255,0.06); color:white; text-decoration:none; box-shadow: 0 6px 16px rgba(2,8,23,0.08); }
    .legal { margin-top:22px; font-size:13px; opacity:0.8; color: #bfeae9; }

    /* responsive */
    @media (max-width:900px){
      .hero { grid-template-columns: 1fr; padding:22px; }
      .nav-links { display:none; }
      .menu-btn { display:inline-block; }
      .footer-inner { grid-template-columns: 1fr; }
    }

  </style>
  @endsection
  <!-- Heder -->
   @section("Hero")
   <div class="Hero">قیمت‌ها</div>
   @endsection

