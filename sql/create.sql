USE
    chanvat4_geoloc;
DROP TABLE IF EXISTS
    bnai_db;
CREATE TABLE bnai_db(
    ProID INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ProName VARCHAR(300) NOT NULL,
    ProDescription TEXT(300) NOT NULL,
    ProLink VARCHAR(300)
) ENGINE = MyISAM AUTO_INCREMENT = 1;