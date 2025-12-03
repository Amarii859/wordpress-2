<!doctype html>
<html lang="sq">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Treshi Pershehi - Humor</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap" rel="stylesheet">

  <style>
    /* ===============================
       MOS PREK BACKGROUND-IN
       =============================== */

    :root{
      --accent:#e63946;
      --text:#111;
      --muted:#6b6f76;
      --card:#ffffff;
      --radius:14px;
      --shadow:0 6px 18px rgba(0,0,0,.1);
    }

    *{
      box-sizing:border-box;
      margin:0;
      padding:0;
    }

    body{
      font-family:'Nunito', sans-serif;
      color:var(--text);
    }

    /* ===============================
       CONTAINER
       =============================== */

    .container{
      max-width:1100px;
      margin:40px auto;
      padding:25px;
      border-radius:18px;
      box-shadow:var(--shadow);
    }

    /* ===============================
       HEADER
       =============================== */

    header{
      display:flex;
      align-items:center;
      gap:20px;
      margin-bottom:25px;
    }

    .logo{
      width:70px;
      height:70px;
      border-radius:12px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:800;
      font-size:22px;
      color:#fff;
      background:linear-gradient(135deg,#ffb703,#fb8500);
    }

    h1{
      font-size:30px;
    }

    .subtitle{
      color:var(--muted);
      margin-top:4px;
    }

    /* ===============================
       BUTTONS
       =============================== */

    .buttons{
      margin-top:12px;
      display:flex;
      gap:10px;
      flex-wrap:wrap;
    }

    .btn{
      padding:10px 16px;
      border-radius:10px;
      border:none;
      cursor:pointer;
      font-weight:700;
      font-size:13px;
    }

    .btn-main{
      background:var(--accent);
      color:#fff;
    }

    .btn-outline{
      background:transparent;
      border:1px solid #ddd;
      color:var(--muted);
    }

    /* ===============================
       JOKES GRID
       =============================== */

    .jokes{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:20px;
      margin-top:30px;
    }

    .card{
      background:var(--card);
      padding:16px;
      border-radius:12px;
      box-shadow:var(--shadow);
      display:flex;
      flex-direction:column;
      justify-content:space-between;
    }

    .joke-text{
      font-size:15px;
      line-height:1.4;
      margin-bottom:12px;
    }

    .card-footer{
      display:flex;
      justify-content:space-between;
      font-size:12px;
      color:var(--muted);
    }

    /* ===============================
       ADD JOKE
       =============================== */

    .add-joke{
      margin-top:30px;
      display:flex;
      gap:10px;
    }

    .add-joke textarea{
      flex:1;
      resize:vertical;
      min-height:70px;
      padding:12px;
      border-radius:10px;
      border:1px solid #ddd;
      font-family:inherit;
    }

    /* ===============================
       FOOTER
       =============================== */

    footer{
      margin-top:30px;
      text-align:center;
      color:var(--muted);
      font-size:13px;
    }

    /* ===============================
       RESPONSIVE
       =============================== */

    @media(max-width:500px){
      h1{font-size:22px}
      .logo{width:55px;height:55px;font-size:18px}
    }

  </style>
</head>
<body>

  <div class="container">

    <header>
      <div class="logo">TP</div>
      <div>
        <h1>Treshi Pershehi</h1>
        <p class="subtitle">Humor, batuta & anekdota shqiptare</p>

        <div class="buttons">
          <button class="btn btn-main">Shto batutë</button>
          <button class="btn btn-outline">Më të rejat</button>
          <button class="btn btn-outline">Më të mirat</button>
        </div>
      </div>
    </header>

    <section class="jokes">

      <div class="card">
        <p class="joke-text">
          Pse Treshi nuk përdor Google?
          Sepse përgjigjen e gjen vetë dhe e prish.
        </p>
        <div class="card-footer">
          <span>#shaka</span>
          <span>5 min më parë</span>
        </div>
      </div>

      <div class="card">
        <p class="joke-text">
          Treshi në pazar:  
          – Sa kushton kjo?  
          – 5 euro.  
          – A ka zbritje nëse nuk e blej?
        </p>
        <div class="card-footer">
          <span>#humor</span>
          <span>dje</span>
        </div>
      </div>

      <div class="card">
        <p class="joke-text">
          Mësuesi: Pse erdhe vonë?  
          Treshi: Sepse ora erdhi përpara meje.
        </p>
        <div class="card-footer">
          <span>#anekdote</span>
          <span>2 ditë më parë</span>
        </div>
      </div>

    </section>

    <section class="add-joke">
      <textarea placeholder="Shkruaj batutën tënde këtu..."></textarea>
      <button class="btn btn-main">Posto</button>
    </section>

    <footer>
      © Treshi Pershehi – Humor për të qeshur, jo për me lëndu.
    </footer>

  </div>

</body>
</html>