<meta charset="UTF-8">
<?
$queryUrl = 'https://ditis.bitrix24.ru/rest/127/lsxdw9ax5km94qio/landing.repo.register';
    $queryData = http_build_query(array(
        "code" => "Map",
    	"fields"=>array(
            'NAME' => 'GooleMaps',
            'DESCRIPTION' => "Добавляет на страницу google карты",
            'SECTIONS' => 'about',
            'CONTENT' =>'
            <div class="block">
            <p class="one"><b>Отель Николь</b></p>
            <p class="two"> <b><u>7 июня, 9:30 </u></b></p>
            <p class="three"><b>Конференц-зал №1</b></p> 
            <p class="four"><b>Сормовское ш., 15А к.1</b></p>
        </div>
        <div class="map"></div>'
        ),
        'manifest' => array(
            'assets' => array(
                'css'=> array(
                    'https://ditis.bitrix24.ru/disk/showFile/58935/?&ncc=1&ts=1524744130&filename=map.css'
                ),
                'js' => array(
                    'https://ditis.bitrix24.ru/disk/showFile/58901/?&ncc=1&ts=1524738680&filename=map.js'
                ),
                'ext' => array(
                    'landing_form'
                )
            )
        )
    ));
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_POST => 1,
        CURLOPT_HEADER => 0,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $queryUrl,
        CURLOPT_POSTFIELDS => $queryData,
    ));

    $result = curl_exec($curl);
    curl_close($curl);
    print_r(json_decode($result));
?>