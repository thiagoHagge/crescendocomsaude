var audioClick = new Audio('audio/click.mp3')

$('body').click(function () {
    audioClick.play();
})