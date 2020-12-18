<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-20 09:15:12 --> Query error: Unknown column 'a.department_name' in 'order clause' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code ORDER BY a.id_position AND a.department_name like '%QC%'  
ERROR - 2020-11-20 09:58:13 --> Query error: Unknown column 'a.department_name' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code AND a.department_name like '%QC%'  
ERROR - 2020-11-20 09:58:38 --> Query error: Unknown column 'a.department_pk' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code AND a.department_pk like '%QA%'  
ERROR - 2020-11-20 09:58:57 --> Query error: Unknown column 'c.department_name' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code AND c.department_name like '%GA%'  
ERROR - 2020-11-20 10:01:09 --> Query error: Unknown column 'a.scope_code' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.scope_code 
ERROR - 2020-11-20 10:02:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'c.scope_code' at line 37 - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY c.calibration_code c.scope_code 
ERROR - 2020-11-20 10:18:22 --> Query error: Unknown column 'a.department_name' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code, a.department_name, a.scope_code  AND a.calibration_code like '%U%'  AND a.calibration_code like '%QC%'  
ERROR - 2020-11-20 10:19:16 --> Query error: Unknown column 'a.location_name' in 'group statement' - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(a.periode_date_akhir, '%d-%m-%Y') AS periode_date_akhir
                FROM e04_ts_calibration_podetail a
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_awal >='01-11-20' and
                    a.periode_date_awal <='30-11-20' and 
                    b.statusdata = 'active' GROUP BY a.calibration_code, a.location_name, a.scope_code  AND a.calibration_code like '%U%'  AND a.calibration_code like '%QC%'  
ERROR - 2020-11-20 11:28:26 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 11:28:26 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 11:28:26 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 11:28:26 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 13:51:36 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 13:51:36 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 13:51:36 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 13:51:36 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:29:37 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:29:37 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:29:37 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:29:37 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:31:26 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_master_model.php 29
ERROR - 2020-11-20 14:32:38 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:32:38 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:32:38 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:32:38 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:36:36 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:36:36 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:36:36 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:36:36 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:38:51 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:38:51 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:38:51 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:38:51 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:41:48 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:41:48 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:41:48 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:41:48 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 14:59:47 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 14:59:47 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 14:59:47 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 14:59:47 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 15:10:12 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:10:17 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:10:30 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 15:10:31 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:10:36 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:11:11 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:11:15 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:11:15 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 15:11:16 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:12:29 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:12:49 --> Severity: Parsing Error --> syntax error, unexpected '<<' (T_SL) C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e04\Calibration_po.php 194
ERROR - 2020-11-20 15:18:36 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 15:18:36 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 15:18:36 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 15:18:36 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 15:18:54 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 15:18:54 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 15:18:54 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 15:18:54 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 15:19:42 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 15:19:42 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 15:19:42 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 15:19:42 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 15:54:50 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 15:54:50 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:55:01 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:55:01 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 15:58:35 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:58:35 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 15:58:49 --> 404 Page Not Found: Public/css
ERROR - 2020-11-20 15:58:49 --> 404 Page Not Found: Public/js
ERROR - 2020-11-20 16:13:34 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:13:34 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:13:34 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:13:34 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:20:43 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:20:43 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:20:43 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:20:43 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:28:35 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:28:35 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:28:35 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:28:36 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:29:16 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:29:16 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:29:16 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:29:16 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:29:54 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:29:54 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:29:54 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:29:54 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:30:45 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:30:45 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:30:45 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:30:45 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:31:33 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:31:33 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:31:33 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:31:33 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:31:59 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:31:59 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:31:59 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:31:59 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:33:02 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:33:02 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:33:02 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:33:02 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:37:37 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:37:38 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:37:38 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:37:38 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:47:29 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:47:29 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:47:29 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:47:29 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
ERROR - 2020-11-20 16:52:10 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 32
ERROR - 2020-11-20 16:52:10 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 33
ERROR - 2020-11-20 16:52:10 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 34
ERROR - 2020-11-20 16:52:10 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 35
