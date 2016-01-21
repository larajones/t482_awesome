<?php
	#start session
	session_start();
	
	if(!isset($_SESSION['username'])){
		header('Location: login.php');
	}

	?>
<?php  include ('config/setup.php'); ?>
<!DOCTYPE html>
<html>
<head>
     <title> <?php  echo $page['title']. ' | ' . $site_title; ?>  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php  include ('config/css.php'); ?>
    <?php  include ('config/js.php'); ?>
</head>
<body>
    <?php  include (D_TEMPLATE.'/navigation.php'); ?>
    <h1>Admin Dashboard</h1>
    <div class = "row">
        <div class = "col-md-3">
            <div class = "list-group">     
            <?php
	
	if(isset($_POST['submitted']) == 1) {
		$title = mysqli_real_escape_string($dbc, $_POST['title']);
		$label = mysqli_real_escape_string($dbc, $_POST['label']);
		$header = mysqli_real_escape_string($dbc, $_POST['header']);
		$body = mysqli_real_escape_string($dbc, $_POST['body']);
		//if form submitted
		$query = "INSERT INTO pages (user, title, label, header, body) VALUES ( $_POST[user],'$title', '$label', '$header','$body')";
		$result = mysqli_query($dbc, $query);
		
		if($result){
			$message =  '<p>Page was added</p>';
		} else {
			$message =  '<p>Page could not be added because: '.mysqli_error($dbc);
			$message .=  $query. '<p>';
		}

	}

	?>        
            <!--get list of pages from pages table -->
            <?php 
	$query = "SELECT * FROM pages ORDER BY title ASC";
	$results = mysqli_query($dbc, $query);
	while($page_list = mysqli_fetch_assoc($results))  {
		$blurb = substr(strip_tags($page_list['body']), 0,160)                           ?>
<a class = "list-group-item" href="#"><h4 class="list-group-item-heading"><?php  echo $page_list['title']; ?></h4>
<!--create description using substring function -->
<p class = "list-group-item-text"><?php  echo $blurb; ?></p></a>
                  <?php  } ?>     
            </div>
        </div>
        <div class = "col-md-9">
            <?php
	
	if(isset($message)){
		echo $message;
	}

	?>
        <form action = "index.php" method = "post" role = "form">
            <!--form to create pages for site -->
            <div class = "form-group">
                <label for="title">Page Title: </label>
                <input class = "form-control" type = "text" name = "title" id = "title" placeholder = "Page Title"></input>
              </div>
                <div class = "form-group">
                <label for="user">User</label>
                <select class = "form-control" name = "user" id = "user">
                    <option value = "0">No User</option>
                    <?php
	$query = "SELECT email FROM users ORDER BY first ASC";
	$results = mysqli_query($dbc, $query);
	while ($user_list = mysqli_fetch_assoc($results)) {
		$user_data = data_user($dbc, $user_list['id']);
		?>
                        <option value = "<?php  echo $user_data['id']  ?>"><?php  echo  $user_data['fullname']; ?></option>
              <?php  } ?>
                    ?>
                </select>
              </div>
                  <div class = "form-group">
                <label for="title">Page Label: </label>
                <input class = "form-control" type = "text" name = "label" id = "label" placeholder = "Page Label"></input>
              </div>
                     <div class = "form-group">
                <label for="title">Page Header: </label>
                <input class = "form-control" type = "text" name = "header" id = "header" placeholder = "Page Header"></input>
              </div>
                     <div class = "form-group">
                <label for="title">Page Body: </label>
                <textarea class = "form-control" name = "body" id = "body" rows = "8" placeholder = "Page body"></textarea>
              </div>
            <button type = "submit" class = "btn btn-default">Save</button>
            <input type = "hidden" name = "submitted" value = "1">
        </form>    
        </div>
    </div>
    <?php  include (D_TEMPLATE.'/footer.php'); ?>
    <?php 
	
	if($debug == 1)  {
		include ('widgets/debug.php');
	}

	?>
</body>
</html>
