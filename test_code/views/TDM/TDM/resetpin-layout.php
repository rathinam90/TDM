<!DOCTYPE html>
<html>
<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
</head>
<body>





  <section class="content">


        <div class="alert alert-success alert-dismissable fadealert" id="success-alert" style="position:fixed;">
            <p>Password successfully changed.</p>
        </div>


        <div class="alert alert-danger alert-dismissable fadealert" id="fail-alert" style="position:fixed;">
            <p>Old password is wrong</p>
        </div>


              <!--   <div class="alert alert-success" role="alert" id="successAlert" name="successAlert" style="position:fixed;display:none;">
                  <p>Password successfully changed.</p>
                </div> -->


                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <section class="panel">
                              <header class="panel-heading">
                                 Change Password
                              </header>
                              <div class="panel-body">
                                  <form class="form-horizontal tasi-form" method="POST" id="pwdForm" name="pwdForm">
                                      <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">User ID</label>
                                          <div class="col-sm-10">
                                              <input type="text" class="form-control" id="user-id" name="user-id">
                                          </div>
                                      </div>
                                      
                                      <div class="form-group">
                                          <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                          <div class="col-sm-10">
                                              <input type="text" class="form-control" id="pass" name="pass">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                         
                                          <div class="col-sm-10 col-md-offset-2">
                                               <button type="button" class="btn btn-info" onclick="changepwd()">Update</button>
                                          </div>
                                         
                                      </div>

                                      
                                  </form>
                              </div>
                            </section>
                        
                        </div>
                    </div>
                </section><!-- /.content --> 



 <script type="text/javascript">
  

$(document).ready(function(){



 // document.getElementById("device_type").innerHTML +="<option value='-1'></option><option value='0'>Iphone</option><option value='1'>Android</option><option value='2'>Android Tablet</option><option value='3'>ipad</option>";
});






function changepwd() {



    $("#user-id").css("border-color","#ccc");
    
    $("#pass").css("border-color","#ccc");
    /*$("#model").css("border-color","#ccc");
    $("#os").css("border-color","#ccc");
    $("#version").css("border-color","#ccc");
    $("#imei").css("border-color","#ccc");
    $("#comment").css("border-color","#ccc");
    $("#device_type").css("border-color","#ccc");
*/


    var user_id=document.getElementById("user-id").value;
    var oldp=document.getElementById("old").value;
    var newp=document.getElementById("pass").value;
    /*var model=document.getElementById("model").value;
    var os=document.getElementById("os").value;
    var version=document.getElementById("version").value;
    var imei=document.getElementById("imei").value;
    var comment=document.getElementById("comment").value;
    var device_type=document.getElementById("device_type").value;*/

    if (user_id!="" & oldp!="" & newp!="") 
    {

            

        //alert(device_id);
          var stuff = new Object();
              stuff = 
              {

              "appId":1,

              "apiToken":"111111",

              "employee_id":""+user_id+"",

              "old_pin":""+oldp+"",

              "new_pin":""+newp+""

              };


              
              //console.log(stuff);

               $.ajax({
              url: 'device-management/change-user-pin',
              type: 'POST',
             
              data: JSON.stringify(stuff),

              dataType: 'json',
              contentType: "application/json; charset=utf-8",
              success: function(result) {
              //console.log(result["responseData"]);
              if(result["statusCode"]==200)
              {
                var getres=result["statusMessage"];
                console.log(getres);
                document.getElementById("user-id").value="";
                document.getElementById("old").value="";
                document.getElementById("pass").value="";
                                



                $("#success-alert").fadeTo(2000, 50).slideUp(500, function(){
                $("#success-alert").addClass("in");

                });

                $("#success-alert").fadeTo(1000, 500).slideUp(500, function(){
                $("#success-alert").addClass("in");
                  //  $("#success-alert").alert('close');
                });




 
              }
              else
              {
               var getres=result["errorMessage"];
               console.log(getres); 
               $("#old").css("border-color","red"); 


                $("#fail-alert").fadeTo(2000, 50).slideUp(500, function(){
                $("#fail-alert").addClass("in");

                });

                $("#fail-alert").fadeTo(1000, 500).slideUp(500, function(){
                $("#fail-alert").addClass("in");
                  //  $("#fail-alert").alert('close');
                });


              }


                $.each(getres, function(i, item) {
                    //console.log(getres[i].type);
                   
                   //var date = getres[i].created_at;
                   
                   //document.getElementById("tbl_devices").innerHTML += "<tr><td>"+(getres[i].id)+"</td><td><a href=device>"+(getres[i].device_id)+"</a> </td><td>"+(getres[i].make)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].os)+"</td><td>7.1.1</td><td><span class=label label-success>Verified</span></td><td>Jinesh</td><td>"+(date)+"</td></tr>";
                })

              
            }
          });

         
          


     }
     else
      {

        if(user_id=="")  { $("#user-id").css("border-color","red"); }
        
        if(newp==""){$("#pass").css("border-color","red");}
        /*if(model==""){$("#model").css("border-color","red");}
        if(os==""){$("#os").css("border-color","red");}
        if(version==""){$("#version").css("border-color","red");}
        if(imei=="")$("#imei").css("border-color","red");{}
        if(comment==""){$("#comment").css("border-color","red");}
        if(device_type==-1) {$("#device_type").css("border-color","red");}*/
      }
  }















  </script>



<script>
/*$(function(){
  $("#deviceForm").submit(function() {
    console.log("inputVal");
    var inputVal = $("#device-id").val();
    
    $(document).trigger("clear-alert-id.example");
    if (inputVal.length <=0) {
      $(document).trigger("set-alert-id-example", [
        {
          message: "Please enter at least 3 characters",
          priority: "error"
        },
        {
          message: "This is an info alert",
          priority: "info"
        }
      ]);
    }
  });
});*/
</script>



</body>
</html>