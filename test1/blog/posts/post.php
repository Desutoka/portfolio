<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Blog Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
<link href="http://localhost/test/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>

<body>
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="http://localhost/test/blog/index.php">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
<?php
    if (isset($_COOKIE['log23'])== false):
?>
        <a class="btn btn-sm btn-outline-secondary" href="http://localhost/test/sign-up/index.php">Sign up</a>
<?php else:?>
<p>Привет, <?=$_COOKIE['log23'] ?></p>
<a href="http://localhost/test/php/exit.php">выйти</a>

<?php endif; ?>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">World</a>
      <a class="p-2 link-secondary" href="#">U.S.</a>
      <a class="p-2 link-secondary" href="#">Technology</a>
      <a class="p-2 link-secondary" href="#">Design</a>
      <a class="p-2 link-secondary" href="#">Culture</a>
      <a class="p-2 link-secondary" href="#">Business</a>
      <a class="p-2 link-secondary" href="#">Politics</a>
      <a class="p-2 link-secondary" href="#">Opinion</a>
      <a class="p-2 link-secondary" href="#">Science</a>
      <a class="p-2 link-secondary" href="#">Health</a>
      <a class="p-2 link-secondary" href="#">Style</a>
      <a class="p-2 link-secondary" href="#">Travel</a>
    </nav>
  </div>
<div class="postB">
          <h2 class="blog-post-title">Заповедь поэта</h2>
        <p class="blog-post-meta">marth 23, 2014 by <a href="https://vk.com/georgiysheld">Георгий Шелд</a></p>
<hr>

<p>     Победитель не тот, кто нокаутом бьёт,<br>
        Побеждает во всём- кто собой управляет;<br>
        Кто умеет любить и кто честно живёт,<br>
        Тому в трудный момент сам Господь помогает.<br>
<br>
        Когда душа людей во злобе жить устанет-<br>
        Любовь низвергнет ненависть навек!<br>
        Кто был врагом, возможно, другом станет,<br>
        Счастливым будет каждый человек.<br>
<br>
        Уверует безбожник, как вырвется из ада<br>
        И позабудет верующий в тщеславии про рай.<br>
        Все равны перед Богом, нам забывать не надо,<br>
        Но каждый выбирает, когда вступить на край.<br>
<br>
        Очень важно прощать, нас касается всех!-<br>
        Без ошибок живёт только трус и лентяй.<br>
        Кто по жизни идёт, спотыкаться не грех;<br>
        Кто стремится помочь, крест упрёков несёт.<br>
<br>
        Я слушал тишину заброшенных селений<br>
        И бесконечный шум в трущобах городских;<br>
        Я был в местах святых, намоленных и древних,<br>
        Где нет мирских сует и глупостей людских.<br>
<br>
        Я видел пьяниц с мудрыми глазами<br>
        И падших женщин с ликом чистоты.<br>
        Я знаю сильных, что взахлёб рыдали<br>
        И слабых, что несут свои кресты.<br>
<br>
        Не бойся вора в нищенском обличьи,<br>
        И проклинать за мелочь, не спеши-<br>
        Ты бойся тех, кто выглядит прилично,<br>
        Вор с праведным лицом уносит часть души.<br>
<br>
        Не обвиняй во всех грехах соседа,<br>
        Интриг не строй и сплетен не плети!<br>
        Воздастся добротой тебе за это,<br>
        Когда споткнёшься на своём пути.<br>
<br>
        Не осуждай за то, в чём не уверен;<br>
        Не обещай, если решил солгать.<br>
        Не проверяй, когда уже доверил!<br>
        И не дари, планируя отнять.<br>
<br>
        Молись тогда, когда в молитву веришь;<br>
        Живи лишь с тем, кого ты любишь сам.<br>
        Гони прочь тех, кого ты ненавидишь;<br>
        И доверяй глазам, а не пустым словам.<br>
<br>
        Не жди, что жизнь твоя земная<br>
        Продолжится на небесах.<br>
        Без ада не познаешь рая,<br>
        А без души ты только прах.</p>
<hr>
        
  
  </div>
  <?php 
?>
  <div class="containers">
        <!-- <div class="commentary">
          <h2>Автор</h2>
          <span>Дата</span>
          <p class="last-thd">Сообщение</p>
        </div> -->
        <?php
          $link = mysqli_connect("localhost","root","fizztYLGZLlSPi9e","test_db");
      mysqli_set_charset($link,'utf-8');
      $data = mysqli_query($link, "SELECT * FROM `messages`");


      while($info = mysqli_fetch_array($data)){
        // $info['login']."<br>";
        // echo $info['text']."<br>";
        // echo $info['date']."<br>";
        $result = "<div class=\"head\">
  <div class=\"inhead\">
    <div class=\"ininhead\">
    <a href=\"\">".$info['name']."</a>
    <p>".$info['date']."</p>
    </div>

    <div class=\"textM\">
      ".$info['message']." 
    </div>
  </div>

</div>";
        echo $result;
        }
        ?>
   

 <?php if (isset($_COOKIE['log23'])== true):
 ?>
  <form action="comments.php" method="post">
    <input type="text" name="mess">
    <button type="submit" style="background-color: #4CAF50;border: none;color: white;padding: 15px 32px;text-align: center;text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer;">Send</button>
  </form>
  <?php 
else:
  ?>
<p> войдите, чтобы оставлять комментарии!</p>
<?php
endif;
?>

</div>

</form>


</body>
</html>
