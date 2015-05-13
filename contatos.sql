
SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
CREATE TABLE `contatos` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(50) default NULL,
  `sobrenome` varchar(50) default NULL,
  `telefone` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `contatos` VALUES ('1', 'José', 'Santana', '(21)99999-9999', 'zesantana@gmail.com');
INSERT INTO `contatos` VALUES ('2', 'Andre', 'Ribeiro', '(21)99898-9877', 'aribeiro@gmail.com');
INSERT INTO `contatos` VALUES ('3', 'Leonardo', 'Prado', '(21)97788-0990', 'leoprado@gmail.com');
INSERT INTO `contatos` VALUES ('4', 'Viviani', 'Lima', '(21)2452-3625', 'vivilima@gmail.com');
INSERT INTO `contatos` VALUES ('5', 'Paulo', 'Silva', '(21)4251-3321', 'paulo@gmail.com');
INSERT INTO `contatos` VALUES ('7', 'Lucas', 'Prado', '(21)5482-0445', 'pradolucas@gmail.com');
INSERT INTO `contatos` VALUES ('8', 'Celia', 'Lima', '(21)4155-5588', 'celima@gmail.com');
INSERT INTO `contatos` VALUES ('9', 'Ikaro', 'Silva', '(21)2123-4122', 'ikaro12@gmail.com');
INSERT INTO `contatos` VALUES ('10', 'Elisangela', 'Couto', '(21)4477-5522', 'eliscouto@gmail.com');
INSERT INTO `contatos` VALUES ('11', 'Edna', 'Andrade', '(21)2456-1452', 'ednaandrade@gmail.com');
INSERT INTO `contatos` VALUES ('12', 'Creusa', 'Silva', '(21)2546-0338', 'creusasilva@gmail.com');
INSERT INTO `contatos` VALUES ('13', 'Luis', 'Coelho', '(21)4251-1222', 'luiscoelho@gmail.com');