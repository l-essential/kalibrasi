<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-11 09:11:20 --> Severity: Warning --> number_format() expects parameter 2 to be long, string given C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 97
ERROR - 2020-11-11 09:11:41 --> Severity: Warning --> number_format() expects parameter 2 to be long, string given C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 97
ERROR - 2020-11-11 09:12:15 --> Severity: Warning --> Wrong parameter count for number_format() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 97
ERROR - 2020-11-11 09:12:57 --> Severity: Warning --> Wrong parameter count for number_format() C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 97
ERROR - 2020-11-11 09:24:06 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-11 10:38:16 --> Query error: Unknown column 'a.id_role' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.id_role 
ERROR - 2020-11-11 14:26:45 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-11 14:50:49 --> Severity: Parsing Error --> syntax error, unexpected '7' (T_LNUMBER) C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 96
ERROR - 2020-11-11 14:50:55 --> 404 Page Not Found: Public/js
ERROR - 2020-11-11 14:50:56 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 14:51:07 --> Severity: Parsing Error --> syntax error, unexpected '7' (T_LNUMBER) C:\xampp\htdocs\kalibrasi_dummy\application\views\e04\v_report\report.php 96
ERROR - 2020-11-11 16:29:56 --> 404 Page Not Found: Public/js
ERROR - 2020-11-11 16:29:56 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 16:30:02 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 16:30:02 --> 404 Page Not Found: Public/js
ERROR - 2020-11-11 16:30:26 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 16:30:26 --> 404 Page Not Found: Public/js
ERROR - 2020-11-11 16:44:12 --> 404 Page Not Found: Public/js
ERROR - 2020-11-11 16:44:12 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 16:44:21 --> 404 Page Not Found: Public/css
ERROR - 2020-11-11 16:44:22 --> 404 Page Not Found: Public/js
