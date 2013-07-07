<?php
$xmlDoc = simplexml_load_file("seats.xml");

echo "<br></br>";
echo "SCREEEEEEEEEEEEEEEEEEEEEEEEEEEEN";

foreach($xmlDoc->vorstellung->reihe as $row)
{
    echo "<br></br>";
    for ($i=0; $i<10; $i++)
    {
        if($row->sitz[$i]->belegt == "NEIN")
        {
            $sitz=$row->sitz[$i]+1;
            echo "<div onClick=\"book($sitz)\" class=\"seatvacant\"></div>";
        }
        else
        {
            echo "<div class=\"seatoccu\"></div>";
        }
    }
    
}
/*$x=$xmlDoc->getElementByTagName('reihe');
for ($i=0; $i<=$x->length-1; $i++)
{
//Process only element nodes
if ($x->item($i)->nodeType==1)
  {
  if ($x->item($i)->childNodes->item(0)->nodeValue == false)
    {
    $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++)
{ 
//Process only element nodes
if ($cd->item($i)->nodeType==1)
  {
  echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
  echo($cd->item($i)->childNodes->item(0)->nodeValue);
  echo("<br>");
  }
}*/

?>
