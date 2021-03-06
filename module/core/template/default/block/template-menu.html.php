<?php 
/**
 * [PHPFOX_HEADER]
 * 
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond_Benc
 * @package 		Phpfox
 * @version 		$Id: template-menu.html.php 5144 2013-01-15 14:36:28Z Miguel_Espinoza $
 */
 
defined('PHPFOX') or exit('NO DICE!'); 

?>
{plugin call='core.template_block_template_menu_1'}
						{if Phpfox::getUserBy('profile_page_id') <= 0}
						<ul>	
							{plugin call='theme_template_core_menu_list'}	
							{if isset($bForceLogoOnMenu)}
							<li>{logo}</li>
							{/if}
							{foreach from=$aMenus key=iKey item=aMenu name=menu}
								<li {if ($aMenu.url == 'apps' && count($aInstalledApps)) || (isset($aMenu.children) && count($aMenu.children))}class="explore{if ($aMenu.url == 'apps' && count($aInstalledApps))} explore_apps{/if}"{/if}><a {if !isset($aMenu.no_link) || $aMenu.no_link != true}href="{url link=$aMenu.url}" {else} href="#" onclick="return false;" {/if} class="{if isset($aMenu.external) && $aMenu.external == true}no_ajax_link {/if}ajax_link">
									{phrase var=$aMenu.module'.'$aMenu.var_name}{if isset($aMenu.suffix)}{$aMenu.suffix}{/if}</a>	
									{if isset($aMenu.children) && count($aMenu.children)}
									<ul>
										{foreach from=$aMenu.children item=aChild name=child_menu}
										<li{if $phpfox.iteration.child_menu == 1} class="first"{/if}><a href="{url link=$aChild.url}">{phrase var=$aChild.module'.'$aChild.var_name}</a></li>
										{/foreach}
									</ul>
									{else}								
									{if $aMenu.url == 'apps' && count($aInstalledApps)}
									<ul>
										{foreach from=$aInstalledApps item=aInstalledApp}
										<li><a href="{permalink module='apps' id=$aInstalledApp.app_id title=$aInstalledApp.app_title}" title="{$aInstalledApp.app_title|clean}">{img server_id=0 path='app.url_image' file=$aInstalledApp.image_path suffix='_square' max_width=16 max_height=16 title=$aInstalledApp.app_title class='v_middle'} {$aInstalledApp.app_title|clean|shorten:22:'...'}</a></li>
										{/foreach}
									</ul>
									{/if}
									{/if}
								</li>
							{/foreach}	
							{unset var=$aMenus var=$aMenu}
							{if count($aAppMenus)}
							<li class="explore"><a href="#" onclick="return false;">{phrase var='core.explore'} {img theme='layout/header_menu_explore_drop.png' class='v_middle'}</a>
								<ul>
								{foreach from=$aAppMenus key=iAppKey item=aAppMenu name=app_menu}
									<li><a href="{url link=$aAppMenu.url}" class="ajax_link">{phrase var=$aAppMenu.module'.'$aAppMenu.var_name}</a></li>
								{/foreach}
								</ul>
							</li>
							{/if}
							{unset var=$aAppMenus}							
						</ul>
						{/if}