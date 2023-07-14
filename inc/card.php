<section class="cards-section text-center" id="cards">

    <h1>HOT <span style="color: darkorange;">OFFERS</span></h1>

    <?php
    $cards = [];
    $numberOfCards = 14;

    // Define your own image paths
    $imagePaths = [
        "./img/akaza.jpg",
        "./img/aki.jpg",
        "./img/bocchi.jpg",
        "./img/denji.jpg",
        "./img/giyu.jpg",
        "./img/makomo.jpg",
        "./img/makima.jpg",
        "./img/mitsuri.jpg",
        "./img/nezuko.jpg",
        "./img/power.jpg",
        "./img/rebecca.jpg",
        "./img/saitama.jpg",
        "./img/tanjiro.jpg",
        "./img/zenitsu.jpg"
    ];

    for ($i = 0; $i < $numberOfCards; $i++) {
        $discount = rand(10, 50);
        $itemDescription = ucwords(basename($imagePaths[$i % count($imagePaths)], '.jpg')); // Extract the item name from image path and capitalize it
        $price = rand(2500, 2700);
        $itemImage = $imagePaths[$i % count($imagePaths)];
        $numberOfSold = rand(50, 200);
        $locations = [
            "Quezon City",
            "Manila",
            "Makati",
            "Taguig",
            "Pasig",
            "Pasay",
            "Mandaluyong",
            "San Juan",
            "Caloocan",
            "Malabon",
            "Valenzuela",
            "Parañaque"
        ];

        $sellersLocation = $locations[array_rand($locations)];
        $starRating = rand(3, 5);


        $cardData = [
            "discount" => $discount,
            "itemDescription" => $itemDescription,
            "price" => $price,
            "itemImage" => $itemImage,
            "numberOfSold" => $numberOfSold,
            "sellersLocation" => $sellersLocation,
            "starRating" => $starRating
        ];

        array_push($cards, $cardData);
    }
    ?>

    <?php foreach ($cards as $card): ?>
        <div class="card card-container">
            <div class="">
                <img src="<?php echo $card['itemImage']; ?>" class="card-img-top" alt="Item Image">
            </div>
            <div class="card-body">
                <div class="card-info">
                    <p>
                        <b>
                            Nendoroid
                            <?php echo $card['itemDescription']; ?>
                        </b>
                    </p>
                    <p class="px-2">
                        <?php echo $card['discount']; ?>% off
                    </p>
                </div>
                <div class="card-info">
                    <p style="color: darkorange;">
                        <b>
                            <?php echo $card['price']; ?> Php
                        </b>
                    </p>
                </div>
                <div class="card-info
                ">
                    <p>
                        <?php
                        $starRating = $card['starRating'];
                        $emptyStars = 5 - $starRating;
                        for ($j = 0; $j < $starRating; $j++) {
                            echo '<img src="./img/star.png" height="20px" alt="Star">';
                        }
                        for ($j = 0; $j < $emptyStars; $j++) {
                            echo '<img src="./img/empty-star.png" height="20px" alt="Empty Star">';
                        }
                        ?>
                    </p>
                    <p>
                        <?php echo $card['numberOfSold']; ?> Sold
                    </p>
                </div>
                <div class="card-info">
                    <p>
                        <?php echo $card['sellersLocation']; ?> , Philippines
                    </p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</section>