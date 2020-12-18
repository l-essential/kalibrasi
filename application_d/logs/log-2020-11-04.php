<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-04 08:34:24 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 08:34:24 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 08:34:40 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 08:34:40 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 09:25:36 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 09:25:36 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 09:25:45 --> 404 Page Not Found: Upload/do_upload
ERROR - 2020-11-04 09:26:38 --> 404 Page Not Found: Upload/do_upload
ERROR - 2020-11-04 09:27:37 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 09:28:02 --> Query error: Table 'lessential_d.array' doesn't exist - Invalid query: INSERT INTO Array (`e04_ts_calibration_podetail`) VALUES ('')
ERROR - 2020-11-04 09:28:50 --> Query error: Table 'lessential_d.array' doesn't exist - Invalid query: INSERT INTO Array (`e04_ts_calibration_podetail`) VALUES ('')
ERROR - 2020-11-04 09:29:41 --> Query error: Table 'lessential_d.array' doesn't exist - Invalid query: INSERT INTO Array (`e04_ts_calibration_podetail`) VALUES ('')
ERROR - 2020-11-04 09:43:38 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 09:43:38 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 09:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 09:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 09:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 09:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 09:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 09:46:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_calibration_po\form_detail.php 82
ERROR - 2020-11-04 10:14:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:15:03 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:15:44 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:17:23 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:18:36 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:19:38 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:19:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:26:47 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:32:09 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:37:28 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:37:30 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:37:31 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:37:31 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:37:32 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:37:32 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:39:01 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:39:01 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:39:03 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:39:44 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:39:44 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:40:44 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:40:45 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:40:45 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:43:18 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:43:18 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:47:59 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:48:00 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:48:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calib' at line 17 - Invalid query: SELECT 
                a.*,
                b.*,
                c.*,
                d.*,
                a.calibration_qty as qty_cal,
                f.vendor_name,
                a.tools_no_sertifikat,
                a.periode_date_awal,
                a.periode_date_akhir,
                a.no_po,
                a.keterangan,
                a.status_po,
                a.estimasi_calibration,
                a.foto_sertifikat

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                WHERE
                    a.c_pohedaer_id='140' and a.statusdata='active'
ERROR - 2020-11-04 10:48:20 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:48:21 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:50:41 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:50:41 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:51:51 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:51:52 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:51:53 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:52:54 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:52:55 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:52:55 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:56:08 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:56:09 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:56:11 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:57:14 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:57:14 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:57:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 10:59:28 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:59:28 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:59:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as.*,
                b.*,
                c.*,
                d.*,
       ' at line 2 - Invalid query: SELECT 
                as.*,
                b.*,
                c.*,
                d.*,
                a.calibration_qty as qty_cal,
                f.vendor_name,
                a.tools_no_sertifikat,
                a.periode_date_awal,
                a.periode_date_akhir,
                a.no_po,
                a.keterangan,
                a.status_po,
                a.estimasi_calibration,
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                WHERE
                    a.c_pohedaer_id='140' and a.statusdata='active'
