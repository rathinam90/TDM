<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   
 
</head>
<body>


<section class="content">

                    <div class="row" style="margin-bottom:5px;" id="deviceDiv" name="deviceDiv">

                       <div class="col-md-3 col-sm-6" id="eachdevice1" name="eachdevice1" style="text-align:center;">
                           
                       </div>
                        
                        <div class="col-md-3 col-sm-6" id="eachdevice2" name="eachdevice2" style="text-align:center;">
                           
                       </div>

                       <div class="col-md-3 col-sm-6" id="eachdevice3" name="eachdevice3" style="text-align:center;">
                           
                       </div>

                       <div class="col-md-3 col-sm-6" id="eachdevice0" name="eachdevice4" style="text-align:center;">
                           
                       </div>

                       <div class="col-md-3 col-sm-6" id="eachdevicedata" name="eachdevicedata" style="text-align:center;">
                           
                       </div>



                    
                  <!--   <div class="col-md-6">
                      <table class="table table-hover" id="alertsTbl">                      
                      </table>
                    </div> -->

<!-- 
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-red"><i class="fa fa-check-square-o"></i></span>
                                <div class="sm-st-info">
                                    <span>12</span>
                                    iPhones
                                </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-violet"><i class="fa fa-envelope-o"></i></span>
                                <div class="sm-st-info">
                                    <span>11</span>
                                    Android Phones
                                </div>
                            </div>
                                                        <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-blue"><i class="fa fa-dollar"></i></span>
                                <div class="sm-st-info">
                                    <span>6</span>
                                    iPads
                                </div>
                            </div>
                                                        <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="sm-st clearfix">
                                <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                                <div class="sm-st-info">
                                    <span>4</span>
                                    Android Tablets
                                </div>
                            </div>
                                                        <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                              </div>
                            </div>

                        </div> -->
                    </div>
                    <div class="row" style="margin-bottom:5px;" id="pieDiv" name="pieDiv">
                    </div>
                    
                    <!-- Main row -->
                    

                    <div class="row" style="margin-bottom:5px;" id="alertsDiv">

                      <div class="col-md-6" id="alert">
                      <div class="panel">
                      <header class="panel-heading"> Alerts </header>
                      <div class="panel-body table-responsive">
                          <table class='table table-hover'>
                            
                            <tbody id="alerttable">
                              <tr>
                                <th>Tag</th>
                                <th>Status</th>
                                <th>Last Verified</th>
                              </tr>
                            </tbody>

                          </table>
                          </div>
                          </div>
                      </div>
                      <!-- <div class="col-md-3"></div>
                      <div class="col-md-3"></div> -->
                      <div class="col-md-6" id="activity">
                       <div class="panel">
                      <header class="panel-heading"> Activities </header>
                      <div class="panel-body table-responsive">
                          <table class='table table-hover'>
                            
                            <tbody id="activitytable">
                              <tr>
                                <th  >Tag</th>
                                <th  >Owner</th>
                                <th  >Assigned on</th>
                              </tr>
                            </tbody>

                          </table>
                          </div>
                          </div>
                      </div>
                    </div>
                    <div class="row" >

                        <div class="col-md-12">
                                                   
                        <table>
                          <tbody id="tbl_dash"></tbody>
                        </table>
                        </div><!--end col-6 -->
          

                    </div>

                    

                     <div class="row" id="graphView" name="graphView">
                      <div class="col-md-12" id="chartheader">
                       <div class="panel">
                        <header class="panel-heading">
                          Device assigned details 
                          <select id="deviceSelect" name="deviceSelect" onchange="selectFunction()" style="float:right;border:none;background-color:#fafafa;text-align:center;" ></select> 
                        </header>
                        
                        
                        <div style="width:100%;" id="chart" name="chart"></div>
                        
                       </div>
                      </div>
                        
                     <!--    <div class="col-md-6">

                        </div> -->

                     </div>
                     
                </section><!-- /.content -->




<SCRIPT>

</SCRIPT>



   <script type="text/javascript">
  

$(document).ready(function()
  {
    totalExe();    
   });
   var getResultData;    


