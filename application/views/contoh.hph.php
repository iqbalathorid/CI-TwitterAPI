<?php
if(!empty($error_msg)){?>
<p class="error"><?php echo $error_msg ?></p>;	
<?php }?>

<?php
if(!empty($userData)){?>
		<div class="wrapper">
			<h1>Twitter Profile De<?php if(!empty($tweets)){?>tails </h1>
			<div class="welcome_txt">Welcome <b> <?php echo $userData['first_name']?></b></div>
			<div class="tw_box">
				<p class="image"><img src="<?php echo $userData['picture_url'];?>" alt="" width="300" height="220"/></p>
				<p><b>Twitter Username : </b>'<?php echo $userData['username'];?></p>
				<p><b>Name : </b><?php echo $userData['first_name'];?> <?php echo $userData['last_name']?></p>
				<p><b>Locale : </b><?php echo $userData['locale'];?></p>
				<p><b>Twitter Profile Link : </b><a href="<?php echo$userData['profile_url'];?>" target="_blank"><?php echo 
				$userData['profile_url'];?></a></p>
				<p><b>You are login with : </b>Twitter</p>
				<p><b>Logout from <a href="<?php echo base_url()?>user_authentication/logout">Twitter</a></b></p>
	//Latest tweets
	
		<div class="tweetList"><strong>Latest Tweets : </strong>
			<ul>
		 <?php foreach($tweets  as $tweet){?>
			<?php echo $tweet->text;?><br/><i><?php echo $tweet->created_at;?></i></li>
		<?php } ?>
		</ul></div>
	<?php } ?></div>
		</div>
<?php }else{?>
  
  <div class="col-md-4 col-md-offset-4 well" style="margin-top: 150px;">

<h1>LOGIN:</h1>

<div class="panel panel-default">
       <div class="panel-body">

  <div class="form-group">
    <label for="">Username</label>
    <input type="text" class="form-control" id="username" placeholder="Username"  name="username">
   
    </span>
  </div>

<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
   
    </span>
  </div>
 

  <div >


  <button class="btn btn-primary" name="login">LOGIN</button>
  <a href="<" class="btn btn-link">REGISTER</a>
  <br>
 <a href=<?php echo $oauthURL ?>><img src="<?php echo base_url()?>assets/images/sign-in-with-twitter.png" alt=""/></a>
<?php } ?>
  </div>
  </div>
  </div>
  </div>
</div>
</div>
</form>