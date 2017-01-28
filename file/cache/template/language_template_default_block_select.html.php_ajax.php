<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 28, 2017, 4:07 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: $
 */
 
 

?>
<div class="main_break"></div>
<div id="js_loading_language"></div>
<div id="js_language_package_holder">
<?php if (count((array)$this->_aVars['aLanguages'])):  $this->_aPhpfoxVars['iteration']['languages'] = 0;  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']):  $this->_aPhpfoxVars['iteration']['languages']++; ?>

	<div class="<?php if (is_int ( $this->_aPhpfoxVars['iteration']['languages'] / 2 )): ?>row1<?php else: ?>row2<?php endif;  if ($this->_aPhpfoxVars['iteration']['languages'] == 1): ?> row_first<?php endif;  if (Phpfox ::getLib('locale')->getLangId() == $this->_aVars['aLanguage']['language_id']): ?> row_focus<?php endif; ?>">
<?php if (! empty ( $this->_aVars['aLanguage']['image'] )): ?>
		<div class="go_right">
			<img src="<?php echo $this->_aVars['aLanguage']['image']; ?>" alt="<?php echo $this->_aVars['aLanguage']['language_code']; ?>" class="v_middle" /> 
		</div>
<?php endif; ?>
<?php if (Phpfox ::getLib('locale')->getLangId() != $this->_aVars['aLanguage']['language_id']): ?><a href="#" onclick="$('#js_language_package_holder').hide(); $('#js_loading_language').html($.ajaxProcess('<?php echo Phpfox::getPhrase('language.loading', array('phpfox_squote' => true)); ?>')); $.ajaxCall('language.process', 'id=<?php echo $this->_aVars['aLanguage']['language_id']; ?>'); return false;"><?php endif;  echo $this->_aVars['aLanguage']['title'];  if (Phpfox ::getLib('locale')->getLangId() != $this->_aVars['aLanguage']['language_id']): ?></a><?php endif; ?>
	</div>
	<div class="clear"></div>
<?php endforeach; endif; ?>
	<div class="clear"></div>
</div>
