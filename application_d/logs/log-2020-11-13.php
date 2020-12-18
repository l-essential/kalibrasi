<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-13 07:57:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\kalibrasi_dummy\system\database\drivers\mysqli\mysqli_driver.php 203
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-13 07:57:28 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\kalibrasi_dummy\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2020-11-13 07:57:28 --> Unable to connect to the database
ERROR - 2020-11-13 07:57:28 --> Unable to connect to the database
ERROR - 2020-11-13 11:22:14 --> Query error: Unknown column 'a.periode_year' in 'where clause' - Invalid query: SELECT 
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_year >='2020' and
                    a.periode_year <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-13 15:10:32 --> Query error: Unknown column 'a.tanggal' in 'where clause' - Invalid query: SELECT 
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                   WHERE
                    a.tanggal >='2020-11-01' and a.tanggal <='2020-11-30'  
ERROR - 2020-11-13 15:17:33 --> Query error: Unknown column 'b.calibration_code' in 'where clause' - Invalid query: SELECT 
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                   WHERE
                    a.periode_date_akhir >='01-11-20' and a.periode_date_akhir <='30-11-20'  AND b.calibration_code like '%QA'  
ERROR - 2020-11-13 15:46:34 --> Severity: Error --> Cannot use object of type mysqli as array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Department_saya.php 65
ERROR - 2020-11-13 15:47:36 --> Severity: Error --> Cannot use object of type mysqli as array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Department_saya.php 65
ERROR - 2020-11-13 15:48:47 --> Severity: Error --> Cannot use object of type mysqli as array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Department_saya.php 65
ERROR - 2020-11-13 15:52:18 --> Severity: Error --> Cannot use object of type mysqli as array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Department_saya.php 65
ERROR - 2020-11-13 15:54:44 --> Severity: Error --> Call to a member function result_array() on array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Formulir.php 51
ERROR - 2020-11-13 15:55:17 --> Severity: Error --> Call to a member function result_array() on array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Formulir.php 51
ERROR - 2020-11-13 15:56:03 --> Severity: Error --> Cannot use object of type mysqli as array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Department_saya.php 65
ERROR - 2020-11-13 15:58:04 --> Severity: Error --> Call to a member function result_array() on array C:\xampp\htdocs\kalibrasi_dummy\application\controllers\e01\Formulir.php 51
ERROR - 2020-11-13 16:14:40 --> Query error: Table 'lessential_d.report' doesn't exist - Invalid query: SELECT 
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN report b on a.id_report = b.id_report
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_akhir >='01-11-20' and
                    a.periode_date_akhir <='30-11-20' and 
                    a.statusdata = 'active'  AND a.calibration_code like '%QC'  
ERROR - 2020-11-13 16:15:40 --> Query error: Table 'lessential_d.report' doesn't exist - Invalid query: SELECT 
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN report b on a.id_report = b.id_report
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN  e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_akhir >='01-11-20' and
                    a.periode_date_akhir <='30-11-20' and 
                    b.statusdata = 'active'  AND a.calibration_code like '%QC'  
ERROR - 2020-11-13 16:17:52 --> Query error: Unknown column 'e.periode_date' in 'field list' - Invalid query: SELECT 
                a.*,
                b.*,
                c.*,
                a.calibration_qty as qty_cal,
                e.vendor_name,
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
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ms_vendor e on a.vendor_id = e.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_akhir >='01-11-20' and
                    a.periode_date_akhir <='30-11-20' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-13 16:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '
                a.tools_no_sertifikat,
                a.periode_date_awal,
' at line 6 - Invalid query: SELECT 
                a.*,
                b.*,
                c.*,
                a.calibration_qty as qty_cal,
                .vendor_name,
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
                DATE_FORMAT(a.periode_date_awal, '%d-%m-%Y') AS periode_date_awal
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ms_vendor e on a.vendor_id = e.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_akhir >='01-11-20' and
                    a.periode_date_akhir <='30-11-20' and 
                    b.statusdata = 'active'  
ERROR - 2020-11-13 16:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '
                a.tools_no_sertifikat,
                a.periode_date_awal,
' at line 6 - Invalid query: SELECT 
                a.*,
                b.*,
                c.*,
                a.calibration_qty as qty_cal,
                .vendor_name,
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
                DATE_FORMAT(a.periode_date_awal, '%d-%m-%Y') AS periode_date_awal,
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ms_vendor e on a.vendor_id = e.vendor_id

                 WHERE a.statusdata='active' AND
                    a.periode_date_akhir >='01-11-20' and
                    a.periode_date_akhir <='30-11-20' and 
                    b.statusdata = 'active'  
