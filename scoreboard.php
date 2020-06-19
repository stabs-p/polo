 
   <?php include 'shell.html'; ?>
       <div style="margin-left:250px; min-height:100%;" class="w3-main w3-container" id='mainContent'> 
         
        <div class="w3-bar w3-block w3-center">
            <button onclick="showboys()" href="javascript:void(0)" class=" w3-light-blue  w3-hide-large w3-hide-medium w3-btn w3-border" style="width:40%"
                    id="boysbutton" >Boys</button> 
                <button onclick="showgirls()" href="javascript:void(0)" class=" w3-white  w3-hide-large w3-hide-medium w3-btn w3-border" style="width:40%;"
                    id = "girlsbutton" >Girls</button>
    </div> 
        <div class="w3-container">
        <div class="w3-col l5 m6 w3-padding-small w3-show  boys" id= "boys0">
            <h3><B>Boys Scores</B></h3>
            
        </div>
          <div class="w3-col l5 m6   w3-padding-small w3-hide-small girls" id= "girls0">
              <h3> <b>Girls Scores</b></h3>
              
        </div>
        <div class='w3-col l2 m2 w3-hide-medium w3-hide-small w3-right'>
                <img src='/images/Tread365logo1.jpg' style='width: 100%; height: auto;'> 
            <img src='/images/GrollLogo1.jpg' style='width: 100%; height: auto;'> 
            <img src='/images/CandClogo1.jpg' style='width: 100%; height: auto;'> 
            <img src='/images/Skyhawks22.gif' style='width: 100%; height: auto;'>
            <img src='/images/GE1.jpg' style='width: 100%; height: auto;'> 
            <img src='/images/tread18a.jpg' style='width: 100%; height: auto;'> 
        
                </div>
        </div>
        <br>
        <div class="w3-container">
        <div class="w3-col l5 m6 w3-padding-small w3-show  boys" id= "boys1">
        </div>
          <div class="w3-col l5 m6   w3-padding-small w3-hide-small girls" id= "girls1">
        </div>
        </div>
        <br>
        <div class="w3-container">
        <div class="w3-col l5 m6 w3-padding-small w3-show  boys" id= "boys2">
        </div>
          <div class="w3-col l5 m6   w3-padding-small w3-hide-small girls" id= "girls2">
        </div>
        </div>
        <br>
         
        </div>
<script>
<?php 
      include 'functions/schedule_function.php';
       schedule('2018-04-06', '2018-04-07', 'boys') ;?>
            
            
<?php schedule('2018-04-06', '2018-04-07', 'girls') ;?>

</script>

<?php     
include 'footer.html';?>