<?php
/**
 * Template part to display subscribe form.
 *
 * @package Plumberpro
 * @subpackage widgets
 */
?>
<div class="subscribe-block invert">

    <?php echo $this->get_block_title('subscribe'); ?>
    <?php echo $this->get_block_message('subscribe'); ?>

    <form method="POST" action="#" class="subscribe-block__form"><?php
        wp_nonce_field('plumberpro_subscribe', 'plumberpro_subscribe');
        ?>
        <div class="subscribe-block__input-group">
            <div class="subscribe-block__input_wr"><?php echo $this->get_subscribe_input();
            $btn = 'btn';
            if ('footer-area' === $this->args['id']) {
                $btn .= ' btn-secondary';
            } ?>
            </div>

            <div class="subscribe-block__btn_wr">
            <?php
            echo $this->get_subscribe_submit($btn);
            ?></div>
        </div><?php
        echo $this->get_subscribe_messages();
        ?></form>
</div>