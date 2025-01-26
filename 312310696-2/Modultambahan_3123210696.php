<?php
$pegawai = [
    [
        'nama' => 'Igorio Rizky Noble',
        'jabatan' => 'Web Developer',
        'gaji_pokok' => 5000000,
        'tunjangan' => 3000000
    ],
    [
        'nama' => 'Akbar Rizky Ramadhan',
        'jabatan' => 'Mobile Developer',
        'gaji_pokok' => 4500000,
        'tunjangan' => 2500000
    ],
    [
        'nama' => 'Kiki',
        'jabatan' => 'Data Scientist',
        'gaji_pokok' => 5000000,
        'tunjangan' => 3000000
    ],
    [
        'nama' => 'Keera',
        'jabatan' => 'Game Developer',
        'gaji_pokok' => 5700000,
        'tunjangan' => 3500000
    ],
    [
        'nama' => 'KuroMajig',
        'jabatan' => 'Software Engineer ',
        'gaji_pokok' => 9000000,
        'tunjangan' => 4000000
    ]
];
$total_gaji = 0;
$pegawai_tertinggi = '';
$gaji_tertinggi = 0;
echo "<h2 style='text-align: center;'>Laporan Gaji Pegawai</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='width: 100%; border-collapse: collapse;'>
<thead>
<tr>
<th>Nama Pegawai</th>
<th>Jabatan</th>
<th>Gaji Pokok</th>
<th>Tunjangan</th>
<th>Gaji Total</th>
</tr>
</thead>
<tbody>";
foreach ($pegawai as $p) {
    $gaji_total = $p['gaji_pokok'] + $p['tunjangan'];
    $total_gaji += $gaji_total;
    if ($gaji_total > $gaji_tertinggi) {
        $gaji_tertinggi = $gaji_total;
        $pegawai_tertinggi = $p['nama'];
    }
    echo "<tr>
<td>" . $p['nama'] . "</td>
<td>" . $p['jabatan'] . "</td>
<td>Rp" . number_format($p['gaji_pokok'], 0, ',', '.') . "</td>
<td>Rp" . number_format($p['tunjangan'], 0, ',', '.') . "</td>
<td>Rp" . number_format($gaji_total, 0, ',', '.') . "</td>
</tr>";
}
echo "</tbody>
</table>";
echo "<h2 style='text-align: center; margin-top: 30px;'>Informasi Gaji Perusahaan</h2>";
echo "<table border='1' cellpadding='10' cellspacing='0' style='width: 100%; border-collapse: collapse;'>
<thead>
<tr>
<th>Total Gaji Perusahaan</th>
<th>Pegawai dengan Gaji Tertinggi</th>
</tr>
</thead>
<tbody>
<tr>
<td>Rp" . number_format($total_gaji, 0, ',', '.') . "</td>
<td>" . $pegawai_tertinggi . " (Rp" . number_format($gaji_tertinggi, 0, ',', '.') . ")</td>
</tr>
</tbody>
</table>";
?>