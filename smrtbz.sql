/*
 Navicat Premium Data Transfer

 Source Server         : MySQL Local 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : smrtbz

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 17/12/2023 22:27:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_business_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business_category`;
CREATE TABLE `tbl_business_category`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Active',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_business_category
-- ----------------------------
INSERT INTO `tbl_business_category` VALUES (1, 'Business Support & Supplies ', 'Active');
INSERT INTO `tbl_business_category` VALUES (2, 'Food & Dining ', 'Active');
INSERT INTO `tbl_business_category` VALUES (3, 'Health & Medicine', 'Active');
INSERT INTO `tbl_business_category` VALUES (4, 'Merchants (Retail) ', 'Active');
INSERT INTO `tbl_business_category` VALUES (5, 'Sample', 'Active');

-- ----------------------------
-- Table structure for tbl_business_list
-- ----------------------------
DROP TABLE IF EXISTS `tbl_business_list`;
CREATE TABLE `tbl_business_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `franchise_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `franchise_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `franchise_price` int(255) NULL DEFAULT NULL,
  `franchise_owner` int(11) NULL DEFAULT NULL,
  `franchise_category` int(11) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'ACTIVE',
  `contact_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_business_list
-- ----------------------------
INSERT INTO `tbl_business_list` VALUES (1, 'mcdo', 'You\'re lucky I haven\'t eaten yet, because you can be my Happy Meal.\r\n', 1500499, 2, 2, 'Inactive', '0900000');
INSERT INTO `tbl_business_list` VALUES (2, 'Tindahan ni Aling Puring', 'Sari-Sari Store\r\nKarinderya\r\nMini Grocery\r\nCatering\r\nCanteen\r\nFood Stall\r\nDrug Store', 2500000, 2, 4, 'ACTIVE', '0900000');
INSERT INTO `tbl_business_list` VALUES (3, 'Mercury Drug Store', 'Nakasisiguro Gamot ay Laging Bago. At wag mahihiyang mag tanong', 30000, 3, 3, 'ACTIVE', '0699526626');
INSERT INTO `tbl_business_list` VALUES (4, 'National Bookstore', 'It operates a bookstore and office-supplies store chain of the same name. ', 1300000, 3, 1, 'ACTIVE', '4466496236');

-- ----------------------------
-- Table structure for tbl_franchise_application
-- ----------------------------
DROP TABLE IF EXISTS `tbl_franchise_application`;
CREATE TABLE `tbl_franchise_application`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `requestor` int(11) NULL DEFAULT NULL,
  `franchise` int(11) NULL DEFAULT NULL,
  `applicationForm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `loi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `validID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Pending',
  `schedule` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_franchise_application
-- ----------------------------
INSERT INTO `tbl_franchise_application` VALUES (1, 5, 4, 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Approved', '2023-12-30');
INSERT INTO `tbl_franchise_application` VALUES (2, 4, 2, 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Eye Glasses Website - Final Approved 6-4-2022 (1) (4).pdf', 'Approved', '2023-12-27');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `userType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Active',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES (1, 'admin', 'admin', 'admin', 'admin', 'admin', 'Active');
INSERT INTO `tbl_user` VALUES (2, 'Ica', 'Alonzo', 'ica@gmail.com', 'password', 'franchiser', 'Active');
INSERT INTO `tbl_user` VALUES (3, 'Amylyn', 'Cinco', 'amylyn@gmail.com', 'password', 'franchiser', 'Active');
INSERT INTO `tbl_user` VALUES (4, 'john', 'doe', 'johndoe@gmail.com', 'password', 'starter', 'Active');
INSERT INTO `tbl_user` VALUES (5, 'Astro', 'Hipolito', 'astro@gmail.com', 'password', 'starter', 'Active');

SET FOREIGN_KEY_CHECKS = 1;
