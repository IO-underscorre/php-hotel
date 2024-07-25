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

$is_parking_present = isset($_GET['parking']) ? true : false;
$min_vote = isset($_GET['vote']) ? intval($_GET['vote']) : false;
$max_city_distance = isset($_GET['city-distance']) && $_GET['city-distance'] !== '' ? intval($_GET['city-distance']) : false;
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
                        <input type="checkbox" name="parking">
                        <span class="checkmark"></span>
                        Parking
                    </label>
                </div>

                <div class="inputs-section">
                    <div class="input-group">
                        <input type="number" name="city-distance" min="0" step="0.1" placeholder="City maximum distance">
                        <label>
                            Distance
                        </label>
                    </div>
                </div>

                <div class="inputs-section vote">
                    <div class="input-group">
                        <input type="radio" name="vote" value="1">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="vote" value="2">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="vote" value="3">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="vote" value="4">
                        <label class="input-group">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </label>
                    </div>

                    <div class="input-group">
                        <input type="radio" name="vote" value="5">
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

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <?php foreach ($hotels[1] as $key => $value) : ?>
                                <th scope="col" <?php echo "class='$key'" ?>><?php echo strtoupper(strtok($key, "_")) ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($hotels as $hotel) : ?>
                            <?php if (
                                ($hotel['distance_to_center'] <= $max_city_distance || $max_city_distance === false) and
                                ($hotel['vote'] >= $min_vote || !$min_vote) and
                                ($hotel['parking'] || !$is_parking_present)
                            ) : ?>
                                <tr>
                                    <?php foreach ($hotel as $key => $value) : ?>
                                        <td <?php echo "class='$key'" ?>>
                                            <?php
                                            if ($key === 'parking') {
                                                echo $value ? 'Yes' : 'No';
                                            } else if ($key === 'vote') {
                                                for ($index = 0; $index < $value; $index++) {
                                                    echo '<i class="fa-solid fa-star"></i>';
                                                }
                                            } else if ($key === 'distance_to_center') {
                                                echo "$value km";
                                            } else {
                                                echo $value;
                                            }
                                            ?>
                                        </td>
                                    <?php endforeach; ?>
                                </tr>
                            <?php endif;
                            ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>