function totalExe()
{
  var stuff = new Object();
    stuff = {'appId':'1','apiToken':'111111'};
    
//    console.log(stuff);

     $.ajax({
    url: 'device-management/list-device-types',
    type: 'POST',
   
    data: JSON.stringify(stuff),

    dataType: 'json',
    contentType: "application/json; charset=utf-8",
    success: function(result) {
    //console.log(result["responseData"][0]["id"]);
    var getres=result["responseData"][0];
    getResultData=result;

      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
  //       var date = getres[i].created_at;
   //      document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].cnt)+"</td></tr>";         
         

         //document.getElementById("deviceDiv").innerHTML +="<div class=col-md-3><div class='sm-st clearfix'><span class='sm-st-icon st-red'><i class='fa fa-check-square-o'></i></span><div class='sm-st-info'><span>"+(result["responseData"][0][i].cnt)+"</span>"+(result["responseData"][0][i].type)+"</div></div><div class='progress-bar' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 60%;'><span class='sr-only'>60% Complete</span></div></div></div>";
          var avail=0;
          var getres1=result["responseData"][2];
        
          $.each(getres1, function(j, item) {
             
             if (getres[i].type==getres1[j].type)
             {
                avail=getres1[j].cnt;
             }
          })

          
          var mm=(4%4);
          console.log("MM:"+mm);
          //document.getElementById("deviceDiv").innerHTML +="<div class='col-md-3'><div class='sm-st clearfix'><span class='sm-st-icon st-red'><i class='fa fa-check-square-o'></i></span><div class='sm-st-info'><span>"+(getres[i].cnt)+"</span>"+(getres[i].type)+"</div></div><div class='progress'><div class='progress-bar progress-bar-success' style='width: "+((avail/(getres[i].cnt))*100)+"%'>Available: "+avail+"</div><div class='progress-bar progress-bar-warning progress-bar-striped' style='width: "+(100-((avail/(getres[i].cnt))*100))+"%'>Assigned: "+(getres[i].cnt-avail)+"</div></div></div>";
          document.getElementById("eachdevice"+((i+1)%4)).innerHTML +="<div class='sm-st clearfix'><span class='sm-st-icon st-red'><i class='fa fa-check-square-o'></i></span><div class='sm-st-info'><span>"+(getres[i].cnt)+"</span>"+(getres[i].type)+"</div></div><div class='progress'><div class='progress-bar progress-bar-success' style='width: "+((avail/(getres[i].cnt))*100)+"%'>Available: "+avail+"</div><div class='progress-bar progress-bar-warning progress-bar-striped' style='width: "+(100-((avail/(getres[i].cnt))*100))+"%'>Assigned: "+(getres[i].cnt-avail)+"</div></div>";
          var typedev=getres[i].type;
        

         var piegetres=result["responseData"][1];
         var piedata=[];
         var counter=0;
         
    
      $.each(piegetres, function(k, item) {
          console.log(piegetres[k].type);         
         //var date = piegetres[i].created_at;
         //document.getElementById("tbl_dash").innerHTML += "<tr><td>"+k+"</td><td>"+(piegetres[k].type)+"</td><td>"+(piegetres[k].os)+"</td><td>"+(piegetres[k].version)+"</td><td>"+(piegetres[k].cnt)+"</td></tr>";
         //console.log("typedev:"+typedev+" pigetres-type:"+piegetres[k].type);
         if(typedev==piegetres[k].type)
         {
          piedata[counter++]={"label":piegetres[k].version,"value":piegetres[k].cnt};
         // piedata1[counter1++]={"age":piegetres[k].version,"population":piegetres[k].cnt};
         }
      })
      console.log(piedata);











/* Donut Chart Begins*/
/*var data = piedata1;
var margin = {top:40,left:40,right:40,bottom:40};
width = 350;
height = 350;
radius = Math.min(width-100,height-100)/2;
var color = d3.scale.ordinal()
.range(["#e53517", "#6b486b", "#ffbb78","#7ab51d","#6b486b","#e53517","#7ab51d","#ff7f0e","#ffc400"]);
var arc = d3.svg.arc()  
         .outerRadius(radius -100)
         .innerRadius(radius - 50);
var arcOver = d3.svg.arc()  
.outerRadius(radius +50)
.innerRadius(0);
var svg = d3.select("#pieDiv").append("svg")
          .attr("width",width)
          .attr("height",height)
          .append("g")
          .attr("transform","translate("+width/2+","+height/2+")");
div = d3.select("body")
.append("div") 
.attr("class", "tooltip");
var pie = d3.layout.pie()
          .sort(null)
          .value(function(d){return d.population;});
var g = svg.selectAll(".arc")
        .data(pie(data))
        .enter()
        .append("g")
        .attr("class","arc")
         .on("mousemove",function(d){
          var mouseVal = d3.mouse(this);
          div.style("display","none");
          div
          .html("age:"+d.data.age+"</br>"+"population:"+d.data.population)
            .style("left", (d3.event.pageX+12) + "px")
            .style("top", (d3.event.pageY-10) + "px")
            .style("opacity", 1)
            .style("display","block");
        })
        .on("mouseout",function(){div.html(" ").style("display","none");})
        .on("click",function(d){
          if(d3.select(this).attr("transform") == null){
          d3.select(this).attr("transform","translate(42,0)");
          }else{
            d3.select(this).attr("transform",null);
          }
        });
        
        
    g.append("path")
    .attr("d",arc)
    .style("fill",function(d){return color(d.data.age);});

                svg.selectAll("text").data(pie(data)).enter()
                 .append("text")
                 .attr("class","label1")
                 .attr("transform", function(d) {
                 var dist=radius+15;
               var winkel=(d.startAngle+d.endAngle)/2;
               var x=dist*Math.sin(winkel)-4;
               var y=-dist*Math.cos(winkel)-4;
               
               return "translate(" + x + "," + y + ")";
                })
                .attr("dy", "0.35em")
                .attr("text-anchor", "middle")
                
              .text(function(d){
                return d.value;
              });
              
             */


             /*-------------------------------------------------------------*/

var chartid="#eachdevice"+((i+1)%4);
var data =piedata;
 
var margin = {top:40,left:40,right:40,bottom:40};
width = 300;
height = 300;
radius = Math.min(width,height)/2;
var color = d3.scale.category20c()
.range(["#e53517", "#6b486b", "#ffbb78","#7ab51d","#6b486b","#e53517","#7ab51d","#ff7f0e","#ffc400"]);
var arc = d3.svg.arc()  
         .outerRadius(radius -100)
         .innerRadius(radius - 30);
var arcOver = d3.svg.arc()  
.outerRadius(radius +50)
.innerRadius(0);
var svg = d3.select(chartid).append("svg")
          .attr("width",width)
          .attr("height",height)
          .append("g")
          .attr("transform","translate("+width/2+","+height/2+")");
div = d3.select('body')
.append("div") 
.attr("class", "tooltip");
var pie = d3.layout.pie()
          .sort(null)
          .value(function(d){return d.value;});
var g = svg.selectAll(".arc")
        .data(pie(data))
        .enter()
        .append("g")
        .attr("class","arc")
         .on("mousemove",function(d){
          var mouseVal = d3.mouse(this);
          //alert(mouseVal[1]);
          div.style("display","none");
          div
          .html("<b>version</b>:"+d.data.label+"</br>"+"<b>Count</b>:"+d.data.value)
            .style("left", (d3.event.pageX-12) + "px")
            .style("top", (d3.event.pageY-(radius-50)) + "px")
            .style("width", 15 + "%")
            .style("font-size", 100 + "%")
            .style("opacity", 1)
            .style("display","block");
        })
        .on("mouseout",function(){div.html(" ").style("display","none");})
        
        
    g.append("path")
    .attr("d",arc)
    .style("fill",function(d){return color(d.data.label);});

                svg.selectAll("text").data(pie(data)).enter()
                 .append("text")
                 .attr("class","label1")
                 .attr("transform", function(d) {
                 var dist=radius-15;
               var winkel=(d.startAngle+d.endAngle)/2;
               var x=dist*Math.sin(winkel)-4;
               var y=-dist*Math.cos(winkel)-4;
               
               return "translate(" + x + "," + y + ")";
                })
                .attr("dy", "0.35em")
                .attr("text-anchor", "middle")
                
              .text(function(d){
                //return d.value;
              });
              
     

/*Donut Chart End*/













        /* Pie Chart Begins */
             
                  
      /* Pie Chart End */

      })




    var getres=result["responseData"][3];
      //document.getElementById("alert").innerHTML +="<table class='table table-hover'><tr><th colspan='3'>Alerts</th></tr>";
      $.each(getres, function(i, item) {
        var d = new Date("Thu May 14 2015 12:58:55 GMT+0530 (IST)");
        var d1 = new Date()-24;
         if (getres[i].status==1 & (getres[i].hourdiff)>24)
         {
          document.getElementById("alerttable").innerHTML +="<tr><td>"+(getres[i].device_id)+"</td><td><div class='progress'><div class='progress-bar progress-bar-danger' style='width: 100%'>Not Verified</div></div></td><td>"+(getres[i].track_create)+"</td></tr>";
         }

      })
var getres=result["responseData"][4];
      //document.getElementById("alert").innerHTML +="<table class='table table-hover'><tr><th colspan='3'>Alerts</th></tr>";
      $.each(getres, function(i, item) {
        var d = new Date("Thu May 14 2015 12:58:55 GMT+0530 (IST)");
        var d1 = new Date()-24;
        document.getElementById("activitytable").innerHTML +="<tr><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td> "+(getres[i].track_create)+"</td></tr>";
        
      })





/*------------------------- Main Graph */
/*var n = 1, // number of layers
    m = 10, // number of samples per layer
    stack = d3.layout.stack(),
    layers = stack(d3.range(n).map(function() { return bumpLayer(m, .1); })),
    yGroupMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y; }); }),
    yStackMax = d3.max(layers, function(layer) { return d3.max(layer, function(d) { return d.y0 + d.y; }); });

var margin = {top: 40, right: 10, bottom: 20, left: 10},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .domain(d3.range(m))
    .rangeRoundBands([0, width], .08);

var y = d3.scale.linear()
    .domain([0, yStackMax])
    .range([height, 0]);

var color = d3.scale.linear()
    .domain([0, n - 1])
    .range(["#aad", "#556"]);

var xAxis = d3.svg.axis()
    .scale(x)
    .tickSize(0)
    .tickPadding(6)
    .orient("bottom");

var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

var layer = svg.selectAll(".layer")
    .data(layers)
  .enter().append("g")
    .attr("class", "layer")
    .style("fill", function(d, i) { return color(i); });

var rect = layer.selectAll("rect")
    .data(function(d) { return d; })
  .enter().append("rect")
    .attr("x", function(d) { return x(d.x); })
    .attr("y", height)
    .attr("width", x.rangeBand())
    .attr("height", 0);

rect.transition()
    .delay(function(d, i) { return i * 10; })
    .attr("y", function(d) { return y(d.y0 + d.y); })
    .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); });

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis);



d3.selectAll("input").on("change", change);

var timeout = setTimeout(function() {
  d3.select("input[value=\"grouped\"]").property("checked", true).each(change);
}, 2000);

function change() {
  clearTimeout(timeout);
  if (this.value === "grouped") transitionGrouped();
  else transitionStacked();
}

function transitionGrouped() {
  y.domain([0, yGroupMax]);

  rect.transition()
      .duration(500)
      .delay(function(d, i) { return i * 10; })
      .attr("x", function(d, i, j) { return x(d.x) + x.rangeBand() / n * j; })
      .attr("width", x.rangeBand() / n)
    .transition()
      .attr("y", function(d) { return y(d.y); })
      .attr("height", function(d) { return height - y(d.y); });
}

function transitionStacked() {
  y.domain([0, yStackMax]);

  rect.transition()
      .duration(500)
      .delay(function(d, i) { return i * 10; })
      .attr("y", function(d) { return y(d.y0 + d.y); })
      .attr("height", function(d) { return y(d.y0) - y(d.y0 + d.y); })
    .transition()
      .attr("x", function(d) { return x(d.x); })
      .attr("width", x.rangeBand());
}

function bumpLayer(n, o) {

  function bump(a) {
    var x = 1 / (.1 + Math.random()),
        y = 2 * Math.random() - .5,
        z = 10 / (.1 + Math.random());
    for (var i = 0; i < n; i++) {
      var w = (i / n - y) * z;
      a[i] += x * Math.exp(-w * w);
    }
  }

  var a = [], i;
  for (i = 0; i < n; ++i) a[i] = o + o * Math.random();
  for (i = 0; i < 5; ++i) bump(a);
  return a.map(function(d, i) { return {x: i, y: Math.max(0, d)}; });
}
*/
/*-------------------------*/
/*
var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
    .rangeRound([height, 0]);

var color = d3.scale.ordinal()
    .range(["#98abc5", "#8a89a6", "#7b6888", "#6b486b", "#a05d56", "#d0743c", "#ff8c00"]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")
    .tickFormat(d3.format(".2s"));

var svg = d3.select("#visualisation").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

d3.csv("data.csv", function(error, data) {
  color.domain(d3.keys(data[0]).filter(function(key) { return key !== "State"; }));

  data.forEach(function(d) {
    var y0 = 0;
    d.ages = color.domain().map(function(name) { return {name: name, y0: y0, y1: y0 += +d[name]}; });
    d.total = d.ages[d.ages.length - 1].y1;
  });

  data.sort(function(a, b) { return b.total - a.total; });

  x.domain(data.map(function(d) { return d.State; }));
  y.domain([0, d3.max(data, function(d) { return d.total; })]);

  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Population");

  var state = svg.selectAll(".state")
      .data(data)
    .enter().append("g")
      .attr("class", "g")
      .attr("transform", function(d) { return "translate(" + x(d.State) + ",0)"; });

  state.selectAll("rect")
      .data(function(d) { return d.ages; })
    .enter().append("rect")
      .attr("width", x.rangeBand())
      .attr("y", function(d) { return y(d.y1); })
      .attr("height", function(d) { return y(d.y0) - y(d.y1); })
      .style("fill", function(d) { return color(d.name); });

  var legend = svg.selectAll(".legend")
      .data(color.domain().slice().reverse())
    .enter().append("g")
      .attr("class", "legend")
      .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

  legend.append("rect")
      .attr("x", width - 18)
      .attr("width", 18)
      .attr("height", 18)
      .style("fill", color);

  legend.append("text")
      .attr("x", width - 24)
      .attr("y", 9)
      .attr("dy", ".35em")
      .style("text-anchor", "end")
      .text(function(d) { return d; });

console.log(data);
});
*/





/*---------------------*/


/*

  var barData = [{
    'x': "0",
    'y': 10
  }, {
    'x': "20",
    'y': 20
  }, {
    'x': "40",
    'y': 10
  }, {
    'x': "60",
    'y': 40
  }, {
    'x': "80",
    'y': 5
  }, {
    'x': "100",
    'y': 60
  }];
 
  var vis = d3.select('#visualisation'),
    WIDTH = 1000,
    HEIGHT = 500,
    MARGINS = {
      top: 20,
      right: 20,
      bottom: 20,
      left: 50
    },
    xRange = d3.scale.linear().range([MARGINS.left, WIDTH - MARGINS.right]).domain([d3.min(barData, function(d) {
        return d.x;
      }),
      d3.max(barData, function (d) {
        return d.x;
      })
    ]),
 
    yRange = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([d3.min(barData, function(d) {
        return d.y;
      }),
      d3.max(barData, function (d) {
        return d.y;
      })
    ]),
 
    xAxis = d3.svg.axis()
      .scale(xRange)
      .tickSize(1)
      .tickSubdivide(true),
 
    yAxis = d3.svg.axis()
      .scale(yRange)
      .tickSize(1)
      .orient("left")
      .tickSubdivide(true);
 


  vis.append('svg:g')
    .attr('class', 'x axis')
    .attr('transform', 'translate(0,' + (HEIGHT - MARGINS.bottom) + ')')
    .call(xAxis);
 
  vis.append('svg:g')
    .attr('class', 'y axis')
    .attr('transform', 'translate(' + (MARGINS.left) + ',0)')
    .call(yAxis);

    yRange = d3.scale.linear().range([HEIGHT - MARGINS.top, MARGINS.bottom]).domain([0,
  d3.max(barData, function(d) {
    return d.y;
  })]);


    xRange = d3.scale.ordinal().rangeRoundBands([MARGINS.left, WIDTH - MARGINS.right], 0.1).domain(barData.map(function(d) {
  return d.x;
}));


vis.append('svg:text')
  .text(function(d) {
          return d;
     })
  .attr("x", function(d, i) {
          return i * (vis.WIDTH / barData.length) + 5;  // +5
     })
     .attr("y", function(d) {
          return vis.HEIGHT - (d * 4) + 15;              // +15
     });



  vis.selectAll('rect')
  .data(barData)
  .enter()
  .append('rect')
  .attr('x', 0)
  .attr('y', 0)
  .attr('x', function(d) {
    return xRange(d.x);
  })
  .attr('y', function(d) {
    return yRange(d.y);
  })
  .attr('width', xRange.rangeBand())
  .attr('height', function(d) {
    return ((HEIGHT - MARGINS.bottom) - yRange(d.y));
  })
  .attr('fill', 'grey')
  .on('mouseover', function(d) {
    d3.select(this)
      .attr('fill', 'green');
  })
  .on('mouseout', function(d) {
    d3.select(this)
     .attr('fill', 'grey')
  });

 
*/



/* d3 Chart */
//Width and height
/*var w = 500;
var h = 100;

var dataset = [ 5, 10, 13, 19, 21, 25, 22, 18, 15, 13,
                11, 12, 15, 20, 18, 17, 16, 18, 23, 25 ];

var svg = d3.select("#visualisation")
            .append("svg")
            .attr("width", w)
            .attr("height", h);

svg.selectAll("text")
   .data(dataset)
   .enter()
   .append("text")
   .text(function(d) {
        return d;
   })
   .attr("x", function(d, i) {
        return i * (w / dataset.length) + 5;  // +5
   })
   .attr("y", function(d) {
        return h - (d * 4) + 15;              // +15
   });





   svg.selectAll("rect")
   .data(dataset) 
   .enter()
   .append("rect")
   .attr("x", 0)
   .attr("y", 0)
   .attr("width", 20)
   .attr("height", 100)
   .attr("x", function(d, i) {
        return i * (w / dataset.length) + 5;  // +5
   })
   .attr("y", function(d) {
        return h - (d * 4) + 15;              // +15
   })

   .attr("font-family", "sans-serif")
   .attr("font-size", "11px")
   .attr("fill","#27c24c");

*/


 var getres=result["responseData"][0];
      
    
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         //var date = getres[i].track_create;         
         //document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td>"+(getres[i].device_assigned_date)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].diff)+"</td></tr>"; 

         var exists = false;
          $('#deviceSelect').each(function(){
              if (this.value == getres[i].type) {
                  exists = true;
                  return false;
              }
          });
          if(exists==false)
          {
            document.getElementById("deviceSelect").innerHTML += "<option value="+getres[i].type+">"+getres[i].type+"</option>"
          }

        
      })



