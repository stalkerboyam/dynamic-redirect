<?php

$url = 'https://www.google.com/';
$seconds = 5;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Redirect Page</title>
</head>
<body>
<div id="timer"></div>

<script type="text/javascript">
    var seconds =  <?= $seconds ?>;
    var seconds_ =<?= $seconds ?>;
    function startTimer(display) {

        setInterval(function () {
            seconds--;
            display.textContent = "";
            display.innerHTML="You will redirect in " + seconds + "  seconds <br>" +
                "if this page doesn't forward you in " + seconds_ + " seconds, please <a href='<?= $url ?>'>click here</a> "

            if (seconds <= 0){
                window.location.href = "<?=$url ?>";
                display.innerHTML="";
            }



        }, 1000);


    }

    window.onload = function () {
        document.getElementById("timer").innerHTML = "You will redirect in " + seconds + "  seconds <br>" +
            "if this page doesn't forward you in " + seconds_ + " seconds, please <a href='<?= $url ?>'>click here</a> ";
        display = document.querySelector('#timer');

        startTimer(display);
    };

</script>
</body>
</html>