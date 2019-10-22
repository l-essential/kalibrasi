<html>
    <head>
        <title>Laporan Data Import dan CSV yang tidak valid</title>
        <style>
            table, td, th {
                border: 1px solid black;
            }


            #tabledata {
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
       
        <h3>Laporan Data form 1 yang tidak valid</h3>
        <br/>

        <table id="tabledata" width='100%'>
            <tr>
                <th>Nama</th>
                <th>No KTP</th>
                <th>Pesan Error</th>
            </tr>
            <?php
           
            if ($result) {
                foreach ($result as $rowi) {
                    echo "<tr>";
                    echo "<td align='left' width='300px'>" . $rowi['nama'] . "</td>";
                    echo "<td align='left' width='300px'>" . "'".$rowi['ktp'] . "</td>";
                    echo "<td align='left' width='300px'>" . $rowi['pesan_error'] . "</td>";                   
                    echo "</tr>";
                }
            }
            ?>
        </table>
        
    </body>
</html>

