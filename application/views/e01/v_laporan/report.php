<!-- <?php
$basedata = base_url() . 'public/';
?>
<html>
    <head>
        <title>LAPORAN DATA PENYIMPANGAN</title>     
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo $basedata ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>public/jquery-ui/css/base/jquery.ui.all.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $basedata ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="<?php echo $basedata ?>js/jquery-3.0.0.js"></script>
        <script src="<?php echo $basedata ?>js/jquery-migrate-3.0.0.min.js"></script>
        <script src="<?php echo $basedata ?>jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo $basedata ?>vendor/bootstrap/js/bootstrap.min.js"></script>
        <style>
            tr.noBorder td {
                border: 0;
            }
            td, th {
                        padding: 0;
                        font-size: 12px;
                    }
                th {
                    text-align: center;
                }
        </style>
    </head>

    <body>
        <div id='printarea'>
            <table width="100%">
                 <tr style="border-style:show;text-align:center;"></tr>
                <tr style="border-style:show;text-align:center;">
                    <td width="25%" align="right" colspan="8">
                        <img src="<?php echo $basedata ?>images/logo1.png" alt=""/>
                    </td>
                    <td width="50%" align="center" colspan="8"> 
                        <h5><strong>LAPORAN DATA PENYIMPANGAN<br/>
                                BULAN <?php echo date("F") ?> TAHUN <?php echo date("Y") ?><br/>
                                (DEPARTEMEN QA) <br/>
                                No. Lap: QASS/LAP/DEV-UMUM/<?php echo  date("m/Y") ?> <br/></strong></h5>
                        <!-- <strong>Perode Bulan <?php  $daritanggal ?></strong>  -->
                    </td>
                    <td width="25%" align="left" colspan="8">
                        <img src="<?php echo $basedata ?>images/logo2.png" alt=""/>
                    </td>
                </tr>
            </table>

       
            <table width="100%" style="border-collapse: collapse;" border="1">
                <thead>
                    <tr style="border-style:show;text-align:center;">
                        <th align='center' rowspan="2" width="80"><strong>No</strong></th>
                        <th align='center' rowspan="2" width="200"><strong>NO. PENYIMPANGAN</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>NAMA PRODUK/ SISTEM/ ALAT</strong></th>
                        <th align='center' rowspan="2" width="100"><strong>JENIS PENYIMPANGAN </strong></th>
                        <th align='center' rowspan="2" width="250"><strong>NO. BATCH</strong></th>
                        <th align='center' rowspan="2" width="250"><strong>TGL. TERJADI PENYIMPANGAN</strong></th>
                        <th align='center' rowspan="2" width="250"><strong>DESKRIPSI/ RINCIAN PENYIMPANGAN</strong></th>
                        <th align='center' rowspan="2" width="250"><strong>TINDAKAN SEMENTARA YANG DIAMBIL</strong></th>
                        <th align='center' rowspan="2" width="250"><strong>RESIKO</strong></th>
                        <th align='center' rowspan="2" width="250"><strong>EVALUASI TERHADAP LAPORAN, TINDAKAN DAN RISIKO</strong></th>
                        <th align='center' colspan="5" ><strong>TINGKAT RISIKO</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>ANALISIS PENYEBAB</strong></th>
                        <th align='center' colspan="4" ><strong>OTORISASI</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>KESIMPULAN</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>STATUS</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>PIC</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>KET</strong></th>
                    <tr>
                       
                        <th align='center' width="250"><strong>L</strong></th>
                        <th align='center' width="250"><strong>S</strong></th>
                        <th align='center' width="250"><strong>D</strong></th>
                        <th align='center' width="250"><strong>RPN</strong></th>
                        <th align='center' width="250"><strong>Tingkat Resiko</strong></th>
                        <th align='center' width="250"><strong>TINDAKAN PERBAIKAN</strong></th>
                        <th align='center' width="250"><strong>TGL. SELESAI</strong></th>
                        <th align='center' width="250"><strong>TINDAKAN PENCEGAHAN</strong></th>
                        <th align='center' width="250"><strong>TGL. SELESAI</strong></th>
                    </tr>
                    
                    </tr>
                <thead>

                <tbody>   
                    <?php
                    if ($result) {
                        $no = 0;

                        $sisatotal = 0;
                        foreach ($result as $row) {
                            $no++;
                            $tanggal = date('d-m-Y', strtotime($row['tanggal']));

                            $html = "<tr>";
                            $html .= "<td align='center' width='60'>" . $no . "</td>";
                            $html .= "<td align='center' width='100'>" . $row['improvement_code'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['title_improvement'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['nama_jenis'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['nama_katagori'] . "</td>";
                            $html .= "<td align='center' width='100' style='padding-left: 5px;'>" . $tanggal . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['rincian_penyimpangan'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['rincian_tindakan'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['nama_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['evaluasi_tindakan'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['L'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['S'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['D'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['RPN'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kesimpulan_akhir'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['status_penyimpangan'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kesimpulan_akhir'] . "</td>";
                            $html .= "<td align='left' width='250' style='padding-left: 5px;'>" . $row['kode_resiko'] . "</td>";
                            $html .= "</tr>";

                            echo $html;
                        }
                    }
                    ?>

                </tbody>
             
                </table>
          
        </div>
        <script type="text/javascript">


            function postaction(url, param) {
                var theResponse = {valid: false, message: ''};
                ;
                $.ajax({
                    type: "POST",
                    url: url,
                    data: param,
                    dataType: "json",
                    async: false,
                    success: function (data) {
                        theResponse = data;
                    },
                    error: function () {
                        theResponse = {valid: false, message: 'Ajax error'};
                    }
                });
                return theResponse;
            }

            function fn_print() {
                var printContents = document.getElementById('printarea').innerHTML;
                var originalContents = document.body.innerHTML;
                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
                return true;

                return false;

            }
        </script>
    </body>
</html>
<script type="text/javascript">
    function downloadexceldata(){
         var url_excel = '<?php echo $url_excel; ?>';
        var daritanggal = '<?php echo $daritanggal; ?>';
        var sampaitanggal = '<?php echo $sampaitanggal; ?>';
        window.open(url_excel + '?daritanggal=' + daritanggal + '&sampaitanggal=' + sampaitanggal);
        
    }
    
    function LiveDate() {
                var D = new Date();
                var day = D.getDay();
                var tgl = D.getDate();
                var bln = D.getMonth();
                var thn = D.getFullYear();
                var jam = D.getHours();
                var mnt = D.getMinutes();
                var dtk = D.getSeconds();
                var suf;
                if (jam < 10) {
                    jam = "0" + jam;
                }
                if (mnt < 10) {
                    mnt = "0" + mnt;
                }
                if (dtk < 10) {
                    dtk = "0" + dtk;
                }
                if (tgl == "1" || tgl == "21" || tgl == "31") {
                    suf = "st";
                } else if (tgl == "2" || tgl == "22") {
                    suf = "nd";
                } else if (tgl == "3" || tgl == "23") {
                    suf = "rd";
                } else {
                    suf = "th";
                }

                var dayarray = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                var montharray = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

                var livedate = "&nbsp;" + dayarray[day] + ", " +tgl + "-" +  montharray[bln] + "-" + thn + "&nbsp;";
                var livetime = "&nbsp;" + jam + ":" + mnt + ":" + dtk + "&nbsp;";
                $("#LiveDate").html(livedate);
                $("#LiveTime").html(livetime);
                setTimeout("LiveDate()", 1000);
            }
</script>