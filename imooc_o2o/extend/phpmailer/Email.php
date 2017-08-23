<?php
/**
 * Created by PhpStorm.
 * User: zouqianli
 * Date: 2017/8/23
 * Time: 11:13
 */
namespace phpmailer;
class Email
{
    /**
     * 封装phpmailer发送邮件方法,适用于tp5
     * @param $from 放到配置文件--一个发送者,参数中去掉
     * @param $to
     * @param $title
     * @param $content
     * @return bool
     */
    public static function send($to, $title, $content)
    {
        // 接受者为空,发送失败,直接返回false
        if(empty($to))
        {
            return false;
        }
        date_default_timezone_set('PRC');//set time
        try {
            //Create a new PHPMailer instance
            $mail = new PHPMailer;
            //Tell PHPMailer to use SMTP smtp服务
            $mail->isSMTP();
            //Enable SMTP debugging 上线产品时关闭debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;// 注释或者设置为0
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server 邮箱服务主机
            $mail->Host = config('Email.host');
            //Set the SMTP port number - likely to be 25, 465 or 587
            $mail->Port = config('Email.port');
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication 用户
            $mail->Username = config('Email.username');
            //Password to use for SMTP authentication 授权密码 不是邮箱密码
            $mail->Password = config('Email.password');
            //Set who the message is to be sent from 发送方
            $mail->setFrom(config('Email.from'), '网易zouqianli');
            //Set an alternative reply-to address
            //$mail->addReplyTo('replyto@example.com', 'First Last');
            //Set who the message is to be sent to 接收方
            $mail->addAddress($to);
            //Set the subject line 主题|标题
            $mail->Subject = $title;
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body 正文
            $mail->msgHTML($content);
            //Replace the plain text body with one created manually
            //$mail->AltBody = 'This is a plain-text message body';
            //Attach an image file
            //$mail->addAttachment('images/phpmailer_mini.png');

            //send the message, check for errors
            if (!$mail->send()) {
                return false;
//                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                return true;
//                echo "Message sent success!";
            }
        }catch (phpmailerException $e)
        {
            // 捕获到异常--发送失败
            return false;
        }
        }
}