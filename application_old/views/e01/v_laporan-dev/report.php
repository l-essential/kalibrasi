<html>
    <head>
        <title>LAPORAN PENGELUARAN BARANG</title>     
        <style>
            tr.noBorder td {
                border: 0;
            }
            tr.borderdata td {
                border:1pt solid black;
            }

            table thead tr td {
                font-size: 12px;              
                text-align: center;
            }
            table tbody tr td {
                font-size: 12px;
                padding-left: 5px; 
                padding-right: 5px; 
            }
            table tfoot tr td {
                font-size: 12px;
                padding-left: 5px; 
                padding-right: 5px; 
            }

        </style>
    </head>
    <body bgcolor="white">
        <div id='printarea'>

            <div align="center"><strong>LAPORAN PENGELUARAN BARANG  </strong><br/> Periode : &nbsp; <?php echo $daritanggal; ?> &nbsp; s/d &nbsp; <?php echo $sampaitanggal; ?></div>
            <br/><br/><br/>
            <?php if ($result) { ?>

                <?php
                foreach ($result as $row) {
                    $id_header = $row['id_formulir'];
                    ?>

                    <table width="100%">
                        <tr>
                            <td width="25%" align="left">
                                <strong><?php echo $row['id_ruanglingkup']; ?></strong>
                            </td>
                            <td width="50%" align="center"> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </td>
                            <td width="25%" align="left">
                              
                            </td>
                        </tr>
                    </table>


                    <table width="98%" style="border-collapse: collapse;" border="1">
                        <thead> 
                           <tr style="border-style:show;text-align:center;">
                        <th align='center' rowspan="2" width="80"><strong>No</strong></th>
                        <th align='center' rowspan="2" width="200"><strong>NO. PENYIMPANGAN</strong></th>
                        <th align='center' rowspan="2" width="80"><strong>NAMA PRODUK/ SISTEM/ ALAT</strong></th>
                        <th align='center' rowspan="2" width="100"><strong>JENIS PENYIMPANGAN </strong></th>
                        <th align='center' rowspan="2" width="250"><strong>NO. BATCH</strong></th>
                       
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
                        </thead>

                        <tbody>    
                            <?php
                            $resultdetail = $modeldata->getGridDatadetail($row['id_ruanglingkup']);
                            $no = 0;
                            foreach ($resultdetail->result_array() as $rowdetail) {
                                $no++;
                            $htmldata = "<tr>";
                            $htmldata .= "<td align='center' width='60'>" . $no . "</td>";
                            $htmldata .= "<td align='center' width='100'>" . $rowdetail['improvement_code'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['title_improvement'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['nama_jenis'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['nama_katagori'] . "</td>";
                            
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['rincian_penyimpangan'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['rincian_tindakan'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['nama_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['evaluasi_tindakan'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['L'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['S'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['D'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['RPN'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kesimpulan_akhir'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['status_penyimpangan'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kesimpulan_akhir'] . "</td>";
                            $htmldata .= "<td align='left' width='250' style='padding-left: 5px;'>" . $rowdetail['kode_resiko'] . "</td>";
                            $htmldata .= "</tr>";
                            
                      echo $htmldata;
                            }
                            ?>


                        </tbody>
                        <tfoot>

                        </tfoot>

                    </table>  
                    <br/><br/>
                <?php } ?>

            <?php } ?>


            <br/><br/>
            <table width="98%">
                <tr>
                    <td width="49%" align="center">
                        <strong>Di print oleh</strong>
                    </td>
                    <td width="49%" align="center">
                        <strong>&nbsp;&nbsp;</strong>
                    </td>
                </tr>
                <tr>
                    <td height="60">&nbsp;</td>
                    <td height="60">&nbsp;</td>
                </tr>
                <tr>
                    <td width="50%" align="center">
                        <strong>( &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('ses_name'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)</strong>
                    </td>

                </tr>
            </table>

        </div>

        <br/>
        <button type="button" class="btn btn-primary" id='btnprint' onclick="fn_print()"><span class="fa fa-print"></span>&nbsp;Print</button>    
        <br/><br/><br/><br/><br/>
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

            }
        </script>
    </body>
</html>