<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: January 26, 2017, 9:38 pm */ ?>
<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package 		Phpfox
 * @version 		$Id: controller.html.php 64 2009-01-19 15:05:54Z Raymond_Benc $
 */
 
 

 if (isset ( $this->_aVars['bImportingPhrases'] )): ?>
<div class="message">
<?php echo Phpfox::getPhrase('language.importing_phrases_page_current_total', array('current' => $this->_aVars['iCurrentPage'],'total' => $this->_aVars['iTotalPages'])); ?>
</div>
<?php else: ?>
<form method="post" action="<?php echo Phpfox::getLib('phpfox.url')->makeUrl('admincp.language.add'); ?>" enctype="multipart/form-data">
<?php echo '<div><input type="hidden" name="' . Phpfox::getTokenName() . '[security_token]" value="' . Phpfox::getService('log.session')->getToken() . '" /></div>';  if ($this->_aVars['bIsEdit']): ?>
	<div><input type="hidden" name="id" value="<?php echo $this->_aVars['aForms']['language_id']; ?>" /></div>
<?php endif; ?>
	<div class="table_header">
<?php echo Phpfox::getPhrase('language.package_details'); ?>
	</div>
<?php if (! $this->_aVars['bIsEdit']): ?>
	<div class="table">
		<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('language.create_from'); ?>:
		</div>
		<div class="table_right">
			<select name="val[parent_id]">
				<option value=""><?php echo Phpfox::getPhrase('language.select'); ?>:</option>
<?php if (count((array)$this->_aVars['aLanguages'])):  foreach ((array) $this->_aVars['aLanguages'] as $this->_aVars['aLanguage']): ?>
				<option value="<?php echo $this->_aVars['aLanguage']['language_code']; ?>"><?php echo Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aLanguage']['title']); ?></option>
<?php endforeach; endif; ?>
			</select>
		</div>
		<div class="clear"></div>
	</div>	
<?php endif; ?>
	<div class="table">
		<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('language.name'); ?>:
		</div>
		<div class="table_right">
			<input type="text" name="val[title]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['title']) : (isset($this->_aVars['aForms']['title']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['title']) : '')); ?>
" size="40" />
		</div>
		<div class="clear"></div>
	</div>
	<div class="table">
		<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('language.language_abbreviation_code'); ?>:
		</div>
		<div class="table_right">
			<input type="text" name="val[language_code]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['language_code']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['language_code']) : (isset($this->_aVars['aForms']['language_code']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['language_code']) : '')); ?>
" size="2" maxlength="2" />
		</div>
		<div class="clear"></div>
	</div>	
	
	<div class="table">
		<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('language.text_direction'); ?>:
		</div>
		<div class="table_right">
			<label><input type="radio" name="val[direction]" value="ltr" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('direction') && in_array('direction', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['direction']) && $aParams['direction'] == 'ltr'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['direction']) && !isset($aParams['direction']) && $this->_aVars['aForms']['direction'] == 'ltr')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['direction']) && !isset($aParams['direction']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
/> <?php echo Phpfox::getPhrase('language.left_to_right'); ?></label> <br />
			<label><input type="radio" name="val[direction]" value="rtl" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('direction') && in_array('direction', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['direction']) && $aParams['direction'] == 'rtl'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['direction']) && !isset($aParams['direction']) && $this->_aVars['aForms']['direction'] == 'rtl')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
/> <?php echo Phpfox::getPhrase('language.right_to_left'); ?></label>
		</div>
		<div class="clear"></div>
	</div>		
	<div class="table">
		<div class="table_left">
