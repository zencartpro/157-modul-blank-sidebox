<?php
/**
 * blank sidebox - allows a blank sidebox to be added to your site
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: blank_sidebox.php 2022-02-27 18:31:16Z webchills $
 */

  // test if box should display
  $show_blank_sidebox = true;

  if ($show_blank_sidebox == true) {
      require($template->get_template_dir('tpl_blank_sidebox.php',DIR_WS_TEMPLATE, $current_page_base,'sideboxes'). '/tpl_blank_sidebox.php');
      $title =  BOX_HEADING_BLANK_SIDEBOX;
      $title_link = false;
      require($template->get_template_dir($column_box_default, DIR_WS_TEMPLATE, $current_page_base,'common') . '/' . $column_box_default);
 }