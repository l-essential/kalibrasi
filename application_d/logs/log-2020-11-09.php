<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-09 08:56:24 --> Severity: error --> Exception: C:\xampp\htdocs\kalibrasi_dummy\application\models/e04/Report_model.php exists, but doesn't declare class Report_model C:\xampp\htdocs\kalibrasi_dummy\system\core\Loader.php 340
ERROR - 2020-11-09 09:26:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM e04_ts_calibration a  
                LEFT JOIN e04_ms_tools  b on a.tool' at line 2 - Invalid query:  SELECT a.*, b.*, c.s*
                FROM e04_ts_calibration a  
                LEFT JOIN e04_ms_tools  b on a.tools_id = b.tools_id
                LEFT JOIN e04_ts_calibration_podetail c on a.calibration_code = c.calibration_code
                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  AND a.calibration_code like '%QC%'  
ERROR - 2020-11-09 09:27:10 --> Query error: Unknown table 'lessential_d.c' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration a  
                LEFT JOIN e04_ms_tools  b on a.tools_id = b.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail c on a.calibration_code = c.calibration_code
                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  AND a.calibration_code like '%QA%'  
ERROR - 2020-11-09 11:14:32 --> Query error: Unknown column 'a.periode_date_awal' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='2020' and
                    a.periode_date_akhir <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-09 11:15:26 --> 404 Page Not Found: Public/js
ERROR - 2020-11-09 11:15:26 --> 404 Page Not Found: Public/css
ERROR - 2020-11-09 11:16:04 --> Query error: Unknown column 'a.periode_date_awal' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='MonMon-NovNov-2020202020202020' and
                    a.periode_date_akhir <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-09 11:16:28 --> Query error: Unknown column 'a.periode_date_awal' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='Mon-Nov-2020' and
                    a.periode_date_akhir <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-09 11:17:11 --> 404 Page Not Found: Public/css
ERROR - 2020-11-09 11:17:11 --> 404 Page Not Found: Public/js
ERROR - 2020-11-09 11:17:22 --> Query error: Unknown column 'a.periode_date_awal' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='Mon-Nov-2020' and
                    a.periode_date_akhir <='Mon-Nov-2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-09 11:18:19 --> 404 Page Not Found: Public/css
ERROR - 2020-11-09 11:18:19 --> 404 Page Not Found: Public/js
ERROR - 2020-11-09 14:00:43 --> Severity: error --> Exception: C:\xampp\htdocs\kalibrasi_dummy\application\models/e04/Report_model.php exists, but doesn't declare class Report_model C:\xampp\htdocs\kalibrasi_dummy\system\core\Loader.php 340
ERROR - 2020-11-09 15:07:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 32 - Invalid query: SELECT 
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
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM  a   
                LEFT JOIN e04_ts_calibration b on a.calibration_id = b.calibration_id
                LEFT JOIN  c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN  f on a.vendor_id = f.vendor_id

                WHERE 
ERROR - 2020-11-09 15:08:00 --> Query error: Table 'lessential_d.a' doesn't exist - Invalid query: SELECT 
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
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM  a   
                LEFT JOIN e04_ts_calibration b on a.calibration_id = b.calibration_id
                LEFT JOIN  c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN  f on a.vendor_id = f.vendor_id

                 
ERROR - 2020-11-09 15:08:08 --> Query error: Table 'lessential_d.a' doesn't exist - Invalid query: SELECT 
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
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM  a   
                LEFT JOIN e04_ts_calibration b on a.calibration_id = b.calibration_id
                LEFT JOIN  c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN  f on a.vendor_id = f.vendor_id

                 
ERROR - 2020-11-09 15:14:46 --> Query error: Table 'lessential_d.a' doesn't exist - Invalid query: SELECT 
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
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM  a   
                LEFT JOIN e04_ts_calibration b on a.calibration_id = b.calibration_id
                LEFT JOIN  c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN  f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 15:19:04 --> Query error: Unknown table 'lessential_d.c' - Invalid query: SELECT 
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
                a.foto_sertifikat,

                FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,

                ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                -- LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 15:30:57 --> Query error: No database selected - Invalid query: SELECT 
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

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 15:31:44 --> Query error: No database selected - Invalid query: SELECT 
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

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 15:32:47 --> Query error: No database selected - Invalid query: SELECT 
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

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 15:33:31 --> Query error: No database selected - Invalid query: SELECT 
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

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  
ERROR - 2020-11-09 16:38:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\scr\v_useraccess\form.php 89
ERROR - 2020-11-09 16:38:54 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\views\scr\v_useraccess\form.php 89