ERROR - 2020-11-04 10:59:38 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 10:59:38 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 10:59:39 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:03:16 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:03:16 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:03:17 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:04:30 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:04:30 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:10:30 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:10:31 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:10:33 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:24:53 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:24:54 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:25:18 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:25:19 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:26:24 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:26:25 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:29:46 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:29:46 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:29:49 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:30:34 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:30:34 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:30:34 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:30:34 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:30:50 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:30:50 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:30:51 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:41:20 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:41:22 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:41:41 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:41:41 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:41:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:42:51 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:42:52 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:42:54 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:45:01 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:45:01 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:45:04 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:48:17 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:48:17 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:48:19 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:50:45 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:50:46 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:50:47 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:54:39 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:54:40 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:54:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:59:15 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:59:15 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:59:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 11:59:30 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 11:59:31 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 11:59:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:01:39 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:01:39 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:01:47 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:04:29 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:04:29 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:04:31 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:05:03 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:05:06 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:05:14 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:05:54 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:05:54 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:05:55 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:06:41 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:06:42 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:06:45 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:23:29 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:23:30 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:23:33 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:24:37 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:24:37 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:24:38 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:24:38 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:28:03 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:28:03 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:44:42 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:44:42 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:44:44 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:49:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:49:54 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 191
ERROR - 2020-11-04 12:50:33 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:50:38 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:50:52 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 191
ERROR - 2020-11-04 12:52:06 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:52:07 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:52:13 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:52:15 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:52:15 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:52:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:52:27 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 191
ERROR - 2020-11-04 12:53:17 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:53:17 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:56:45 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:56:46 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:56:54 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:56:54 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:57:03 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 175
ERROR - 2020-11-04 12:59:14 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:59:15 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:59:19 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:59:22 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:59:22 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:59:22 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 12:59:38 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 175
ERROR - 2020-11-04 12:59:45 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 12:59:45 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 12:59:51 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:00:20 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:00:21 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:00:22 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:02:27 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:02:28 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:04:33 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:04:33 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:04:37 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:04:48 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 175
ERROR - 2020-11-04 13:05:16 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:05:20 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:05:31 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 175
ERROR - 2020-11-04 13:05:38 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:05:38 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:05:46 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 175
ERROR - 2020-11-04 13:05:51 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:05:51 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:11:14 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:11:14 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:11:20 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:11:21 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:11:24 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:11:35 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:11:40 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:11:55 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:11:55 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:12:02 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:12:02 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:12:48 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:12:48 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:12:58 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:12:59 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:13:03 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:13:35 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:13:35 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:13:36 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:13:48 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:13:48 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:13:52 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:14:16 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:14:16 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:14:17 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:14:23 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:14:24 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:14:28 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:19:10 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:19:24 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:19:45 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:22:38 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:22:39 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:22:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:22:51 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 13:22:52 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:23:23 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 13:23:24 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:24:31 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:24:32 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:24:33 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:24:42 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 13:24:44 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:28:18 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:28:18 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:28:22 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:28:23 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:28:24 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:28:51 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 13:28:53 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:29:42 --> 404 Page Not Found: Calibration_po/postdatadetail
ERROR - 2020-11-04 13:29:44 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:30:18 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:30:20 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:30:21 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:30:36 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:32:09 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:32:09 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:32:11 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:32:28 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:32:28 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:32:32 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:33:36 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:33:36 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:33:45 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:34:10 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:34:10 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:34:11 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:34:22 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:34:22 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:34:27 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:35:08 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:36:30 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:36:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:36:47 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:36:59 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:37:20 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:37:34 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:37:40 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:37:49 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:37:59 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:38:40 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:41:00 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:41:45 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 176
ERROR - 2020-11-04 13:41:46 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:42:23 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 176
ERROR - 2020-11-04 13:42:25 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:44:09 --> Severity: Warning --> Illegal string offset 'id_position' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Calibration_po_model.php 176
ERROR - 2020-11-04 13:44:11 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:44:50 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:48:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:48:52 --> Query error: No database selected - Invalid query: UPDATE `e04_ts_calibration_podetail` SET `foto_sertifikat` = 'srt_avatar.jpg'
WHERE `id_position` = '136'
ERROR - 2020-11-04 13:48:54 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:50:15 --> Query error: No database selected - Invalid query: UPDATE `e04_ts_calibration_podetail` SET `foto_sertifikat` = 'srt_png.png'
WHERE `id_position` = '136'
ERROR - 2020-11-04 13:50:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:52:37 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:52:46 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:52:47 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 13:52:49 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 13:53:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:55:29 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:55:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:57:21 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 13:58:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:06:43 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:07:42 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:07:42 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:07:43 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:11:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:16 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:18 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:18 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:48 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:11:50 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:11:50 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:11:51 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:12:11 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:13:46 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:15:03 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:19:48 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:19:49 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:19:50 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:20:09 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:20:09 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:20:21 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:21:40 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:21:40 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:21:41 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:21:57 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:23:43 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:25:57 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:26:02 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:26:12 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:26:27 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:26:27 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:26:28 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:27:28 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:28:35 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:28:35 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:29:58 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:29:58 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:29:59 --> 404 Page Not Found: Srt_pngpng/index
ERROR - 2020-11-04 14:30:27 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:31:32 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:31:32 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:31:33 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:34:15 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:34:16 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:34:16 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:34:46 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:34:59 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:35:06 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:35:27 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:36:40 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:36:40 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:36:46 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:36:47 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:37:17 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:37:17 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:37:17 --> 404 Page Not Found: Undefined/index
ERROR - 2020-11-04 14:38:13 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:38:13 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:38:37 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:38:37 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:38:38 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:41:29 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:41:29 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:41:30 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:42:04 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:42:04 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:42:05 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:45:13 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:45:13 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:45:14 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:46:38 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:46:39 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:46:40 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:46:54 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:46:54 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:46:55 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:47:05 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:47:11 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:47:15 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:47:33 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:47:33 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:47:34 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:47:50 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:47:51 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:47:51 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:48:16 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:48:16 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:48:17 --> 404 Page Not Found: Undefined/index
ERROR - 2020-11-04 14:48:56 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:48:56 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:48:57 --> 404 Page Not Found: Undefined/index
ERROR - 2020-11-04 14:49:41 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:49:41 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:49:41 --> 404 Page Not Found: Undefined/index
ERROR - 2020-11-04 14:50:37 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:50:37 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:50:48 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:50:49 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:50:49 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:51:31 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:51:31 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:51:31 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:53:39 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:53:39 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:53:39 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:53:52 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:53:52 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:53:53 --> 404 Page Not Found: Srt_avatarjpg/index
ERROR - 2020-11-04 14:54:29 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:54:29 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:54:30 --> 404 Page Not Found: Allasets/foto
ERROR - 2020-11-04 14:55:04 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:55:04 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:57:31 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:57:32 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 14:58:15 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 14:58:15 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 15:03:35 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 15:03:37 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 15:04:03 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 15:04:04 --> 404 Page Not Found: Public/js
ERROR - 2020-11-04 15:04:14 --> 404 Page Not Found: Public/css
ERROR - 2020-11-04 15:04:14 --> 404 Page Not Found: Public/js
