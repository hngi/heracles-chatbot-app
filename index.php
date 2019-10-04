<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nemean | HNG BOT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Simonetta&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="contain">
          <div class="bot-content" id = 'bot_content'>
              <div class="bot-text">
                  <div >
                        <p>Hey there!</p>
                        <p>I am <p class="animate animated infinite tada">NEMEAN</p></p>
                  </div>
                  <p>Ask me about HNG</p>
                  <p><button id="myBtn">Get Started</button></p>
              </div>
              <div class="bot-image">
                  <img class="nemean" src="https://res.cloudinary.com/benjee/image/upload/v1569523384/nemean_qs0mwk.png" alt="Nemean">
              </div>
          </div>
          <div id="myModal" class="modal">
            <!-- Modal content -->
                <div class="modal-content">
                    <div class="bot-header">
                        <img class="bot-logo" src="https://res.cloudinary.com/benjee/image/upload/v1569363700/Group_3_tds6h9.svg" alt="logo">
                        <div class="colors">
                            <button onclick="red()" class="red animated zoomInUp delay-2s"></button>
                            <button onclick="blue()" class="blue animated zoomInDown delay-2s"></button>
                            <button onclick="yellow()" class="yellow animated zoomInUp delay-2s"></button>
                            <button onclick="white()" class="white animated zoomInDown delay-2s"></button>
                        </div>
                        <span class="close">&times;</span>
                    </div>
                    <!-- <div class="bot-conversation"> -->
                    <div class="chat">
                        <div class="messages"></div>
                        <div id="edge"></div>
                    </div>   
                    <form class="actions">
                        <input type="text" placeholder="Ask me about HNG">
                        <button class="btn" type="submit"><img src="https://res.cloudinary.com/benjee/image/upload/v1569606270/Vector_2_c87sw1.svg" alt="send"></button>
                    </form>              
                </div>
            </div>
        
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
