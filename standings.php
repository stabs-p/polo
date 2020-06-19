<?php include 'shell.html';?>
    <div style="margin-left:250px" class="w3-main">
        <div class="w3-bar w3-block w3-center">
            <button onclick="showboys()" href="javascript:void(0)" class=" w3-light-blue  w3-hide-large w3-hide-medium w3-btn w3-border" style="width:40%"
                    id="boysbutton" >Boys</button> 
                <button onclick="showgirls()" href="javascript:void(0)" class=" w3-white  w3-hide-large w3-hide-medium w3-btn w3-border" style="width:40%;"
                    id = "girlsbutton" >Girls</button>
    </div> 
        <div class="w3-col l6 m6 w3-padding w3-show w3-hide boys" id= "boys">
            <h3><b>Boys Standings</B></h3>
           <?php include 'functions/stand.php';
           standings('boys')?>
        </div>
          <div class="w3-col l6 m6  w3-padding w3-hide-small girls" id= "girls">
              <h3><b> Girls Standings</B></h3>
                  <?php standings('girls') ?>
        </div>
</div>


  
    
    </html>
