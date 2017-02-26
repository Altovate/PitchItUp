<header>
     <div class="header-content">
          <div class="header-content-inner">
          	<form>
			
           <div class="col-sm-4 text-center">
                   
                        <img src = "<?php echo base_url();?>assets/img/newbmc.png" style = "width: 1000px; height: 550px;">

                        <div class="col-md-2" style="position:absolute; left: 5px;
   top: 1px; width: 350px; height: 100px;" >
					<div class="form-group">
					  <label for="Business Model Canvas" data-toggle="tooltip" data-placement="bottom" title = "A tool that shows the company's business model as a whole.">
					  <font color="Black"><h3><b>Business Model Canvas</b></h3></font></label>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 797px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Customer Segments" data-toggle="tooltip" data-placement="bottom" title = "This element provides the knowledge that the company has on users. It also provides information about their preferences, tastes, expectations and makes it possible to decide whether it is focused on a majority or a specific audience.">
					  <font color="Black">Customer Segments</font></label>
					  <textarea class="form-control" rows="13" id="segment" style = "resize: none;"  disabled><?php if(isset($ideagen)){echo $ideagen->people;}?></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 410px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Value Proposition" data-toggle="tooltip" data-placement="bottom" title = "This shows the aspects that the product meets regarding user needs. It also makes it possible to focus our product on issues such as whether the product will be free, low cost, high end or if it will have an attractive design.">
					  <font color="Black">Value Proposition</font></label>
					  <textarea class="form-control" rows="13" id="proposition" style = "resize: none;"  placeholder="example" ></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 602px;
   top: 231px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Channels" data-toggle="tooltip" data-placement="bottom" title = "It deals with the methods and mechanisms by which the value proposition (product) will be sold or supplied to customers.">
					  <font color="Black">Channels</font></label>
					  <textarea class="form-control" rows="5" id="channels" style = "resize: none;"  placeholder="example" disabled></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 602px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Customer Relationship" data-toggle="tooltip" data-placement="bottom" title = "This shows how the company will interact with customers and how it will influence them.">
					  <font color="Black">Customer Relationship</font></label>
					  <textarea class="form-control" rows="5" id="relationship" style = "resize: none;" placeholder="example" disabled ></textarea>
					</div>
				</div>

					<div class="col-md-2" style="position:absolute; left: 510px;
   top: 390px; width: 490px; height: 100px;" >
					<div class="form-group">
					  <label for="Revenue Streams" data-toggle="tooltip" data-placement="bottom" title = "This deals with everything related to the way the company manages to convert its value proposition into revenues. Direct selling is only one option, as there are other revenue strategies, such as the freemium model, in-app (for applications), etc.">
					  <font color="Black">Revenue Streams</font></label>
					  <textarea class="form-control" rows="4" id="streams" style = "resize: none;" placeholder="example"  disabled></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 217px;
   top: 231px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Resources" data-toggle="tooltip" data-placement="bottom" title = "Study of the basic and essential resources for the business model to be able to run smoothly.">
					  <font color="Black">Key Resources</font></label>
					  <textarea class="form-control" rows="5" id="resources" style = "resize: none;"  placeholder="example" disabled></textarea>
					</div>
				</div>

				 <div class="col-md-2" style="position:absolute; left: 217px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Activities" data-toggle="tooltip" data-placement="bottom" title = "Actions to take within the company to ensure that the value proposition can be delivered to the customer in the best way possible.">
					  <font color="Black">Key Activities</font></label>
					  <textarea class="form-control" rows="5" id="activities" style = "resize: none;"  placeholder="example" disabled></textarea>
					</div>W
				</div>

				<div class="col-md-2" style="position:absolute; left: 25px;
   top: 70px; width: 205px; height: 100px;" >
					<div class="form-group">
					  <label for="Key Partners" data-toggle="tooltip" data-placement="bottom" title = "Associations that our company can make with outside companies to enhance the value proposition and to ensure that it reaches the consumer with full guarantees.">
					  <font color="Black">Key Partners</font></label>
					  <textarea class="form-control" rows="13" id="partners" style = "resize: none;"  placeholder="example" disabled></textarea>
					</div>
				</div>

				<div class="col-md-2" style="position:absolute; left: 25px;
   top: 390px; width: 490px; height: 100px;" >
					<div class="form-group">
					  <label for="Cost Structure" data-toggle="tooltip" data-placement="bottom" title = "In this last section we talk about creating a cost structure (fixed and variable) to allow the new company to develop its business viably.">
					  <font color="Black">Cost Structure</font></label>
					  <textarea class="form-control" rows="4" id="structure" style = "resize: none;"  placeholder="example" disabled></textarea>
					</div>
				</div>


				<div class="col-md-2" style="position:absolute; left: 355px;
   top: 14px; width: 250px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					  <input class="form-control" rows="1" id="comment" style = "resize: none; text-align:center;" value="<?php if(isset($ideagen)){ $word = $ideagen->solution;$arr = explode(' -',trim($word));echo ucfirst($arr[0]); }else{echo '';}?>" disabled>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 615px;
   top: 14px; width: 200px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					  <textarea class="form-control" rows="1" id="comment" style = "resize: none;text-align:center;"  disabled><?php echo date('M. d , Y');?></textarea>
					</div>
				</div>

			<div class="col-md-2" style="position:absolute; left: 900px;
   top: 14px; width:90px;" >
					<div class="form-group">
					<!--   <label for="Problem" data-toggle="tooltip" data-placement="bottom" title = "example"><font color="Black">Key Partners</font></label> -->
					<input type="number" min="1" max="5" name="iteration" class="form-control" rows="1" id="iteration"  style = "resize: none;" placeholder ="1" required><?php if(isset($bmc)){echo $bmc->key_sources;}else{}?>
					</div>
				</div>

