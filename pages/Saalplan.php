<html>
    <head>
        <title></title>
        <style>
            div.seatvacant
            {
                width:20px;
                height:20px;
                background-image: url("pics/free.png");
                margin: 1px;
                padding: 1px;
                float: left;
            }
            div.seatoccu
            {
                width:20px;
                height:20px;
                background-image: url("pics/sold.png");
                margin: 1px;
                padding: 1px;
                float: left;
            }
            #saalplan
            {
                width:1000px;
                height:600px;
                border: 1px;
                border-color: #000000;
            }
        </style>
        <script type="text/javascript">
            var xmlhttp;
            function getSeats()
            {
                
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
               
                xmlhttp.onreadystatechange = doItNow;
                xmlhttp.open("GET","../php/getSaalplan.php");
                xmlhttp.send();
            }
            function doItNow()
                {
                    if (xmlhttp.readyState == 4)
                    {
                        document.getElementById('saalplan').innerHTML += xmlhttp.responseText;   
                    }
                }
            function setSeats()
            {
                
            }
            function book(seat)
            {
                //tbd
            }
        </script>
        <script type="text/javascript">
            
            </script>
    </head>
    <body>
        <input value="Sitzplan anzeigen" type="button" onClick="getSeats();"/>
        
        <div id="saalplan"></div>
    </body>
</html>
