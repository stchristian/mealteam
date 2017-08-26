var dateObject = new Date("2017/10/30");
var countDownDate =  dateObject.getTime();
var weekdays = [
    "hétfő",
    "kedd",
    "szerda",
    "csütörtök",
    "péntek",
    "szombat",
    "vasárnap",
];
var months = [
    "január",
    "február",
    "március",
    "április",
    "május",
    "június",
    "július",
    "augusztus",
    "szeptember",
    "október",
    "november",
    "december"
]

document.getElementById("gameDate").innerHTML = months[dateObject.getMonth()] + " " + dateObject.getDate() + ". " + weekdays[dateObject.getDay()];

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
