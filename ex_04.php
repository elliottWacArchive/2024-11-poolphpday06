<?php

function display_xml_nodes($xmlstr, $node)
{
    $content = simplexml_load_string($xmlstr);
    print_r($content);
}

$xml = "<webacademie>
<staff>
<title> Staff Samung Campus</title>
<personnes>
<personne>
<name>Francois-Afif Benthanane</name>
<poste>Fondateur</poste>
</personne>
<personne>
<name>Sophie Viger</name>
<poste>Directrice</poste>
</personne>
<personne>
<name>Michel Girard</name>
<poste>Responsable Pedagogique</poste>
</personne>
<personne>
<name>Sylvain Peigne</name>
<poste>Pangolin</poste>
</personne>
</personnes>
</staff>
</webacademie>";

display_xml_nodes($xml, "cc");