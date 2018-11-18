

var dropdown = document.querySelector("#dropdown");
var form = document.querySelector("#form");
var dropdownGrade = document.querySelector("#dropdownGrade");
var pointCounter = 0;

form.addEventListener('submit', e =>{
    e.preventDefault();
    //console.log(dropdown.value);

    // TODO: not show correct or not correct if there is a missing field.

    /* ---------- Multiple Choise code here! ---------- */
    multipleChoise();

    /* ---------- Dropdown questions code here! ---------- */
    dropdownMenue();

    /*---------- Code for fil in the blank here! ----------*/
    filInTheBlank();
    
    /*---------- checkbox multiplechoice ----------*/
    checkboxMultipleChoise();

    /*---------- Cylinders question Jquery ----------*/
    cylindersCheck();

    /*---------- True or false section JQuery ----------*/
    trueOrFalse();

    /*---------- lock submit button and display score ----------*/
    calcProcentAndLock();
});

// Multiple choice q1 JQUERY.
function multipleChoise(){
    if($('#bmw').prop('checked')){
        $('#multRadio').removeClass('red-text');
        $('#multRadio').addClass('green-text');
        $('#multRadio').html("Correct Awnser! <i class='material-icons'>sentiment_very_satisfied</i> <br>");
        pointCounter++;
        // log if the awnser was correct
        console.log("Multiple choise, correct awnser");
    }
    else if($('#audi').prop('checked') || $('#ferrari').prop('checked') || $('#vw').prop('checked')){
        $('#multRadio').html("Wrong awnser, the correct was BMW.. <i class='material-icons'>sentiment_very_dissatisfied</i> <br>");
        $('#multRadio').removeClass('green-text');
        $('#multRadio').addClass('red-text');
        console.log("wroing awnser on multiple choise");
    }
    else{
        $('#multRadio').removeClass('green-text');
        $('#multRadio').addClass('red-text');
        $('#multRadio').html("Select an option..");
        console.log("Nothing was selected on multiple choise");
        return;
    }
}

// dropdownMenu q2 JAVASCRIPT.
function dropdownMenue() {
    if(dropdown.value == 1){
        dropdownGrade.classList.remove("black-text");
        dropdownGrade.innerHTML = "Correct awnser! <i class='material-icons'>sentiment_very_satisfied</i> <br>";
        dropdownGrade.classList.add("green-text");
        pointCounter++;
        console.log("Wrong awnser on dropdown menu");
    }
    else if(dropdown.value == ""){
        dropdownGrade.classList.remove("black-text");
        dropdownGrade.classList.add("red-text");
        dropdownGrade.innerHTML = "Nothing was selected, no point where given";
        console.log("Nothing was selected on dropdown");
        return;
    }
    else{
        dropdownGrade.classList.remove("black-text");
        dropdownGrade.classList.remove("green-text");
        dropdownGrade.innerHTML = "Wrong, the awnser was V10 <i class='material-icons'>sentiment_very_dissatisfied</i> <br>";
        dropdownGrade.classList.add("red-text");

        console.log("wrong is selected on dropdown");
    }
}

// Fil in the blank q3 JAVASCRIPT.
function filInTheBlank() {
    let fillIn = document.querySelector('#fillInTheBlank');
    let fillInAwnser = document.querySelector('#fillInAwnser');

    if(fillIn.value == ""){
        console.log("empty fill in the blank");
        fillInAwnser.classList.remove("black-text");
        fillInAwnser.classList.remove("green-text");
        fillInAwnser.classList.add("red-text");
        fillInAwnser.innerHTML = "Field was empty, no point where given";
        return;
    }
    else if(fillIn.value == "american"){
        console.log("corret fill in!");
        fillInAwnser.classList.remove("red-text");
        fillInAwnser.classList.remove("black-text");
        fillInAwnser.classList.add("green-text");
        fillInAwnser.innerHTML = "Correct awnser! <i class='material-icons'>sentiment_very_satisfied</i> <br>";
        pointCounter++;
    }
    else{
        console.log("Wrong fill in!");
        fillInAwnser.classList.remove("green-text");
        fillInAwnser.classList.remove("black-text");
        fillInAwnser.classList.add("red-text");
        fillInAwnser.innerHTML = "Wrong awnser, the correct awnser is 'american' <i class='material-icons'>sentiment_very_dissatisfied</i> <br>";
    }
}

