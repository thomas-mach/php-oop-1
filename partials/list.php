<?php include_once "./db.php" ?>

<table class="table">
    <thead>
        <tr class="table-light">
            <th scope="col">Title</th>
            <th scope="col">Language</th>
            <th scope="col">Vote</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($films as $film) : ?>
            <tr class="table-warning">
                <td>
                    <div><?= $film->getTitle(); ?></div>
                </td>
                <td>
                    <div><?= $film->getLanguage(); ?></div>
                </td>
                <td>
                    <div><?= $film->getVote(); ?></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>