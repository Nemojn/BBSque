<?php
	echo '<head><link rel="stylesheet" type="text/css" href="style.css"></head>';
	echo '<pre class="header">
     ____    ____    _____                         
    |  _ \  |  _ \  |  ___|  _____   _   _   _____ 
    | |_> } | |_> } | |___  |  _  | | | | | |  _  |
    |  _ <  |  _ <  |___  | | |_| | | | | | | |_| |
    | |_> } | |_> }  ___| | |___  | | |_| | |  ___|
    |____/  |____/  |_____|     |_| |_____| |_____|
    </pre>';
	echo '<br>';
	echo '<pre>1: Page 1</pre>';
	echo '<pre>2: Page 2</pre>';
    echo '<pre>3: Page 3</pre>';
    echo '<pre>4: Page 4</pre>';
    echo '<script type="text/javascript">
    		function navigate(e) {
    			var unicode = e.keycode ? e.keyCode : e.charCode;
    			var actualkey = String.fromCharCode(unicode);
    			switch (actualkey) {
    				case "1":
    					document.location.href = "page1.php";
						break;
					case "2":
                        document.location.href = "page2.php";
                        break;
                    case "3":
                        document.location.href = "page3.php";
                        break;
                    case "4":
                        document.location.href = "page4.php";
                        break;
    			}
    		}
    		document.onkeypress=navigate;
    	  </script>'; 
?>
