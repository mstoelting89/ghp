```php 
<?php

if (!getenv(‘PHP_BIN_PATH’)){
	return; 
} 
$typo3cmsPath = DIR . ‘/vendor/bin/typo3cms’; 

if (!file_exists($typo3cmsPath)) { 
	echo ‘typo3cms binary not found at expected path ‘ . $typo3cmsPath . PHP_EOL; 
	return; 
} 
$typo3cms = file($typo3cmsPath); 
$typo3cms[0] = ‘#!’ . getenv(‘PHP_BIN_PATH’); 
file_put_contents($typo3cmsPath, implode(PHP_EOL, $typo3cms)); 
echo ‘typo3cms PHP binary path patched’ . PHP_EOL;
