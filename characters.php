<!doctype html>
<html lang="en">
  <head>
    <title>Characters</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/a.css">
    <link rel="stylesheet" href="css/p.css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/hr.css">
    <link rel="stylesheet" href="css/figure.css">
  </head>
  <body>

  <? include('additions/header.html'); ?>

  <div class="container">

    <div class="row">

        <div class="col-12 pt-1 text-center">
            <h2 id="nameChar">Daniel Lair</h2> 
            <p class="font-italic"><b id="quote">Просто... Черт, ты же знаешь, я готов помочь! Вопрос лишь в том, позволишь ли ты мне это?</b> </p>
        </div>

      <img src="img/дэнПроба.png" alt="" width="100%" class="col-4" id="char">

      <div class="col-7 offset-1 mt-5 pt-5">
        <h5 id="text"><p>Даниэль Лайр - юный музыкант, в будущем - примерный семьянин и чудесный фотограф.</p>
            <p>Заработав репутацию прилежного ученика, он подолгу сидит в кабинете музыки и вдохновенно перебирает клавиши старого фортепиано. Ему не нужна цельная композиция - звучание прекрасно в данный момент, прекратить и обдумать - сродни смерти.</p></h5> 
            <!--<img src="img/палитраПроба.png" width="50%" alt="" class="offset-3" id="palitra"> -->
      </div>

      <div class="col-2 text-center offset-5 mt-5"> <!-- Тут должна быть навигация (схематичное оформление) -->
            <button onclick="shiro()"><img src="img/иконкиПроба.png" alt=""></button> - <button onclick="dan()"><img src="img/иконкиПроба.png" alt=""></button> - <button onclick="emily()"><img src="img/иконкиПроба.png" alt=""></button>
      </div>
      

          
    </div>

    
  </div>

  <script>
      function shiro() {
        nameChar.textContent="Shiro Ray"
        quote.textContent="Попытайся понять, хорошо?"
        char.src="img/широПроба.png"
        text.textContent="Блаблабла тут про Широ"
    }

    function dan() {
        nameChar.textContent="Daniel Lair"
        quote.textContent="Просто... Черт, ты же знаешь, я готов помочь! Вопрос лишь в том, позволишь ли ты мне это?"
        char.src="img/дэнПроба.png"
        text.textContent="блаблабла тут про Дэна"
    }

    function emily() {
        nameChar.textContent="Emily Lair"
        quote.textContent="У тебя заворот кишок случится, если ты улыбнешься, или что?"
        char.src="img/эмиПроба.png"
        text.textContent="Блаблабла тут про Эми"
    }

  </script>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>