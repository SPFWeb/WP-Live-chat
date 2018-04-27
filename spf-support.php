<?php

/**
* Plugin Name: SPF Websites Support
* Description: A plugin that allows you to contact us directly by using our live chat!
* Author: SPF Websites
* Author URI: http://www.spfwebsites.co.nz
* Version: 1.0
*/

add_action('admin_footer', 'spf_support');
function spf_support() { 

?>
	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/594b519de9c6d324a4736b60/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<?php } ?>