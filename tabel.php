<div class="container">
    <table border="2" width = '50%;' align = 'center' height="25%" class="striped bordered">

        <thead>
        <td>ID</td>
        <td>JUDUL</td>
        <td>DESKRIPSI</td>
        <td>TAHUN</td>
        <td>BAHASA</td>
        <td>RATING</td>
        <td>LAMA SEWA</td>
        <td>BIAYA SEWA</td>
        </thead>
        <?php foreach($films as $film) : ?>
        <tbody>
        <td><?= $film['film_id']?></td>
        <td><?= $film['title']?></td>
        <td><?= $film['description']?></td>
        <td><?= $film['release_year']?></td>
        <td><?= $film['language_id']?></td>
        <td><?= $film['rental_rate']?></td>
        <td><?= $film['rental_duration']?></td>
        <td><?= $film['replacement_cost']?></td>
        <tbody>
        <?php endforeach;?>
    </table>
</div>