<?php
/**
 * blank sidebox - allows a blank sidebox to be added to your site
 *
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: tpl_blank_sidebox.php 2022-02-27 18:31:16Z webchills $
 */

  $content = '';
  $content .= '<div id="' . str_replace('_', '-', $box_id . 'Content') . '" class="sideBoxContent">';

  // Den Inhalt der Sidebox definieren Sie nicht hier, sondern in includes/languages/german/extra_definitions/DEINTEMPLATE/blank_sidebox_defines.php
  // Wenn Sie im Shop auch englisch aktiv haben, definieren Sie den Inhalt für die englische Version in includes/languages/english/extra_definitions/DEINTEMPLATE/blank_sidebox_defines.php
  $content .= '<div class="blanksideboxcontent">' . TEXT_BLANK_SIDEBOX . '</div>';
  $content .= '</div>';