/*function check()
{
  selectFunction(result);  
}*/

selectFunction();
/*
      getres=result["responseData"][5];
      var dataarr=[];
      var categoryarr=[{}];
      
    
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         var date = getres[i].track_create;         
         document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td>"+(getres[i].device_assigned_date)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].diff)+"</td></tr>"; 

         if($('#deviceSelect').val()==getres[i].type || $('#deviceSelect').val()=="all")
          {
            dataarr[i]=parseInt(getres[i].diff);         
            categoryarr[i]={"name":getres[i].device_id,"longName":getres[i].first_name,"value":getres[i].diff};
          }
         
        
      })*/
     // console.log(categoryarr);

/*-----------------------------*/


/*-----------------------------*/
/*
    var getres=result["responseData"][1];
    
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         var date = getres[i].created_at;
         document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].os)+"</td><td>"+(getres[i].version)+"</td><td>"+(getres[i].cnt)+"</td></tr>";
      })

    var getres=result["responseData"][2];
    
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         var date = getres[i].created_at;
         document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].cnt)+"</td></tr>";
      })


    var getres=result["responseData"][3];
    
      $.each(getres, function(i, item) {
         // console.log(getres[i].type);         
         var date = getres[i].track_create;
         if (getres[i].status==1)
         {
          document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].id)+"</td><td>"+(getres[i].track_create)+"</td></tr>"; 
         }
         
      })


      var getres=result["responseData"][4];
    
      $.each(getres, function(i, item) {
         // console.log(getres[i].type);         
         var date = getres[i].track_create;         
         document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td>"+date+"</td></tr>"; 
         
         
      })



      var getres=result["responseData"][5];
    
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         var date = getres[i].track_create;         
         document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td>"+(getres[i].device_assigned_date)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].diff)+"</td></tr>"; 
         
         
      })

*/

