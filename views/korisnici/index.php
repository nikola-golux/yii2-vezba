<table class="table">
    <tr>
        <th>Ime</th>
        <th>prezime</th>
    </tr>
    
    <?php foreach($korisnici as $korisnik){ ?>
        <tr>
            <td><?= $korisnik->ime; ?></td>
            <td><?= $korisnik->prezime; ?></td>
        </tr>
    <?php } ?>
</table>