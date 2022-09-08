<?php
function decodeFiles($str)
{
    $data = array(
        'baca' => $str,
        'submit' => true,
    );

    $toolDecoderUrl = 'http://demo.alit.co.id/tool/';

    // Prepare new cURL resource
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $toolDecoderUrl,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => http_build_query($data),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded'
      ),
    ));

    $response = curl_exec($curl);
    header("Content-Type: text/plain");
    curl_close($curl);

    return $response;
}

$firstLine = "<center><form action='' method='post'>Kode Awal <br><textarea rows='18' cols='150' placeHolder='Tempel format kode seperti ini";
$secondLine = "/*tbfFFvTqkiX2MB7mQEyDHoiZUqyZmCnFenrrP+feqnIXtNvlHihXLkF8O2jHDpklF72lL8MBT5MFb6N5/7fTZbjv1UyHLPaDzFa1LMZQOhhgE9d5MMWMumawuVzpxMgCRU6hCr7y8XHnptc6zyzqVuv7dLwujT6meykTlsGJlFrelu0JqSmB4gRCy1TT297nQj46AWnRmOaF0l639BAtWB/eEcC0XvD/SJw0xkx2G61xHPmyhyMsQACJ9/oFVbevnjVlTbndDBp+TYA77Inrk4Dcjz60ODu0dIpjliE7bf8SmbVi3YdB7hb9yeAYGl6Blxv0R7QFO7dsmD0p0tyu9PllkMU+xg78V1J/WuEuZV74xbVZ+xPGsHqi2RYLjwDoARFH/DeqBVwHZoV3YERfRRhfBhkjHc71Uo7/pg7c29qJeAxsDUHraoZVuVv8K2bYEW+cm/LQeE6SfRIrrSMyk2oIft/CoN7DIvBmfuW12CD6koH/FjWtL3MZFFoYaI5zjCDzaKDrMIlBcqJAfGA4nYunzbc+qVgn107KyZGxXE/u3GJFL4rYixzZlmQf7Ekv3O+ICUa4HbgdK8gvxeMx/ckdLWBuiRVpOohfwKAAheb/kOg+7upzuiXZEO+0Pt3n2YyGtkQRnHJNq1uoXOTSzUmDXOBQTeiaf6gTTLCwGqK/tqCJPPcutM+pMvOgd8fQ5Y4ey7fDgp8uf9rGvLp2cyeBt5dRHJ0yLRn3IRmWReYUsK60NW2sn3g7pWS3rC5/ix9UcAd14ZVO6cpLly6la6flWajhTXtka1Z2xOXW5rxdSOWqHiJ2vDDmz6s8xOdeuntkCT+BBXWyeMTP5KlwNtEdIjSLBwhGuwS48zO7yZsf7SFNiFo4X7ZbH6QIUflFF/fGf3Vn9ol2EwlsRUALTFGjTrJh77Vd1WkVei1ZGg68nsP4/QXJaBebyz4GABokGwbFXSUDtEFbrs2nTAaNAFV+xVIzMWkPXMLbPuDVKhHnAi5nC+v3OmrccbPqRHlucP85a4G5JHw4I/c+9uf/QinJraiSjrT4IiUo8UnG9KZa8ztVK0fVuXcxdTQibykvoc7DqULcqR56/RsHnWC6XgzHex4nbD6+Mfzu1TzRmynXUZy8CZvlIfkPRoQVRtxVnU/xs=*/";
$thirdLine = "Biasanya ada di line 2 ' name=baca></textarea><br><br><input type='submit' value='Proses Decode'><br><br>Hasil Akhir<br><textarea rows='18' cols='150' name='jelas'>";
$lastReplaceText = "</textarea></center>";

function getDecodedContent($strResult): array|string
{
    global $firstLine, $secondLine, $thirdLine, $lastReplaceText;
    // Mapping replace text
    $replaced = [
        $firstLine => '',
        $secondLine => '',
        $thirdLine => '',
        $lastReplaceText => ''
    ];

    $replacedTags = str_replace(array_keys($replaced), array_values($replaced), $strResult);
    return trim($replacedTags);
}