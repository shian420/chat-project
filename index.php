<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
<title>配置テスト</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="styleseet.css">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/a1bcc1e98a.js" crossorigin="anonymous"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

<!--ここから画像全画面表示用の記述!-->
<script type="text/javascript" src="intense.min.js"></script>
<style type="text/css">
.tweet-image {
   cursor: pointer; /* マウスポインタを指定 */
   display:block;   /* 横方向に並べる指定 */
}
.side-nav li:first-of-type{
  color: rgb(108, 159, 206);
}
</style>
</head>
<body>
  <div class="chat-wrapper">
<div class="chat-container">
  <nav class="side-nav">
    <i class="fab fa-twitter fa-lg"></i>
    <div class="nav-icons">
    <li><div><i class="fas fa-home fa-lg"></i></div><span>ホーム</span></li>
    <li><div><i class="fas fa-hashtag fa-lg"></i></div><span>話題の検索</span></li>
    <li><div><i class="fas fa-search fa-lg"></i></div></li>
    <li><div><i class="far fa-bell fa-lg"></i></div><span>通知</span></li>
    <li><div><i class="far fa-envelope fa-lg"></i></div><span>メッセージ</span></li>
    <li><div><i class="far fa-bookmark fa-lg"></i></div><span>ブックマーク</span></li>
    <li><div><i class="far fa-list-alt fa-lg"></i></div><span>リスト</span></li>
    <li><div><i class="far fa-user fa-lg"></i></div><span>プロフィール</span></li>
    <li><div><i class="fas fa-chevron-circle-down fa-lg"></i></div><span>もっと見る</span></li>
<div class="xx">
    <div id="mb-btn" class="mobile-btn">
      <p>+</p>
      <i class="fas fa-pen"></i>
    </div>
  </div>
  </div>
  <div class="clear-right">
    <button id="btn-large" class="btn large">ツイートする</button>
  </nav>
  <!--投稿＆タイムライン部分!-->
  <main>
    <!--モバイル縦持ちボタン!-->
    <div class="xx mb-height">
        <div id="mb-btn2" class="mobile-btn">
          <p>+</p>
          <i class="fas fa-pen"></i>
        </div>
      </div>
    <!--ヘッダー!-->
    <header>
<h2>ホーム</h2>
<i class="fab fa-twitter fa-lg"></i>
      <div class="search">
        <div class="search-btn">
          <i class="fas fa-search"></i>
        </div>
      <input class="search-box" type="search" name="search" placeholder="キーワードで検索">
    </div>
    </header>
    <!--ヘッダー終了!-->
<!--フォーム開始!-->
    <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
<!--モーダル開始!-->
<div id="mb-wrapper" class="modal-wrapper">
<div class="modal-form">

<div class="modal-header-fixed">
  <div class="modal-header">
    <button type="submit" class="btn modal-tweet">ツイートする</button>
    <p>未送信ツイート</p>
    <p>下書き</p>
    <p class="cancel">キャンセル</p>
    <img class="cancel" src="./image/cross.png" alt="戻る">
    <div class="clear-right"></div>
  </div>
</div>

  <div class="modal-flex">
  <div class="modal-left">
    <img src="./image/新アイコン_LI.jpg" alt="マイアイコン">
</div>
<div class="modal-right">
  <textarea name="tweet" placeholder="いまどうしてる？"></textarea>
<p>全てのアカウントが叩けます</p>
<div class="modal-bottom">
  <i class="far fa-image"></i>
  <i class="far fa-sad-cry"></i>
  <i class="fas fa-poll-h"></i>
  <i class="far fa-smile"></i>
  <i class="far fa-share-square"></i>
<button type="submit" class="btn modal-tweet">ツイートする</button>
<div class="clear-right"></div>
</div>

</div>
</div>


</div>
</div>
<!--モーダル終了!-->
<div class="main-scroll">
      <div class="tweet-form">
      <div class="form-icon">
        <img src="./image/新アイコン_LI.jpg" alt="マイアイコン">
      </div>
      <div class="form-right">
      <div class="tweet-textbox">
      <input type="text" name="name" placeholder="あなたの名前は？" >
      <textarea name="tweet2" placeholder="いまどうしてる？"></textarea>
    </div>
    <div class="tw-items">
      <i class="far fa-image"></i>
      <i class="far fa-sad-cry"></i>
      <i class="fas fa-poll-h"></i>
      <i class="far fa-smile"></i>
      <i class="far fa-share-square"></i>
<button type="button" class="btn tweet" onclick="newBox()">ツイートする</button>
<div class="clear-right"></div>
</div>
</div>
    </form>
  </div>
  <!--フォーム終了!-->
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  /*サーバーがポストの時書き込む*/
  writeData();
}
 readData();

