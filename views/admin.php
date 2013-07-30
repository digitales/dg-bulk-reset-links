<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2013 Your Name or Company Name
 */
?>
<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

    <p>Here are the reset links for the <strong><?php echo $role; ?></strong>:</p>

    <?php if ( ( $reset_links ) & !empty( $reset_links ) ): ?>
        <ul>
            <?php foreach( $reset_links AS $user_login => $link_details ): ?>
                <li><em><?php echo $user_login; ?></em><br /><a href="<?php echo $link_details['link'];?>"><?php echo $link_details['link'];?></a></li>
            <?php endforeach; ?>
        </ul>

    <?php else: ?>

        <p>Sorry, no users found.</p>

    <?php endif; ?>


</div>
