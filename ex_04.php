<?php

function display_xml_nodes($xmlstr, $node)
{
    $xml = new SimpleXMLElement($xmlstr);
    if ($xml) {
        rec_tab_parc($xml, $node);
        return true;
    }
    return false;
}

function rec_tab_parc($tab, $node) {
    foreach($tab as $key => $val) {
        //echo "key : $key, type : " . gettype($key) . "\n";
        //echo "val : $val, type : " . gettype($val) . "\n";
        //echo "\n_____________________\n";
        if ($key == $node) {
            echo "$val\n";
        } else {
            rec_tab_parc($val, $node);
        }
    }
}

$xml = 
"<webacademie>
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

display_xml_nodes($xml, "name");