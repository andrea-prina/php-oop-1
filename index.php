<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    

    <?php 
    
        class Movie {

            private $title;
            private $director;
            private $genres;

            function __construct($_title, $_director, $_genres)
            {
                $this->setTitle($_title);
                $this->setDirector($_director);
                $this->setGenres($_genres);
            }

            public function getTitle(){
                return $this->title;
            }

            public function getDirector(){
                return $this->director;
            }

            public function getGenres(){
                return $this->genres;
            }

            private function setTitle($title){
                $this->title = $title;
            }

            private function setDirector($director){
                $this->director = $director;
            }
            private function setGenres($genres){
                $this->genres = $genres;
            }


        }   
    ?>

</body>
</html>