// checkbox check controller q4 JavaScript.
function checkboxMultipleChoise() {

    var m5 = document.querySelector('#m5');
    var a3 = document.querySelector('#a3');
    var malibu = document.querySelector('#malibu');
    var x5 = document.querySelector('#x5');


    var m5Check = false;
    var x5Check = false;
    var a3Check = false;
    var malibuCheck = false;


    if(m5.checked == true){
        m5Check = true;
        pointCounter+=0.5;
    }
    if(x5.checked == true){
        x5Check = true;
        pointCounter+=0.5;
    }

    if(a3.checked == true){
        a3Check = true;
    }
    if(malibu.checked == true){
        malibuCheck = true;
        console.log("malibuCheck er true");
    }

    
    awnserPrint(m5Check, x5Check, a3Check, malibuCheck);
}

//Awnser printer for multiple checkboxes q4 JavaScript.
function awnserPrint(m5, x5, a3, malibu) {
    var checkboxCorrectAwnser = document.querySelector('#checkboxCorrectAwnser');
    var checkboxWrongAwnser = document.querySelector('#checkboxWrongAwnser');

    
    if (m5 == true) {
        checkboxCorrectAwnser.innerHTML += " M5 is correct! <i class='material-icons'>sentiment_very_satisfied</i> <br>";
    }
    if (x5 == true) {
        checkboxCorrectAwnser.innerHTML += " x5 is correct! <i class='material-icons'>sentiment_very_satisfied</i> <br>";
    }
    if(a3 == true){
        checkboxWrongAwnser.innerHTML += " A3 is not correct!  M5 and X5 is the correct awnser <i class='material-icons'>sentiment_very_dissatisfied</i> <br>";
    }
    if(malibu == true){
        checkboxWrongAwnser.innerHTML += " Malibu is not correct! M5 and X5 is the correct awnser. <i class='material-icons'>sentiment_very_dissatisfied</i> <br>";
        return;
    }
    if(m5 == false && a3 == false && x5 == false && m5 == false){
        checkboxWrongAwnser.innerHTML += "Nothing selected";
        return;
    }
}

// Cylinder check Jquery
function cylindersCheck() {
    var input = $("#cylindersInput");

    if(input.val() == 6){
        console.log(input.val());
        $("#cylindersAwnserC").html("Correct awnser!  <i class='material-icons'>sentiment_very_satisfied</i> <br>");
        pointCounter++;
    }
    else{
        $("#cylindersAwnserF").html("Wrong awnser, the correct is 6 cylinders! <i class='material-icons'>sentiment_very_dissatisfied</i> <br>");
    }
}

// check scores in true or false JQuery.
function trueOrFalse(){
    //console.log($("#switch1").prop('checked'));
    var switch1 = false;
    var switch2 = false;
    var switch3 = false;

    if($("#switch1").prop('checked')){
         switch1 = true;
         pointCounter += 0.5;
    }
    if($("#switch2").prop('checked')){
        switch2 = true;
    }else{
        pointCounter += 0.5;
    }
    trueOrFalseCheck(switch1, switch2);
    
}

// true or false printer JQuery.
function trueOrFalseCheck(s1, s2, s3) {
    if (s1) {
        console.log("all correct true");
        $("#s1T").html(" <br> This is correct! <i class='material-icons'>sentiment_very_satisfied</i> <br>");
    }
    else{
        //s1 false
        $("#s1F").html(" <br> This is false! <i class='material-icons'>sentiment_very_dissatisfied</i> <br>");
    }
    if (s2) {
        $("#s2F").html(" <br> false, there is not! <i class='material-icons'>sentiment_very_dissatisfied</i> <br>");
    }
    else{
        //s2 false
        $("#s2T").html(" <br> This is correct! <i class='material-icons'>sentiment_very_satisfied</i> <br>");
    }

    
    
}

// calculate and print score then lock submit btn and unlock try agien btn.
function calcProcentAndLock(){
    var total = (pointCounter/6)*100;
    document.querySelector("#score").innerHTML +=  parseFloat(total).toFixed(2);
    document.querySelector("#score").innerHTML += "%";

    if (total >= 80) {
        console.log("hei");
        document.querySelector("#grats").innerHTML = "Congrats you got over 80%!";
    }

    document.querySelector("#btnSubmit").classList.add('disabled');
    document.querySelector("#btnTryAgien").classList.remove('disabled');
}

// refresh page to clean quiz.
function reload(){
    window.location.reload();
}

// Initialize materiallize freamework
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});
  });
