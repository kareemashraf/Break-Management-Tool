 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Break System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row" style="margin-top: 50px;">
      <div class="col-sm-4">
		<img src="dd" width="90px" />

      </div>

      <div class="col-sm-4" >
      <center ><p><h2>IT HD</br> Break Tool Management</h2></p></center >
      <?php echo form_open('welcome/index'); ?>
              <div class="form-group">
                <label for="email">username:</label>
                <input type="text" class="form-control" id="username" name="username">
              </div>
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" name="password">
              </div>
              
              <button type="submit" class="btn btn-warning">Login</button>
        </form>
      </div>

      <div class="col-sm-4">

      <?php if (!empty($data)) {
      	var_dump($data);
      } ?>
      </div>
    </div>
</div>

</body>
</html>