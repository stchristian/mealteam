var countDownDate =  new Date("2017/10/30").getTime();

function getRemainingTime(){
  var now = new Date().getTime();
  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  return {
    'total': distance,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function updateCountdownTimer(){
  var remaining = getRemainingTime();
  if(remaining.total > 0){
    document.getElementById('days').innerHTML = remaining.days;
    document.getElementById('hours').innerHTML = remaining.hours;
    document.getElementById('minutes').innerHTML = remaining.minutes;
  }
  else{
    clearInterval(countdownTimer);
  }
}

updateCountdownTimer();
var countdownTimer = setInterval(updateCountdownTimer,1000);

var itemsShowed = false;
function showMenuItems(){
  if(itemsShowed){
    document.querySelector(".navbar-wrapper").style.height = "500px";
    document.querySelector(".navbar").style.display = "block";
    document.querySelector(".navbar a").style.display = "block";
    itemsShowed = true;
    console.log("ASD");
  }
}
