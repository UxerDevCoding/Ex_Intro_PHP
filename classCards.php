<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4: Class Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
        <main>
            <?php

            class Movie
            {
                public $title;
                public $director;
                public $year;
                public $duration;
                public $poster;

                public function __construct($title, $director, $duration, $year, $poster)
                {
                    $this->title = $title;
                    $this->director = $director;
                    $this->year = $year;
                    $this->duration = $duration;
                    $this->poster = $poster;
                    
                }
            }
            ?>
        </main>
    </body>
</html>