<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 28, 2017, 4:15 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: index.html.php 1601 2010-05-30 05:20:59Z Raymond_Benc $
 */
 
 

 if (count ( $this->_aVars['aPromotions'] )): ?>
<div class="table_header">
<?php echo Phpfox::getPhrase('user.promotions'); ?>
</div>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th style="width:20px;"></th>
		<th><?php echo Phpfox::getPhrase('user.user_group'); ?></th>
		<th><?php echo Phpfox::getPhrase('user.upgraded_user_group'); ?></th>
		<th class="t_center"><?php echo Phpfox::getPhrase('user.total_activity'); ?></th>
		<th class="t_center"><?php echo Phpfox::getPhrase('user.total_days_registered'); ?></th>
		<th>Created On</th>
	</tr>
<?php if (count((array)$this->_aVars['aPromotions'])):  $this->_aPhpfoxVars['iteration']['promotions'] = 0;  foreach ((array) $this->_aVars['aPromotions'] as $this->_aVars['aPromotion']):  $this->_aPhpfoxVars['iteration']['promotions']++; ?>

	<tr<?php if (is_int ( $this->_aPhpfoxVars['iteration']['promotions'] / 2 )): ?> class="tr"<?php endif; ?>>
		<td class="t_center">
			<a href="#" class="js_drop_down_link" title="<?php echo Phpfox::getPhrase('user.manage'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
			<div class="link_menu">
				<ul>
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion.add', array('id' => $this->_aVars['aPromotion']['promotion_id'])); ?>"><?php echo Phpfox::getPhrase('user.edit'); ?></a></li>		
					<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.user.promotion', array('delete' => $this->_aVars['aPromotion']['promotion_id'])); ?>" onclick="return confirm('<?php echo Phpfox::getPhrase('core.are_you_sure', array('phpfox_squote' => true)); ?>');"><?php echo Phpfox::getPhrase('user.delete'); ?></a></li>					
				</ul>
			</div>		
		</td>		
		<td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['user_group_title']); ?></td>
		<td><?php echo Phpfox::getLib('locale')->convert($this->_aVars['aPromotion']['upgrade_user_group_title']); ?></td>
		<td class="t_center"><?php echo $this->_aVars['aPromotion']['total_activity']; ?></td>
		<td class="t_center"><?php echo $this->_aVars['aPromotion']['total_day']; ?></td>
		<td><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aPromotion']['time_stamp']); ?></td>
	</tr>
<?php endforeach; endif; ?>
</table>
<div class="table_clear"></div>
<?php else: ?>
<div class="message">
<?php echo Phpfox::getPhrase('user.no_promotions_found'); ?>
</div>
<?php endif; ?>
