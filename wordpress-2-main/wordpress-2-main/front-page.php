<?php get_header();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="utf-8">
  <title>Treshi Pershehi – Wiki Humor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;600;800&display=swap" rel="stylesheet">

    <style>
    html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}


div.scroll-container {
  background-color: #333;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;

}

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



     body{
      font-family:'Nunito', sans-serif;
    }

    /* nuk preket background */

    .wiki-box{
      box-shadow:0 6px 18px rgba(0,0,0,.1);
      border-radius:10px;
      padding:25px;
    }

    .wiki-title{
      border-bottom:2px solid #ddd;
      margin-bottom:15px;
      padding-bottom:10px;
    }

    .sidebar{
      font-size:14px;
    }

    .sidebar a{
      text-decoration:none;
      display:block;
      padding:6px 0;
      color:#333;
    }

    .sidebar a:hover{
      text-decoration:underline;
    }

    .info-box{
      border:1px solid #ccc;
      padding:10px;
      font-size:13px;
      border-radius:8px;
    }

    .info-box h6{
      font-weight:800;
      text-align:center;
    }

    .section-title{
      border-bottom:1px solid #ccc;
      margin-top:30px;
      margin-bottom:10px;
      font-weight:800;
    }


</style>
    

</head>
<body>




<!-- <div class="scroll-container">
  <img src="images/qumili.png" alt="hasan">
  <img src="images/leci.png" alt="hasan">
  <img src="images/funi.png" alt="hasans">
  <img src="images/images.jpg" alt="hasan">
</div> -->

<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>

  





<div class="container my-4">
  <div class="row">

    <!-- SIDEBAR -->
    <aside class="col-md-3 sidebar">
      <div class="wiki-box">
        <h6 class="fw-bold">Përmbajtja</h6>
        <a href="#hyrje">Hyrje</a>
        <a href="#origjina">Origjina</a>
        <a href="#stili">Stili i humorit</a>
        <a href="#shembuj">Shembuj batutash</a>
        <a href="#fakte">Fakte interesante</a>
        <a href="#referenca">Referenca</a>
      </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="col-md-9">
      <article class="wiki-box">

        <h1 class="wiki-title">Treshi Pershehi</h1>

        <!-- INFO BOX (Wikipedia style) -->
        <div class="row">
          <div class="col-md-8">

            <section id="hyrje">
              <h4 class="section-title">Hyrje</h4>
              <p>
                <strong>Treshi Pershehi</strong> është një figurë humoristike
                e njohur në tregimet popullore urbane shqiptare.
                Ai përfaqëson logjikën absurde, përgjigjet e papritura
                dhe humorin spontan të përditshmërisë.
              </p>
            </section>

          </div>
          <div class="col-md-4">
            <div class="info-box">
              <h6>Treshi Pershehi</h6>
              <p><strong>Fusha:</strong> Humor popullor</p>
              <p><strong>Stili:</strong> Satirë, absurd</p>
              <p><strong>Përdorimi:</strong> Batuta, meme</p>
              <p><strong>Status:</strong> Figurë humoristike</p>
            </div>
          </div>
        </div>

        <section id="origjina">
          <h4 class="section-title">Origjina</h4>
          <p>
            Origjina e Treshit Pershehi lidhet me humorin gojor,
            rrëfimet në oda, shkolla dhe ambiente shoqërore.
            Emri përdoret shpesh për të personifikuar një karakter
            që gjithmonë e kthen përgjigjen ndryshe nga pritshmëria.
          </p>
        </section>

        <section id="stili">
          <h4 class="section-title">Stili i humorit</h4>
          <ul>
            <li>Përgjigje logjikisht të gabuara</li>
            <li>Keqkuptime të qëllimshme</li>
            <li>Ironi e thjeshtë popullore</li>
            <li>Humor i shpejtë dhe i drejtpërdrejtë</li>
          </ul>
        </section>

        <section id="shembuj">
          <h4 class="section-title">Shembuj batutash</h4>

          <blockquote class="blockquote">
            <p>— Pse erdhe vonë?<br>
               — Sepse ora erdhi më herët.</p>
          </blockquote>

          <blockquote class="blockquote">
            <p>— Sa kushton kjo?<br>
               — 5 euro.<br>
               — A ka zbritje nëse nuk e blej?</p>
          </blockquote>
        </section>

        <section id="fakte">
          <h4 class="section-title">Fakte interesante</h4>
          <table class="table table-bordered">
            <thead class="table-light">
              <tr>
                <th>Fakt</th>
                <th>Përshkrim</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Popullaritet</td>
                <td>Shumë i përdorur në rrjete sociale</td>
              </tr>
              <tr>
                <td>Forma</td>
                <td>Batuta të shkurtra</td>
              </tr>
              <tr>
                <td>Ndikimi</td>
                <td>Humor i përditshëm</td>
              </tr>
            </tbody>
          </table>
        </section>

        <section id="referenca">
          <h4 class="section-title">Referenca</h4>
          <ul>
            <li>Humori gojor shqiptar</li>
            <li>Tregime urbane moderne</li>
          </ul>
        </section>

      </article>
    </main>

  </div>
</div>
















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

<?php get_footer();?>