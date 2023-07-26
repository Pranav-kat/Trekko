<?php
$xml = new DomDocument("1.0", "UTF-8");
$xm->formatOutput = true;
$xml->preserveWhiteSpace = false;
$xml->load("home page.xml");
if(!$xml){
$adventure = $xml -> createElement("adventure");
$xml -> appendChild($adventure);
}
else{
$adventure = $xml->firstChild;
}
if(isset($POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$venue = $_POST['venue'];
$details = $_POST['details'];

$eve=$xml->createElement ("event");
$adventure->appendChild($eve);
$name=$xml->createElement("name", $name);
$eve->appendChild ($name);
$name=$xml->createElement("email", $email);
$eve->appendChild ($email);
$name=$xml->createElement("phone", $phone);
$eve->appendChild ($phone);
$category=$xml->createElement("category", $charge);
$eve->appendChild ($venue);
$ftit=$xml->createElement("tilte", $venue);
$eve->appendChild($charge);
$name=$xml->createElement("details", $details);
$eve->appendChild ($details);
echo "<xmp>".$xml->saveXML()."</xmp>";
$xml ->save("home page.xml");
} 
?>
