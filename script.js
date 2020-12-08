

const newBox=()=>{
  const input_name=document.forms.form1.input_name.value;
  const input_textarea=document.forms.form1.input_textarea.value;


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
const faComment=document.createElement("i");
const faRetweet=document.createElement("i");
const faHeart=document.createElement("i");
const download=document.createElement("i");

newImg.src="./image/iroha.png";
username.innerHTML="<h3>い・ろ・は・す・だ・よ</h3>";
user_id.innerHTML="@iroha41688";
p.innerHTML="おはようおはようやあやあグリーンです実況やめました";
oregairu.src="./image/3期.jpg";

timeline_wraper.className="timeline-wraper";
newUser_image.className="user-image";
newImg.className="iroha";
newTimeline_flex.className="timeline-flex";
username.className="username";
username.id="output_name";
user_id.className="user-id";
p.id="output_text";
tweet_image.className="tweet-image";
oregairu.className="oregairu";
faComment.className="far fa-comment";
faRetweet.className="fas fa-retweet";
faHeart.className="far fa-heart";
download.className="fas fa-download";


boxT.appendChild(timeline_wraper);
timeline_wraper.appendChild(newUser_image);
newUser_image.appendChild(newImg);
timeline_wraper.appendChild(newTimeline_flex);
newTimeline_flex.appendChild(username);
username.appendChild(user_id);
newTimeline_flex.appendChild(p);
newTimeline_flex.appendChild(tweet_image);
tweet_image.appendChild(oregairu);
newTimeline_flex.appendChild(faComment);
newTimeline_flex.appendChild(faRetweet);
newTimeline_flex.appendChild(faHeart);
newTimeline_flex.appendChild(download);

document.getElementById("output_name").innerHTML=input_name;
document.getElementById("output_text").innerHTML=input_textarea;
}