function readData(){
$indexFile='index.html';
$fp=fopen($indexFile,'rb');/*ファイルオープン。fpはファイルポインタの略
rbバイナリで読み込みという意味
ストリームと結合*/
if($fp){
  if(flock($fp, LOCK_SH)){/*fpが共ロックされてる時、*/
    while(!feof($fp)){/*fpの最後の文字に達していないとき*/
      $buffer=fgets($fp);/*fpテキストを改行になるまで読み込む*/
      print($buffer);
    }
  flock($fp,LOCK_UN);/*ロック解除*/
}else{
  print("ロックに失敗しましたごめんなさい");
}
}
fclose($fp);/*ファイルを閉じる*/
}
/*ここまで読み込み時の操作*/

/*ここから書き込みの操作*/
function writeData(){

if($_POST['tweet']){
  $tweet=$_POST['tweet'];

      $data = "<hr>";
      $data = $data."<p>".$tweet."</p>";
    }else{
          $name=$_POST['name'];
          $tweet2=$_POST['tweet2'];
          $tweet2=nl2br($tweet2);/*改行が反映される*/

          $data = "<hr>";
          $data = $data."<h3>".$name."</h3>";
          $data = $data."<p>".$tweet2."</p>";
        }

  $indexFile="index.html";
  $fp=fopen($indexFile,'ab');/*バイナリで追加読み込み*/

  if($fp){
    if(flock($fp,LOCK_EX)){/*排他的ロック
      他の人の読み書きの許可しない*/
      if(fwrite($fp,$data) === FALSE){
        /*fpにdataを書き込み(今回は失敗ならば)*/
        print("書き込みに失敗しました");
      }
      flock($fp,LOCK_UN);
    }else{
      print("ロックに失敗しました");
    }
  }
  fclose($fp);
}
?>


<!--タイムライン部分!-->
<div id="boxT">
</div>
<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/iroha.png" alt="アカウントアイコン">
</div>
<div class="timeline-flex">
<div class="username">
<h3>い・ろ・は・す</h3>
<p class="user-id">@iroha416</p>
</div>
<p>私がいない</p>
<div class="tweet-image" data-image="./image/3期.jpg" data-title="いじめ？"
data-caption="私がいない">
    <img class="oregairu" src="./image/3期.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/IMG_0199.JPG" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>尊い</h3>
<p class="user-id">@teito</p>
</div>
    <p>
  いろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすだいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはすいろはす</p>
    <div class="tweet-image">
<iframe class="oregairu" width="100%" height="100%" src="https://www.youtube.com/embed/fz9J4Ef4yps" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/teito.jpg" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ていと</h3>
<p class="user-id">@TTTTTTT</p>
</div>
    <p>1円です</p>
    <div class="tweet-image" data-image="./image/teito.jpg" data-title="謎の男"
    data-caption="1円です">
<img class="oregairu" src="./image/teito.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>

  <div class="timeline-wraper">
    <div class="user-image">
    <img class="iroha" src="./image/hi.jpg" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ヒッキー</h3>
<p class="user-id">@maxcoffee</p>
</div>
      <p>お兄ちゃんといろは先輩がツーショット！<br>小町的にポイント高い！</p>
      <div class="tweet-image" data-image="./image/s.jpg" data-title="ツーショット"
      data-caption="お兄ちゃんといろは先輩がツーショット！<br>小町的にポイント高い！">
      <img class="oregairu" src="./image/s.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
  </div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/yui.png" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ゆいゆい</h3>
<p class="user-id">@hxy61888</p>
</div>
    <p>またあの頃のように3人で...</p>
    <div class="tweet-image" data-image="./image/hh.jpg" data-title="思い出"
    data-caption="またあの頃のように3人で...">
    <img class="oregairu" src="./image/hh.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>

<div class="timeline-wraper">
  <div class="user-image">
  <img class="iroha" src="./image/ukino.png" alt="アカウントアイコン">
</div>
<div class=timeline-flex>
<div class="username">
<h3>ゆきのん</h3>
<p class="user-id">@nekononn</p>
</div>
    <p>由比ヶ浜さんと旅行</p>
    <div class="tweet-image" data-image="./image/d.jpg" data-title="旅行"
    data-caption="由比ヶ浜さんと旅行">
<img class="oregairu" src="./image/d.jpg" alt="ツイート画像">
</div>
<i class="far fa-comment"></i>
<i class="fas fa-retweet"></i>
<i class="far fa-heart"></i>
<i class="fas fa-download"></i>
</div>
</div>
</div>
  </main>

  <aside>
    <div class="aside-scroll">
    <h2>いまどうしてる？</h2>
    知りません。
  </div>
  </aside>
</div>
</div>

<script src="script.js"></script>
<script type="text/javascript">
   var elements = document.querySelectorAll( '.tweet-image' );
   Intense( elements );
</script>
</body>
</html>
