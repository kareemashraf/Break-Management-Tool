<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript">
    	$(document).ready(function() {
    		$('#example').DataTable();
		} );
    </script>

    <title>Admin</title>
	<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php  echo base_url('admin'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php  echo base_url('admin'); ?>/css/small-business.css" rel="stylesheet">

    <style type="text/css">
    body #icon {
        width: 60px;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);


      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Shift', '7', '8', '9', '10', '11', 'test'],
         ['Agent/05',  165,      938,         522,             998,           450,      614.6],
         ['Agent/06',  135,      1120,        599,             1268,          288,      682],
         ['Agent/07',  157,      1167,        587,             807,           397,      623],
         ['Agent/08',  139,      1110,        615,             968,           215,      609.4],
         ['Agent/09',  136,      691,         629,             1026,          366,      569.6]
      ]);

    var options = {
      title : 'Daily Shift Break Report',
      vAxis: {title: 'hours'},
      hAxis: {title: 'shift'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
    </script>
<!-- Charts -->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php  echo base_url('img/orange.png'); ?>" id="icon">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Agents Management</a>
                    </li>
                    <li>
                        <a href="#">Breaks taken</a>
                    </li>
                    <li>
                        <a href="#">test</a>
                    </li>
                    <li>
                        <a style="font-size: x-large;" href="#">BETA Version</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <!-- <img class="img-responsive img-rounded" src="http://placehold.it/900x350" alt=""> -->
                <div id="chart_div" style="width: 800px; height: 400px;"></div>
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>IT HelpDesk Break Managemet</h1>
                <p>This is a test for BMT Admin portal, It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this Method according to your needs!</p>
                <a class="btn btn-primary btn-lg" href="#">Agents in Action!</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well ">
    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>shift</th>
                <th>Month</th>
                <th>Add/Edit</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Shift</th>
                <th>Month</th>
            </tr>
        </tfoot>
        <tbody>
        	<tr>
                <td><input type="text" name="agents_name" id="agent" placeholder="agents name"></td>
                <td><select name="shift" style="width: 300px;" class="form-control" id="shift">
                	<option value=""> Please Select a Shift </option>
                	<option value="7"> from 7 to 4 </option>
                	<option value="8"> from 8 to 5 </option>
                	<option value="9"> from 9 to 6 </option>
                	<option value="10"> from 10 to 7 </option>
                	<option value="11"> from 11 to 8 </option>
                </select></td>
                <td><h3><?php echo date('M'); ?></h3></td>
                <td><button name="add" id="add" class="btn btn-primary">ADD</button></td>
            </tr>
            <?php

	            foreach ($results as $result) {
	            	echo "<tr>";
	            	echo "<td>";
	            	echo "<div id='".$result['user_name']."'>".$result['user_name']."</div>";
	            	echo "</td>";
	            	echo "<td>";
	            	echo "<div id='".$result['shift']."'>".$result['shift']."</div>";
	            	echo "</td>";
	            	echo "<td>";
	            	echo "<div id='".$result['month']."'>".$result['month']."</div>";
	            	echo "</td>";
	            	echo "<td>";
	            	echo "<button id='".$result['user_name']."'  class='btn btn-danger delete'>Delete</button>";
	            	echo "</td>";
	            	echo "</tr>";
	            }
            ?>
        </tbody>
    </table>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
                <h2>Heading 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Orange Business Services, IT Helpdesk 2016 (Break Management Tool)</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php  echo base_url('admin'); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php  echo base_url('admin'); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	  <script>
		  $(function(){
		    $("#example").dataTable();
		  })
	  </script>

	  <script type="text/javascript">

	  $(function(){
		    
	  		// when the add button is pressed
		  	$( "#add" ).click(function() {
		  		var agent  = $("#agent").val()
	 			var shift  = $("#shift").val()

		  				$.ajax({
	                      type: 'POST',
	                      url: '<?php echo site_url().'/welcome/add_agents' ?>', 
	                      data: {agent: agent,shift: shift},
	                      success: function(result) {
	                         alert(result)
	                         location.reload(); 
	                        }
	              		});
		  			

			});
		  	//---------------------------->
		  	
		  	// when the Delete button is pressed 

		  	$( ".delete" ).click(function() {
		  		var agent  = $(this).attr("id");

		  		var r = confirm('are you sure you want to delete '+agent+' Shift ?' );
						if (r == true) {
							    $.ajax({
			                      type: 'POST',
			                      url: '<?php echo site_url().'/welcome/delete_agents' ?>', 
			                      data: {agent: agent},
			                      success: function(result) {
			                         location.reload(); 
			                        }
		              			});

						} else {
						   // in case the user pressed Cancel
						} 
		  
			});
			//------------------------------>


		})
	  
	  </script>

</body>

</html>
