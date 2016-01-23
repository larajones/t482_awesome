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
        
                
                
            <?php
	
	if(isset($_POST['submitted']) == 1) {
		$title = mysqli_real_escape_string($dbc, $_POST['title']);
		$label = mysqli_real_escape_string($dbc, $_POST['label']);
		$header = mysqli_real_escape_string($dbc, $_POST['header']);
		$body = mysqli_real_escape_string($dbc, $_POST['body']);
		//if form submitted
		$query = "INSERT INTO pages (user, slug, title, label, header, body)  VALUES ( $_POST[user], '$_POST[slug]','$title', '$label', '$header','$body')";
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
            
            <div class = "list-group">
                
     <a class = "list-group-item" href="index.php">
    <h4 class="list-group-item-heading"><i class = "fa fa-plus"> New Page</i></h4></a>
                
                
                
            
            <?php 
	$query = "SELECT * FROM pages ORDER BY title ASC";
	$results = mysqli_query($dbc, $query);
	while($page_list = mysqli_fetch_assoc($results))  {
		$blurb = substr(strip_tags($page_list['body']), 0,160)
                ?>
                
<a class = "list-group-item" href="index.php?id=<?php echo $page_list['id']?>">
    <h4 class="list-group-item-heading"><?php  echo $page_list['title']; ?></h4>
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
        
        
        <?php
        
        if(isset($_GET['id'])) {
            
            $query = "SELECT * FROM pages WHERE id = $_GET[id]";
            $results = mysqli_query($dbc, $query);
            
            $opened = mysqli_fetch_assoc($results);
            
        }
        
        
        ?>
        
        
        
        <form action = "index.php" method = "post" role = "form">
            <!--form to create pages for site -->
            <div class = "form-group">
                <label for="title">Page Title: </label>
                <input class = "form-control" type = "text" name = "title" id = "title" value = "<?php echo $opened['title'];?>" placeholder = "Page Title"></input>
              </div>
                <div class = "form-group">
                <label for="user">User</label>
                <select class = "form-control" name = "user" id = "user">
                    <option value = "0">No User</option>
                    <?php
	$query = "SELECT id FROM users ORDER BY first ASC";
	$results = mysqli_query($dbc, $query);
	
        
        while ($user_list = mysqli_fetch_assoc($results)) {
		$user_data = data_user($dbc, $user_list['id']);
		?>
                <option value = "<?php  echo $user_data['id']  ?>"
                
                <?php if(isset($_GET['id'])){
                      if($user_data['id'] == $opened['user']) {echo 'selected';} 
                }else {
                    
                    if($user_data['id'] == $user['id']) {echo 'selected';} 
                }
                
              ?>><?php  echo  $user_data['fullname']; ?></option>
             
             
              <?php  } ?>
                
                </select>
              </div>
                
                  <div class = "form-group">
                <label for="title">Page Slug: </label>
                <input class = "form-control" type = "text" name = "slug" id = "slug" value = "<?php echo $opened['slug'];?> " placeholder = "Page Slug"></input>
              </div>
        
             <div class = "form-group">
                <label for="title">Page Label: </label>
                <input class = "form-control" type = "text" name = "label" id = "label" value = "<?php echo $opened['label'];?> "placeholder = "Page Label"></input>
              </div>
        
        
        
                     <div class = "form-group">
                <label for="title">Page Header: </label>
                <input class = "form-control" type = "text" name = "header" id = "header" value = "<?php echo $opened['header'];?> "placeholder = "Page Header"></input>
              </div>
                     <div class = "form-group">
                <label for="title">Page Body: </label>
                <textarea class = "form-control" name = "body" id = "body" rows = "8" placeholder = "Page body"> <?php echo $opened['body'];?></textarea>
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