/*-----------------------------*/
    
  }
});
}







var dataarr=[];
var categoryarr=[{}];
      
function selectFunction()
{
    dataarr=[];
    categoryarr=[{}];

    result=getResultData;

      getres=result["responseData"][5];
      /*var dataarr=[];
      var categoryarr=[{}];
      */
      var datacnt=0;
    console.log(getres);
      $.each(getres, function(i, item) {
          console.log(getres[i].type);         
         //var date = getres[i].track_create;         
         //document.getElementById("tbl_dash").innerHTML += "<tr><td>"+i+"</td><td>"+(getres[i].device_id)+"</td><td>"+(getres[i].first_name)+"</td><td>"+(getres[i].device_assigned_date)+"</td><td>"+(getres[i].type)+"</td><td>"+(getres[i].diff)+"</td></tr>"; 

         if($('#deviceSelect').val()==getres[i].type || $('#deviceSelect').val()=="all")
          {
            dataarr[datacnt]=parseInt(getres[i].diff);         
            console.log(dataarr[i]);
            categoryarr[datacnt]={"name":getres[i].id,"longName":getres[i].first_name,"value":getres[i].diff};
            datacnt++;
          }
         
        
      })


console.log("categoryarr: "+dataarr);

document.getElementById("chart").innerHTML="";
var data = {
    chartTitle: "",
    xAxisLabel: "Device's ID",
    yAxisLabel: "Days",
    series: [{
        name: "",
        longName: "",
        value: "i",
        data: dataarr
    }],

    categories: categoryarr
    
}


var format = d3.format('.2s');

var returnArray = [];

var canvasWidth = document.getElementById("chart").offsetWidth,
    canvasHeight = document.getElementById("chart").offsetHeight;

var margin = { top: 30, right: 0, bottom: 60, left: 30 },
    width = canvasWidth - margin.left - margin.right,
    height = canvasHeight - margin.top - margin.bottom;

var x0 = d3.scale.ordinal()
    .rangeRoundBands([0, width], 0.1, 0.2);

var x1 = d3.scale.ordinal();

var y = d3.scale.linear()
    .range([height, 0]);

var color = ['#5cb85c', 'rgb(41,95,72)', 'rgb(82,82,20)', 'rgb(43,33,6)', 'rgb(96,35,32)', 'rgb(54,69,79)'];


var xAxis = d3.svg.axis()
    .scale(x0)
    .orient("bottom")
    //.tickSize(-height, 0, 0);

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left")

    //.tickFormat(d3.format(".2s"))
    //.tickSize(-width, 0, 0);

var tip = d3.tip()
    .attr('class', 'd3-tip')
    .offset([0, 0])
    .html(function (d) {
        /*return "<b>data</b>: <span style='color:black;'>" + d.data[d.index] + "Days</span><br/>"
                + "<b>series</b>: <span style='color:black;'>" + d.seriesLongName + "</span><br/>"
                + "<b>category</b>: <span style='color:back;'>" + data.categories[d.index].longName + "</span>";*/
        return "<b>Days</b>: <span style='color:black;'>" + d.data[d.index] + "</span><br/>"
                + "<b>User</b>: <span style='color:back;'>" + data.categories[d.index].longName + "</span>";                
    });

var legendTip = d3.tip()
    .attr('class', 'd3-tip')
    .offset([-10, 0])
    .html(function (d) {
        return "<span style='color:green;'>" + d.longName + "</span>";
    });

var svg = d3.select("#chart").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")")
;


