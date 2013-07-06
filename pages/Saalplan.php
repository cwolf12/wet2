<html>
    <head>
        <title></title>
        <script>
            function getSeats()
            {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
               
                xmlhttp.onreadystatechange=doItNow();
                function doItNow()
                {
                    if (xmlhttp.readyState === 4)
                    {
                        document.write("haha");
                        document.getElementById("saalplan").innerHTML += xmlhttp.responseText;
                        
                    }
                }
                xmlhttp.open("GET","/php/getSaalplan.php");
                xmlhttp.send();
            }
        </script>
        <script type="text/javascript">
            
            </script>
    </head>
    <body>
        <input type="button" onClick="getSeats();"/>
        <div id="saalplan" height="800" width="1000">
            
        </div>
    </body>
</html>
