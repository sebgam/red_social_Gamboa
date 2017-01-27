<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 27, 2017, 4:24 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 1298 2009-12-05 16:19:23Z Raymond_Benc $
 */
 
 

?>
<div class="table_header">
<?php echo Phpfox::getPhrase('admincp.stats'); ?>
</div>
<table id="js_drag_drop" cellpadding="0" cellspacing="0">
	<tr>
		<th></th>
		<th style="width:20px;"></th>
		<th><?php echo Phpfox::getPhrase('admincp.title'); ?></th>
		<th class="t_center" style="width:60px;"><?php echo Phpfox::getPhrase('admincp.active'); ?></th>	
	</tr>
<?php if (count((array)$this->_aVars['aStats'])):  foreach ((array) $this->_aVars['aStats'] as $this->_aVars['iKey'] => $this->_aVars['aStat']): ?>
	<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
		<td class="drag_handle"><input type="hidden" name="val[ordering][<?php echo $this->_aVars['aStat']['stat_id']; ?>]" value="<?php echo $this->_aVars['aStat']['ordering']; ?>" /></td>
		<td class="t_center">
			<a href="#" class="js_drop_down_link" title="Manage"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
			<div class="link_menu">
				<ul>
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.stat.add', array('id' => $this->_aVars['aStat']['stat_id'])); ?>"><?php echo Phpfox::getPhrase('admincp.edit'); ?></a></li>		
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.stat', array('delete' => $this->_aVars['aStat']['stat_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('admincp.are_you_sure', array('phpfox_squote' => true)); ?>');"><?php echo Phpfox::getPhrase('admincp.delete'); ?></a></li>					
				</ul>
			</div>		
		</td>	
		<td><?php echo Phpfox::getPhrase($this->_aVars['aStat']['phrase_var']); ?></td>
		<td class="t_center">
			<div class="js_item_is_active"<?php if (! $this->_aVars['aStat']['is_active']): ?> style="display:none;"<?php endif; ?>>
				<a href="#?call=core.updateStatActivity&amp;id=<?php echo $this->_aVars['aStat']['stat_id']; ?>&amp;active=0" class="js_item_active_link" title="<?php echo Phpfox::getPhrase('admincp.deactivate'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_green.png','alt' => '')); ?></a>
			</div>
			<div class="js_item_is_not_active"<?php if ($this->_aVars['aStat']['is_active']): ?> style="display:none;"<?php endif; ?>>
				<a href="#?call=core.updateStatActivity&amp;id=<?php echo $this->_aVars['aStat']['stat_id']; ?>&amp;active=1" class="js_item_active_link" title="<?php echo Phpfox::getPhrase('admincp.activate'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_red.png','alt' => '')); ?></a>
			</div>		
		</td>		
	</tr>
<?php endforeach; endif; ?>
</table>
