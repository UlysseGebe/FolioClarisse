<?php include '../views/partials/header.php' ?>

<article>
    <div class="fullPage">
        <div>
            <div class="text start"><?php echo $text[0];?></div>
            <div class="poster" style="background-image: url('assets/image/projet<?php echo $number;?>/<?php echo $image;?>.png')"></div>
            <div class="text end"><?php echo $text[1];?></div>
        </div>
        <div class="scroll">
            <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 75.75" width="24" height="50" class="scrollDown">
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
        </div>
        <div class="pagination">
            <div>0<?= $number?></div>
            <div>0<?= $total?></div>
        </div>
    </div>
    <?php if (!empty($launch)) : ?>
    <div class="launch">
        <a href="<?= $launch[1]?>" target='_blank'>Launch the <?= $launch[0]?></a>
    </div>
    <?php endif ?>
    <div class="details">
        <div class="column right">
            <div class="top">
                <h3>Context</h3>
                <p><?= !empty($context) ? $context : '' ?></p>
            </div>
            <div class="bot">
                <h3>Year</h3>
                <p><?= !empty($year) ? $year : '' ?></p>
            </div>
        </div>
        <div class="column left">
            <div class="top">
                <h3>Team Members</h3>
                <p><?= !empty($team) ? $team : '' ?></p>
            </div>
            <div class="bot">
                <h3>Role</h3>
                <p><?= !empty($role) ? $role : '' ?></p>
            </div>
        </div>
    </div>
    <?php if (!empty($images)) : ?>
    <div class="images">
        <?php foreach ($images as $_image): ?>
        <img src="assets/image/projet<?= $number ?>/<?= $_image ?>.png">
        <?php endforeach ?>
    </div>
    <?php endif ?>
    <div class="more">
        <div class="next" >
            <span>next projet</span>
            <span><a href="project-0<?= $next[1] ?>"><?= $next[0] ?></a></span>
        </div>
        <div class="arrow"></div>
        <div class="back"><a href="/">Back to the index</a></div>
    </div>
</article>

<?php include '../views/partials/footer.php' ?>