<?php if (Phpfox::getParam('core.display_required')): ?><span class="required"><?php echo Phpfox::getParam('core.required_symbol'); ?></span><?php endif;  echo Phpfox::getPhrase('language.allow_user_selection'); ?>:
		</div>
		<div class="table_right">	
			<div class="item_is_active_holder">		
				<span class="js_item_active item_is_active"><input type="radio" name="val[user_select]" value="1" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('user_select') && in_array('user_select', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['user_select']) && $aParams['user_select'] == '1'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['user_select']) && !isset($aParams['user_select']) && $this->_aVars['aForms']['user_select'] == '1')
 {
    echo ' checked="checked" ';}
 else
 {
 if (!isset($this->_aVars['aForms']) || ((isset($this->_aVars['aForms']) && !isset($this->_aVars['aForms']['user_select']) && !isset($aParams['user_select']))))
{
 echo ' checked="checked"';
}
 }
}
?> 
/> <?php echo Phpfox::getPhrase('language.yes'); ?></span>
				<span class="js_item_active item_is_not_active"><input type="radio" name="val[user_select]" value="0" <?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val'));
if (isset($this->_aVars['aForms']) && is_numeric('user_select') && in_array('user_select', $this->_aVars['aForms']) ){echo ' checked="checked"';}
if ((isset($aParams['user_select']) && $aParams['user_select'] == '0'))
{echo ' checked="checked" ';}
else
{
 if (isset($this->_aVars['aForms']) && isset($this->_aVars['aForms']['user_select']) && !isset($aParams['user_select']) && $this->_aVars['aForms']['user_select'] == '0')
 {
    echo ' checked="checked" ';}
 else
 {
 }
}
?> 
/> <?php echo Phpfox::getPhrase('language.no'); ?></span>
			</div>
		</div>
		<div class="clear"></div>		
	</div>	
	<div class="table">
		<div class="table_left">
<?php echo Phpfox::getPhrase('language.icon'); ?>:
		</div>
		<div class="table_right">
<?php if ($this->_aVars['bIsEdit'] && ! empty ( $this->_aVars['aForms']['image'] )): ?>
			<div id="js_current_image">
				<img src="<?php echo $this->_aVars['aForms']['image']; ?>" alt="" class="v_middle" /> - <a href="#" onclick="$('#js_current_image').hide(); $('#js_upload_new_icon').show();"><?php echo Phpfox::getPhrase('language.change_icon'); ?></a>
			</div>
<?php endif; ?>
			<div id="js_upload_new_icon"<?php if ($this->_aVars['bIsEdit'] && ! empty ( $this->_aVars['aForms']['image'] )): ?> style="display:none;"<?php endif; ?>>
				<input type="file" name="icon" size="30" />
<?php if ($this->_aVars['bIsEdit']): ?>
				- <a href="#" onclick="$('#js_current_image').show(); $('#js_upload_new_icon').hide();"><?php echo Phpfox::getPhrase('language.cancel'); ?></a>
<?php endif; ?>
				<div class="extra_info">			
<?php echo Phpfox::getPhrase('language.default_icon_to_represent_this_language_package_br_advised_size_is_max_16_pixels_width_height'); ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>		
	<div class="table">
		<div class="table_left">
<?php echo Phpfox::getPhrase('language.created_by'); ?>:
		</div>
		<div class="table_right">
			<input type="text" name="val[created]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['created']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['created']) : (isset($this->_aVars['aForms']['created']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['created']) : '')); ?>
" size="40" />
		</div>
		<div class="clear"></div>
	</div>
	<div class="table">
		<div class="table_left">
<?php echo Phpfox::getPhrase('language.website'); ?>:
		</div>
		<div class="table_right">
			<input type="text" name="val[site]" value="<?php $aParams = (isset($aParams) ? $aParams : Phpfox::getLib('phpfox.request')->getArray('val')); echo (isset($aParams['site']) ? Phpfox::getLib('phpfox.parse.output')->clean($aParams['site']) : (isset($this->_aVars['aForms']['site']) ? Phpfox::getLib('phpfox.parse.output')->clean($this->_aVars['aForms']['site']) : '')); ?>
" size="40" />
		</div>
		<div class="clear"></div>
	</div>	
	<div class="table_clear">
		<input type="submit" value="<?php echo Phpfox::getPhrase('language.submit'); ?>" class="button" />
	</div>

</form>

<?php endif; ?>
