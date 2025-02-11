<div class="center-align white-text">
    <div class="logo-block">
        <?php echo partial('partials/logo') ?>
    </div>
    <h2><?php echo env('APP_NAME') ?></h2>
    <div class="card teal">
        <div class="card-content">
            <h5><?php _t('common.description') ?></h5>
        </div>
    </div>
    <div class="index-links">
        <a href="<?php echo base_url() . '/' . current_lang() ?>/about"
           class="white-text"><?php _t('common.about') ?></a>
        <a href="https://quantum.softberg.org" target="_blank" class="white-text"><?php _t('common.learn_more') ?></a>
    </div>
</div>