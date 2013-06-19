/*============================================================================*/
/* Insertion of users for the system                                          */
/*============================================================================*/
INSERT INTO `user`
(`ident`, `username`, `password`)
VALUES
(1, 'admin', SHA1('asdf')),
(2, 'user', SHA1('asdf'));

INSERT INTO `collection`
(`ident`, `name`, `user`)
VALUES
(1, 'music', 1),
(2, 'soundtracks', 1);
