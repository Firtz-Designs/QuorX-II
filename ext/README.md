## QuorX II: Multi Favicons erstellen


Zum automatischen erstellen der MultiFavicons, benötigst Du die Hilfe-Datei: "*<a href="https://github.com/McCouman/quorx2.0_documentation/tree/master/ext/helper">cover-creator.php</a>*".

1.Lade die Datei in den Pfad /images/ deines Firtz und erstelle den Ordner: /multifavs/.

2.Gebe dem Order (multifavs) über Shell oder FTPs die Rechte 777 (Chmod 777) damit die PHP Datei auch die Covers in den unterschiedlichen Größen erstellen kann.

3.Lade nun dein Podcast-Cover (1400x1400 Pixel groß!) in den Ordner multifavs hoch.

4.Greife nun über Web auf die Datein **cover-creator.php** zu. Zum Bsp.: https://mein-podcast.tld/images/cover-creator.php

5.Deine Multifav-Icons werden nun im Ordner multifavs erstellt.

<img src="https://raw.githubusercontent.com/McCouman/quorx2.0_documentation/master/ext/multifavs1.png">

6.trage nun noch zum Schluss in der template.cfg unter /templates/default/ den Code <code>multifavs off</code> auf <code>multifavs <b>on</b></code>.

<img src="https://raw.githubusercontent.com/McCouman/quorx2.0_documentation/master/ext/multifavs2.png">

Fertig :D
