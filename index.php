<?php
  include_once 'header.php'
?>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Pong</h2>
      <h5>2 Player so if you have no friends you cant play</h5>
      <div class="fakeimg" style="height:200px;">
      <img src="img/pong.png" alt="image">
      </div>
      <button class="glow-on-hover" type="button" onclick="window.location.href='http://localhost:8081/GAMES/pong/pong.html'"">To PLay Pong</button>
      <p>W and S move the padle on the right up and down and the up and down arrows move the player on the rights paddle up and down</p>
    </div>
    <div class="card">
      <h2>Snake</h2>
      <h5>Snake go Meow</h5>
      <div class="fakeimg" style="height:200px;"><img src="img/snake.png" alt="Snake"></div>
      <button class="glow-on-hover" type="button" onclick="window.location.href='http://localhost:8081/GAMES/snake.html'"">To PLay Snake</button>
      <p>W A S D make the snake go wee woo</p>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php'
?>

