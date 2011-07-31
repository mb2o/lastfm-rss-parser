<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Last.fm Feed</title>	
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>    
    <link rel="stylesheet/less" href="less/style.less" />    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="js/less-1.1.3.min.js"></script>
	<script src="js/jquery.timeago.js"></script>
</head>
<body>    
	
    <section id="container" >
		
        <header>
            <h1>Last.fm Feed</h1>
        </header>
        
		<ul id="feed">
			<?php foreach($lastfm_data as $item): ?>
				<li class="lastfm">
					<p><a href="<?php echo $item['link']; ?>" title="<?php echo $item['title']; ?>" target="_new"><?php echo $item['title']; ?></a></p>
					<p class="date"><abbr class="timeago" title="<?php echo date('c', $item['date']); ?>"><?php echo date('r', $item['date']); ?></abbr></p>
				</li>
			<?php endforeach; ?>
		</ul>
        
        <footer>
            <h3>&copy;2011 M. Boomaars</h3>
        </footer>
        
	</section>
     
	<script>
		$(function() {
  			$("abbr.timeago").timeago();
		});
	</script>
    	
</body>
</html>