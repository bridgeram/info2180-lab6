<?php

// accept a term (keyword)
// respond with a value

$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<dictionary>
    <entry>
        <definition name="bar" author="John">A place that sells alcoholic beverages.</definition>
    </entry>
    <entry>
        <definition name=" definition" author="Gaza">A statement of the exact meaning of a word, especially in a dictionary.</definition>
    </entry>
    <entry>
        <definition name="ajax" author="Kartel">Technique which involves the use of javascript and xml(or JSON)</definition>
    </entry>
    <entry>
        <definition name="html" author="Gazaman">A standard markup language for creating web pages and web applications.</definition>
    </entry>
    <entry>
        <definition name="css" author="Peanut">A stylesheet language used for describing the presentation of a document written in a markup language.</definition>
    </entry>
    <entry>
        <definition name="javascript" author="Genki">A lightweight, interpreted programming language with firts-class function that add interactivity to your website.</definition>
    </entry>
    <entry>
       <definition name="php" author="Halo">A sever-side scripting language, and a powerful tool for making dynamic and interactive website.</definition>
    </entry>
</dictionary>';
header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();

