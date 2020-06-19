//for the boy/girl buttons
function showgirls() {
    
    $('#girlsbutton').removeClass("w3-white").addClass("w3-light-blue");
    $('#boysbutton').removeClass("w3-light-blue").addClass("w3-white");
   $('.girls').removeClass("w3-hide-small").addClass('w3-show');
    $('.boys').removeClass("w3-show").addClass('w3-hide-small');
}
  function showboys() {
    $('#boysbutton').removeClass("w3-white").addClass("w3-light-blue");
    $('#girlsbutton').removeClass("w3-light-blue").addClass("w3-white");
   $('.boys').removeClass("w3-hide-small").addClass('w3-show');
    $('.girls').removeClass("w3-show").addClass('w3-hide-small');
        }          
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") === -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");}}


// cript to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
    }
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
//for modal selections
function openTeam(evt, teamName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("team");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-light-blue", ""); 
  }
  document.getElementById(teamName).style.display = "block";
  evt.currentTarget.className += " w3-light-blue";
}

function reset() {
       $('#teambuttons').empty();
        $('#teamgames').empty();
        $('#teamgames').load("team_cookie.php");}
        
function modalDisplay() {
   var x = document.getElementsByClassName("team");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";}
  var   tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-light-blue", ""); 
  }
    document.getElementById('id01').style.display='block'; 
    document.getElementById('teamgames').firstChild.style.display = 'block';
    document.getElementById('teambuttons').firstChild.className += " w3-light-blue";
}
function modalClose() {
    document.getElementById('id01').style.display='none';
    }