for (var i = 0; i < data.series.length; i++) {

    var rgbColor = d3.rgb(color[i]);
    var rgbLighterColor = d3.rgb(color[i]).brighter(4);
    var id = 'gradient' + i;
    var gradient = svg.append("svg:defs")
    .append("svg:linearGradient")
    .attr('id', id)
    .attr("x1", "0%")
    .attr("y1", "0%")
    .attr("x2", "100%")
    .attr("y2", "100%");

   /* gradient
        .append("stop")
        .attr("offset", "0%")
        .attr("stop-color", rgbLighterColor)*/

    gradient
        .append("stop")
        .attr("offset", "100%")
        .attr("stop-color", rgbColor)
}


svg.call(tip);
svg.call(legendTip);

x0.domain(data.categories.map(function (d) { return d.name; }));
x1.domain(data.series.map(function (d) { return d.name })).rangeRoundBands([0, x0.rangeBand()]);
y.domain([0, d3.max(data.series, function (d) { return d3.max(d.data); })]);

svg.append("g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + height + ")")
    .call(xAxis)
    

svg.append("g")
    .attr("class", "y axis")
    .call(yAxis)
    .append("text")
    .attr("y", 15)
    .attr("x", -15)
    .style("text-anchor", "end")    
    .attr("transform", "rotate(-90)")
    .attr('class', 'chartLabel')
    .text(data.yAxisLabel)


