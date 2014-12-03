$(function() {
    getStatus();
});

function getStatus() {
    $('section').load('timeUntilNewYear.php');
    setInterval("getStatus()",100);
}