<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-16 09:16:42 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 09:16:43 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 09:27:05 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 09:27:06 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 09:30:55 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 09:30:55 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 09:32:12 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi_dummy\application\core\MY_Controller.php 345
ERROR - 2020-11-16 09:32:27 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 09:32:27 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:31:01 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:31:02 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:36:23 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:36:24 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:44:28 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:44:29 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:44:33 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:44:33 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:51:17 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 10:51:17 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:51:30 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 10:51:31 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 11:13:24 --> Query error: Unknown column 'periode_date_awal' in 'field list' - Invalid query:   SELECT  a.*,
                            -- d.startcalibration_date,

                    DATE_ADD(periode_date_awal, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(periode_date_awal, INTERVAL 0 DAY), CURDATE()) as reminder,
                    

                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    -- LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
ERROR - 2020-11-16 11:15:04 --> Query error: Unknown column 'd.calibration_id' in 'on clause' - Invalid query:   SELECT  a.*,
                            -- d.periode_date_awal,

                    DATE_ADD(periode_date_awal, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(periode_date_awal, INTERVAL 0 DAY), CURDATE()) as reminder,
                    

                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
ERROR - 2020-11-16 11:15:13 --> Query error: Unknown column 'd.calibration_id' in 'on clause' - Invalid query:   SELECT  a.*,
                            d.periode_date_awal,

                    DATE_ADD(periode_date_awal, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(periode_date_awal, INTERVAL 0 DAY), CURDATE()) as reminder,
                    

                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
ERROR - 2020-11-16 11:15:17 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 11:15:17 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 11:15:22 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 11:15:22 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 11:15:24 --> Query error: Unknown column 'd.calibration_id' in 'on clause' - Invalid query:   SELECT  a.*,
                            d.periode_date_awal,

                    DATE_ADD(periode_date_awal, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(periode_date_awal, INTERVAL 0 DAY), CURDATE()) as reminder,
                    

                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
ERROR - 2020-11-16 11:16:03 --> 404 Page Not Found: Public/css
ERROR - 2020-11-16 11:16:04 --> 404 Page Not Found: Public/js
ERROR - 2020-11-16 16:39:54 --> Query error: Unknown column 'keterangan' in 'field list' - Invalid query: UPDATE `e04_ts_calibration` SET `startcalibration_date` = '2020-11-16', `scope_code` = 'K', `location_name` = 'Departemen QC', `position_name` = 'R. Lab Mikrobiologi', `calibration_status` = '1', `keterangan` = 'tes', `updateby` = '135', `updatetime` = '2020-11-16 16:39:54'
WHERE `calibration_id` = '19'
