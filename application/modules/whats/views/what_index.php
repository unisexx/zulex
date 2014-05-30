<style type="text/css">
	.whatfitselect{width:320px;}
</style>
<script type="text/javascript">
	function carbrand_Submit(){
		$.get("whats/carbrand/" + $("#carbrand").val(),function(data){
			$("#carmodel_form").html(data);
		});
		return false;
	}
	
	function carmodel_Submit(){
		$.get("whats/carmodel/" + $("#carmodel").val(),function(data){
			$("#headmodel_form").html(data);
		});
		return false;
	}
	
	function headmodel_Submit(){
		$.get("whats/headmodel/" + $("#headmodel").val(),function(data){
			$("#antenna_form").html(data);
		});
		return false;
	}
	
	function antenna_Submit(){
		$.get("whats/headmodel/" + $("#antenna").val(),function(data){
			$("#rearview_form").html(data);
		});
		return false;
	}
	
	function print_It(){
		   $.post('whats/print_it',{
			   'headmodel':$("#headmodel").val(),
			   'antenna':$("#antenna").val(),
			   'rearview':$("#rearview").val(),
			   'amplifier':$("#amplifier").val(),
			   'speaker':$("#speaker").val(),
			   'eq':$("#eq").val(),
			   'headrest':$("#headrest").val(),
			   'roofmount':$("#roofmount").val(),
			   },function(data){
		   $("#result").html(data);
		   });
	}
</script>
<div id="what">
	<div class="breadcrumb">
		<a href="#"><?php echo lang('home')?></a> > What Fit In Your Car
	</div>
	
	<div id="bodywrap-content" class="corner">
        
        <div class="header-bar">
			<h1>What Fit In My Car</h1>
		</div>
        
        <div id="step1">
        <h1>เลือกยี่ห้อรถ</h1>
                <select name="carbrand" id="carbrand" class="whatfitselect" onChange="carbrand_Submit()">
                    <option value="0">------------------ กรุณาเลือกยี่ห้อรถ ------------------</option>
                    <?php foreach ($category_carbrands as $category_carbrand):?>
                    <option value="<?php echo $category_carbrand->id?>"><?php echo lang_decode($category_carbrand->name)?></option>
                    <?php endforeach;?>
                </select>
            <div id="carmodel_form"></div>
        <div>
        
	</div>
</div>