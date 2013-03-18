
/*============================================================================*/
/* Tablas necesarias para la categorización de las materias                   */
/*============================================================================*/
DROP TABLE IF EXISTS `artist`;
CREATE TABLE `artist` (
    `ident`       int unsigned NOT NULL auto_increment,
    `name`        varchar(128) NOT NULL,
    PRIMARY KEY (`ident`)
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
    `ident`       int unsigned NOT NULL auto_increment,
    `name`        varchar(128) NOT NULL,
    `tracks`      int unsigned NOT NULL,
    `year`        int unsigned NULL,
    PRIMARY KEY (`ident`)
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `artist_album`;
CREATE TABLE `artist_album` (
    `artist`      int unsigned NOT NULL,
    `album`       int unsigned NOT NULL,
    PRIMARY KEY (`artist`, `album`),
    INDEX (`artist`),
    FOREIGN KEY (`artist`) REFERENCES `artist`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT,
    INDEX (`album`),
    FOREIGN KEY (`album`) REFERENCES `album`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `genre`;
CREATE TABLE `genre` (
    `ident`       int unsigned NOT NULL auto_increment,
    `name`        varchar(128) NOT NULL,
    PRIMARY KEY (`ident`)
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `song`;
CREATE TABLE `song` (
    `ident`       int unsigned NOT NULL auto_increment,
    `album`       int unsigned NOT NULL,
    `genre`       int unsigned NULL,
    `name`        varchar(128) NOT NULL,
    `size`        int unsigned NULL,
    `duration`    int unsigned NULL,
    PRIMARY KEY (`ident`, `album`),
    INDEX (`album`),
    FOREIGN KEY (`album`) REFERENCES `album`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT,
    INDEX (`genre`),
    FOREIGN KEY (`genre`) REFERENCES `genre`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `ident`       int unsigned NOT NULL auto_increment,
    `username`    varchar(64) NOT NULL,
    `password`    varchar(64) NOT NULL,
    PRIMARY KEY (`ident`)
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE `playlist` (
    `ident`       int unsigned NOT NULL auto_increment,
    `author`      int unsigned NOT NULL,
    `name`        varchar(128) NOT NULL,
    `tsregister`  int unsigned NOT NULL,
    PRIMARY KEY (`ident`),
    INDEX (`author`),
    FOREIGN KEY (`author`) REFERENCES `user`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `playlist_song`;
CREATE TABLE `playlist_song` (
    `playlist`    int unsigned NOT NULL,
    `album`       int unsigned NOT NULL,
    `song`        int unsigned NOT NULL,
    PRIMARY KEY (`playlist`, `album`, `song`),
    INDEX (`playlist`),
    FOREIGN KEY (`playlist`) REFERENCES `playlist`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT,
    INDEX (`album`, `song`),
    FOREIGN KEY (`album`, `song`) REFERENCES `song`(`album`, `ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;

DROP TABLE IF EXISTS `user_playlist`;
CREATE TABLE `user_playlist` (
    `playlist`    int unsigned NOT NULL,
    `user`        int unsigned NOT NULL,
    `type`        enum('viewer', 'editor') NOT NULL DEFAULT 'viewer',
    PRIMARY KEY (`playlist`, `user`),
    INDEX (`playlist`),
    FOREIGN KEY (`playlist`) REFERENCES `playlist`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT,
    INDEX (`user`),
    FOREIGN KEY (`user`) REFERENCES `user`(`ident`) ON UPDATE CASCADE ON DELETE RESTRICT
) DEFAULT CHARACTER SET UTF8;
