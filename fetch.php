
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	<?php
	$url = "http://www.omdbapi.com?s=Titanic";
	$content=file_get_contents($url);

	$ar = json_decode($content,false);
	$a = $ar->{'Search'};
	//echo gettype($a);
	for($i=0;$i<sizeof($a);$i++)
		{

			echo ($a[$i]->{'Title'}).'  ';
			$link='http://www.imdb.com/title/'.($a[$i]->{'imdbID'}).'/';
			echo <<<_END
	<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=342504839278231&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-share-button" data-href="$link" data-layout="button_count"></div>
		
	
_END;
/*echo <<<_END	 
	
_END;*/
		echo '<br>';

	    }
	// echo sizeof($ar);
	// $aar = json_decode($ar[0]->{'Search'});
	// echo "<br>";
	// echo sizeof($aar);

	/*$arr=json_decode($ar->{"Search"},true);
	echo sizeof($arr);
	
   */ 
     
?>
</body>

</html>
