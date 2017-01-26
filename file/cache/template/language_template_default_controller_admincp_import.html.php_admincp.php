<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 26, 2017, 8:21 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: import.html.php 4961 2012-10-29 07:11:34Z Raymond_Benc $
 */
 
 

 if ($this->_aVars['bImportPhrases']): ?>
	<div class="message">
<?php echo Phpfox::getPhrase('language.importing_phrases_please_hold'); ?>
	</div>
<?php else: ?>
<?php if (Phpfox ::getParam('core.is_auto_hosted')): ?>
	<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.import'); ?>" enctype="multipart/form-data">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>'; ?>
		<div class="table_header">
			Import
		</div>
		<div class="table">	
			<div class="table_left">
				File:
			</div>
			<div class="table_right">
				<input type="file" name="import" size="40" />
			</div>
			<div class="clear"></div>
		</div>	
		<div class="table_clear">
			<input type="submit" value="Import" class="button" />
		</div>	
	
</form>

<?php else: ?>
	<div class="table_header">
<?php echo Phpfox::getPhrase('language.manual_install'); ?>
	</div>
<?php if (count ( $this->_aVars['aNewLanguages'] )): ?>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo Phpfox::getPhrase('language.title'); ?></th>
			<th><?php echo Phpfox::getPhrase('language.created_by'); ?></th>
			<th style="width:100px;"><?php echo Phpfox::getPhrase('language.action'); ?></th>
		</tr>
<?php if (count((array)$this->_aVars['aNewLanguages'])):  foreach ((array) $this->_aVars['aNewLanguages'] as $this->_aVars['iKey'] => $this->_aVars['aLanguage']): ?>
		<tr class="checkRow<?php if (is_int ( $this->_aVars['iKey'] / 2 )): ?> tr<?php else:  endif; ?>">
			<td>
<?php if (! empty ( $this->_aVars['aLanguage']['site'] )): ?><a href="<?php echo $this->_aVars['aLanguage']['site']; ?>" target="_blank"><?php endif;  echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aLanguage']['title']); ?></a><?php if (! empty ( $this->_aVars['aLanguage']['site'] )): ?></a><?php endif; ?>
			</td>
			<td><?php if (! empty ( $this->_aVars['aLanguage']['site'] )): ?><a href="<?php echo $this->_aVars['aLanguage']['site']; ?>" target="_blank"><?php endif;  if (empty ( $this->_aVars['aLanguage']['created'] )): ?>N/A<?php else:  echo $this->_aVars['aLanguage']['created'];  endif;  if (! empty ( $this->_aVars['aLanguage']['site'] )): ?></a><?php endif; ?></td>
			<td class="t_center"><a href="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.import', array('install' => $this->_aVars['aLanguage']['language_id'])); ?>" title="<?php echo Phpfox::getPhrase('theme.click_to_install_this_theme'); ?>"><?php echo Phpfox::getPhrase('theme.install'); ?></a></td>
		</tr>
<?php endforeach; endif; ?>
	</table>
<?php else: ?>
	<div class="table">
		<div class="message">
<?php echo Phpfox::getPhrase('language.nothing_new_to_install'); ?>
		</div>	
	</div>	
<?php endif; ?>
	<div class="table_clear"></div>
	<br />
<?php endif;  endif; ?>
