<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="">
	<head>
		<title>Music Viewer</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link href="viewer.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="header">
            <h1>190M Music Playlist Viewer</h1>
			<h2>Search Through Your Playlists and Music</h2>
		</div>
        <div id="listarea">
			<li id="musiclist">
                <?php
                $scan = glob("songs/*.mp3");
                foreach($scan as $item)
                {?>
                <li class="mp3item">
                <a href="<?php print "$item"; ?>"><?php

                    print basename($item, 'songs/');

                    ?></a>
                <?php
                    $fileSize = filesize($item);
                    if($fileSize < (1024*1024))
                    {
                        echo('('. $fileSize. ' b' .')');
                    }
                    else {echo( '('. round($fileSize / 1024 / 1024,2) . ' mb' .')');} ?>
                <?php } ?>
                </li>
                <?php
                    $playlists = glob("songs/*.txt");

                    foreach ($playlists as $item1)
                    {?>
                        <li class="playlistitem">
                            <a href="<?php print"$item1"; ?>"><?php echo(basename($item1, 'songs/'));

                            ?></a>

                        </li>
                        <?php

                    }
                        ?>
            </ul>
		</div>
	</body>
</html>
