
    <?php  
  
function Valid()  
{  
    $echoStr = $_GET["echostr"];  
       
    if($this->CheckSignature()){  
        echo $echoStr;  
        exit;  
    }  
}  
  
function CheckSignature() //��֤  
{  
    $signature = $_GET["signature"];  
    $timestamp = $_GET["timestamp"];  
    $nonce = $_GET["nonce"];  
  
    $token = "Feng87Wx";  
    $tmpArr = array($token, $timestamp, $nonce);  
    sort($tmpArr);  
    $tmpStr = implode( $tmpArr );  
    $tmpStr = sha1( $tmpStr ); //����  
       
    if( $tmpStr == $signature ){  //��΢�ŷ��������͹�����ǩ���Ա�  
        return true;  
    }else{  
        return false;  
    }  
}  
  
Valid();  
?>  