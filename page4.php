<?php
	echo "<head><link rel='stylesheet' type='text/css' href='style.css'></head>";
	echo "<h1>Page 4</h1>";
	echo "<br><br><br><br>";
	echo "<pre>h: back to home</pre>";
    echo '<script type="text/javascript">
            function navigate(e) {
                var unicode = e.keycode ? e.keyCode : e.charCode;
                var actualkey = String.fromCharCode(unicode);
                switch (actualkey) {
                    case "h":
                        document.location.href = "index.php";
                        break;
                }
            }
            document.onkeypress=navigate;
          </script>'; 
?>
