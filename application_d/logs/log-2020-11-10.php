<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-10 12:57:04 --> Query error: Unknown column 'dis_ppn' in 'field list' - Invalid query: SELECT 
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

                SUM(dis_ppn) as Total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  AND a.calibration_code like '%QC%'  
ERROR - 2020-11-10 12:57:29 --> Query error: Unknown column 'disc_ppn' in 'field list' - Invalid query: SELECT 
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

                SUM(disc_ppn) as Total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y') AS periode_date
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration_poheader b on a.c_pohedaer_id = b.c_pohedaer_id
                LEFT JOIN e04_ts_calibration c on a.calibration_code = c.calibration_code
                LEFT JOIN e04_ms_tools d on c.tools_id = d.tools_id
                LEFT JOIN e04_ts_calibration_periode e on c.calibration_id = e.calibration_id 
                LEFT JOIN e04_ms_vendor f on a.vendor_id = f.vendor_id

                 WHERE a.statusdata='active' AND
                    a.statusdata = 'active'  AND a.calibration_code like '%QC%'  
ERROR - 2020-11-10 13:24:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') AS' at line 23 - Invalid query: SELECT 
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

                (SUM(a.calibration_price) as total,

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
ERROR - 2020-11-10 13:30:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') ' at line 23 - Invalid query: SELECT 
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

                FORMAT(SUM(a.disc_ppn)) as total,

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
ERROR - 2020-11-10 13:31:22 --> Query error: Unknown column 'a.disc_ppn' in 'field list' - Invalid query: SELECT 
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

                (SUM(a.disc_ppn)) as total,

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
ERROR - 2020-11-10 13:31:51 --> Query error: Unknown column 'a.total_harga' in 'field list' - Invalid query: SELECT 
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

                (SUM(a.total_harga)) as total,

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
ERROR - 2020-11-10 13:33:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') ' at line 23 - Invalid query: SELECT 
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

                FORMAT( SUM(a.calibration_price)) as total,

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
ERROR - 2020-11-10 13:33:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as total,

                DATE_FORMAT(c.startcalibration_date, '%d-%m-%Y') ' at line 23 - Invalid query: SELECT 
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

                FORMAT(SUM(a.calibration_price)) as total,

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
ERROR - 2020-11-10 13:43:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y' at line 25 - Invalid query: SELECT 
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

                SUM(a.calibration_price) as total ORDER BY a.id_position,

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
ERROR - 2020-11-10 13:44:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y' at line 25 - Invalid query: SELECT 
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

                SUM(a.calibration_price) as total ORDER BY id_position,

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
ERROR - 2020-11-10 13:45:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY a.id_position,

                DATE_FORMAT(c.startcalibration_date, ' at line 23 - Invalid query: SELECT 
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

                SUM(a.calibration_price) as total GROUP BY a.id_position,

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
ERROR - 2020-11-10 13:45:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as total GROUP BY a.id_position)),

                DATE_FORMAT(c.startcalibra' at line 23 - Invalid query: SELECT 
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

                (SUM(a.calibration_price) as total GROUP BY a.id_position)),

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
ERROR - 2020-11-10 13:46:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY a.id_position,

                DATE_FORMAT(c.startcalibration_date, ' at line 23 - Invalid query: SELECT 
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

                SUM(a.calibration_price) as total GROUP BY a.id_position,

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
ERROR - 2020-11-10 13:48:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'GROUP BY a.id_position,

                DATE_FORMAT(c.startcalibration_date, ' at line 23 - Invalid query: SELECT 
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

                SUM(a.calibration_price) as total GROUP BY a.id_position,

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
ERROR - 2020-11-10 14:54:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as disc_ppn) as total,

                DATE_FORMAT(c.startcalibration_date, '' at line 23 - Invalid query: SELECT 
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

                SUM(((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn) as total,

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
ERROR - 2020-11-10 15:13:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y' at line 25 - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total ORDER BY a.id_position,

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
ERROR - 2020-11-10 15:16:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AS startcalibration_date,
                DATE_FORMAT(e.periode_date, '%d-%m-%Y' at line 25 - Invalid query: SELECT 
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

                SUM((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as total ORDER BY (a.id_position),

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
ERROR - 2020-11-10 15:32:09 --> Query error: Unknown column 'hkjds' in 'order clause' - Invalid query: SELECT 
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
                    a.statusdata = 'active' ORDER BY hkjds 
ERROR - 2020-11-10 15:32:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'a.id_position' at line 35 - Invalid query: SELECT 
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
                    a.statusdata = 'active' ORDER a.id_position 
ERROR - 2020-11-10 15:40:56 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-10 15:49:50 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-10 15:55:06 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-10 15:55:48 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
ERROR - 2020-11-10 17:14:51 --> Severity: Warning --> Illegal string offset 'department_name' C:\xampp\htdocs\kalibrasi_dummy\application\models\e04\Report_model.php 36