<div style="position:absolute; left: 1000px;
   top: 250px; width: 200px;"> 
				<button  type="button" style="color:black; width: 100px; height:50px; display:none;" id="bmc" >Generate Pitchdeck</button>
			</div>

			<div style="position:absolute; right: 330px;
   top: 250px; width: 200px;"> 
				<button  type="button"  onclick="history.go(-1); return false;"  style="color:black; width: 100px; height:50px; ">Previous</button>
			</div>
	</div>

</form>
</div>
</div>
</div>

</header> 
	
	<script type="text/javascript">
window.onload = function (){

				var iteration = $('#iteration').val();
				var proposition = $('#proposition').val();
				var channels = $('#channels').val();
				var relationship = $('#relationship').val();
				var streams = $('#streams').val();
				var resources = $('#resources').val();
				var activities = $('#activities').val();
				var partners = $('#partners').val();
				var structure = $('#structure').val();

				if(iteration != ''  || proposition != '' || channels!='' || relationship != '' || streams!='' || resources!='' || activities!='' || partners!='' || structure!=''){
					$('#proposition').prop("disabled",false);
					$('#channels').prop("disabled",false);
					$('#relationship').prop("disabled",false);
					$('#streams').prop("disabled",false);
					$('#resources').prop("disabled",false);
					$('#activities').prop("disabled",false);
					$('#partners').prop("disabled",false);
					$('#structure').prop("disabled",false);
					$('#bmc').show();
				}
			};

			$('#iteration').focus();

			$('#iteration').on('change',function(){
				
				$('#proposition').prop("disabled",false);
				$('#proposition').focus();
			});

			$('#proposition').on('change',function(){

				$('#channels').prop("disabled",false);
				$('#channels').focus();
			});

			$('#channels').on('change',function(){
				
				$('#relationship').prop("disabled",false);
				$('#relationship').focus();
			 });

			$('#relationship').on('change',function(){

					$('#streams').prop("disabled",false);
				$('#streams').focus();
			});

			$('#streams').on('change',function(){

				$('#resources').prop("disabled",false);
				$('#resources').focus();
			});

			$('#resources').on('change',function(){

				$('#activities').prop("disabled",false);
				$('#activities').focus();
			});
			$('#activities').on('change',function(){

				$('#partners').prop("disabled",false);
				$('#partners').focus();
			});
			$('#partners').on('change',function(){

				$('#structure').prop("disabled",false);
				$('#structure').focus();
			});

			$('#structure').on('focus',function(){
				
				$('#bmc').show();
			});

</script>
