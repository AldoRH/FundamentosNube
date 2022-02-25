/*
 Navicat Premium Data Transfer

 Source Server         : nube
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : clase

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 24/02/2022 18:57:41
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dogs
-- ----------------------------
DROP TABLE IF EXISTS `dogs`;
CREATE TABLE `dogs`  (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `owner` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci COMMENT = 'Lista de perros propiedad de los alumnos' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dogs
-- ----------------------------
INSERT INTO `dogs` VALUES (1, 'Nico', 'Alfredo');
INSERT INTO `dogs` VALUES (2, 'Kika', 'Victor');
INSERT INTO `dogs` VALUES (3, 'Firulais', 'Sebastian');
INSERT INTO `dogs` VALUES (4, 'Poppy', 'Alex');

SET FOREIGN_KEY_CHECKS = 1;
