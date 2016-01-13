<?php
/**
 * @version		2.6.x
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>
<?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
<section class="big-wrapper" style="background-image:url(<?php echo $this->item->imageXLarge; ?>);">
<?php else: ?>
<section class="big-wrapper">
<?php endif; ?>
  <section class="container">
    <div class="row middle">
      <div class="col-md-12">
        <?php if(!empty($this->item->fulltext)): ?>
        <?php if($this->item->params->get('itemIntroText')): ?>
          <p class="lead-in"><?php echo $this->item->introtext; ?></p>
        <?php endif; ?>
        <?php if($this->item->params->get('itemFullText')): ?>
          <p class="lead-in"><?php echo $this->item->fulltext; ?></p>
        <?php endif; ?>
        <?php else: ?>
          <p class="lead-in"><?php echo $this->item->introtext; ?></p>
        <?php endif; ?>
        </div>
    </div>
  </section>
</section>
