function currentYear() {
    var date = new Date();
    var year = date.getFullYear();
    var currentYear = document.getElementById('current-year').innerHTML = year;
}
