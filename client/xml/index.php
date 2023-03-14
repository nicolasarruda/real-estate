<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imobiliária - Imóveis</title>
</head>
<body>
<table>

<?php $link = "../../xml/properties.xml";
$xml = simplexml_load_file($link)->properties;

foreach ($xml->property as $property) {
    echo "<tr>";
    echo "<th>";
    echo "<img src='../../assets/images/" . $property->image . "'</img>";
    echo "</th>";
    echo "<th>";
    echo "<h3>" . utf8_decode($property->name) . "</h3>";
    echo "<h4>Descrição</h4>
    <p>" . utf8_decode($property->description) . "</p>" .
    "<h4>Comodos:</h4>
    <p>" . utf8_decode($property->rooms) . " comodos</p>" .
    "<br>" .
    "<h4>Preço:</h4>
    <p> R$ " . utf8_decode($property->price) . "</p>" .
    "<br>" .
    "<h4>Quartos:</h4>
    <p>" . utf8_decode($property->bedrooms) . "</p>" .
    "<br>" .
    "<h4>Endereço:</h4>
    <p>" . utf8_decode($property->address) . "</p>" .
        "</th>" .
        "</tr>";
}
?>
</table>
</body>
</html>

