<h3>登录</h3>
<form action="?/welcome/login" method="post">
  <div class="form-group">
    <label for="user_name">用户名</label>
    <input type="text" class="form-control" id="user_name" name="user_name"placeholder="Your name">
  </div>
  <div class="form-group">
    <label for="password">密码</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" name="remember_me" value="1">下次自动登录
    </label>
  </div>
  <button type="submit" class="btn btn-default">登录</button>
  <a class="btn btn-default" href="#" role="button">注册</a>
</form>

