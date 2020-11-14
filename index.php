
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <title>GIPHY</title>
      
      </head>
      <body>
        <center>
	    <form action="" method="get">
	    <input type="text" name="q" placeholder="Search GIF"/>
	    <input type="submit" value="Search" name="submit" />
	    </form>
	    <?php
	    
	          if(isset($_GET['submit'])) {
		  
		   $q = $_GET['q'];
		  
	           if (empty($q)) {
		       echo "please insert";
		       
		       }else {
		       
		       $api_key = "dc6zaTOxFJmzC";
		       
		       $file = file_get_contents('http://api.giphy.com/v1/gifs/search?q='.$q.'&api_key='.$api_key.'');
		       $json = json_decode($file);
		       echo $count = count($json->data);
		       
		       for ($i=0; $i < $count; $i++) {
		       
		       $img_url = @$json->data[$i]->images->fixed_height->url;
		       
		       echo '
		        
			<div id="'.$i.'" style="width:200px; height:200px; background-color:#ccc; border-radius: 5px; float:left;border:solid 1px #ccc; margin-top:20px;
			margin-left:10px; margin-bottom:10px; padding:10px;"><img src="'.$img_url.'" width="200" height="200" /></div>
			
			';
		  }
		  }
		  }
		  ?>
	    
	</center>
	</body>
	</html>