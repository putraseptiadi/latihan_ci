<?= $this->extend("layouts/template"); ?>

<?= $this->section("content"); ?>

<h3>Data Siswa</h3>
<table class="table-bordered table-striped">
    <tr>
        <th>Nama</th>
        <th>NIS</th>
        <th>Tanggal Lahir</th>
    </tr>
    <tr>
        <td>Nadia</td>
        <td>101</td>
        <td>2006-04-11</td>
    </tr>
    <tr>
        <td>Ayu</td>
        <td>102</td>
        <td>2006-03-12</td>
    </tr>
</table>

<?= $this->endSection(); ?>
