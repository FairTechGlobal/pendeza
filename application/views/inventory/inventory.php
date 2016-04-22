<?php

defined("BASEPATH") OR exit("No direct script access allowed");

include "base/header.php";

?>

	<body>

		<div class = "container">

			<div class = "row">

				<div class = "col-md-12 col-lg-12" style = "background-color: #ecf0f1">

					<h2> Quick View </h2>

					<small>

						A quick view of relevant information.

					</small>

                    <div class="row">

						<div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Line graph<small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                            	aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="lineChart"></canvas>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Bar graph <small>Sessions</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                                            	aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <canvas id="mybarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

				</div>

				<div class = "col-md-12 col-lg-12" style = "background-color: #1abc9c">

					<h2> Manage Inventory </h2>

					<small>

						Here you can view your inventory.
						You can also manage your inventory: add items to stock and remove items from stock.

					</small>

					<p>
							
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat pretium nisi, 
						eget malesuada magna mollis et. In et pretium ex. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Ut vestibulum justo purus, quis mattis neque fermentum 
						sit amet. Ut id tristique dolor. Fusce vel leo sed nunc sollicitudin convallis rhoncus vitae <br>
						turpis. Morbi et lobortis sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
						posuere cubilia Curae; Phasellus condimentum, odio quis scelerisque maximus, mauris mauris 
						iaculis dolor, vitae faucibus magna nisl eu mauris. Morbi iaculis nibh non erat vestibulum, ac <br>
						dapibus sapien rutrum. Phasellus ipsum velit, tincidunt ac semper malesuada, finibus at purus. 
						Phasellus eu pellentesque velit. Mauris vehicula semper justo, at faucibus mi fermentum quis. 
							
					</p>

					<p class = "text-right">

						<a href = "" class = "btn btn-default"> View Inventory </a>

					</p>

				</div>

				<div class = "col-md-12 col-lg-12" style = "background-color: #16a085">

					<h2> Inventory Statistics </h2>

					<small style = "border-bottom: 10px">

						Here you can get access to statistics relevant to your stock, such as items that are used the most.
						These statistics are represented in a number of graphical forms.

					</small>

					<p>
							
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus placerat pretium nisi, 
						eget malesuada magna mollis et. In et pretium ex. Class aptent taciti sociosqu ad litora torquent 
						per conubia nostra, per inceptos himenaeos. Ut vestibulum justo purus, quis mattis neque fermentum 
						sit amet. Ut id tristique dolor. Fusce vel leo sed nunc sollicitudin convallis rhoncus vitae <br>
						turpis. Morbi et lobortis sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices 
						posuere cubilia Curae; Phasellus condimentum, odio quis scelerisque maximus, mauris mauris 
						iaculis dolor, vitae faucibus magna nisl eu mauris. Morbi iaculis nibh non erat vestibulum, ac <br>
						dapibus sapien rutrum. Phasellus ipsum velit, tincidunt ac semper malesuada, finibus at purus. 
						Phasellus eu pellentesque velit. Mauris vehicula semper justo, at faucibus mi fermentum quis. 
							
					</p>

					<p class = "text-right">

						<a href = "" class = "btn btn-default"> View Statistics </a>

					</p>

				</div>

			</div>

		</div>

		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/moment/moment.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/chartjs/chart.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/progressbar/bootstrap-progressbar.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/nicescroll/jquery.nicescroll.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/icheck/icheck.min.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/custom.js');?>"></script>
	    <script src="<?php echo base_url('assets/js/pace/pace.min.js');?>"></script>

		<script>

			Chart.defaults.global.legend = {
		    	enabled: false
		    };

		      // Line chart
		      var ctx = document.getElementById("lineChart");
		      var lineChart = new Chart(ctx, {
		        type: 'line',
		        data: {
		          labels: ["January", "February", "March", "April", "May", "June", "July"],
		          datasets: [
		            {
		              label: "My First dataset",
		              backgroundColor: "rgba(38, 185, 154, 0.31)",
		              borderColor: "rgba(38, 185, 154, 0.7)",
		              pointBorderColor: "rgba(38, 185, 154, 0.7)",
		              pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
		              pointHoverBackgroundColor: "#fff",
		              pointHoverBorderColor: "rgba(220,220,220,1)",
		              pointBorderWidth: 1,
		              data: [31, 74, 6, 39, 20, 85, 7]
		            },
		            {
		              label: "My Second dataset",
		              backgroundColor: "rgba(3, 88, 106, 0.3)",
		              borderColor: "rgba(3, 88, 106, 0.70)",
		              pointBorderColor: "rgba(3, 88, 106, 0.70)",
		              pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
		              pointHoverBackgroundColor: "#fff",
		              pointHoverBorderColor: "rgba(151,187,205,1)",
		              pointBorderWidth: 1,
		              data: [82, 23, 66, 9, 99, 4, 2]
		          }]
		        },
		      });

		      // Bar chart
		      var ctx = document.getElementById("mybarChart");
		      var mybarChart = new Chart(ctx, {
		          type: 'bar',
		          data: {
		            labels: ["January", "February", "March", "April", "May", "June", "July"],
		            datasets: [
		              {
		                label: '# of Votes',
		                backgroundColor: "#26B99A",
		                data: [51, 30, 40, 28, 92, 50, 45]
		              },
		              {
		                label: '# of Votes',
		                backgroundColor: "#03586A",
		                data: [41, 56, 25, 48, 72, 34, 12]
		              }]
		            },

		          options:{
		            scales:{
		              yAxes:[{
		                ticks:{
		                    beginAtZero:true
		                }
		              }]
		            }
		          }
		      });

		</script>

<?php

include "base/footer.php";

?>