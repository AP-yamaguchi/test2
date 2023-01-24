<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modaal.min.css">
  </head>

  <body>
    <header id="header" class="wrapper">
      <h1 class="site-title"><a href="index.html"><img src="img/logo.svg" alt="Profile"></a></h1>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#bicycle">Bicycle</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="mainvisual">
        <img src="img/mainvisual.jpg" alt="テキストテキストテキスト">
      </div>

      <section id="info">
        <h2>明けましておめでとうございます！</h2>
        <p>今年もよろしくお願いします！</p>
      </section>

      <section id="about" class="wrapper">
        <h2 class="section-title">About</h2>
        <div class="content">
          <img src="img/about.jpg" alt="テキストテキストテキスト">
          <div class="text">
            <h3 class="content-title">KAKERU MIYAICHI</h3>
            <p>
              テキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキストテキスト<br>
              テキストテキストテキストテキストテキストテキストテキスト
            </p>
          </div>
        </div>
        <div id="button-color">ボタン</div>
      </section>

      <img class="hide-img" src="img/bicycle1.jpg" alt="テキストテキストテキスト">

      <section id="bicycle" class="wrapper">
        <h2 class="section-title">Bicycle</h2>
        <ul class="bicycle-list">
          <li>
            <img src="img/bicycle1.jpg" alt="テキストテキストテキスト">
            <h3 class="content-title">タイトルタイトル</h3>
            <p>テキストテキストテキスト</p>
          </li>
          <li>
            <img src="img/bicycle2.jpg" alt="テキストテキストテキスト">
            <h3 class="content-title">タイトルタイトル</h3>
            <p>テキストテキストテキスト</p>
          </li>
          <li>
            <img src="img/bicycle3.jpg" alt="テキストテキストテキスト">
            <h3 class="content-title">タイトルタイトル</h3>
            <p>テキストテキストテキスト</p>
          </li>
        </ul>
      </section>
      <section>
        <ul class="accordion-menu">
          <li>
            <h3 class="question">question1</h3>
            <div class="answer">
              <p>answer answer answer answer answer answer answer answer </p>
            </div>
          </li>
          <li>
            <h3 class="question">question2</h3>
            <div class="answer">
              <p>answer answer answer answer answer answer answer answer </p>
            </div>
          </li>
          <li>
            <h3 class="question">question3</h3>
            <div class="answer">
              <p>answer answer answer answer answer answer answer answer </p>
            </div>
          </li>
          
        </ul>
      </section>
    </main>

    <footer id="footer">
      <p>&copy; 2020 Profile</p>
    </footer>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/modaal.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
  <script src="js/common.js"></script>
</html>
