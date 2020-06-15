/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : leagueoflegends

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 11/06/2020 00:29:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for campeones
-- ----------------------------
DROP TABLE IF EXISTS `campeones`;
CREATE TABLE `campeones`  (
  `id_campeones` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  `subtitulo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  `rol` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  `fecha_salida` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  `id_regiones` int(255) NULL DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_campeones`) USING BTREE,
  INDEX `id_regiones`(`id_regiones`) USING BTREE,
  CONSTRAINT `campeones_ibfk_1` FOREIGN KEY (`id_regiones`) REFERENCES `regiones` (`id_regiones`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of campeones
-- ----------------------------
INSERT INTO `campeones` VALUES (1, 'Caitlyn', 'LA SHERIFF DE PILTOVER', 'TIRADOR', '2019-03-05', 5, 'caitlyn.jpg');
INSERT INTO `campeones` VALUES (2, 'Fiddlesticks', 'EL TERROR ANCESTRAL', 'MAGO', '2009-02-21', 14, 'fiddlesticks.jpg');
INSERT INTO `campeones` VALUES (3, 'Gragas', 'EL CAMORRISTA', 'LUCHADOR', '2009-02-05', 5, 'gragas.jpg');
INSERT INTO `campeones` VALUES (4, 'Graves', 'EL FORAJIDO', 'TIRADOR', '2013-02-21', 1, 'graves.jpg');
INSERT INTO `campeones` VALUES (5, 'Jax', 'EL MAESTRO DE ARMAS', 'LUCHADOR', '2012-04-11', 14, 'jax.jpg');
INSERT INTO `campeones` VALUES (6, 'Jinx', 'LA BALA PERDIDA', 'TIRADOR', '2009-02-21', 13, 'jinx.jpg');
INSERT INTO `campeones` VALUES (7, 'Maestro yi', 'EL ESPADACHÍN WUJU', 'ASESINO', '2011-05-21', 8, 'maestroyi.jpg');
INSERT INTO `campeones` VALUES (8, 'Nidalee', 'LA CAZADORA BESTIAL', 'ASESINO', '2009-02-21', 7, 'nidalee.jpg');
INSERT INTO `campeones` VALUES (9, 'Olaf', 'EL BERSERKER', 'LUCHADOR', '2010-02-24', 5, 'olaf.jpg');
INSERT INTO `campeones` VALUES (10, 'Rengar', 'EL ACECHADOR ORGULLOSO', 'ASESINO', '2009-02-21', 7, 'rengar.jpg');
INSERT INTO `campeones` VALUES (11, 'Xin zhao', 'EL SENESCAL DE DEMACIA', 'LUCHADOR', '2019-03-05', 3, 'xinzhao.jpg');

-- ----------------------------
-- Table structure for regiones
-- ----------------------------
DROP TABLE IF EXISTS `regiones`;
CREATE TABLE `regiones`  (
  `id_regiones` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NULL DEFAULT NULL,
  `id_campeones` int(255) NULL DEFAULT NULL,
  PRIMARY KEY (`id_regiones`) USING BTREE,
  INDEX `id_campeones`(`id_campeones`) USING BTREE,
  CONSTRAINT `regiones_ibfk_1` FOREIGN KEY (`id_campeones`) REFERENCES `campeones` (`id_campeones`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_spanish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of regiones
-- ----------------------------
INSERT INTO `regiones` VALUES (1, 'AGUAS ESTANCADAS', NULL);
INSERT INTO `regiones` VALUES (2, 'CIUDAD DE BANDLE', NULL);
INSERT INTO `regiones` VALUES (3, 'DEMACIA', NULL);
INSERT INTO `regiones` VALUES (4, 'EL VACIO', NULL);
INSERT INTO `regiones` VALUES (5, 'FRELJORD', NULL);
INSERT INTO `regiones` VALUES (6, 'ISLAS DE LA SOMBRA', NULL);
INSERT INTO `regiones` VALUES (7, 'IXTAL', NULL);
INSERT INTO `regiones` VALUES (8, 'JONIA', NULL);
INSERT INTO `regiones` VALUES (9, 'NOXUS', NULL);
INSERT INTO `regiones` VALUES (10, 'PILTOVER', NULL);
INSERT INTO `regiones` VALUES (11, 'SHURIMA', NULL);
INSERT INTO `regiones` VALUES (12, 'TARGON', NULL);
INSERT INTO `regiones` VALUES (13, 'ZAUN', NULL);
INSERT INTO `regiones` VALUES (14, 'RUNATERRA', NULL);

SET FOREIGN_KEY_CHECKS = 1;
