$(function(){
  $('#mb-btn').click(function(){
    $('#mb-wrapper').css('display','inline');
  });
  $('#btn-large').click(function(){
    $('#mb-wrapper').css('display','inline');
  });
  $('.cancel').click(function(){
    $('#mb-wrapper').css('display','none');
  });
  $('#mb-btn2').click(function(){
    $('#mb-wrapper').css('display','inline');
  });
  $('#pc-btn').click(function(){
    $('.timeline-wraper').slideDown(8000);
  });
  $('.modal-tweet').click(function(){
    $('#mb-wrapper').hide();
  });
});

var imageArr=[
  "./image/d.jpg",
  "./image/3期.jpg",
  "./image/f.jpg",
  "./image/hh.jpg",
  "./image/s.jpg",
  "./image/ds.jpg",
  "./image/images.jpg",
  "./image/62f1c1ee.jpg",
  "./image/hhh.jpg"
];
var flg=true;
const pcbtn=document.getElementById('pc-btn');
const inputs=document.getElementById('input_textarea');

const mobilebtn=document.getElementById('mobilebtn');
const mobilrtext=document.getElementById('mobilrtext');

mobilebtn.addEventListener('click',()=>{
  if(mobilrtext.value===""){
    return;
  }else{
    tweets(mobilrtext);
    mobilrtext.value="";
  }
});

pcbtn.addEventListener('click',()=>{
  if(inputs.value===""){
    return;
  }else{
    tweets(inputs);
  inputs.value="";
  }
});

function tweets(inputss){

var i2=Math.floor(Math.random()*9);


const box1=document.getElementById("box1");
const timelineWp=document.createElement("div");
const userimage=document.createElement("div");
const img=document.createElement("img");
const timelineflex=document.createElement("div");
const username=document.createElement("div");
const h3=document.createElement("h3");
const userid=document.createElement("p");
const p=document.createElement("p");
const tweetimage=document.createElement("div");
const img2=document.createElement("img");


//各タグの設定
timelineWp.className="timeline-wraper";
userimage.className="user-image";
img.className="iroha";
img.src="./image/iroha.png";
img.alt="画像";
timelineflex.className="timeline-flex";
username.className="username";
username.innerHTML="い・ろ・は・す";
userid.className="user-id";
userid.innerHTML="@iroha416";
p.innerHTML=inputss.value;
tweetimage.className="tweet-image";
tweetimage.dataset.image=imageArr[i2];
tweetimage.dataset.title="おはよう";
tweetimage.dataset.caption="はい";

img2.className="oregairu";
img2.src=imageArr[i2];
img2.alt="画像";


//各タグ設置
if(flg){
  box1.appendChild(timelineWp);
  flg=false;
}else{
  const gettimeline=document.getElementsByClassName('timeline-wraper');
  box1.insertBefore(timelineWp,gettimeline[0]);
}
timelineWp.appendChild(userimage);
userimage.appendChild(img);
timelineWp.appendChild(timelineflex);
timelineflex.appendChild(username);
username.appendChild(h3);
username.appendChild(userid);
timelineflex.appendChild(p);
timelineflex.appendChild(tweetimage);
tweetimage.appendChild(img2);


//アイコン設定
const favos=document.createElement("div");
favos.className="favos";
timelineflex.appendChild(favos);

for(var i=1;i<5;i++){
  const favoitem=document.createElement("div");
  favoitem.className="favo-item";
  favos.appendChild(favoitem);
}

const favoitems=document.getElementsByClassName("favo-item");

for(var i=0;i<4;i++){
  if(i===1){
    const like2=document.createElement("label");
    like2.className="like2";
    favoitems[i].appendChild(like2);
    
  }else{
  const like=document.createElement("label");
  like.className="like";
  favoitems[i].appendChild(like);
  }
}

const labels=document.querySelectorAll('label');

const comment=document.createElement("i");
const heart=document.createElement("i");
const retweet=document.createElement("i");
const download=document.createElement("i");

comment.className="far fa-comment";
heart.className="material-icons heart";
heart.innerHTML="favorite";
retweet.className="fas fa-retweet";
download.className="fas fa-download";

for(var i=1;i<3;i++){
const checkbox=document.createElement('input');
checkbox.type="checkbox";
labels[i].appendChild(checkbox);
}

labels[0].appendChild(comment);
labels[1].appendChild(retweet);
labels[2].appendChild(heart);
labels[3].appendChild(download);
}




