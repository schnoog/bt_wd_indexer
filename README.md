# Indexer und Übersicht der vom wissenschaftlichen Dienst des Bundestages veröffentlichten Dokumente


Die aktuelle Liste ist stets in index.html zu finden.
Leider ist die Liste zu gross, um sie direkt auf Github anzusehen, so dass nur der Umweg über

https://htmlpreview.github.io/?https://github.com/schnoog/bt_wd_indexer/master/index.html

bleibt, um sie ohne Clonen bzw. Download anzusehen. 

### Hintergrund
Der WD veröffentlich alle von ihm erstellte Dokumente. Leider ist auf der Seite https://www.bundestag.de/analysen keine wirkliche Suchfunktion vorhanden.
Deshalb hab ich mir einen kleinen Crawler gebastelt, der die Seite ausliest und in einer sqlite3 Datenbank speichert (WD_DATA).
Diese Daten werden dann in die Datei index.html exportiert.
Somit kann man zumindest mit der Broswer eigenen Suchfunktion (STRG+F) darin suchen.

### Updates
Die Liste wird von mir (besser gesagt einem Cron-Job) einmal wöchentlich auf den neusten Stand gebracht. 
