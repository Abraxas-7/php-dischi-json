<?php
$json_music = file_get_contents('./music.json');
$music = json_decode($json_music, true);

// var_dump($music);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <h1 class="text-center py-3">Dischi musicali</h1>
    </header>

    <main>
        <div class="container py-5">
            <h2 class="py-3">Aggiungi un nuovo disco</h2>
            <form action="server.php" method="POST">
                <div class="row g-3 mb-5">
                    <div class="col-4">
                        <label for="disk_name" class="form-label">inserisci il nome del disco</label>
                        <input type="text" class="form-control" id="disk_name" name="disk_name">
                    </div>
                    <div class="col-8">
                        <label for="disk_cover" class="form-label">inserisci l'url</label>
                        <input type="text" class="form-control" id="disk_cover" name="disk_cover">
                    </div>
                    <div class="col-4">
                        <label for="disk_artist" class="form-label">inserisci il nome dell'artista</label>
                        <input type="text" class="form-control" id="disk_artist" name="disk_artist">
                    </div>
                    <div class="col-4">
                        <label for="disk_genre" class="form-label">inserisci il genere</label>
                        <input type="text" class="form-control" id="disk_genre" name="disk_genre">
                    </div>
                    <div class="col-4">
                        <label for="disk_year" class="form-label">inserisci l'anno di uscita</label>
                        <input type="text" class="form-control" id="disk_year" name="disk_year">
                    </div>

                    <input type="submit" class="btn btn-primary col-12" value="Aggiungi">
                </div>
            </form>

            <h2 class="py-3">Lista dischi</h2>
            <div class="row g-3">
                <?php
                foreach ($music as $disco) {
                    echo '
                        <div class="col-3">
                            <div class="card">
                                <img src="' . $disco["url_cover"] . '" class="card-img-top" alt="' . $disco["titolo"] . '">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3">' . $disco["titolo"] . '</h5>
                                    <h6 class="card-subtitle text-center text-muted mb-3"> ' . $disco["artista"] . '</h6>
                                    <p class="card-text text-center">' . $disco["anno_pubblicazione"] . '</p>
                                    <p class="card-text text-center">' . $disco["genere"] . '</p>
                                </div>
                            </div>
                        </div>
                    ';
                }
                ?>

            </div>
        </div>
    </main>
</body>

</html>