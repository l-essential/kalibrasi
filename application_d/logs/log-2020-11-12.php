<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-12 09:34:41 --> 404 Page Not Found: Public/images
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-12 09:34:41 --> 404 Page Not Found: Public/images
ERROR - 2020-11-12 11:23:57 --> Query error: Unknown column 'a.department_name' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND a.department_name like '%QC%'  
ERROR - 2020-11-12 11:24:43 --> Query error: Unknown column 'b.department_name' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND b.department_name like '%QC%'  
ERROR - 2020-11-12 11:24:56 --> Query error: Unknown column 'b.calibration_code' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND b.calibration_code like '%QC%'  
ERROR - 2020-11-12 11:25:11 --> Query error: Unknown column 'b.calibration_code' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND b.calibration_code like '%QC%'  
ERROR - 2020-11-12 11:28:04 --> Query error: Unknown column 'a.department_name' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND a.department_name like '%QC%'  
ERROR - 2020-11-12 11:28:20 --> Query error: Unknown column 'c.department_name' in 'group statement' - Invalid query: SELECT 
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
                    a.statusdata = 'active' GROUP BY a.calibration_code AND c.department_name like '%QC%'  
ERROR - 2020-11-12 13:06:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'a.calibration_code like '%QC%' GROUP BY a.id_position' at line 35 - Invalid query: SELECT 
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
                    a.statusdata = 'active' a.calibration_code like '%QC%' GROUP BY a.id_position 
ERROR - 2020-11-12 14:10:58 --> 404 Page Not Found: Public/images
ERROR - 2020-11-12 14:10:58 --> 404 Page Not Found: Public/images