var state = svg.selectAll(".state")
    .data(data.categories)    
    .enter().append("g")
    .attr("class", "state")
    .attr("transform", function (d) { return "translate(" + x0(d.name) + ",0)"; });

var bars = state.selectAll("rect")
    .data(function (d, i) {
        var rArray = [];
        for (var x = 0; x < data.series.length; x++) {
            rArray.push({ name: data.series[x].name, data: data.series[x].data, index: i, seriesLongName: data.series[x].longName });
        }

        return rArray;
    })    
    .enter().append("rect")
    .on('click', function (d) {
        if (d3.event.ctrlKey) {
            if (d3.select(this).style('opacity') == 1) {
                returnArray.push({ categoryName: data.categories[d.index].name, seriesName: d.name, data: d.data[d.index] });
                d3.select(this).style('opacity', 0.5);
            }
            else {
                returnArray.forEach(function (obj, i) {
                    if (obj.categoryName == data.categories[d.index].name && obj.seriesName == d.name && obj.data == d.data[d.index])
                        returnArray.splice(i, 1);
                });
                d3.select(this).style('opacity', 1);
            }
        }
        else {
            var rect = svg.selectAll('rect');
            rect.forEach(function (rec) {
                rec.forEach(function (r) {
                    returnArray = [];
                    r.style.opacity = 1;
                })
            });
            if (d3.select(this).style('opacity') == 1) {
                d3.select(this).style('opacity', 0.5);
                returnArray.push({ categoryName: data.categories[d.index].name, seriesName: d.name, data: d.data[d.index] });
            }
        }

    })
    .on('contextmenu', function (d) {
        d3.event.preventDefault();
        //alert(d.name);
    })
    .on('mouseover', tip.show)
    .on('mouseout', tip.hide)
    .attr('class', 'bar')
    .attr("width", x1.rangeBand())
    .attr("x", function (d) { return x1(d.name); })
    .attr("y", height)
    .attr("height", 0)
    .style("fill", function (d, i) { return "url(#gradient"+i+")" });


