/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  ahmad
 * Created: Oct 13, 2019
 */

CREATE TABLE `db_pu`.`tmp_upload_provinsi` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `kode_provinsi` INT(2) NOT NULL DEFAULT '0' , `nama_provinsi` VARCHAR(50) NOT NULL , `kode_kabkota` INT(4) NOT NULL DEFAULT '0' , `nama_kabkota` VARCHAR(50) NOT NULL , `kode_kecamatan` INT(7) NOT NULL DEFAULT '0' , `nama_kecamatan` VARCHAR(50) NOT NULL , `kode_desa` INT(10) NOT NULL DEFAULT '0' , `nama_desa` VARCHAR(50) NOT NULL , `kodepos` INT(5) NOT NULL , `createby` INT(11) NULL DEFAULT '0' , `createtime` DATETIME NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

ALTER TABLE `db_pu`.`provinsi` ADD INDEX `GETKODEPROVINSI` (`kode_provinsi`, `statusdata`);

ALTER TABLE `db_pu`.`kotakabupaten` ADD INDEX `GETKODEKABKOTA` (`kode_kota`, `statusdata`);

ALTER TABLE `db_pu`.`kecamatan` ADD INDEX `GETKODEKECAMATAN` (`kode_kecamatan`, `statusdata`);

ALTER TABLE `db_pu`.`desa` ADD INDEX `GETKODEDESA` (`kode_desa`, `statusdata`);

ALTER TABLE `db_pu`.`desa` ADD INDEX `GETKODEPOS` (`kodepos`, `statusdata`);

ALTER TABLE `db_pu`.`kotakabupaten` ADD INDEX `GETPROVINSIKOTA` (`id_provinsi`, `kode_kota`, `statusdata`);

ALTER TABLE `db_pu`.`kecamatan` ADD UNIQUE `GETKABKOTAKODEKECAMATAN` (`id_kota`, `kode_kecamatan`, `statusdata`);

ALTER TABLE `db_pu`.`kecamatan` ADD INDEX `GETBYIDKECAMATAN` (`id_kecamatan`, `statusdata`);

ALTER TABLE `db_pu`.`kotakabupaten` ADD INDEX `GETBYIDKABKOTA` (`id_kota`, `statusdata`);

ALTER TABLE `db_pu`.`provinsi` ADD INDEX `GETBYIDPROVINSI` (`id_provinsi`, `statusdata`);

ALTER TABLE `db_pu`.`m_batashargarumahpengecualian` ADD INDEX `GETBYDESA` (`id_provinsi`, `id_kota`, `id_kecamatan`, `id_desa`, `statusdata`);

ALTER TABLE `db_pu`.`m_batashargarumahpengecualian` ADD INDEX `GETBYKECAMATAN` (`id_provinsi`, `id_kota`, `id_kecamatan`, `statusdata`);

ALTER TABLE `db_pu`.`m_batashargarumahpengecualian` ADD INDEX `GETBYKABKOTA` (`id_provinsi`, `id_kota`, `statusdata`);

ALTER TABLE `db_pu`.`m_batashargarumahpengecualian` ADD INDEX `GETBYPROVINSI` (`id_provinsi`, `statusdata`);