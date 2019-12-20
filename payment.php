<div>

<h2 align="center">Pay now with paypal</h2>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >

<!-- Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="sriniv_1293527277_biz@inbox.com">

<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">

<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php echo $product_name; ?>">
<input type="hidden" name="item_number" value="<?php echo $pro_id; ?>">
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="hidden" name="quantity" value="<?php echo $qty; ?>">
<input type="hidden" name="currency_code" value="euro">

<input type="hidden" name="return" value="http://www.onlinetuting.com/myshop/paypal_success.php"/>
<input type="hidden" name="cancel_return" value="http://www.onlinetuting.com/myshop/paypal_cancel.php"/>

<!-- Display the payment button. -->
<input type="image" name="submit" border="0"
src="http://www.castleminiatures.com/uploads/2/5/4/9/25498242/7852402.png?294" width="250" height="150"
alt="PayPal - The safer, easier way to pay online">
<img alt="" border="0" width="1" height="1"
src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>




</div>