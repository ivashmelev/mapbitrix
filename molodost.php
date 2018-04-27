<?$count=DB::query("SELECT id FROM {shop_order}");
	$lastorder=DB::num_rows($count); 
	$this->diafan->_shop->order_details(70)["delivery"]["name"];
	$goods_array=array();
	for($goods=0; $goods<10; $goods++){
      
      array_push($goods_array, $this->diafan->_shop->order_details($lastorder)["goods"][$goods]["article"]." ".
                 $this->diafan->_shop->order_details($lastorder)["goods"][$goods]["name"]."          ".
                 $this->diafan->_shop->order_details($lastorder)["goods"][$goods]["price"]." ".
                 $this->diafan->_shop->order_details($lastorder)["goods"][$goods]["count"]);
    }
	$string_goods = implode("<br/>", $goods_array);
	 $sum_string=$this->diafan->_shop->order_get($lastorder)["summ"];
		$str1 = 'foo   o';
	 $str=str_replace(",",'.',$sum_string);
	 $str=preg_replace("/[^x\d|*\.]/","",$str);
	 $summ= (int) $str;
	

    $queryUrl = 'https://molodost.bitrix24.ru/rest/1/xu0058ojwf7ydd06/crm.deal.add.json';
    $queryData = http_build_query(array(
    	"fields"=>array(
          "TITLE"=>$this->diafan->_shop->order_details($lastorder)["name"],
          //"CURRENCY_ID"=>"RU",
          "OPPORTUNITY"=>$summ,
          "COMMENTS"=>$string_goods,
          "UF_CRM_1524119731570"=>$this->diafan->_shop->order_details($lastorder)["email"],
          "UF_CRM_1524198169"=>$this->diafan->_shop->order_details($lastorder)["phone"],
          "UF_CRM_1524198196"=>$this->diafan->_shop->order_details($lastorder)["country"]." ".$this->diafan->_shop->order_details($lastorder)["street"]." ".$this->diafan->_shop->order_details($lastorder)["building"],
          "UF_CRM_1524202126"=>$this->diafan->_shop->order_details($lastorder)["flat"],
          "UF_CRM_1524198233"=>$this->diafan->_shop->order_details($lastorder)["delivery"]["name"]
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
    ?>