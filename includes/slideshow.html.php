<?php $total = 23; 

$slides = array('kitchen.jpg', 'new_floor.jpg', 'brick_floor.jpg', 'brick_floor2.jpg', 'polished_floor.jpg', 'polished_floor2.jpg', 'drywall.jpg', 'drywall2.jpg', 'pony_wall.jpg', 'sheetrock.jpg', 'old_steps.jpg', 'steps.jpg', 'gate2.jpg', 'basement.jpg', 'basement2.jpg', 'fence.jpg', 'fence2.jpg', 'fence3.jpg', 'fence4.jpg', 'gate3.jpg', 'floor_paint.jpg', 'cabinets.jpg', 'fixed_door.jpg');

?>

<div>

    <div class="slideshow-container" id="pic">

        <div class="mySlides fade" id="front">
            <div class="numbertext">1 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[0]; ?>" alt="new kitchen and granite counter">
            <div class="text">New Kitchen & Granite Counter</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[1]; ?>" alt="polished wood floor">
            <div class="text">Refined Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[2]; ?>" alt="new brick floor">
            <div class="text">Brick Patio</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[3]; ?>" alt="brick floor">
            <div class="text">Brick Patio</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[4]; ?>" alt="polished floor">
            <div class="text">Refined Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[5]; ?>" alt="polished floor wood">
            <div class="text">Refined Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[6]; ?>" alt="new sheetrock">
            <div class="text">Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[7]; ?>" alt="new drywall">
            <div class="text">Drywall</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[8]; ?>" alt="pony wall">
            <div class="text">Sheetrock Pony Wall</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">10 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[9]; ?>" alt="drywall">
            <div class="text">Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">11 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[10]; ?>" alt="old wood steps">
            <div class="text">Broken Wood Steps (Before)</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">12 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[11]; ?>" alt="new wood steps">
            <div class="text">Fixed & Polished Wood Steps (After)</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">13 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[12]; ?>" alt="wood gate door">
            <div class="text">Fixed Wood Gate Door</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">14 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[13]; ?>" alt="painted concrete floor">
            <div class="text">Painted Concrete Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">15 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[14]; ?>" alt="basement sheetrock">
            <div class="text">Painted Concrete Floor & Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">16 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[15]; ?>" alt="broken wood fence">
            <div class="text">Broken Wood Fence (Before)</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">17 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[16]; ?>" alt="repaired wood fence">
            <div class="text">Fixed Wood Fence (After)</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">18 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[17]; ?>" alt="fence_image3">
            <div class="text">Fixed Wood Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">19 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[18]; ?>" alt="fixed wood fence">
            <div class="text">Fixed Small Wooden Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">20 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[19]; ?>" alt="fixed wood gate">
            <div class="text">Fixed Small Wooden Gate</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">21 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[20]; ?>" alt="wood flooring">
            <div class="text">Refined Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">22 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[21]; ?>" alt="painted cabinet doors">
            <div class="text">Painted Cabinet Doors</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">23 / <?php echo $total; ?></div>
            <img src="images/<?php echo $slides[22]; ?>" alt="fixed door">
            <div class="text">Repainted Door</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>