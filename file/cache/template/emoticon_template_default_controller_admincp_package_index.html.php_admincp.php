<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 28, 2017, 4:15 pm */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 */



/**
 * 
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Miguel Espinoza
 * @package  		Module_Emoticon
 * @version 		$Id: index.html.php 1298 2009-12-05 16:19:23Z Raymond_Benc $
 */

?>
<div class="table_header">
<?php echo Phpfox::getPhrase('emoticon.packages'); ?>
</div>
<table id="js_drag_drop" cellpadding="0" cellspacing="0">
	<tr>
		<th style="width:20px;"></th>
		<th><?php echo Phpfox::getPhrase('emoticon.name'); ?></th>
		<th class="t_center" style="width:100px;"><?php echo Phpfox::getPhrase('emoticon.emoticons'); ?></th>
		<th class="t_center" style="width:20px;"><?php echo Phpfox::getPhrase('emoticon.active'); ?></th>
	</tr>

<?php if (count((array)$this->_aVars['aPackages'])):  foreach ((array) $this->_aVars['aPackages'] as $this->_aVars['iKey'] => $this->_aVars['aPackage']): ?>
	<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">		
		<td class="t_center">
			<a href="#" class="js_drop_down_link" title="Manage"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
			<div class="link_menu">
				<ul>					
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.view', array('id' => $this->_aVars['aPackage']['package_path'])); ?>"><?php echo Phpfox::getPhrase('emoticon.view_emoticons'); ?></a></li>
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.package.add', array('id' => $this->_aVars['aPackage']['package_path'])); ?>"><?php echo Phpfox::getPhrase('emoticon.edit_package'); ?></a></li>									
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.file.export', array('id' => $this->_aVars['aPackage']['package_path'])); ?>"><?php echo Phpfox::getPhrase('emoticon.export_package'); ?></a></li>
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.package', array('delete' => $this->_aVars['aPackage']['package_path'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('emoticon.are_you_sure', array('phpfox_squote' => true)); ?>');"><?php echo Phpfox::getPhrase('emoticon.delete_package'); ?></a></li>
				</ul>
			</div>
		</td>
		<td><?php echo $this->_aVars['aPackage']['package_name']; ?></td>
		<td class="t_center"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.view', array('id' => $this->_aVars['aPackage']['package_path'])); ?>"><?php echo $this->_aVars['aPackage']['total']; ?></a></td>
		<td class="t_center">
			<div class="js_item_is_active" <?php if ($this->_aVars['aPackage']['is_active'] != 1): ?> style="display:none;"<?php endif; ?>>
				 <a href="#?call=emoticon.updatePackageActivity&amp;id=<?php echo $this->_aVars['aPackage']['package_path']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo Phpfox::getPhrase('emoticon.deactivate'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_green.png','alt' => '')); ?></a>
			</div>
			<div class="js_item_is_not_active" <?php if ($this->_aVars['aPackage']['is_active'] == 1): ?> style="display:none;"<?php endif; ?>>
				 <a href="#?call=emoticon.updatePackageActivity&amp;id=<?php echo $this->_aVars['aPackage']['package_path']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo Phpfox::getPhrase('emoticon.activate'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_red.png','alt' => '')); ?></a>
			</div>
		</td>
	</tr>
<?php endforeach; else: ?>
	<tr>
		<td colspan="5">
<?php echo Phpfox::getPhrase('emoticon.no_emoticons_in_this_package'); ?>
		</td>
	</tr>
<?php endif; ?>
	</table>

