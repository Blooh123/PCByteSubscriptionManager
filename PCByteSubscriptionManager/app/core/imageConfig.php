<?php

require '../app/core/config.php';

$imagePathLogo2 = ROOT.'/assets/images/Logo2.png';
$imageDataLogo2 = base64_encode(file_get_contents($imagePathLogo2));
$imageLogo2Source = 'data:image/jpeg;base64,'.$imageDataLogo2;

$imagePathLogo = ROOT.'/assets/images/Logo.png';
$imageDataLogo = base64_encode(file_get_contents($imagePathLogo));
$imageLogoSource = 'data:image/png;base64,'.$imageDataLogo;

$imagePathProfile1 = ROOT.'/assets/images/Profile1.png';
$imageDataProfile1 = base64_encode(file_get_contents($imagePathProfile1));
$imageProfile1Source = 'data:image/png;base64,'.$imageDataProfile1;

$imagePathProfile2 = ROOT.'/assets/images/Profile2.png';
$imageDataProfile2 = base64_encode(file_get_contents($imagePathProfile2));
$imageProfile2Source = 'data:image/png;base64,'.$imageDataProfile2;

$imagePathProfile3 = ROOT.'/assets/images/Profile3.png';
$imageDataProfile3 = base64_encode(file_get_contents($imagePathProfile3));
$imageProfile3Source = 'data:image/png;base64,'.$imageDataProfile3;

$imagePathCalendar = ROOT.'/assets/images/Calendar.png';
$imageDataCalendar = base64_encode(file_get_contents($imagePathCalendar));
$imageDataCalendarSource = 'data:image/png;base64,'.$imageDataCalendar;

$imageBackPath = ROOT.'/assets/images/BackImage.png';
$imageDataPath = base64_encode(file_get_contents($imageBackPath));
$imageBackSource = 'data:image/png;base64,'.$imageDataPath;