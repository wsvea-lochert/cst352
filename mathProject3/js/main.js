window.onload = drawBoth;

var stay = 0;
var stayloss = 0;

var switchPick = 0;
var switchLoss = 0;

var playTime;


function reset(){
    location.reload();
}

function pickRandomDoor()
{
    return Math.floor(Math.random() * 3);
}

function game(changePick)
{
    var door = ["goat", "goat", "goat"];
    randomDoor = pickRandomDoor();
    door[randomDoor] = "car";

    var playersPick = pickRandomDoor();
    var montysdoor = montysDoor(playersPick, door);
    
    if(changePick == true)
    {
        playersPick = playerChangePick(playersPick, montysdoor, door);
        //console.log("Players new Choice: " + playersPick);
    }

    return door[playersPick];
}


function montysDoor(playersChoice, doorArray)
{
    while(true)
    {
        var montysPick = pickRandomDoor();

        if(montysPick == playersChoice)
        {
            continue;
        }

        if(doorArray[montysPick] == "car")
        {
            continue;
        }
        return montysPick;
    }
}

function playerChangePick(playersPick, montysPick, door)
{
    for(var i in door)
    {
        if(i == playersPick){
            continue;
        }

        if(i == montysPick){
            continue;
        }
        return i;
    }
}


function playGame(){
    if(playTime.value == "")
    {
        document.querySelector("#error").innerHTML = "Select simulation amount.";
        return;
    }

    for(var i = 0; i < playTime.value; i++)
    {
        if(game(true) == "car")
        {
            switchPick++;
        }
        else{
            switchLoss++;
        }
    }

    for(var i = 0; i < playTime.value; i++)
    {
        if(game(false) == "car")
        {
            stay++;
        }
        else
        {
            stayloss++;
        }
    }
    document.querySelector("#error").innerHTML = "";

    document.querySelector("#btnSubmit").classList.add("disabled");
    document.querySelector("#btnReset").classList.remove("disabled");
    document.querySelector("#modalBtn2").classList.remove("disabled");

    document.querySelector("#spanOriginal").innerHTML = "Win rate: " + stay/playTime.value;
    document.querySelector("#spanSwitch").innerHTML = "Win rate: " + switchPick/playTime.value;
    

    drawGraphSwitch();
    drawGraphStay();

    stay = 0;
    stayloss = 0;
    switchPick = 0;
    switchLoss = 0;
}

function drawGraphSwitch(){

    window.chartColors = {
        
        Stay: 'rgb(66, 134, 244)',
        Switch: 'rgb(0, 31, 63)'
    }

    var ctx = document.getElementById('myChart').getContext('2d');

    var myPieChart = new Chart(ctx,{
        
        type: 'pie',
        data: {
            datasets: [{
                data: [switchPick, switchLoss],
                backgroundColor: [
                    window.chartColors.Stay,
                    window.chartColors.Switch
                ]
            }],
        
            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'win',
                'loss',
            ]
        },
        //options: backgroundColor = 'red'

        
    });
}

function drawGraphStay(){

    window.chartColors = {
        Stay: 'rgb(66, 134, 244)',
        Switch: 'rgb(0, 31, 63)'
    }

    var ctx = document.getElementById('stayChart').getContext('2d');

    var myPieChart = new Chart(ctx,{
        
        type: 'pie',
        data: {
            datasets: [{
                data: [stay, stayloss],
                backgroundColor: [
                    window.chartColors.Stay,
                    window.chartColors.Switch
                ]
            }],
        
            // These labels appear in the legend and in the tooltips when hovering different arcs
            labels: [
                'win',
                'loss',
            ]
        },        
    });
}

function drawBoth(){
    drawGraphStay();
    drawGraphSwitch();
    playTime = document.querySelector("#dropdown");
}

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, {});
  });