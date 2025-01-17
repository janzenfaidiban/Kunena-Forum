<?php
/**
 * Kunena Component
 * @package         Kunena.Template.Crypsisb3
 * @subpackage      Layout.BBCode
 *
 * @copyright       Copyright (C) 2008 - 2021 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;
use Joomla\CMS\Language\Text;

// [ebay]112233445566[/ebay]

// Display ebay item.
?>

<div class="kunena_ebay_widget" style="border: 1px solid #e5e5e5;margin:10px;padding:10px;border-radius:5px;">
	<img src="https://securepics.ebaystatic.com/api/ebay_market_108x45.gif"/>
	<div style="margin:10px 0;"></div>
</div>
<div style="text-align: center;"><a href="<?php echo $this->naturalurl; ?>" target="_blank"
                                    rel="noopener noreferrer"> <img src="<?php echo $this->pictureurl; ?>"/></a>
</div>
<div style="margin:10px 0;"/></div>
<a href="<?php echo $this->naturalurl; ?>" target="_blank" rel="noopener noreferrer"><?php echo $this->title; ?></a>
<div style="margin:10px 0;"/></div>
<div style="margin:10px 0;"/></div>
<?php if ($this->status == "Active") : ?>
	<a class="btn" href="<?php echo $this->naturalurl; ?>"
	   target="_blank"><?php echo Text::_('COM_KUNENA_LIB_BBCODE_EBAY_LABEL_BUY_IT_NOW') ?></a>
<?php else: ?>
		<?php echo Text::_('COM_KUNENA_LIB_BBCODE_EBAY_LABEL_COMPLETED'); ?>
<?php endif; ?>

