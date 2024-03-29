<?php
ini_set('memory_limit', '2048M');
set_time_limit(0);
IndexMe();
$OPF="index.html";


function IndexMe(){
    global $db,$doubles, $OPF;
    OpenDB();

    file_put_contents("index.html",'<!DOCTYPE html><html lang="de"><head><meta charset="utf-8"/></head><body>');
    $head = "<h1>Publikationen des Wissenschaftlichen Dienstes des Bundestages</h1><h2>Letztes Update: " . date("d.M.Y") ."</h2>";

    file_put_contents("index.html", $head, FILE_APPEND);

    $results = $db->query("SELECT * FROM WDDokumente ORDER BY doctimestamp DESC");
    while($subres = $results->fetchArray()){
        //echo print_r($subres,true) . "<hr>";
        $titel = $subres[4];
        $link = "<a href='" .$subres[5]. "' target='_blank'>" . $titel . "</a><br />";
        //echo $subres[4] . "<br>". $subres[5]  ."<hr>";
        echo $link;
        file_put_contents("index.html", $link, FILE_APPEND);
//file_put_contents($file, $person, FILE_APPEND | LOCK_EX);

    }
    file_put_contents("index.html", '</body></html>', FILE_APPEND);
    CloseDB();
}

function OpenDB(){
    global $db;
    $db = new SQLite3("WD_DATA");
    $db-> exec("CREATE TABLE IF NOT EXISTS WDDokumente (
        	docuid INTEGER PRIMARY KEY,
            doctimestamp INTEGER NOT NULL,
            docthema TEXT NOT NULL,
            doctyp TEXT NOT NULL,
        	doclabel TEXT NOT NULL,
	        doclink TEXT NOT NULL,
	        checksum TEXT NOT NULL UNIQUE
    )"

    );
}
///////////////
function CloseDB(){
    global $db;
    $db->close();
}
