<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-22 13:34:58 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 13:34:58 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 13:34:59 --> Severity: Error --> Call to undefined method CI_DB_mysqli_result::where() C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 30
ERROR - 2020-10-22 13:37:24 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 13:37:24 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 13:44:49 --> Severity: Warning --> Missing argument 1 for Calibration_model::setconfirm(), called in C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration.php on line 304 and defined C:\xampp\htdocs\kalibrasi\application\models\e04\Calibration_model.php 216
ERROR - 2020-10-22 13:44:49 --> Severity: Warning --> Missing argument 2 for Calibration_model::setconfirm(), called in C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration.php on line 304 and defined C:\xampp\htdocs\kalibrasi\application\models\e04\Calibration_model.php 216
ERROR - 2020-10-22 13:49:20 --> Severity: Parsing Error --> syntax error, unexpected 'AAaaaaaaaaaa' (T_STRING) C:\xampp\htdocs\kalibrasi\application\controllers\e04\Calibration_po.php 19
ERROR - 2020-10-22 14:25:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 345
ERROR - 2020-10-22 14:44:58 --> Query error: Unknown column 'd.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*, d.*
                FROM e04_ts_calibration_periode a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_id = b.calibration_id
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.id_position
                 WHERE a.statusdata='active' AND
                    d.date_po >='2020' and
                    d.date_po <='2020' and 
                    b.statusdata = 'active'  AND b.location_name like '%Departemen QC%'  AND b.scope_code like '%K%'  
ERROR - 2020-10-22 14:49:38 --> Query error: Unknown column 'd.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*, d.*
                FROM e04_ts_calibration_periode a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_id = b.calibration_id
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.id_position
                 WHERE a.statusdata='active' AND
                    d.date_po >='2020' and
                    d.date_po <='2020' and 
                    b.statusdata = 'active'  AND b.location_name like '%Departemen QC%'  AND b.scope_code like '%K%'  
ERROR - 2020-10-22 14:51:45 --> Query error: Unknown column 'd.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*, d.*
                FROM e04_ts_calibration_periode a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_id = b.calibration_id
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    d.date_po >='2020' and
                    d.date_po <='2020' and 
                    b.statusdata = 'active'  AND b.location_name like '%Departemen QC%'  AND b.scope_code like '%K%'  
ERROR - 2020-10-22 14:52:22 --> Query error: Unknown column 'd.periode_year' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration_periode a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_id = b.calibration_id
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    d.periode_year >='2020' and
                    d.periode_year <='2020' and 
                    b.statusdata = 'active'  AND b.location_name like '%Departemen QC%'  AND b.scope_code like '%K%'  
ERROR - 2020-10-22 14:55:35 --> Severity: Warning --> Illegal string offset 'scope_code' C:\xampp\htdocs\kalibrasi\application\models\e04\Report_model.php 30
ERROR - 2020-10-22 14:55:35 --> Severity: Warning --> Illegal string offset 'location_name' C:\xampp\htdocs\kalibrasi\application\models\e04\Report_model.php 31
ERROR - 2020-10-22 14:55:35 --> Severity: Warning --> Illegal string offset 'calibration_type' C:\xampp\htdocs\kalibrasi\application\models\e04\Report_model.php 32
ERROR - 2020-10-22 14:55:35 --> Severity: Warning --> Illegal string offset 'daritanggal' C:\xampp\htdocs\kalibrasi\application\models\e04\Report_model.php 33
ERROR - 2020-10-22 14:55:35 --> Severity: Warning --> Illegal string offset 'sampaitanggal' C:\xampp\htdocs\kalibrasi\application\models\e04\Report_model.php 34
ERROR - 2020-10-22 15:31:16 --> Query error: Unknown column 'a.periode_year' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    a.periode_year >='2020' and
                    a.periode_year <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-10-22 15:31:44 --> Query error: Unknown column 'a.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    a.date_po >='2020' and
                    a.date_po <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-10-22 15:32:31 --> Query error: Unknown column 'a.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    a.date_po >='2020' and
                    a.date_po <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-10-22 15:32:35 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 15:32:35 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 15:32:43 --> Query error: Unknown column 'a.date_po' in 'where clause' - Invalid query:  SELECT a.*, b.*, c.*
                FROM e04_ts_calibration_podetail a   
                LEFT JOIN e04_ts_calibration  b on a.calibration_code = b.calibration_code
                LEFT JOIN e04_ms_tools  c on b.tools_id = c.tools_id
                -- LEFT JOIN e04_ts_calibration_podetail d on a.periode_id = d.periode_id
                 WHERE a.statusdata='active' AND
                    a.date_po >='2020' and
                    a.date_po <='2020' and 
                    b.statusdata = 'active'  
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:16 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 15:59:17 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, null given C:\xampp\htdocs\kalibrasi\application\core\MY_Controller.php 940
ERROR - 2020-10-22 16:00:17 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:00:17 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:00:25 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:00:25 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:01:49 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:01:50 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:10:28 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:10:28 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:10:55 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:10:55 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:15:06 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:15:07 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:27:07 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:27:07 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:27:55 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:27:56 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:36:06 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:36:06 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:41:47 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:41:48 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:42:52 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:42:53 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:49:51 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:49:51 --> 404 Page Not Found: Public/js
ERROR - 2020-10-22 16:50:56 --> 404 Page Not Found: Public/css
ERROR - 2020-10-22 16:50:56 --> 404 Page Not Found: Public/js