bars.transition()
    .attr('y', function (d) { return y(d.data[d.index]); })
    .attr('height', function (d) { return height - y(d.data[d.index]); })
    .delay(function (d, i) {
        return i * 250;
    }).ease('elastic');


svg.append("text")
.attr("transform", "translate(" + (width / 2) + " ," + (height + margin.bottom / 2) + ")")
.style("text-anchor", "middle")
.attr('class', 'chartLabel')
.text(data.xAxisLabel);


svg.append("text")
.attr("transform", "translate(" + (width / 2) + " ," + "0)")
.style("text-anchor", "middle")
.attr('class', 'chartTitle')
.text(data.chartTitle);


d3.select("svg").on('contextmenu', function () {
    var d3_target = d3.select(d3.event.target);
    if (!d3_target.classed("bar")) {
        d3.event.preventDefault();
        //alert('I m the body!!')
    }
});

d3.select("svg").on('click', function () {
    var d3_target = d3.select(d3.event.target);
    if (!(d3_target.classed("bar") || d3_target.classed("legend"))) {
        returnArray = [];
        var rect = svg.selectAll('rect');
        rect.forEach(function (rec) {
            rec.forEach(function (r) {
                r.style.opacity = 1;
            })
        });
    }
});



}


</script>  


<script>


window.onload = function() {


   

}

    </script>
      
</body>
</html>

