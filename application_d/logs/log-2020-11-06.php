<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-06 09:56:05 --> Query error: Unknown column 'd.calibration_id' in 'on clause' - Invalid query:   SELECT  a.*,
                            d.periode_date_akhir,

                    DATE_ADD(periode_date_akhir, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(periode_date_akhir, INTERVAL 0 DAY), CURDATE()) as reminder,


                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
ERROR - 2020-11-06 09:56:39 --> Query error: Unknown column 'd.startcalibration_date' in 'field list' - Invalid query:   SELECT  a.*,
                            d.startcalibration_date,

                    DATE_ADD(startcalibration_date, INTERVAL 0 DAY) as jatuh_tempo, 
                    DATEDIFF(DATE_ADD(startcalibration_date, INTERVAL 0 DAY), CURDATE()) as reminder,


                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM e04_ts_calibration a
                    LEFT JOIN e04_ms_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN e04_ts_calibration_periode c on a.calibration_id = c.calibration_id 
                    -- LEFT JOIN e04_ts_calibration_podetail d on a.calibration_id = d.calibration_id
                    WHERE a.statusdata='active'
