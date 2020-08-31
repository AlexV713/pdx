<?php $total = 23; 

$slides = array('kitchen.jpg', 'new_floor.jpg', 'brick_floor.jpg', 'brick_floor2.jpg', 'polsihded_floor.jpg', 'polished_floor2.jpg', 'drywall.jpg', 'drywall2.jpg', 'pony_wall.jpg', 'sheetrock.jpg', 'old_steps.jpg', 'steps.jpg', 'gate2.jpg', 'basement.jpg', 'basement2.jpg', 'fence.jpg', 'fence2.jpg', 'fence3.jpg', 'fence4.jpg', 'gate3.jpg', 'floor_paint.jpg', 'cabinets.jpg', 'fixed_door.jpg');

?>

<div>

    <div class="slideshow-container" id="pic">

        <div class="mySlides fade" id="front">
            <div class="numbertext">1 / <?php echo $total; ?></div>
            <img src="images/kitchen.jpg" alt="new kitchen and granite counter">
            <div class="text">New Kitchen & Granite Counter</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / <?php echo $total; ?></div>
            <img src="images/new_floor.jpg" alt="polished wood floor">
            <div class="text">Polished Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / <?php echo $total; ?></div>
            <img src="images/brick_floor.jpg" alt="new brick floor">
            <div class="text">New Brick Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / <?php echo $total; ?></div>
            <img src="images/brick_floor2.jpg" alt="brick floor">
            <div class="text">New Brick Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / <?php echo $total; ?></div>
            <img src="images/polished_floor.jpg" alt="polished floor">
            <div class="text">New Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">6 / <?php echo $total; ?></div>
            <img src="images/polished_floor2.jpg" alt="polished floor wood">
            <div class="text">Polished Wood Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">7 / <?php echo $total; ?></div>
            <img src="images/drywall.jpg" alt="new sheetrock">
            <div class="text">Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">8 / <?php echo $total; ?></div>
            <img src="images/drywall2.jpg" alt="new drywall">
            <div class="text">Drywall</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">9 / <?php echo $total; ?></div>
            <img src="images/pony_wall.jpg" alt="pony wall">
            <div class="text">Sheetrock Pony Wall</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">10 / <?php echo $total; ?></div>
            <img src="images/sheetrock.jpg" alt="drywall">
            <div class="text">Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">11 / <?php echo $total; ?></div>
            <img src="images/old_steps.jpg" alt="old wood steps">
            <div class="text">Broken Wood Steps</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">12 / <?php echo $total; ?></div>
            <img src="images/steps.jpg" alt="new wood steps">
            <div class="text">Fixed & Polished Wood Steps</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">13 / <?php echo $total; ?></div>
            <img src="images/gate2.jpg" alt="wood gate door">
            <div class="text">Fixed Wood Gate Door</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">14 / <?php echo $total; ?></div>
            <img src="images/basement.jpg" alt="painted concrete floor">
            <div class="text">Painted Concrete Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">15 / <?php echo $total; ?></div>
            <img src="images/basement2.jpg" alt="basement sheetrock">
            <div class="text">Painted Concrete Floor & Sheetrock</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">16 / <?php echo $total; ?></div>
            <img src="images/fence.jpg" alt="broken wood fence">
            <div class="text">Destroyed Wood Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">17 / <?php echo $total; ?></div>
            <img src="images/fence2.jpg" alt="repaired wood fence">
            <div class="text">Fixed Wood Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">18 / <?php echo $total; ?></div>
            <img src="images/fence3.jpg" alt="fence_image3">
            <div class="text">Fixed Wood Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">19 / <?php echo $total; ?></div>
            <img src="images/fence4.jpg" alt="fixed wood fence">
            <div class="text">Fixed Small Wooden Fence</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">20 / <?php echo $total; ?></div>
            <img src="images/gate3.jpg" alt="fixed wood gate">
            <div class="text">Fixed Small Wooden Gate</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">21 / <?php echo $total; ?></div>
            <img src="images/floor_paint.jpg" alt="wood flooring">
            <div class="text">Painted Floor</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">22 / <?php echo $total; ?></div>
            <img src="images/cabinets.jpg" alt="painted cabinet doors">
            <div class="text">Painted Cabinet Doors</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">23 / <?php echo $total; ?></div>
            <img src="images/fixed_door.jpg" alt="fixed door">
            <div class="text">Fixed Door</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>