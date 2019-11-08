/*
 Navicat Premium Data Transfer

 Source Server         : mySql_Laragon
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : db_peminternet

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 22/07/2019 16:08:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tb_dosen`;
CREATE TABLE `tb_dosen`  (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `pendidikan_terakhir` tinyint(2) NULL DEFAULT NULL,
  `alamat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `dosen_pa` enum('y','n') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `foto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_dosen`) USING BTREE,
  INDEX `dosen_pa`(`dosen_pa`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_dosen
-- ----------------------------
INSERT INTO `tb_dosen` VALUES (3, 'Dani', 2, 'Purwodaddi', 'dani@mail.com', '082134662118', 'n', NULL);
INSERT INTO `tb_dosen` VALUES (4, 'Budi', 1, 'Pucangsawit', 'budi@mail.com', '08956546461651', 'y', NULL);
INSERT INTO `tb_dosen` VALUES (5, 'Anjar Prabowo', 2, 'Semarang', 'prabowo@mail.com', '032566589', 'y', NULL);
INSERT INTO `tb_dosen` VALUES (6, 'Budi', 3, 'Semarang', 'zackven1@gmail.com', '1231232312', 'n', '22072019051936Untitled.png');
INSERT INTO `tb_dosen` VALUES (9, 'Abdillah Baraja', 2, 'Karangmojo', 'abdillah@unsa.ac.id', '08123456678', 'y', NULL);
INSERT INTO `tb_dosen` VALUES (10, 'Budi Yuwono, S.Kom., M.Cs', 3, 'Solo', 'budi@mail.com', '082134662118', 'y', '21072019140108aktivasi.png');
INSERT INTO `tb_dosen` VALUES (12, 'Ganjar  Pranowo', 3, 'Purwokerto', 'ganjar@mail.com', '1231232312', 'y', 'WhatsApp Image 2019-05-15 at 11.14.21 PM.jpeg');
INSERT INTO `tb_dosen` VALUES (13, 'Yuwono', 1, 'SOLO', 'denis@mail.com', '08762345678', 'y', NULL);
INSERT INTO `tb_dosen` VALUES (14, 'Sanji', 3, 'Semarang', 'sanji@mail.com', '08987654321', 'n', NULL);
INSERT INTO `tb_dosen` VALUES (15, 'Indah', 2, 'Boyolali', 'rere@mail.com', '08785342671', 'n', NULL);
INSERT INTO `tb_dosen` VALUES (16, 'tes', 1, 'SOLO', 'denis@mail.com', '08762345678', 'y', NULL);
INSERT INTO `tb_dosen` VALUES (17, 'tes12445', 3, 'Semarang', 'sanji@mail.com', '08987654321', 'n', NULL);
INSERT INTO `tb_dosen` VALUES (18, 'tes6687', 2, 'Boyolali', 'rere@mail.com', '08785342671', 'n', NULL);
INSERT INTO `tb_dosen` VALUES (19, 'tes123214', 3, 'Boyolali', 'rere@mail.com', '08785342671', 'n', NULL);

-- ----------------------------
-- Table structure for tb_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tb_mahasiswa`;
CREATE TABLE `tb_mahasiswa`  (
  `nim` int(10) NOT NULL,
  `nama_mhs` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  `tahun_masuk` int(4) NULL DEFAULT NULL,
  `id_prodi` int(11) NULL DEFAULT NULL,
  `dosen_pa` int(5) NULL DEFAULT NULL,
  `foto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nim`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_mahasiswa
-- ----------------------------
INSERT INTO `tb_mahasiswa` VALUES (1201622055, 'Joni', 'SOlo', '2019-07-24', 2015, 233, 10, NULL);
INSERT INTO `tb_mahasiswa` VALUES (1201622056, 'Very Setia Budi', 'Grobogan', '2019-07-08', 2016, 5521, 9, NULL);

-- ----------------------------
-- Table structure for tb_prodi
-- ----------------------------
DROP TABLE IF EXISTS `tb_prodi`;
CREATE TABLE `tb_prodi`  (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `jenjang_prodi` tinyint(2) NULL DEFAULT NULL,
  `kaprodi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_prodi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 55264 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_prodi
-- ----------------------------
INSERT INTO `tb_prodi` VALUES (55201, 'Teknik Informatika', 1, 'Abdillah Baraja, S.Kom., M.Eng ');
INSERT INTO `tb_prodi` VALUES (55202, 'Ilmu Hukum', 1, 'Arga Baskara, S.H., M.H');
INSERT INTO `tb_prodi` VALUES (55203, 'Ekonomi', 1, 'Yanita Hendarti, S.E., M.Si');
INSERT INTO `tb_prodi` VALUES (55204, 'Ilmu Hukum', 2, 'Berliana Cantik, M.H');
INSERT INTO `tb_prodi` VALUES (55205, 'Ilmu Administrasi', 3, 'Ir. Sanjoyo, M.T');
INSERT INTO `tb_prodi` VALUES (55260, 'Manajemen', 2, 'Very Setia Budi M, S.Kom');
INSERT INTO `tb_prodi` VALUES (55261, 'Sistem Komputer', 2, 'Jani Kusanti, S.Kom.M.Cs.');
INSERT INTO `tb_prodi` VALUES (55262, 'Peternakan', 3, 'jeje');
INSERT INTO `tb_prodi` VALUES (55263, 'Perikanan', 1, 'jeni');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `user_id` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1201622056', 'Kopi Joni', '123', 'admin');
INSERT INTO `tb_user` VALUES ('9990', 'Nanda Arsyntha', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user');
INSERT INTO `tb_user` VALUES ('achmad', 'adcmad', '123', 'user');
INSERT INTO `tb_user` VALUES ('admin', 'Superadmin', 'admin', 'admin');
INSERT INTO `tb_user` VALUES ('deni', 'Deni Anjay', 'a232f336f536eb46f62042ee604d57684cf054d5', 'user');
INSERT INTO `tb_user` VALUES ('gabriel', 'Gabriel Y Kumoro', '1234', 'user');
INSERT INTO `tb_user` VALUES ('khofifah', 'khofifah ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin');
INSERT INTO `tb_user` VALUES ('leyga', 'Leyga Ivan ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'user');
INSERT INTO `tb_user` VALUES ('rivan', 'Rivan Aditya', '1234', 'user');
INSERT INTO `tb_user` VALUES ('tes', 'Mencoba', 'tes123', 'admin');
INSERT INTO `tb_user` VALUES ('theadmin', 'Very Setia Budi ', 'e74295bfc2ed0b52d40073e8ebad555100df1380', 'user');
INSERT INTO `tb_user` VALUES ('very', 'Very Setia Budi Murdianto', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
