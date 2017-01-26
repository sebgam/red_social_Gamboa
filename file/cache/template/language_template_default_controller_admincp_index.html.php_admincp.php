<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 26, 2017, 8:27 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Language
 * @version 		$Id: index.html.php 2023 2010-11-01 15:16:13Z Raymond_Benc $
 */
 
 

?>
<div class="table_header">
<?php echo Phpfox::getPhrase('language.language_packages'); ?>
</div>
<table cellpadding="0" cellspacing="0">
	<tr>
		<th style="width:20px;"></th>
		<th><?php echo Phpfox::getPhrase('language.language'); ?></th>
		<th><?php echo Phpfox::getPhrase('language.added'); ?></th>
		<th><?php echo Phpfox::getPhrase('language.created'); ?></th>
	</tr>
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['iKey'] => $this->_aVars['aLanguage']): ?>
	<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
			<td class="t_center">
				<a href="#" class="js_drop_down_link" title="<?php echo Phpfox::getPhrase('language.manage'); ?>"><?php echo Phpfox::getLib('phpfox.image.helper')->display(array('theme' => 'misc/bullet_arrow_down.png','alt' => '')); ?></a>
				<div class="link_menu">
					<ul>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.language.phrase", array('lang-id' => "".$this->_aVars['aLanguage']['language_id']."")); ?>"><?php echo Phpfox::getPhrase('language.manage_phrases'); ?></a></li>						
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.language.add", array('id' => "".$this->_aVars['aLanguage']['language_id']."")); ?>"><?php echo Phpfox::getPhrase('language.edit_settings'); ?></a></li>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.missing', array('id' => $this->_aVars['aLanguage']['language_id'])); ?>"><?php echo Phpfox::getPhrase('language.find_missing_phrases'); ?></a></li>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language', array('export' => $this->_aVars['aLanguage']['language_id'])); ?>"><?php echo Phpfox::getPhrase('language.export'); ?></a></li>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language', array('export' => $this->_aVars['aLanguage']['language_id'],'custom' => '1')); ?>"><?php echo Phpfox::getPhrase('language.export_with_3rd_party_phrases'); ?></a></li>
<?php if (! $this->_aVars['aLanguage']['is_default']): ?>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.language", array('default' => "".$this->_aVars['aLanguage']['language_id']."")); ?>"><?php echo Phpfox::getPhrase('language.set_default'); ?></a></li>
<?php if (! $this->_aVars['aLanguage']['is_master']): ?>
						<li><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl("admincp.language.delete", array('id' => "".$this->_aVars['aLanguage']['language_id']."")); ?>"><?php echo Phpfox::getPhrase('language.delete'); ?></a></li>
<?php endif; ?>
<?php endif; ?>
					</ul>
				</div>		
			</td>
		<td><?php if ($this->_aVars['aLanguage']['is_master']): ?>(<?php echo Phpfox::getPhrase('language.master'); ?>) <?php endif;  echo $this->_aVars['aLanguage']['title']; ?></td>
		<td><?php echo Phpfox::getTime(Phpfox::getParam('core.global_update_time'), $this->_aVars['aLanguage']['time_stamp']); ?></td>
		<td><?php if (! empty ( $this->_aVars['aLanguage']['site'] )): ?><a href="<?php echo $this->_aVars['aLanguage']['site']; ?>" class="targetBlank"><?php endif;  if (empty ( $this->_aVars['aLanguage']['created'] )): ?>N/A<?php else:  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aLanguage']['created']);  endif;  if (! empty ( $this->_aVars['aLanguage']['site'] )): ?></a><?php endif; ?></td>	
	</tr>
<?php endforeach; endif; ?>
</table>
