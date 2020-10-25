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
});
const newBox=()=>{
  const boxT=document.getElementById("boxT");

  const timeline_wraper=document.createElement("div");
  const newUser_image=document.createElement("div");
  const newImg=document.createElement("img");
  const newTimeline_flex=document.createElement("div");
  const username=document.createElement("div");
  const user_id=document.createElement("p");
  const p=document.createElement("p");
  const tweet_image=document.createElement("div");
  const oregairu=document.createElement("img");
  var fa_comment=document.createElement("i");
  var fa_retweet=document.createElement("i");
  var fa_heart=document.createElement("i");
  var fa_download=document.createElement("i");

username.innerHTML="<h3>い・ろ・は・す・だ・よ</h3>";
user_id.innerHTML="@iroha41688";
p.innerHTML="おはようおはようやあやあグリーンです実況やめました";
oregairu.src="./image/3期.jpg";

timeline_wraper.className="timeline-wraper";
newUser_image.className="user-image";
newImg.className="iroha";
newTimeline_flex.className="timeline-flex";
username.className="username";
user_id.className="user-id";
tweet_image.className="tweet-image";
oregairu.className="oregairu";
fa_comment.className="far fa-comment";
fa_retweet.className="fas fa-retweet";
fa_heart.className="far fa-heart";
fa_download.className="fas fa-download";


boxT.appendChild(timeline_wraper);
timeline_wraper.appendChild(newUser_image);
newUser_image.appendChild(newImg);
timeline_wraper.appendChild(newTimeline_flex);
newTimeline_flex.appendChild(username);
username.appendChild(user_id);
newTimeline_flex.appendChild(p);
newTimeline_flex.appendChild(tweet_image);
tweet_image.appendChild(oregairu);
newTimeline_flex.appendChild(fa_comment);
newTimeline_flex.appendChild(fa_retweets);
newTimeline_flex.appendChild(fa_heart);
newTimeline_flex.appendChild(fa_download);

}
