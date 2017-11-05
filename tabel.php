<table border="2" width = '50%;' align = 'center' height="25%">

    <thead>
    <td>id</td>
    <td>judul</td>
    <td>Deskripsi</td>
    <td>tahun</td>
    <td>bahasa</td>
    <td>rating</td>
    <td>lama sewa</td>
    <td>biaya sewa </td>
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