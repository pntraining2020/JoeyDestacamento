<!-- 
Copyright ValyTGV
-->
<html>

<head>
<title>Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous">
</script>
<style>
    @import 'https://fonts.googleapis.com/css?family=Nova+Mono|Eczar';
#body {
  background-color: white;
  color: black;
}

#div1 {
  /*background-color: red;*/
  transform: translateY(33%);
}

#time {
  font-family: 'Nova Mono', monospace;
  font-size: 2vw;
  text-align: center;
  /* text-shadow: 0px 0px 20px; */
}

#date {
  font-family: 'Eczar', serif;
  font-size: 4vmin;
  text-align: center;
  /* text-shadow: 0px 0px 20px blue; */
}

</style>
</head>

<body id="body" class="container-fluid">
<form action = "/create" method = "post">
<div class='form-group'>
    <label for="user">Names:</label>
    <form action="select" name="user">
        <select class="form-control" name="user">
            <option value="Yol">Yol</option>
            <option value="Toper">Toper</option>
            <option value="Joey">Joey</option>
            <option value="Bonjing">Bonjing</option>
        </select>
    </form>
</div>
  <div id="div1">
    <p id="time"></p>
    <p id="date"></p>
</div>
<div>
    <br><br><br><br>
    <center>
        <button id="timeIn" type="button" class="btn btn-primary" onclick="getTimeStart()">Clock In</button>
        <strong><span id="timeCheckIn"></span></strong>
    </center>
</div>
<div>
    <label for="break"><strong>BREAK:</strong></label>
    <p><button id="start" type="button" class="btn btn-primary" onclick="getBreakStart()">START</button><span id="breakstart">   </span></p><br>
    <p><button id="end" type="button" class="btn btn-primary" onclick="getBreakEnd()">END</button><span id="breakend">   </span></p><br>
</div>
<br>
<br>
<br>
<div>
<center>
    <button type="button" class="btn btn-primary" onclick="clockOut()">Check Out</button> <span id="out"></span>
</center>
</div>
<hr>
<div>
<h3 id='totalhours'>TOTAL TIME WORKED: <span id='totalhours'><label id="hours">00</label>:<label id="minutes">00</label></span></h3>
<h3>HOURS LEFT BEFORE TIMEOUT: <span id='timeleft'>  hh:mm</span></h3>
<h3>TOTAL BREAKS USED: <span>  hh:mm</span></h3>
</div>

</div>
</form>

</body>
<script>
    window.setInterval(ut, 1000);
    var hoursLabel = document.getElementById("hours");
    var minutesLabel = document.getElementById("minutes");
    var totalMinutes = 0;
    setInterval(setTime, 60000);

    function ut() {
        var today = new Date();
        var hh = today.getHours();
        var mm = today.getMinutes();
        
        document.getElementById("time").innerHTML = hh + ":" + mm ;
        document.getElementById("date").innerHTML = today.toLocaleDateString();
    }

    function getTimeStart(){
        var today = new Date();
        var hh = today.getHours();
        var mm = today.getMinutes();
        var time = hh +":"+ mm;
        var timeIn = document.getElementById("timeCheckIn").innerHTML = pad(hh + ":" + mm);
        return timeIn;

    }

    function setTime() {
        ++totalMinutes;
        hoursLabel.innerHTML = pad(totalMinutes % 60);
        minutesLabel.innerHTML = pad(totalMinutes % 60);
    }

    function pad(val) {
        var valString = val + "";
        if (valString.length < 2) {
            return "0" + valString;
        } else {
            return valString;
        }
    }

    function getBreakStart(){
        var today = new Date();
        var hh = today.getHours();
        var mm = today.getMinutes();
        var time = hh +":"+ mm;
        var breakStart = document.getElementById("breakstart").innerHTML = hh + ":" + mm ;
        return breakStart;
       
    }
    function getBreakEnd(){
        var today = new Date();
        var hh = today.getHours();
        var mm = today.getMinutes();
        var time = hh +":"+ mm;
        var breakEnd = document.getElementById("breakend").innerHTML = hh + ":" + mm ;
        return breakEnd;
    }

    function clockOut(){
        var today = new Date();
        var hh = today.getHours();
        var mm = today.getMinutes();
        var time = hh +":"+ mm;
        var timeOut = document.getElementById("out").innerHTML = pad(hh + ":" + mm);
        return timeOut;
    }
    

    


</script>

</html>
