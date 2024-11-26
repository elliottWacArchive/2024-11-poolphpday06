<?php

function display_xml_nodes($xmlstr, $node)
{
    $xml = new SimpleXMLElement($xmlstr);
    if ($xml) {
        $bool = 0;
        $exec = rec_tab_parc($xml, $node, $bool);
        if ($bool != 0) {
            return true;
        }
    }
    return false;
}

function rec_tab_parc($tab, $node, &$value)
{
    foreach ($tab as $key => $val) {
        //echo "key : $key, type : " . gettype($key) . "\n";
        //echo "val : $val, type : " . gettype($val) . "\n";
        //echo "\n_____________________\n";
        if ($key == $node) {
            $value++;
            echo "$val\n";
        }
        rec_tab_parc($val, $node, $value);
    }
}
// $xml =
// "<webacademie>
//     <staff>
//         <title> Staff Samung Campus</title>
//         <personnes>
//             <personne>
//                 <name>
//                     <name>Francois-Afif Benthanane</name>
//                     <name>caca</name>
//                     </name>
//                 <poste>Fondateur</poste>
//             </personne>
//             <personne>
//                 <name>Sophie Viger</name>
//                 <poste>Directrice</poste>
//             </personne>
//             <personne>
//                 <name>Michel Girard</name>
//                 <poste>Responsable Pedagogique</poste>
//             </personne>
//             <personne>
//                 <name>Sylvain Peigne</name>
//                 <poste>Pangolin</poste>
//             </personne>
//         </personnes>
//     </staff>
// </webacademie>";

// $xml2 = new SimpleXMLElement($xml);

// echo display_xml_nodes($xml, "name");
