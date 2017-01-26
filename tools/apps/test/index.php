<?php

// Enable error reporting to help us debug issues
error_reporting(E_ALL);

// Start PHP sessions
session_start();

require_once('./config.php');

if (isset($_GET['auth']))
{
	$oToken = json_decode(file_get_contents(APP_URL . 'token.php?key=' . $_GET['key']));
	
	$_SESSION['auth_token'] = $oToken->token;
	
	header('Location: ' . SITE_URL);
	exit;
}

// $oToken = json_decode(file_get_contents(APP_URL . 'token.php?key=' . $_GET['key']));

// unset($_SESSION['auth_token']);

if (empty($_SESSION['auth_token']))
{
	header('Location: ' . APP_URL . 'auth.php?key=' . APP_ID);
	exit;
}
else
{
	define('APP_TOKEN', $_SESSION['auth_token']);
}

function doPost($sMethod, $aPost = array())
{
	// Build the request string we are going to POST to the API server. We include some of the required params.
	$sPost = 'token=' . APP_TOKEN . '&method=' . $sMethod;
	foreach ($aPost as $sKey => $sValue)
	{
		$sPost .= '&' . $sKey . '=' . $sValue;
	}		
		
	// Start curl request.
	$hCurl = curl_init();		
		
	echo '<a href="' . APP_URL . 'api.php?' . $sPost . '" target="_blank">View Source</a>';	

	curl_setopt($hCurl, CURLOPT_URL, APP_URL . 'api.php');
	curl_setopt($hCurl, CURLOPT_HEADER, false);
	curl_setopt($hCurl, CURLOPT_RETURNTRANSFER, true);			

	curl_setopt($hCurl, CURLOPT_SSL_VERIFYPEER, false);
			
	curl_setopt($hCurl, CURLOPT_POST, true);
	curl_setopt($hCurl, CURLOPT_POSTFIELDS, $sPost);
		
	// Run the exec
	$sData = curl_exec($hCurl);
			
	// Close the curl connection
	curl_close($hCurl);	
	
	// Return the curl request and since we use JSON we decode it.
	return json_decode(trim($sData));		
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
	<head>
		<title>Test Application</title>	
		<!-- 
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo APP_URL; ?>static/jscript/api.js"></script>
		<script type="text/javascript">
			CoreAPI.init({
				id: '<?php echo APP_ID; ?>',
				url: '<?php echo APP_URL; ?>'
			});
		</script>
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL; ?>static/style.php?app_id=<?php echo APP_ID; ?>" />
		<script type="text/javascript">
			$(document).ready(function(){				
				$('body').append('<iframe id="crossdomain_frame" src="<?php echo APP_URL; ?>static/crossdomain.php?height=' + document.body.scrollHeight + '&nocache=' + Math.random() + '" height="0" width="0" frameborder="0"></iframe>');
			});		
		</script>
		-->
		<style type="text/css">
			body
			{
				font-family:verdana;
				font-size:12px;
				background:#fff;
				color:#333;
			}
			#app_holder
			{
				width:50%;
				margin:auto;
			}
			.custom_code_table
			{					
				border:1px #dfdfdf solid;
				margin:10px 0px 10px 0px;
			}
				
			.custom_code_table th
			{
				text-align:left;
				font-weight:bold;
				background:#f9f9f9;
				padding:8px;
			}
				
			.custom_code_table td
			{
				border-top:1px #dfdfdf solid;
				border-right:1px #dfdfdf solid;
				padding:8px;					
			}				
		</style>		
	</head>
	<body>
		<div id="app_holder">
		<h1>Test Application</h1>
<?php

if (!defined('APP_TOKEN')):

?>
<a href="#" onclick="CoreAPI.login(); return false;">Login</a>
<?php 

else:

define('PHPFOX', true);
$sModuleDir = '../../../upload/module/';
$hDir = opendir($sModuleDir);
while (($sFolder = readdir($hDir)) !== false)
{
	if ($sFolder == '.' || $sFolder == '..')
	{
		continue;
	}
	
	if (!file_exists($sModuleDir . $sFolder . '/include/service/api.class.php'))
	{
		continue;
	}
	
	$aLines = file($sModuleDir . $sFolder . '/include/service/api.class.php');
	
	$sLastModule = '';
	foreach ($aLines as $iLineNumber =>  $sLine)
	{
		if (preg_match('/public function ([a-zA-Z0-9]+)/i', $sLine, $aMatches) && preg_match('/\@title/i', $aLines[($iLineNumber + 3)]))
		{
			if ($sFolder != 'photo')
			{
				continue;
			}			
			
			if ($sLastModule != $sFolder)
			{
				echo '<h1 style="text-transform:uppercase;">' . $sFolder . '</h1>';
			}
			
			$sTitle = preg_replace('/\@title (.*?)/i', '$1', $aLines[($iLineNumber + 3)]);
			$sInfo = preg_replace('/\@info (.*?)/i', '$1', $aLines[($iLineNumber + 4)]);
			$sMethod = preg_replace('/\@method (.*?)/i', '$1', $aLines[($iLineNumber + 5)]);
			
			echo '<div style="color:#356AA0; font-weight:bold; font-size:14px; border-bottom:1px #dfdfdf solid; padding-bottom:4px; margin-bottom:4px;">' . $sFolder. '.' . $aMatches[1] . '</div>';
			// echo '<strong>' . $sMethod . '</strong><br />';
			// api.php?method=' . $sFolder. '.' . $aMatches[1] . '&' . trim($sExtra) . '
						
			echo '' . $sInfo . '';
			
			if (preg_match('/\@extra (.*?)/i', $aLines[($iLineNumber + 6)]))
			{			
				$sExtra = preg_replace('/\@extra (.*?)/i', '$1', $aLines[($iLineNumber + 6)]);
				$aExtraParts = explode('&', $sExtra);
				echo '<table class="custom_code_table" cellpadding="0" cellspacing="0">';
				echo '<tr>';
				echo '<th>Parameter</th>';
				echo '<th>Description</th>';
				echo '<th>Type</th>';
				echo '<th>Required</th>';
				echo '</tr>';
				foreach ($aExtraParts as $sPart)
				{
					preg_match('/([a-z0-9_]+)\=\#\{(.*?)\}/i', $sPart, $aPartMatches);
					echo '<tr>';
					echo '<td>' . $aPartMatches[1] . '</td>';
					
					$aPartMatch2 = explode('|', $aPartMatches[2]);
					
					if (isset($aPartMatch2[0]))
					{
						// [action]core.getCurrencies[/action]
						$aPartMatch2[0] = preg_replace('/\[action\]([a-zA-Z\.]+)\[\/action\]/i', '<a href="#">\\1</a>', $aPartMatch2[0]);
					}					
					echo '<td>' . $aPartMatch2[0] . '</td>';					
					echo '<td>' . (isset($aPartMatch2[1]) ? $aPartMatch2[1] : '') . '</td>';
					echo '<td>' . (isset($aPartMatch2[2]) ? $aPartMatch2[2] : '') . '</td>';
					echo '</tr>';
				}
				echo '</table>';
			}
			
			if (preg_match('/\@return (.*?)/i', $aLines[($iLineNumber + 7)]))
			{
				$sReturnInfo = preg_replace('/\@return (.*?)/i', '$1', $aLines[($iLineNumber + 7)]);
				$aExtraPartsReturn = explode('&', $sReturnInfo);
				echo '<table class="custom_code_table" cellpadding="0" cellspacing="0">';
				echo '<tr>';
				echo '<th>Name</th>';
				echo '<th>Description</th>';
				echo '<th>Type</th>';
				echo '</tr>';
				foreach ($aExtraPartsReturn as $sPartReturn)
				{
					preg_match('/([a-z0-9_]+)\=\#\{(.*?)\}/i', $sPartReturn, $aPartMatches);
					echo '<tr>';
					echo '<td>' . $aPartMatches[1] . '</td>';
				
					$aPartMatch2 = explode('|', $aPartMatches[2]);
				
					echo '<td>' . $aPartMatch2[0] . '</td>';
					echo '<td>' . (isset($aPartMatch2[1]) ? $aPartMatch2[1] : '') . '</td>';					
					echo '</tr>';
				}
				echo '</table>';				
			}
			
			$aExtra = array();
			switch ($aMatches[1])
			{
				case 'thread':
					$aExtra = array('id' => '2');
					break;
				case 'threads':
					$aExtra = array('id' => '6');
					break;
				case 'addThread':
					$aExtra = array(
						'id' => '6',
						'title' => 'Forum Title Thread ' . time(),
						'post' => 'This is a new thread.'
						);
					break;
				case 'addPost':
					$aExtra = array(
						'id' => '3',
						'post' => 'This is a test reply... ' . time()
						);
					break;
				

				case 'isFriend':
					$aExtra = array('user_id' => '1', 'friend_user_id' => '24');
					break;
				case 'comment':
					$aExtra = array(
							'user_id' => 24,
							'message' => 'Text for comment ' . time()
							);					
					break;
					case 'add':
						switch ($sFolder)
						{		
							case 'photo':
								$aExtra = array('url' => 'http://server.natio.me/phpfox/3.5.x/tools/apps/test/photo1.jpg');
								break;
							case 'link':
								$aExtra = array(
										'url' => 'http://www.youtube.com/watch?v=9bZkp7q19f0',
										'status_info' => 'Link status update. ' . time()
									);
								break;
							case 'pages':
								$aExtra = array(
										'title' => 'Test Page ' . time(),
										'info' => 'Info about page ' . time(),
										'type_id' => '1',
										'category_id' => '1',
										'image' => 'http://server.natio.me/phpfox/3.5.x/tools/apps/test/photo1.jpg',
										'photo_name' => 'sample.jpg'
								);
								break;							
							case 'marketplace':
								$aExtra = array(
										'title' => 'Marketplace Test . ' . time(),
										'currency_id' => 'USD',
										'price' => '5.00',
										'country_iso' => 'US',
										'country_child_id' => '6',
										'postal_code' => '21775',
										'city' => 'Palt Alto',
										'mini_description' => 'Small info...',
										'description' => 'Large Info',
										'category' => '1,2',
										'images' => 'http://server.natio.me/phpfox/3.5.x/upload/file/pic/photo/2013/01/3c31addd7b324a98aaf36332f8ea7416.jpg,http://server.natio.me/phpfox/3.5.x/upload/file/pic/photo/2013/01/637736b3a890f43453eec737bf81b493.jpg'
										);								
								break;
							case 'video':
								$aExtra = array(
									'url' => 'http://www.youtube.com/watch?v=TyRTYIC1p_g'										
								);								
								break;
							case 'blog':
								$aExtra = array(
										'title' => 'Test Blog ' . time(),
										'text' => 'Text for blog ' . time()
								);								
								break;
							case 'mail':
								$aExtra = array(
										'user_id' => 25,
										'subject' => 'Test Mail ' . time(),
										'message' => 'Text for mail ' . time()
										);								
								break;
							case 'event':
								$aExtra = array(
										'title' => 'Test Event' . time(),
										'description' => 'Info about this event',
										'location' => 'phpFox Inc',
										'country_iso' => 'US',
										'country_child_id' => '6',
										'postal_code' => '94301',
										'city' => 'Palo Alto',
										'address' => '530 Lytton Avenue',
								
										'start_hour' => '12',
										'start_minute' => '45',
										'start_month' => '1',
										'start_day' => '1',
										'start_year' => '2014',
								
										'end_hour' => '14',
										'end_minute' => '55',
										'end_month' => '1',
										'end_day' => '1',
										'end_year' => '2014'
								);								
								break;
						}
						break;
					case 'get':
						switch ($sFolder)
						{
							case 'feed':
								$aExtra = array('user_id' => '1');
								break;
							case 'mail':
								$aExtra = array('user_id' => '24');
								break;	
							case 'user':	
								$aExtra = array('user_id' => '24');
								break;
						}
						break;
				case 'message':
					$aExtra = array('id' => '1');
					break;
				case 'updateStatus':
					$aExtra = array(
						'user_status' => 'Test Status Update ' . time()
					);
					break;				
			}
			
			$mReturn = doPost($sFolder . '.' . $aMatches[1], $aExtra);
			echo '<div style="overflow:auto; max-height:300px; border:1px #dfdfdf solid; padding:10px; margin-bottom:20px;">';
			
			$sOutputReturn = print_r($mReturn->output, true);
			if ($sOutputReturn == '1')
			{
				$sOutputReturn = 'true';
			}
			
			echo '<pre>' . $sOutputReturn . '</pre>';
			echo '</div>';
			
			$sLastModule = $sFolder;
		}
	}
}
closedir($hDir);

endif;

?>
		</div>
		<div id="coreapi"></div>		
	</body>
</html>