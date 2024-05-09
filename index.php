<?php

class Production
{
    private $title;
    private $language;
    private $vote;

    function __construct($_title, $_language, $_vote)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getVote()
    {
        return $this->vote;
    }
}

$film_1 = new Production('Matrix', 'english', 10);
// var_dump($film_1);

$film_2 = new Production('Wonka', 'english', 8);
// var_dump($film_2);

$film_3 = new Production('Blade Runner', 'english', 7);
// var_dump($film_3);

// echo $film_3->getTitle() . '<br>';
// echo $film_3->getLanguage() . '<br>';
// echo $film_3->getVote() . '<br>';

$films = [$film_1, $film_2, $film_3];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>php-oop-1</title>
</head>

<body>
    <main>
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
    </main>
</body>

</html>