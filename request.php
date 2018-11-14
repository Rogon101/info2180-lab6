<?php
// accept a term (keyword)
// respond with a value
if($_SERVER["REQUEST_METHOD"] === "GET"){
    if(isset($_GET['q']) and !empty($_GET['q'])){
        get_definition($_GET['q']);
    }else if(isset($_GET['all'])){
            if($_GET['all'] == "true"){
                get_xml_all();
            }
        }
    }
function get_xml_all(){
    $xmldata = '<?xml version="1.0"  encoding="UTF-8"?>
        <entries>
         <definition name="definition" author="Rogerio">
         a statement of the exact meaning of a word, especially in a
        dictionary.
         </definition>
         <definition name="bar" author="Zidanne">
         a place that sells alcholic beverages
         </definition>
         <definition name="ajax" author="Kayla">
         technique which involves the use of javascript and xml
         </definition>
         <definition name="html" author="Trina">
         The standard markup language for creating web pages and web applications.
         </definition>
         <definition name="css" author="Hugh">
         A style sheet language used for describing the presentation of a document written in a markup language.
         </definition>
         <definition name="javascript" author="Ajoni">
         A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.
         </definition>
         <definition name="php" author="Domonique">
         A server-side scripting language, and a powerful tool for making dynamic and interactive websites.
         </definition>
        </entries>';
        
        header('Content-Type: text/xml');
        $xmlOutput = new SimpleXMLElement($xmldata);
        echo $xmlOutput->asXML();
}
function get_definition($query){
    $definition = [
        "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
        "bar" => "A place that sells alcholic beverages",
        "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
        "html" => "The standard markup language for creating web pages and web applications.",
        "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
        "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
        "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites.",
    ];
    
    print "<h3>" . strtoupper($query) . "</h3>";
    print "<p>" . $definition[$query] . "</p>";
}