<!DOCTYPE html>
<html>
<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
</head>
<body>




            <!-- Right side column. Contains the navbar and content of the page -->
           

                <!-- Main content -->
                <section class="content">
                   
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel">
                                <header class="panel-heading">
                                   Devices

                                </header>
                                <!-- <div class="box-header"> -->
                                    <!-- <h3 class="box-title">Responsive Hover Table</h3> -->

                                <!-- </div> -->
                                <div class="panel-body table-responsive">
                                    <div class="box-tools m-b-15">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 350px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <tr>
                                            <th>ID</th>
                                            <th>Tag</th>
                                            <th>Make</th>
                                            <th>Model</th>
                                            <th>OS</th>
                                            <th>Version</th>
                                            <!-- <th>Status</th> -->
                                            <th>Owner</th>
                                            <th>Last verified</th>
                                        </tr>
                                        <tbody id="tbl_devices" >

                                        <!-- <tr>                                        
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device.html"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td><a href="device"> Tarento/iPhone/04 </a> </td>
                                            <td>Apple</td>
                                            <td>iPhone 4</td>
                                            <td>iOS</td>
                                            <td>7.1.1</td>
                                            <td><span class="label label-success">Verified</span></td>
                                            <td>Jinesh</td>
                                            <td>21-April-2015</td>
                                        </tr> -->
                                       </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->





        <script type="text/javascript">
  

$(document).ready(function(){var stuff = new Object();
    stuff = {'appId':'1','apiToken':'111111'};
    
    //console.log(stuff);

     $.ajax({
    url: 'device-management/list-device-details',
    type: 'POST',
   
    data: JSON.stringify(stuff),

    dataType: 'json',
    contentType: "application/json; charset=utf-8",
    success: function(result) {
    //console.log(result["responseData"][0]["id"]);
    var getres=result["responseData"];

      $.each(getres, function(i, item) {
          //console.log(getres[i].type);
         
         var date = getres[i].created_at;
         
         document.getElementById("tbl_devices").innerHTML += "<tr><td>"+(getres[i].id)+"</td><td><form id=myform"+(getres[i].device_id)+" action=device method=POST><input type=hidden value="+(getres[i].device_id)+" id=hidid name=hidid></input><input type=hidden value="+(getres[i].type)+" id=hid-type name=hid-type></input><a id=dev_id name=dev_id href=# onclick=document.getElementById('myform"+(getres[i].device_id)+"').submit();>"+(getres[i].device_id)+"</a></form> </td><td>"+(getres[i].make)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].os)+"</td><td>"+(getres[i].version)+"</td><td>"+(getres[i].first_name)+"</td><td>"+(date)+"</td></tr>";
         /*<td><span class='label label-success'>Verified</span></td>*/
      })

    
  }
});
   });
       



</script>   



</body>
</html>