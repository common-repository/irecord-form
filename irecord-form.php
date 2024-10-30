<?php
/**
 * WP iRecord Form
 *
 * @package           WP iRecord Form
 * @author            White Rabbit
 * @copyright         2019 White Rabbit Consultancy
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP iRecord Form
 * Plugin URI:        https://consultantsussex.com/irecord-plugin
 * Description:       Add an iRecord Form to your WordPress website. Great for wildlife recording and conservation groups.
 * Version:           1.1.1
 * Requires at least: 4.6
 * Requires PHP:      5.2
 * Author:            White Rabbit
 * Author URI:        https://consultantsussex.com
 * Text Domain:       irecord-form
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Register iRecordForm Shortcode.
 */
function wpirecord_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-casual-record" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord', 'wpirecord_form_shortcode' );

/**
 * Register iRecordForm Ladybird Shortcode.
 */
function wpirecord_lady_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-ladybird-records" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-ladybird', 'wpirecord_lady_form_shortcode' );

/**
 * Register iRecordForm Moth Shortcode.
 */
function wpirecord_moth_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-moth-sightings" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-moth', 'wpirecord_moth_form_shortcode' );

/**
 * Register iRecordForm Glow-worm Shortcode.
 */
function wpirecord_glow_worm_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/glow-worm" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-glow-worm', 'wpirecord_glow_worm_form_shortcode' );

/**
 * Register iRecordForm Dragonfly Single Shortcode.
 */
function wpirecord_dragonfly_single_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-dragonfly-record" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-dragonfly-single', 'wpirecord_dragonfly_single_form_shortcode' );

/**
 * Register iRecordForm Dragonfly Multi Shortcode.
 */
function wpirecord_dragonfly_multi_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-dragonfly-list" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-dragonfly-multi', 'wpirecord_dragonfly_multi_form_shortcode' );

/**
 * Register iRecordForm Bryophyte Shortcode.
 */
function wpirecord_bryophyte_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter_bryophyte_records" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-bryophyte', 'wpirecord_bryophyte_form_shortcode' );

/**
 * Register iRecordForm Earthworm Shortcode.
 */
function wpirecord_earthworm_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-earthworm-record" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-earthworm', 'wpirecord_earthworm_form_shortcode' );

/**
 * Register iRecordForm Grasshopper Shortcode.
 */
function wpirecord_grasshopper_form_shortcode() {
   return '<div class="wpirecord">
   <iframe src="https://www.brc.ac.uk/irecord/enter-grasshopper-records" width="100%" height="900em"></iframe>
   </div>';
}

add_shortcode( 'wpirecord-grasshopper', 'wpirecord_grasshopper_form_shortcode' );