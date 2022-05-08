<?php
	function sendMail($to,$title,$content){

    //引入PHPMailer的核心文件 使用require_once包含避免出现PHPMailer类重复定义的警告
    require_once("class.phpmailer.php"); 
    require_once("class.smtp.php");
    //实例化PHPMailer核心类
    $mail = new PHPMailer();
	
    //是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
    $mail->SMTPDebug = 1;

    //使用smtp鉴权方式发送邮件
    $mail->isSMTP();

    //smtp需要鉴权 这个必须是true
    $mail->SMTPAuth=true;

    //链接qq域名邮箱的服务器地址
    $mail->Host = 'smtp.qq.com';

    //设置使用ssl加密方式登录鉴权
    //$mail->SMTPSecure = 'ssl';

    //设置ssl连接smtp服务器的远程服务器端口号，以前的默认是25，但是现在新的好像已经不可用了 可选465或587
    $mail->Port = 587;

    //设置smtp的helo消息头 这个可有可无 内容任意
    // $mail->Helo = 'Hello smtp.qq.com Server';

    //设置发件人的主机域 可有可无 默认为localhost 内容任意，建议使用你的域名
    // $mail->Hostname = 'http://www.lsgogroup.com';

    //设置发送的邮件的编码 可选GB2312 我喜欢utf-8 据说utf8在某些客户端收信下会乱码
    $mail->CharSet = 'UTF-8';

    //设置发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
    $mail->FromName = '测试';

    //smtp登录的账号 这里填入字符串格式的qq号即可
    $mail->Username ='2416590869@qq.com';

    //smtp登录的密码 使用生成的授权码（就刚才叫你保存的最新的授权码）
    $mail->Password = 'fzchosaevcxqdjgg';

    //设置发件人邮箱地址 这里填入上述提到的“发件人邮箱”
    $mail->From = '2416590869@qq.com';

    //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
    $mail->isHTML(true); 

    //设置收件人邮箱地址 该方法有两个参数 第一个参数为收件人邮箱地址 第二参数为给该地址设置的昵称 不同的邮箱系统会自动进行处理变动 这里第二个参数的意义不大
    $mail->addAddress($to);

    //添加多个收件人 则多次调用方法即可
    // $mail->addAddress('xxx@163.com','lsgo在线通知');

    //添加该邮件的主题
    $mail->Subject = $title;

    //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串 如：使用file_get_contents函数读取本地的html文件
    $mail->Body = $content;

    //为该邮件添加附件 该方法也有两个参数 第一个参数为附件存放的目录（相对目录、或绝对目录均可） 第二参数为在邮件附件中该附件的名称
    // $mail->addAttachment('./d.jpg','mm.jpg');
    //同样该方法可以多次调用 上传多个附件
    // $mail->addAttachment('./Jlib-1.1.0.js','Jlib.js');

/*$mail->SMTPOptions = array(
	'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
    )
);*/

    $status = $mail->send();

    //简单的判断与提示信息
    if($status) {
        return true;
    }else{
        return false;
    }
}

/**
 * 发送邮件
 * @param string $address
 * @param string $subject
 * @param string $message
 * @return array<br>
 * 返回格式：<br>
 * array(<br>
 *  "error"=>0|1,//0代表出错<br>
 *  "message"=> "出错信息"<br>
 * );
 */
function sp_send_email($address,$subject,$message){
 import("PHPMailer");
 $mail=new \PHPMailer();
  //开启调试
  $mail->SMTPDebug = 1;
  
 // 设置PHPMailer使用SMTP服务器发送Email
 $mail->IsSMTP();
 $mail->IsHTML(true);
 // 设置邮件的字符编码，若不指定，则为'UTF-8'
 $mail->CharSet='UTF-8';
 // 添加收件人地址，可以多次使用来添加多个收件人
 $mail->AddAddress($address);
 // 设置邮件正文
 $mail->Body=$message;
 // 设置邮件头的From字段。
 $mail->From="";
 // 设置发件人名字
 $mail->FromName="Gift";
 // 设置邮件标题
 $mail->Subject=$subject;
 // 设置SMTP服务器。
 $mail->Host="smtp.gmmail.com";
  
    //设置使用ssl加密方式登录鉴权
    $mail->SMTPSecure = 'ssl';
  
 // 设置SMTP服务器端口。
 $port=465;
 $mail->Port=empty($port)?"465":$port;
 // 设置为"需要验证"
 $mail->SMTPAuth=true;
 // 设置用户名和密码。
 $mail->Username='';
 $mail->Password='ACloud?321';

 // 发送邮件。
 if(!$mail->Send()) {
  $mailerror=$mail->ErrorInfo;
  return array("error"=>1,"message"=>$mailerror);
 }else{
  return array("error"=>0,"message"=>"success");
 }
}
?>