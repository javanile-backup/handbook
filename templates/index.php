<?php
/**
 *
 */

include __DIR__.'/header.php';
include __DIR__.'/nav.php';
?>

<div class="tm-middle">
    <div class="uk-container uk-container-center">
        <div class="uk-grid">

            <div class="tm-sidebar uk-width-medium-1-4 uk-hidden-small">
                <?php include __DIR__.'/sidebar.php' ?>
            </div>

            <div class="tm-main uk-width-medium-3-4">
                <article class="uk-article dw-article">
                    <?php $this->content() ?>
                </article>
            </div>

        </div>
    </div>
</div>

<?php
include __DIR__ . '/footer.php';
