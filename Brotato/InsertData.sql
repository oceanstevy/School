INSERT INTO tblStats(dtName, dtBeschreibung)
VALUES ('Max Leben' , 'Höhe des Schadens, den Sie vor dem Tod erleiden können'),
       ('Leben Regeneration','Sie regenerieren 0,0x HP pro Sekunde. Es sei denn, Sie haben Folter, wo Sie jede Sekunde 3 HP regenerieren'),
       ('Leben stehlen','Ihre Angriffe haben eine x%ige Chance, dich für 1HP zu heilen'),
       ('Schaden','	Ihre Angriffe verursachen x % mehr Schaden, wirken sich aber nicht auf technische Geschütztürme oder Minen aus'),
       ('Nahkampfschaden','Ihre Nahkampfangriffe verursachen x zusätzlichen Schaden'),
       ('Fernkampfschaden','Ihre Fernangriffe verursachen x zusätzlichen Schaden'),
       ('Elementarschaden','Lässt dich Elementarangriffe x Schaden verursachen'),
       ('Angriffsgeschwindigkeit','Sie greifen x% schneller an. Gilt auch für Fernkampfwaffen, aber nicht für technische Türme oder Minen'),
       ('Crit Chance','Ihre Waffen haben eine x erhöhte Chance, einen kritischen Treffer auszuteilen'),
       ('Ingenieurwesen','Erhöht die Kraft Ihrer Strukturen. Die anderen Werte beeinflussen keine Strukturen, aber Specials (Piercing, Hüpfen, Explosion usw.)'),
       ('Reichweite','Die maximale Reichweite deiner Waffen wird um x erhöht. Eine höhere Reichweite erhöht auch die Abklingzeit von Nahkampfwaffen. (längere Fahrstrecke)'),
       ('Rüstung','Sie nimmen 4% weniger Schaden pro Rüstung (nicht linear)'),
       ('Ausweichen','Sie haben eine x%ige Chance, Angriffen auszuweichen'),
       ('Geschwindigkeit','Sie bewegen sich x% schneller'),
       ('Glück','Sie haben eine x % höhere Chance, Gegenstände oder Verbrauchsmaterialien zu finden, wenn du Feinde tötest. Erhöht auch die Seltenheit der Gegenstände im Shop und Level-Upgrades'),
       ('Ernte','Sie verdienst x Materialien und XP am Ende einer Welle. Erhöht um 5% jedes Mal, wenn es aktiviert wird'),
       ('Explosionsschaden','Sie machen x % mehr schaden mit Explosionen');

INSERT INTO tblWeapon (dtName)
VALUES ('Kakteen-Club'),
       ('Hubschrauber'),
       ('Kreissäge'),
       ('Dieb Dolch'),
       ('Faust'),
       ('Flammende Schlagringe aus Messing'),
       ('Geisteraxt'),
       ('Geist Feuerstein'),
       ('Hammer'),
       ('Hand'),
       ('Beil'),
       ('Messer'),
       ('Blitz Messer'),
       ('Planke'),
       ('Plasma-Vorschlaghammer'),
       ('Power-Faust'),
       ('Fels'),
       ('Schere'),
       ('Schraubenzieher'),
       ('Speer'),
       ('Stacheliger Schild'),
       ('Stock'),
       ('Schwert'),
       ('Donnerschwert'),
       ('Fackel'),
       ('Schraubenschlüssel'),
       ('Armbrust'),
       ('Doppelläufige Schrotflinte'),
       ('Flammenwerfer'),
       ('Geisterzepter'),
       ('Laserkanone'),
       ('Medizinische Pistole'),
       ('Minigun'),
       ('Nukleare Trägerrakete'),
       ('Obliterator'),
       ('Pistole'),
       ('Kartoffelwerfer'),
       ('Raketenwerfer'),
       ('Reißwolf'),
       ('Shuriken'),
       ('Steinschleuder'),
       ('SMG'),
       ('Scharfschützengeschütz'),
       ('Taser'),
       ('Zauberstab');

INSERT INTO tblItem (dtName)
VALUES ('Säure'),
       ('Alien Baby'),
       ('Außerirdische Augen'),
       ('Alien Magie'),
       ('Außerirdische Zunge'),
       ('Alien Wurm'),
       ('Legierung'),
       ('Amboss'),
       ('Baby Elefant'),
       ('Baby Gecko'),
       ('Baby mit Bart'),
       ('Tasche'),
       ('Halstuch'),
       ('Banner'),
       ('Barrikade'),
       ('Fledermaus'),
       ('Beanie'),
       ('Bohnenlehrer'),
       ('Große Arme'),
       ('Schwarzer Gürtel'),
       ('Augenbinde'),
       ('Blutspende'),
       ('Blutegel'),
       ('Kochendes Wasser'),
       ('Buch'),
       ('Melone'),
       ('Boxhandschuh'),
       ('Gebrochener Mund'),
       ('Schmetterling'),
       ('Kuchen'),
       ('Lagerfeuer'),
       ('Kerze'),
       ('Umhang'),
       ('Chamäleon'),
       ('Holzkohle'),
       ('Krallenbaum'),
       ('Klee'),
       ('Kaffee'),
       ('Kogge'),
       ('Community-Unterstützung'),
       ('Kompass'),
       ('Coupon'),
       ('Krone'),
       ('Süßer Affe'),
       ('Cyberball'),
       ('Zyklopenwurm'),
       ('Gefährlicher Hase'),
       ('Schlange'),
       ('Verängstigte Wurst'),
       ('Holzfäller Hemd'),
       ('Sparschwein');
