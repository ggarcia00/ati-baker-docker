Farbw�hler:

Die gew�hlten Farben werden zun�chst lokal auf deinem Computer gespeichert. (per Javascript)
Um sie f�r alle sichtbar auf dem Server zu speichern ("Save Server"), muss das Verzeichnis /templates/wbce_hortal/colorset/ beschreibbar sein. 
Die Farben werden dort in der Datei params.txt gespeichert und bei jedem Aufruf mit colors.txt zum Stylesheet colorset.php vereinigt.

Wenn du die Farben fix gew�hlt hast, kannst du einfach den Aufruf von colorpicker.inc.php ganz am Ende von /templates/wbce_hortal/index.php auskommentieren.

Zus�tzlich kannst du /templates/wbce_hortal/colorset/colorset.php aufrufen, den Inhalt an das Ende von editor.css kopieren und dann alle Verweise auf colorset.php entfernen:
Einmal ganz oben in editor.css und ein weiters mal in /templates/verklap/index.php