<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>舔狗日记</title>
</head>
<body>
    <h1>今天也要做一条好的舔狗哦</h1>
    <?php
    //此示例代码由系统自动生成，如有疑问请联系小杰！
    //示例代码生成功能最后更新于2020-7-10
    $curl=curl_init();
    curl_setopt($curl,CURLOPT_URL,"http://xiaojieapi.cn/API/tiangou.php");
    curl_setopt($curl,CURLOPT_TIMEOUT,30);
    curl_setopt($curl,CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl,CURLOPT_ENCODING,'gzip,deflate');
    $return=curl_exec($curl);
    curl_close($curl);
    $data_json=json_decode($return,true);

    if($data_json["code"]!=1000){
    echo $data_json["text"];
    exit();
    }

    $test = $data_json["text"];	 //只取后面的日期和文档
    $test = explode(" ",$test);	//将日期和文档内容分割开来
    echo $test[0]; 	//输出日期
    echo'<br/>';
    echo $test[1];	//输出舔狗日记内容

    ?>


</body>
</html>