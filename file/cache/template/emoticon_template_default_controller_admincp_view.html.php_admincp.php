<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 28, 2017, 4:18 pm */ ?>
<?php
/**
 * [PHPFOX_HEADER]
 */



/**
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Miguel Espinoza
 * @package  		Module_Emoticon
 * @version 		$Id: view.html.php 1121 2009-10-01 12:59:13Z Raymond_Benc $
 */

?>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.view'); ?>">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['sPackageId']; ?>" /></div>
	<div class="table_header">
<?php echo Phpfox::getPhrase('emoticon.emoticons'); ?>
	</div>
	<table cellpadding="0" cellspacing="0" id="js_drag_drop">
		<tr>
			<th></th>
			<th style="width:20px"></th>
			<th><?php echo Phpfox::getPhrase('emoticon.title'); ?></th>
			<th class="t_center"><?php echo Phpfox::getPhrase('emoticon.symbol'); ?></th>
			<th class="t_center"><?php echo Phpfox::getPhrase('emoticon.image'); ?></th>
		</tr>
<?php if (count((array)$this->_aVars['aPackage'])):  $this->_aPhpfoxVars['iteration']['emoticon'] = 0;  foreach ((array) $this->_aVars['aPackage'] as $this->_aVars['iKey'] => $this->_aVars['aEmoticon']):  $this->_aPhpfoxVars['iteration']['emoticon']++; ?>

		<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>" id="js_user_<?php echo $this->_aVars['aEmoticon']['emoticon_id']; ?>">
			<td class="drag_handle"><input type="hidden" name="val[ordering][<?php echo $this->_aVars['aEmoticon']['emoticon_id']; ?>]" value="<?php echo $this->_aVars['aEmoticon']['ordering']; ?>" /></td>
			<td class="t_center">
				<a href="#" class="js_drop_down_link" title="Manage"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
				<div class="link_menu">
					<ul>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.add', array('id' => $this->_aVars['aEmoticon']['emoticon_id'])); ?>"><?php echo Phpfox::getPhrase('emoticon.edit_emoticon'); ?></a></li>					
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.emoticon.add', array('delete' => $this->_aVars['aEmoticon']['emoticon_id'])); ?>"><?php echo Phpfox::getPhrase('emoticon.delete_emoticon'); ?></a></li>
					</ul>
				</div>
			</td>
			<td><input type="text" name="update[<?php echo $this->_aVars['aEmoticon']['emoticon_id']; ?>][title]" value="<?php echo $this->_aVars['aEmoticon']['title']; ?>" size="10" /></td>
			<td class="t_center"><input type="text" name="update[<?php echo $this->_aVars['aEmoticon']['emoticon_id']; ?>][text]" value="<?php echo $this->_aVars['aEmoticon']['text']; ?>" size="10" /></td>
			<td class="t_center"><img src="<?php echo $this->_aVars['sUrlEmoticon'];  echo $this->_aVars['aEmoticon']['package_path']; ?>/<?php echo $this->_aVars['aEmoticon']['image']; ?>" alt="<?php echo $this->_aVars['aEmoticon']['title']; ?>" style="vertical-align:middle;" /></td>
		</tr>
<?php endforeach; else: ?>
		<tr>
			<td colspan="5"><?php echo Phpfox::getPhrase('emoticon.this_package_contains_no_emoticons'); ?></td>
		</tr>
<?php endif; ?>
	</table>
	<div class="table_bottom">
		<input type="submit" value="<?php echo Phpfox::getPhrase('emoticon.update'); ?>" class="button" />
	</div>

</form>

