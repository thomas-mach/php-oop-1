<?php include_once "./db.php" ?>

<table class="table">
    <thead>
        <tr class="table-light">
            <th scope="col">Title</th>
            <th scope="col">Language</th>
            <th scope="col">Vote</th>
            <th scope="col">Profit</th>
            <th scope="col">Duration</th>
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
                <td>
                    <div><?= $film->getProfit(); ?></div>
                </td>
                <td>
                    <div><?= $film->getDuration(); ?></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>