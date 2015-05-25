<?php
 

Flight::route('/', function()
{
Flight::redirect('dash');
});

Flight::route('/dash', function()
{
//    Flight::render('TDM/TDM/dash');

    Flight::render('TDM/TDM/dash-layout', array(),'content');    
    Flight::render('TDM/TDM/layout');


});
Flight::route('/layout-check', function(){
	

   /* $tdm_object=new DB();
    echo "hai";
    $object=new tdm_class($tdm_object);
    $val=$object->tdmdash();  
    echo "hai";*/





    //Flight::render('TDM/TDM/dash');
    
    Flight::render('TDM/TDM/sample', array(),'content');    
    Flight::render('TDM/TDM/layout');     


});


Flight::route('/changepwd', function()
{
//    Flight::render('TDM/TDM/dash');

    Flight::render('TDM/TDM/changepassword-layout', array(),'content');    
    Flight::render('TDM/TDM/layout');


});

Flight::route('/resetpin', function()
{
//    Flight::render('TDM/TDM/dash');

    Flight::render('TDM/TDM/resetpin-layout', array(),'content');    
    Flight::render('TDM/TDM/layout');


});

Flight::route('/newdevice', function(){
	
    //Flight::render('TDM/TDM/newdevice');

    Flight::render('TDM/TDM/newdevice-layout', array(),'content');    
    Flight::render('TDM/TDM/layout');
    

});


Flight::route('POST /device', function(){

    $device_id=$_POST['hidid'];
    $device_type=$_POST['hid-type'];
    //print_r($id);
	
    //Flight::render('TDM/TDM/device');


    //Flight::render('TDM/TDM/device', array('device_id' => $device_id,'device_type' => $device_type));


    Flight::render('TDM/TDM/device-layout', array('device_id' => $device_id,'device_type' => $device_type),'content');    
    Flight::render('TDM/TDM/layout');


    

});

Flight::route('/devices', function(){
	

/*
    $obj=new curl_class();

    $test=array();
    $link =  "http://$_SERVER[HTTP_HOST]";

    $test["api_url"]=$link."/device-management/list-device-details";
    
    $test["post_data"]=json_encode(array("appId"=>1,"apiToken"=>"111111"));

    $test["method"]=0;

    $response=$obj->curl_process($test);
    echo $response;

echo "<br>";
echo $test["api_url"];*/

    //Flight::render('TDM/TDM/devices');   


    Flight::render('TDM/TDM/devices-layout', array(),'content');    
    Flight::render('TDM/TDM/layout');


});




Flight::route('POST /add-device', function(){
	
   
    echo "add-device";
    $id= $_POST['device-tag'];
    
    $obj=new curl_class();

    $test=array();

    $test["api_url"]="/../device-management/add-device-info";
    $test["post_data"]=json_encode(array("appId"=>1,"apiToken"=>"111111","deviceId"=>"shhhdfsa","name"=>"test","make"=>"tttt","type"=>"xxxx","os"=>"xxx","IMEI"=>"xxx","accessoryinfo"=>"xqwww","comments"=>"wqweqwewqe","employee_id"=>"111","purpose"=>"someText"));


    $test["method"]=0;

	$response=$obj->curl_process($test);
    echo $response;
    /*echo "<pre>";
    print_r($response);
    echo "</pre>";
    echo "hai";*/



});



?>



<!-- /curl_class.php -->