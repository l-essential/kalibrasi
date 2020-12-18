<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-27 08:32:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '

        FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_d' at line 9 - Invalid query: SELECT 
        a.*,
        b.*,
        c.*,
        d.*,
        a.calibration_qty as qty_cal,
        a.estimasi_calibration,
        f.vendor_name,
        a.,

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
            a.c_pohedaer_id='132' and a.statusdata='active'
ERROR - 2020-10-27 08:34:39 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:34:40 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:34:46 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:34:46 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:36:15 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:36:16 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:36:16 --> Query error: Unknown column 'a.status_po0' in 'field list' - Invalid query: SELECT 
        a.*,
        b.*,
        c.*,
        d.*,
        a.calibration_qty as qty_cal,
        a.estimasi_calibration,
        f.vendor_name,
        a.status_po0,

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
            a.c_pohedaer_id='132' and a.statusdata='active'
ERROR - 2020-10-27 08:36:34 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:36:34 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:36:45 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:36:46 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:36:46 --> Query error: Unknown column 'a.status_poq' in 'field list' - Invalid query: SELECT 
        a.*,
        b.*,
        c.*,
        d.*,
        a.calibration_qty as qty_cal,
        
        f.vendor_name,
        a.status_poq,

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
            a.c_pohedaer_id='132' and a.statusdata='active'
ERROR - 2020-10-27 08:37:17 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:37:17 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:37:36 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:37:36 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:38:40 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:38:41 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:46:02 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 08:46:02 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 08:56:27 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 172
ERROR - 2020-10-27 08:57:14 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 08:57:28 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 09:33:55 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 09:33:55 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 09:37:25 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 09:37:25 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:00:54 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:19:02 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:19:13 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:19:36 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:24:45 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:28:42 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:28:46 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:34:36 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:34:36 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:35:05 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:35:05 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:36:25 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:36:25 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:36:44 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:36:44 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:38:17 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:38:27 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:04 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:40:04 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:40:05 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:16 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:18 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:24 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:39 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:56 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:40:58 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:40:58 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:42:08 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:42:08 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:42:19 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:42:19 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:42:20 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 10:46:08 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 10:46:08 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 10:57:17 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 176
ERROR - 2020-10-27 11:00:02 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 11:00:03 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 11:00:08 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 178
ERROR - 2020-10-27 11:00:10 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 11:00:11 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 11:00:18 --> Severity: Error --> Call to undefined method CI_Upload::postdatadetail() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 178
ERROR - 2020-10-27 11:00:46 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 11:00:46 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 11:30:16 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 11:30:17 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 13:19:45 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 13:19:45 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 13:20:00 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 13:20:03 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 13:20:08 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 13:21:06 --> 404 Page Not Found: Dashboard/getnotification
ERROR - 2020-10-27 13:21:36 --> 404 Page Not Found: Dashboard/getnotification
ERROR - 2020-10-27 13:22:07 --> 404 Page Not Found: Dashboard/getnotification
ERROR - 2020-10-27 13:22:25 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 13:22:26 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 13:22:26 --> 404 Page Not Found: Dashboard/getnotification
ERROR - 2020-10-27 14:02:36 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:02:36 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:26:50 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:26:50 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:28:11 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:28:11 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:29:00 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:29:00 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:29:54 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:29:54 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:30:52 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:30:52 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:52:28 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:52:29 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:53:09 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:53:10 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:54:39 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:54:39 --> 404 Page Not Found: Public/js
ERROR - 2020-10-27 14:54:50 --> 404 Page Not Found: Public/css
ERROR - 2020-10-27 14:54:50 --> 404 Page Not Found: Public/js
