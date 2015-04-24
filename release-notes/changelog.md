#QuorX II changelog:

Mit der Übernahme von QuorX I (Curie) direkt auf den Firtz, bekommt QuorX II nun auch einen neuen Projektnamen.
QuorX I trug den internen Projektnamen "Curie", zu ehren einer der bekanntesten Physikerin: <a href="http://de.wikipedia.org/wiki/Marie_Curie">Marie Curie</a>.


Den neuen Projektnamen beschließe ich mit QuorX II **(Parks)** und widme ich zu Ehren einer ganz besondere Frau: <a href="http://de.wikipedia.org/wiki/Rosa_Parks">Rosa Parks</a>.

*(Curie)* 1.0.1 Alpha - SID Deployment:

- Info: Suche + JS erst einmal herausgenommen und durch die Extension search ersetzt!
- Neu: Multifavicons als Idee: siehe https://github.com/McCouman/quorx2.0_documentation/tree/master/ext
- Neu: **Hook:** "articles: head" für Breadcrumb eingebunden. Siehe /ext/breadcrumb/
- Neu: **Hook:** "phone, bar" für die Extension search eingebunden. Siehe /ext/search/
- Neu: **Extensions:** breadcrumb, search
- Neu: QuorX Design Phone: CSS neu erarbeitet, strukturiert (full width)
- Neu: Standard Colors für QuorX
- Neu: Footer mit Breadcrumb und Social Icons
- Neu: quorxJS - Animations (staticle)
- Neu: quorxJS - Animations (repeats)
- Neu: QuorX Design: Podlove-Subscribe-Button - CSS + fixes für Windows IE 10-11
- Fixed: CSS Syntax bei Übernahme auf Firtz RC2.0 
- Fixed: Tabnavigation hight & Logo
- Fixed: Tablet width
- Fixed: QuorX Design: CSS neu strukturiert, bugfixes
- Fixed: QuorX Design: Podlove-Webplayer - Anpassungen und einige CSS Fixes
- Fixed: Seitenverdeckung bei Landscape zu Portrait Mode
- Fixed: falsche auto scrollhöhen beim klicken des Scroll-To-Head Button im Footer 

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
