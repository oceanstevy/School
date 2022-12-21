CREATE TABLE tblCharacter(
    idCharacter INT AUTO_INCREMENT PRIMARY KEY,
    dtName VARCHAR(255) NOT NULL
);
CREATE TABLE tblItem(
    idName INT AUTO_INCREMENT PRIMARY KEY,
    dtName VARCHAR(255) NOT NULL
);
CREATE TABLE tblWeapon(
    idName INT AUTO_INCREMENT PRIMARY KEY,
    dtName VARCHAR(255) NOT NULL
);
CREATE TABLE tblEnemies(
    idName INT AUTO_INCREMENT PRIMARY KEY,
    dtName VARCHAR(255) NOT NULL,
    dtHP SMALLINT NOT NULL,
    dtHPProWave DECIMAL(10,2) NOT NULL,
    dtSpeed SMALLINT NOT NULL,
    dtDamage SMALLINT NOT NULL,
    dtDamageProWave DECIMAL(10,2) NOT NULL,
    dtMaterialDrop SMALLINT NOT NULL
);
CREATE TABLE tblStats(
    idName INT AUTO_INCREMENT PRIMARY KEY,
    dtName VARCHAR(255) NOT NULL,
    dtBeschreibung VARCHAR(255) NOT NULL
);
CREATE TABLE tblCharacterStartStats(
    fiCharacter INT,
    fiStats INT,
    dtCount SMALLINT,
    PRIMARY KEY (fiCharacter,fiStats)
);
CREATE TABLE tblCharacterStartWeapon(
    fiCharacter INT,
    fiWeapon    INT,
    dtCount TINYINT,
    PRIMARY KEY (fiCharacter,fiWeapon)
);
CREATE TABLE tblCharacterStartItem(
    fiCharacter INT,
    fiItem      INT,
    dtCount TINYINT,
    PRIMARY KEY (fiCharacter,fiItem)
);
CREATE TABLE tblWeaponStats(
    fiWeapon    INT,
    fiStats INT,
    dtCountProzent SMALLINT,
    PRIMARY KEY (fiWeapon,fiStats)
);

ALTER TABLE tblCharacterStartStats
    ADD CONSTRAINT FK_StartStatsCharacter
        FOREIGN KEY (fiCharacter) REFERENCES tblCharacter (idCharacter);
ALTER TABLE tblCharacterStartStats
    ADD CONSTRAINT FK_StartStatsStats
        FOREIGN KEY (fiStats) REFERENCES tblStats (idName);


ALTER TABLE tblCharacterStartWeapon
    ADD CONSTRAINT FK_StartWeaponCharacter
        FOREIGN KEY (fiCharacter) REFERENCES tblCharacter (idCharacter);
ALTER TABLE tblCharacterStartWeapon
    ADD CONSTRAINT FK_StartWeaponWeapon
        FOREIGN KEY (fiWeapon) REFERENCES tblWeapon (idName);


ALTER TABLE tblCharacterStartItem
    ADD CONSTRAINT FK_StartItemCharacter
        FOREIGN KEY (fiCharacter) REFERENCES tblCharacter (idCharacter);
ALTER TABLE tblCharacterStartItem
    ADD CONSTRAINT FK_StartItemItem
        FOREIGN KEY (fiItem) REFERENCES tblItem (idName);


ALTER TABLE tblWeaponStats
    ADD CONSTRAINT FK_WeaponStatsWeapon
        FOREIGN KEY (fiWeapon) REFERENCES tblWeapon (idName);
ALTER TABLE tblWeaponStats
    ADD CONSTRAINT FK_WeaponStatsStats
        FOREIGN KEY (fiStats) REFERENCES tblStats (idName);