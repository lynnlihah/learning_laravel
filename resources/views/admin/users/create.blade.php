<form action="/users" method="POST">
    <!-- 这个csrf是一定要添加的，这个跟rails框架提供的csrf机制类似 -->
    {{ csrf_field() }}
    name:
    <input type="text" name="name">
    email:
    <input type="email" name="email">
    password:
    <input type="password" name="password">
    <input type="submit" vaule="Create">
    <!-- 在提交表单中添加如下代码，即可在请求中带上token -->
    <!-- <input type='hidden' name='_token' value="="<?php echo csrf_token()?>">  -->
</form>

