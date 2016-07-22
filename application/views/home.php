<!DOCTYPE html>
<html lang="en">
<head>
  <title>Select your Shift Breaks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
  body .btn {
    width : 200px;
  }
  </style>
</head>
<body>
<div id="clock"></div>
<div class="container" style="margin-top: 100px;">
  <h2>Select your Shift  <?php  
 
    $ar[] = '';
    if (!empty($times)) {
      foreach ($times as $row) {
        $ar[] = $row->time;         
      }
    }
    
  

  if (!empty($sessions["username"])) {
    $user   = $sessions["username"]->username; 
    $ftid     = $sessions["username"]->ftid;
    $pims   = $sessions["username"]->pims;
    $username =  explode(".", $sessions["username"]->username);
    $username1= ucfirst($username[0]);
  echo "<a style='color: blue;'>".$username1."</a> for ".date("l")." ".date("M-d")." <i id='notifier'></i> </br>"; 
  }
?>
</h2> 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">7:00 to 4:00</a></li>
    <li><a data-toggle="tab" href="#menu2">8:00 to 5:00</a></li>
    <li><a data-toggle="tab" href="#menu3">9:00 to 6:00</a></li>
    <li><a data-toggle="tab" href="#menu4">10:00 to 7:00</a></li>
    <li><a data-toggle="tab" href="#menu5">11:00 to 8:00</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Instructions:</h3>
      <p>Kindly Select your shift from the above tabs then select your desired break times</br>Dont Forget the Plazza Marketing in your calls ;)</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>7:00 to 4:00</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <?php
        /*$min=array("00","15","30","45");
        for ($i=8; $i < 15 ; $i++) { 
          foreach ($min as $v) {
            print "$i:$v\n";
          }
        }*/
    echo "<table class='table'>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>";
  
        for($i=8*60;$i<15*60;$i+=15){
          $min  =  ($i/60-floor($i/60))*60 ;
          $hour = floor($i/60);
            if ($min == 0) {
              $min = '00';
            } 
            if ($hour == 13) {
              $hour = '1';
             }elseif ($hour == 14) {
              $hour = '2';
             }elseif ($hour == 15) {
              $hour = '3';
             } 
             $time = $hour . ":" . $min;

            if (in_array($time, $ar)) {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-success glyphicon glyphicon-ok'> ".$time."</button></td>";
            } else {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-primary glyphicon glyphicon-time'> ".$time."</button></td>";
            }  
         
          if ($min  == 45) {
            echo "</tr>";
          }
        }

        echo "</table>";

      ?>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>8:00 to 5:00</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <?php        
    echo "<table class='table'>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>";
        for($i=9*60;$i<16*60;$i+=15){
          $min  =  ($i/60-floor($i/60))*60 ;
          $hour = floor($i/60);
            if ($min == 0) {
              $min = '00';
            } 
            if ($hour == 13) {
              $hour = '1';
             }elseif ($hour == 14) {
              $hour = '2';
             }elseif ($hour == 15) {
              $hour = '3';
             }elseif ($hour == 16) {
              $hour = '4';
             }elseif ($hour == 17) {
              $hour = '5';
             }elseif ($hour == 18) {
              $hour = '6';
             }elseif ($hour == 19) {
              $hour = '7';
             } 
          $time = $hour . ":" . $min;
          if (in_array($time, $ar)) {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-success glyphicon glyphicon-ok'> ".$time."</button></td>";
            } else {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-primary glyphicon glyphicon-time'> ".$time."</button></td>";
            }  
          if ($min  == 45) {
            echo "</tr>";
          }
        }
        echo "</table>";
      ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>9:00 to 6:00</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <?php        
    echo "<table class='table'>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>";
        for($i=10*60;$i<17*60;$i+=15){
          $min  =  ($i/60-floor($i/60))*60 ;
          $hour = floor($i/60);
            if ($min == 0) {
              $min = '00';
            } 
            if ($hour == 13) {
              $hour = '1';
             }elseif ($hour == 14) {
              $hour = '2';
             }elseif ($hour == 15) {
              $hour = '3';
             }elseif ($hour == 16) {
              $hour = '4';
             }elseif ($hour == 17) {
              $hour = '5';
             }elseif ($hour == 18) {
              $hour = '6';
             }elseif ($hour == 19) {
              $hour = '7';
             } 
          $time = $hour . ":" . $min;
          if (in_array($time, $ar)) {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-success glyphicon glyphicon-ok'> ".$time."</button></td>";
            } else {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-primary glyphicon glyphicon-time'> ".$time."</button></td>";
            }  
          if ($min  == 45) {
            echo "</tr>";
          }
        }
        echo "</table>";
      ?>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>10:00 to 7:00</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <?php        
    echo "<table class='table'>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>";
        for($i=11*60;$i<18*60;$i+=15){
          $min  =  ($i/60-floor($i/60))*60 ;
          $hour = floor($i/60);
            if ($min == 0) {
              $min = '00';
            } 
            if ($hour == 13) {
              $hour = '1';
             }elseif ($hour == 14) {
              $hour = '2';
             }elseif ($hour == 15) {
              $hour = '3';
             }elseif ($hour == 16) {
              $hour = '4';
             }elseif ($hour == 17) {
              $hour = '5';
             }elseif ($hour == 18) {
              $hour = '6';
             }elseif ($hour == 19) {
              $hour = '7';
             } 
          $time = $hour . ":" . $min;
          if (in_array($time, $ar)) {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-success glyphicon glyphicon-ok'> ".$time."</button></td>";
            } else {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-primary glyphicon glyphicon-time'> ".$time."</button></td>";
            }  
          if ($min  == 45) {
            echo "</tr>";
          }
        }
        echo "</table>";
      ?>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>11:00 to 8:00</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      <?php        
    echo "<table class='table'>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        <tr>";
        for($i=12*60;$i<19*60;$i+=15){
          $min  =  ($i/60-floor($i/60))*60 ;
          $hour = floor($i/60);
            if ($min == 0) {
              $min = '00';
            } 
            if ($hour == 13) {
              $hour = '1';
             }elseif ($hour == 14) {
              $hour = '2';
             }elseif ($hour == 15) {
              $hour = '3';
             }elseif ($hour == 16) {
              $hour = '4';
             }elseif ($hour == 17) {
              $hour = '5';
             }elseif ($hour == 18) {
              $hour = '6';
             }elseif ($hour == 19) {
              $hour = '7';
             } 
          $time = $hour . ":" . $min;
          if (in_array($time, $ar)) {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-success glyphicon glyphicon-ok'> ".$time."</button></td>";
            } else {
       echo "<td><button type='button' value= '".$time."' id='". $time."' class='btn btn-primary glyphicon glyphicon-time'> ".$time."</button></td>";
            }  
          if ($min  == 45) {
            echo "</tr>";
          }
        }
        echo "</table>";
      ?>
    </div>
  </div>
