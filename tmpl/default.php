<?php
/**
 * @package     mod_wolframwidget
 *
 * @copyright   Copyright (C) 2016 Simon Champion
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="wolframWidget">
    <?php if ($widget->getWidgetID()) { ?>
        <script type="text/javascript" id="WolframAlphaScript<?php echo $widget->getWidgetID();?>" src="//www.wolframalpha.com/widget/widget.jsp?<?php echo $widget->getQueryString();?>"></script>
    <?php } else { ?>
        <b><?php echo htmlspecialchars(JText::_('MOD_WOLFRAMWIDGET_NOIDERROR'));?></b>
    <?php } ?>
</div>