var clockTarget0 = document.getElementById("clock0");
var clockTarget1 = document.getElementById("clock1");
var clockTarget2 = document.getElementById("clock2");
var clockTarget3 = document.getElementById("clock3");

function clock() {
  var ampm='오전'; //오전 오후 초기값
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var clockDate = date.getDate();
  var day = date.getDay();
  var week = ['일', '월', '화', '수', '목', '금', '토'];
  var hours =addZeros(date.getHours(),2);
  var minutes =addZeros(date.getMinutes(),2);
  var seconds =addZeros(date.getSeconds(),2);
  //clockTarget1.innerText =  `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes }`  : minutes }:${seconds < 10 ? `0${seconds }`  : seconds }`;
  if(hours>=12){
    ampm='오후';
    hours=addZeros(hours - 12,2);
  }
  clockTarget0.innerText = `${ampm}`;
  clockTarget1.innerText = `${hours}:${minutes}:${seconds}`;
  clockTarget2.innerText = `${year}년 ${month+1}월 ${clockDate}일 ${week[day]}요일` ;

}
function ssstime(){
  var ampm='오전'; //오전 오후 초기값
  var date = new Date();
  var year = date.getFullYear();
  var month = date.getMonth();
  var clockDate = date.getDate();
  var day = date.getDay();
  var week = ['일', '월', '화', '수', '목', '금', '토'];
  var hours =addZeros(date.getHours(),2);
  var minutes =addZeros(date.getMinutes(),2);
  var seconds =addZeros(date.getSeconds(),2);
  //clockTarget1.innerText =  `${hours < 10 ? `0${hours}` : hours}:${minutes < 10 ? `0${minutes }`  : minutes }:${seconds < 10 ? `0${seconds }`  : seconds }`;
  if(hours>=12){
    ampm='오후';
    hours=addZeros(hours - 12,2);
  }

  clockTarget3.innerText=`${ampm}\n${hours}:${minutes}:${seconds}\n${year}년 ${month+1}월 ${clockDate}일 ${week[day]}요일`;
}
function sfullsize(){
  document.documentElement.webkitRequestFullscreen();
}
function init() {
  clock();
  setInterval(clock, 1000);
}
function addZeros(num, digit) { // 자릿수 맞춰주기
   var zero = '';
   num = num.toString();
   if (num.length < digit) {
      for (i = 0; i < digit - num.length; i++) {
         zero += '0';
      }
   }
   return zero + num;
}
init();

//보였다 안보였다
var showtimes = document.querySelector(".showtimes");
function toggleModal() {
     showtimes.classList.toggle("show-showtimes");
 }
 /*버튼*/
 $(".hover").mouseleave(
 function() {
   $(this).removeClass("hover");
 }
 );
