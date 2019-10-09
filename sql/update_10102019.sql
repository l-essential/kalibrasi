ALTER TABLE `m_bataspengasilan` ADD `batasnilai_rumahtapak_suamiistri` INT(11) NOT NULL DEFAULT '0' AFTER `batasnilai_rumahsusun`, ADD `batasnilai_rumahrusun_suamiistri` INT(11) NOT NULL DEFAULT '0' AFTER `batasnilai_rumahtapak_suamiistri`;

ALTER TABLE `m_batashargarumah` ADD `batasnilai_penghasilantapak` INT(11) NOT NULL DEFAULT '0' AFTER `harga_perm2`, ADD `batasnilai_penghasilansusun` INT(11) NOT NULL DEFAULT '0' AFTER `batasnilai_penghasilantapak`, ADD `batasnilai_penghasilantapaksuamiistri` INT(11) NOT NULL DEFAULT '0' AFTER `batasnilai_penghasilansusun`, ADD `batasnilai_penghasilansusunistri` INT(11) NOT NULL DEFAULT '0' AFTER `batasnilai_penghasilantapaksuamiistri`;


ALTER TABLE `m_batashargarumahpengecualian`  ADD `batasnilai_penghasilantapak` INT(11) NOT NULL DEFAULT '0'  AFTER `harga_perm2`,  ADD `batasnilai_penghasilansusun` INT(11) NOT NULL DEFAULT '0'  AFTER `batasnilai_penghasilantapak`,  ADD `batasnilai_penghasilantapaksuamiistri` INT(11) NOT NULL DEFAULT '0'  AFTER `batasnilai_penghasilansusun`,  ADD `batasnilai_penghasilansusunistri` INT(11) NOT NULL DEFAULT '0'  AFTER `batasnilai_penghasilantapaksuamiistri`;

ALTER TABLE `m_batashargarumah` CHANGE `batasnilai_penghasilantapaksuamiistri` `batasnilai_penghasilantapak_suamiistri` INT(11) NOT NULL DEFAULT '0', CHANGE `batasnilai_penghasilansusunistri` `batasnilai_penghasilansusun_suamiistri` INT(11) NOT NULL DEFAULT '0';

ALTER TABLE `m_batashargarumahpengecualian` CHANGE `batasnilai_penghasilantapaksuamiistri` `batasnilai_penghasilantapak_suamiistri` INT(11) NOT NULL DEFAULT '0', CHANGE `batasnilai_penghasilansusunistri` `batasnilai_penghasilansusun_suamiistri` INT(11) NOT NULL DEFAULT '0';

ALTER TABLE `t_pengajuanbankheader` ADD `id_bank` INT(11) NOT NULL AFTER `sampaitanggal`;

ALTER TABLE `t_pengajuanbankheader`
  DROP `id_bankquotatahunan`;

ALTER TABLE `t_pengajuanbankheader` CHANGE `prihal` `prihal` ENUM('SSB','SSM','SSA','SBUM') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;