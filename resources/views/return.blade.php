
<!DOCTYPE html>
<html>
<body>


<div id="myShop" >
    <a href="https://bandaba.myspreadshop.com">{{ $shopname }}</a>
</div>

<script>

    var spread_shop_config = {
        shopName:'{{ $shopname }}',
        locale: 'us_US',
        prefix: 'https://bandaba.myspreadshop.com',
        baseId: 'myShop'
    };
</script>

<script type="text/javascript"
        src="https://bandaba.myspreadshop.com/shopfiles/shopclient/shopclient.nocache.js">
</script>
</html>
