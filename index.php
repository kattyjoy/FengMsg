
<html>
<head>
    <?php  
  
function Valid()  
{  
    $echoStr = $_GET["echostr"];  
       
    if($this->CheckSignature()){  
        echo $echoStr;  
        exit;  
    }  
}  
  
function CheckSignature() //验证  
{  
    $signature = $_GET["signature"];  
    $timestamp = $_GET["timestamp"];  
    $nonce = $_GET["nonce"];  
  
    $token = "MyWX";  
    $tmpArr = array($token, $timestamp, $nonce);  
    sort($tmpArr);  
    $tmpStr = implode( $tmpArr );  
    $tmpStr = sha1( $tmpStr ); //加密  
       
    if( $tmpStr == $signature ){  //跟微信服务器传送过来的签名对比  
        return true;  
    }else{  
        return false;  
    }  
}  
  
Valid();  
?>  
    </head>
    <body>
        hello world
    </body>
</html>