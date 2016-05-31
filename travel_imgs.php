<?php $rwLoop=1;
      $rwcnt=1;
      
       while($rowTravlImg=mysql_fetch_array($resultTravelTitle)){
           if($rwLoop){
            echo '<div class="row" style="margin-top:2cm;">';
            $rwLoop=0;
           }
           echo '<div class="col-sm-4" ><h3>'.$rowTravlImg['trvlTitle'].' <img src='.$rowTravlImg['trvlimgPath'].' class="img-thumbnail" alt='.$rowTravlImg['trvlTitle'].' width="304" height="236"></h3></div>
        ';
           if($rwcnt==3){
               echo '</div>';
               //echo '<br/>';
               $rwLoop=1;
           }
       }
      ?>