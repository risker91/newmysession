        
<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript"></script>
<div id="login_button" onclick="VK.Auth.login(authInfo);"></div>

<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?88"></script>

<script type="text/javascript">
  VK.init({apiId: 3579300});
</script>

<!-- Put this div tag to the place, where Auth block will be -->
<div id="vk_auth"></div>
<script type="text/javascript">
VK.Widgets.Auth("vk_auth", {width: "200px", authUrl: "/auth/vk"});
</script>
