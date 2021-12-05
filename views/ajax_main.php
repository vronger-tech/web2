<script type="text/javascript" src = "jquery.min.js"></script>
  <script type="text/javascript" src = "felsofoku.js"></script>
  <title>Munkalapok</title>
  <style>
    #informaciosdiv {
      width: 400px;
    }
    #munkalapinfo {
      float: right;
      border: 1px solid black;
      width: 200px;
      height: 120px;
    }
    .cimke{
      display: inline-block;
      width: 60px;
      text-align: right;
    }
    span {
      margin: 3px 5px;
    }
    label {
      display: inline-block;
      width: 70px;
      text-align: right;
    }
    select {
      width: 115px;
    }
  </style>
  </head>
  <body>
    <h1>Munkalap Infók:</h1>
    <div id = 'informaciosdiv'>
      <div id = 'munkalapinfo'>
        <span class="cimke">Javítás beérkezése:</span><span id="bedatum" class="adat"></span><br>
        <span class="cimke">Javítás dátuma:</span><span id="cim" class="adat"></span><br>
        <span class="cimke">Munkaóra:</span><span id="tel" class="adat"></span><br>
        <span class="cimke">Anyagár:</span><span id="mail" class="adat"></span><br>
      </div>
      <label for='helycimke'>Település:</label>
      <select id = 'helyselect'></select>
      <br><br>
      <label for='utcacimke'>Utca:</label>
      <select id = 'orszagselect'></select>
      <br><br>
      <label for = 'szerelocimke'>Szerelő:</label>
      <select id = 'szereloselect'></select>
      <br><br>
      <label for = 'bedatumcimke'>Javítás beérkezése:</label>
      <select id = 'bedatumselect'></select>
    </div>
  </body>