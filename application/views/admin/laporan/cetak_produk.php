<?php
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetTitle('Daftar Kritik');
            $pdf->SetHeaderMargin(30);
            $pdf->SetTopMargin(20);
            $pdf->setFooterMargin(20);
            $pdf->SetAutoPageBreak(true);
            $pdf->SetAuthor('Author');
            $pdf->SetDisplayMode('real', 'default');
            $pdf->AddPage();
            $html='<h3>Daftar Kritik</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">ID kritik</th>
                            <th width="20%" align="center">Email</th>
                            <th width="20%" align="center">Nama</th>
                            <th width="45%" align="center">Isi</th>
                            <th width="15%" align="center">Tanggal/waktu</th>
                        </tr>';

/*foreach ($produk as $row) {
$html .='<tr>
<td style="border:1px solid #000;">'.date('d-m-Y',strtotime($row-> tanggal)).'</td>
<td style="border:1px solid #000;">'.$row-> id_kritik.'</td>
<td style="border:1px solid #000;">'.$row-> email.'</td>
<td style="border:1px solid #000;">'.$row-> nama.'</td>
<td style="border:1px solid #000;">'.$row-> isi.'</td>
</tr>';
}
$html .='</table>';
*/
/*$pdf->WriteHTMLCell(0,0,'','',$html,0,0,0, true, 'C', true);*/



            foreach ($kritik as $row)
                {
                    $html.='<tr bgcolor="#ffffff">
                            <td>'.$row['id_kritik'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['nama'].'</td>
                            <td>'.$row['isi'].'</td>
                            <td>'.$row['tanggal'].'</td>
                        </tr>';
                }
            $html.='</table>';
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->Output('daftar_kritik.pdf');
?>