#Nicht alles

INSERT INTO tblCharacter (dtName)
VALUES ('Gut abgerundet'),
       ('Schläger'),
       ('Verrückt'),
       ('Förster'),
       ('Magier'),
       ('Stämmig'),
       ('Alt'),
       ('Glücklich'),
       ('Mutant'),
       ('Generalist'),
       ('Laut'),
       ('Multitasker'),
       ('Wildling'),
       ('Pazifist'),
       ('Gladiator'),
       ('Sparer'),
       ('Krank'),
       ('Bauer'),
       ('Geist'),
       ('Schnell'),
       ('Unternehmer'),
       ('Ingenieur'),
       ('Forscher'),
       ('Arzt'),
       ('Jäger'),
       ('Handwerker'),
       ('Waffenhändler'),
       ('Wimpel'),
       ('Einarmig'),
       ('Stier'),
       ('Soldat'),
       ('Masochist'),
       ('Ritter'),
       ('Dämon');

INSERT INTO tblEnemies (dtName, dtHP, dtHPProWave, dtSpeed, dtDamage, dtDamageProWave, dtMaterialDrop)
VALUES ('Baum',10,5,0,0,0,3),
       ('Baby Alien',2,2,250,1,0.6,1),
       ('Verfolger',1,1,380,1,0.6,1),
       ('Spitter',8,1,200,1,0.6,1),
       ('Ladegerät',4,2.5,400,1,0.85,1),
       ('Verfolger',10,24,150,1,1.2,3),
       ('Kraftmeier',20,11,300,2,0.85,3),
       ('Puffer',20,3,150,1,0.6,2),
       ('Fliegen',15,4,350,1,0.85,1),
       ('Beschädigter Baum',15,13,0,1,1.1,0),
       ('Heiler',10,8,400,1,0.85,2),
       ('Plünderer',50,25,350,1,0.85,8),
       ('Helm Alien',8,3,250,1,1.0,1),
       ('Flossen-Alien',12,2,400,1,1.0,1),
       ('Rogener',10,1,120,1,0.85,1),
       ('Junkie',20,5,350,1,1.0,1),
       ('Gehörnter Bruiser',30,22,300,1,1.15,3),
       ('Gehörntes Ladegerät',12,5,425,1,1.1,1),
       ('Slasher Ei',5,3,0,1,0.25,1),
       ('Haumesser',50,25,275,1,1.15,3),
       ('Tentakel',100,20,175,1,1.0,1),
       ('Nashorn',1,750,250,1,1.5,10),
       ('Metzger',1,750,200,1,1.5,10),
       ('Mönch',1,700,250,1,1.5,10),
       ('Raubtier',29900,0,300,29.5,0,0),
       ('Aufrufende',29900,0,200,29.5,0,0);

INSERT INTO tblCharacterStartWeapon (fiCharacter, fiWeapon, dtCount)
VALUES (2,5,1),
       (3,12,1),
       (4,36,1),
       (13,22,1),
       (22,26,1);

INSERT INTO tblCharacterStartItem (fiCharacter, fiItem, dtCount)
VALUES (5,48,1),
       (5,49,1),
       (14,50,1),
       (16,51,1),
       (23,50,1);

INSERT INTO tblCharacterStartStats (fiCharacter, fiStats, dtCount)
VALUES (1,1,5),
       (1,14,5),
       (1,16,8),
       (2,8,50),
       (2,13,15),
       (2,11,-50),
       (2,6,-50),
       (3,11,100),
       (3,8,25),
       (3,13,-30),
       (3,10,-10),
       (3,6,-10),
       (4,11,50),
       (5,7,5),
       (5,6,-100),
       (5,5,-100),
       (5,10,-100),
       (6,3,-100),
       (7,16,10),
       (7,14,-10),
       (8,15,100),
       (8,8,-60),
       (11,4,30),
       (12,4,20),
       (13,3,25),
       (14,4,-100),
       (14,10,-100),
       (15,8,-40),
       (15,15,-30),
       (16,16,15),
       (17,1,12),
       (17,3,25),
       (17,2,-100),
       (18,16,30),
       (19,13,30),
       (19,12,-100),
       (20,14,30),
       (22,10,10),
       (23,16,10),
       (24,2,5),
       (25,16,5),
       (24,8,-100),
       (25,11,100),
       (26,17,175),
       (29,8,200),
       (30,1,20),
       (30,2,15),
       (30,12,10),
       (31,14,10);