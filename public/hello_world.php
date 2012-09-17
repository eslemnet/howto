<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
  require('pubnub_api/Pubnub.php');
   // require('../Pubnub.php');

    $pubnub = new Pubnub( 'pub-de45f347-3399-416c-9617-16e808d06fee', 'sub-abe0e04f-0060-11e2-ac8e-9581afc33ebf' );
    $pubnub->publish(array(
        'channel' => 'my_test_channel',
        'message' => array( 'some_text' => 'hello!' )
    ));
	
	
	
	


    ?>
    <div pub-key="pub-de45f347-3399-416c-9617-16e808d06fee" sub-key="sub-abe0e04f-0060-11e2-ac8e-9581afc33ebf" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
<script src="http://cdn.pubnub.com/pubnub-3.1.min.js"></script>
<script>(function(){
 
    // LISTEN FOR MESSAGES
    PUBNUB.subscribe({
        channel    : "my_test_channel",      // CONNECT TO THIS CHANNEL.
 
        restore    : false,              // STAY CONNECTED, EVEN WHEN BROWSER IS CLOSED
                                         // OR WHEN PAGE CHANGES.
 
        callback   : function(message) { // RECEIVED A MESSAGE.
            alert(message)
        },
 
        disconnect : function() {        // LOST CONNECTION.
            alert(
                "Connection Lost." +
                "Will auto-reconnect when Online."
            )
        },
 
        reconnect  : function() {        // CONNECTION RESTORED.
            alert("And we're Back!")
        },
 
        connect    : function() {        // CONNECTION ESTABLISHED.
 
            PUBNUB.publish({             // SEND A MESSAGE.
                channel : "my_test_channel",
                message : "Hi from PubNub."
            })
 
        }
    })
 
})();</script>

<script language="javascript">


// PUBNUB.subscribe( options )
PUBNUB.subscribe({
    channel  : "my_test_channel",
    callback : function(message) { console.log(message) },
    error    : function(e) {
        // Do not call subscribe() here!
        // PUBNUB will auto-reconnect.
        console.log(e);
    }
});
//window.alert('sadsa');




</script>    
</body>
</html>