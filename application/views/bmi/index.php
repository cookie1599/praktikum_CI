<h1>Data BMI Pasien</h1><div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
        <th>No</th><th>Tanggal</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Tinggi</th><th>Berat</th><th>BMI</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            
            foreach($list_bmi as $bmi){
                
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$bmi->tanggal?></td>
                <td><?=$bmi->kode?></td>
                <td><?=$bmi->nama?></td>
                <td><?=$bmi->jenisKelamin()?></td>
                <td><?=$bmi->tinggi?></td>
                <td><?=$bmi->berat?></td>
                <td><?=$bmi->nilaiBMI()?></td>                
                <td><?=$bmi->statusBMI()?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
        </tbody>
    </table>
</div>
