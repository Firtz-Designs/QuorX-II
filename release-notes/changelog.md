#QuorX II changelog:

Mit der Übernahme von QuorX I (Curie) direkt auf den Firtz, bekommt QuorX II nun auch einen neuen Projektnamen.
Dabei trug das QuorX I Design den internen Namen: "Curie". Zu Ehren der Physikerin: <a href="http://de.wikipedia.org/wiki/Marie_Curie">Marie Curie</a>.


QuorX II trägt nun den Namen **(Parks)** und widme ich zu Ehren einer ganz besondere Frau: <a href="http://de.wikipedia.org/wiki/Rosa_Parks">Rosa Parks</a>.

*(Parks)* 1.0.0 Alpha - SID Deployment:

- Info: **Suche + JS erst einmal herausgenommen und durch die Extension search ersetzt!**
- Idee: Multifavicons: Siehe <a href="https://github.com/McCouman/quorx2.0_documentation/tree/master/ext">hier</a> zum automatischen erstellen der Favicons!
- Neu: **Hook:** "breadcrumb" für Breadcrumb eingebunden. Siehe /ext/breadcrumb/
- Neu: **Hook:** "phone, bar" für die Extension search eingebunden. Siehe /ext/search/
- Neu: **Extensions:** breadcrumb 
- Neu: **Extensions:** search
- Neu: QuorX Design: neue StandardFarben für das QuorX (color #44BA91, light #B9C1C8, dark #2E424D)
- Neu: QuorX Design: Footer mit Breadcrumb und Social Icons
- Neu: QuorX Design: Podlove-Subscribe-Button - CSS + fixes für Windows IE 10-11
- Neu: QuorX Design Phone: CSS neu erarbeitet, strukturiert (full width)
- Neu: quorxJS: Animations (staticle)
- Neu: quorxJS: Animations (repeats)
- Neu in der template.cfg: Farbedesigns (color, light, dark)
- Neu in der template.cfg: statische Seitenanimationen statische (animation on/off)
- Neu in der template.cfg: wiederholdende Seitenanimationen (repeat on/off)
- Neu in der template.cfg: QuorX Look für den Podlove-Subscribe-Button nutzen oder abschalten (psb on/off)
- Neu in der template.cfg: QuorX Look für den Podlove-Webplayer nutzen oder abschalten (player on/off)
- Neu in der template.cfg: Verwenden der MultifaveIcons (multifavs on/off)
- Neu: QuorX Design: Head- und Footer Navigation: mit dem Einfügen des /footer/ unter /pages/ können nun Seiten aus der Header Navigation ausgenommen werden. Dies gilt vor allem für Seiten wie Impressum, Disclaimer... Diese werden bei Erstellen des Ordners "footer" nur in diesem auch ausgegeben.
- Fixed: CSS Syntax fehler durch Übernahme auf Firtz RC2.0 
- Fixed: Tabnavigation hight & Logo
- Fixed: Tablet width
- Fixed: QuorX Design: CSS neu strukturiert, bugfixes
- Fixed: QuorX Design: Podlove-Webplayer - Anpassungen und einige CSS Fixes
- Fixed: Seitenverdeckung bei Landscape zu Portrait Mode
- Fixed: falsche auto scrollhöhen beim klicken des Scroll-To-Head Button im Footer 
- Minis: Extension: shariff (eingefügt: hr)
- Redesign: Extension: contributors (mit leeravatar bei fehlenden Image, discription und full-view layout)
- Redesign: Extension: disqus
- Redesign: QuorX PlugIns: Podlove-Subscribe-Button CSS
- Redesign: QuorX PlugIns: Podlove-Webplayer CSS

###Neues template.cfg
<pre>
#: --------------------------------------------
#: QuorX-Design mit Standard Farben:
#: --------------------------------------------

color #44BA91
light #B9C1C8
dark #2E424D

#: --------------------------------------------
#: QuorX-Design mit Animationen:
#: --------------------------------------------

animation on
repeat on

#: --------------------------------------------
#: QuorX-Design für Podlove-Subscribe-Button:
#: --------------------------------------------

psb on

#: --------------------------------------------
#: QuorX-Design für Podlove-Webplayer:
#: --------------------------------------------

player on

#: --------------------------------------------
#: QuorX-Design Multi Favicons:
#: --------------------------------------------

multifavs on
</pre>

Letzter Stand: 25 Apr. 2015: QXII "Parks" 