</div>

</body>
<footer>
  <script type="text/javascript">
    $( ".btn" ).click(function() {
    $( this ).toggleClass( "glyphicon-time")
    $( this ).toggleClass( "glyphicon-ok")
    $( this ).toggleClass( "btn-primary")
    $( this ).toggleClass( "btn-success")

    var test = this
    $.ajax({
                      type: 'POST',
                      url: '<?php echo site_url().'/welcome/save' ?>', 
                      data: {username: '<?php echo $user; ?>',time: this.value,ftid: '<?php echo $ftid; ?>',pims: '<?php echo $pims;?>'},
                      success: function(result) {
                          $("#notifier").html("<i style='color: green; font-size: large;'>"+result+"</i>")

                        if (result == 'Exceeded Maximum') {
                          $( test ).toggleClass( "btn-danger")
                          $( test ).toggleClass( "glyphicon-remove")
                          $("#notifier").html("<i style='color: red; font-size: large;'>Exceeded Maximum</i>")
                          
                        }
                      }  
              });
      
    });


  

$(document).ready(function(){
  

  setInterval(function(){ 
     var d    = new Date()
     
      $.ajax({
                      type: 'POST',
                      url: '<?php echo site_url().'/welcome/alert' ?>', 
                      data: {times: d.getHours()+":"+d.getMinutes()},
                      success: function(result) {
                        console.log(result)
                        if (result == 'break') { 
                          alert('This is your Break Time!') 
                          
                        }
                        
                      }  
                });

  }, 3000);

});
  </script>
</footer>

</html>
