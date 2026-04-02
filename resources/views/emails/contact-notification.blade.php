{{-- resources/views/emails/contact-notification.blade.php --}}
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新的咨询消息</title>
</head>
<body>
    <h2>您的网站 {{ $host }} 收到一个新的咨询</h2>
    
    <div style="background-color: #f5f5f5; padding: 20px; border-radius: 5px;">
        <p><strong>来源网站：</strong> {{ $host }}</p>
        <p><strong>咨询人邮箱：</strong> {{ $email }}</p>
        <p><strong>咨询人名：</strong> {{ $firstname ?? '(未填写)' }}</p>
        <p><strong>咨询人姓：</strong> {{ $lastname ?? '(未填写)' }}</p>
        <p><strong>咨询人国籍：</strong> {{ $nationality ?? '(未填写)' }}</p>
        <p><strong>提交时间：</strong> {{ $time }}</p>
        <p><strong>IP地址：</strong> {{ $ip }}</p>
        
        <div style="margin-top: 20px;">
            <strong>咨询内容：</strong>
            <div style="background-color: white; padding: 15px; margin-top: 10px; border-left: 4px solid #007bff;">
                {!! nl2br(e($content)) !!}
            </div>
        </div>
    </div>
    
    <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #ddd;">
        <p style="color: #666; font-size: 12px;">
            此邮件来自 {{ config('app.name') }} 网站联系表单
        </p>
    </div>
</body>
</html>