<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page-wrapper">
        <header>
            <h1>
                PHP Hotels
            </h1>
        </header>

        <main>
            <form class="filter-form" action="index.php" method="GET">
                <div class="inputs-section">
                    <label class="input-group">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                        Parking
                    </label>
                </div>

                <div class="inputs-section">
                    <div class="input-group">
                        <input type="number" name="city-distance" min="0" step="0.1">
                        <label>
                            City center distance
                        </label>
                    </div>
                </div>

                <div class="inputs-section vote">
                    <div class="input-group">
                        <input type="radio" name="minimum-value" value="1">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="minimum-value" value="2">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="minimum-value" value="3">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="minimum-value" value="4">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="minimum-value" value="5">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>
                </div>

                <div class="inputs-section">
                    <button type="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>

            <table>
                <thead>
                    <tr>
                        <th scope="col" class="hotel-name"></th>
                        <th scope="col" class="hotel-parking"></th>
                        <th scope="col" class="hotel-vote"></th>
                        <th scope="col" class="hotel-distance"></th>
                        <th scope="col" class="hotel-description"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="hotel-name"></th>
                        <td class="hotel-parking"></td>
                        <td class="hotel-vote"></td>
                        <td class="hotel-distance"></td>
                        <td class="hotel-description"></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</body>

</html>