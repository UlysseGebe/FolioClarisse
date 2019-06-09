<?php include '../views/partials/header.php' ?>

<article>
    <div class="fullPage">
        <div>
            <div class="text start"><?php echo $text[0];?></div>
            <div class="poster" style="background-image: url('assets/image/projet<?php echo $number;?>/<?php echo $image;?>.png')"></div>
            <div class="text end"><?php echo $text[1];?></div>
        </div>
        <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 75.75" width="24" height="75.75" class="scrollDown">
            <title>mouse_scroll</title>
            <g class="nc-icon-wrapper" fill="#3d3e40">
                <defs />
                <path class="cls-1"
                    d="M40 41v18a10 10 0 1 0 20 0V41a10 10 0 1 0-20 0zm-2 0a12 12 0 1 1 24 0v18a12 12 0 1 1-24 0V41z"
                    transform="translate(-38 -29)" fill-rule="evenodd" />
                <path class="cls-1" d="M49 36v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-2 0z" transform="translate(-38 -29)"
                    fill-rule="evenodd" />
                <path class="cls-1"
                    d="M50 102.34l5.5-5.5a1 1 0 0 1 1.42 0 1 1 0 0 1 0 1.41l-6.21 6.21a1 1 0 0 1-1.41 0l-6.26-6.25a1 1 0 1 1 1.42-1.42z"
                    transform="translate(-38 -29)" fill-rule="evenodd" />
            </g>
        </svg>
        <div class="pagination">0<?php echo $number?> / 0<?php echo $total?></div>
    </div>
    <div class="details">
        <div class="column right">
            <div class="top">
                <h3>Context</h3>
                <p><?php echo $context; ?></p>
            </div>
            <div class="bot">
                <h3>Year</h3>
                <p><?php echo $year; ?></p>
            </div>
        </div>
        <div class="column left">
            <div class="top">
                <h3>Team Members</h3>
                <p><?php echo $team; ?></p>
            </div>
            <div class="bot">
                <h3>Role</h3>
                <p><?php echo $role; ?></p>
            </div>
        </div>
    </div>
</article>

<?php include '../views/partials/footer.php' ?>