<script type="text/javascript">
function headmodel_Submit(){
		$.get("whats/ajax_form/" + $("#headmodel").val(),function(data){
			$("#ajax_form").html(data);
		});
		return false;
	}
</script>
<div id="what-form">
	<div class="breadcrumb">
		<a href="#"><?php echo lang('home')?></a> > <a href="whats">What Fit In My Car</a> > <a href="whats"><?php echo lang_decode($brand->name);?></a> > <?php echo lang_decode($model->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		
        <div class="blog">
				<div class="header corner-top"><h1><?php echo lang_decode($model->name)?></h1></div>
				<div class="body corner-bottom">
					
                    <form id="form" method="post" action="whats/result/<?php echo $model->id?>" enctype="multipart/form-data">
                        <p>
                        <label for="name">Head Unit Model :</label>
                        <select name="headmodel" id="headmodel" class="whatfitselect" onChange="headmodel_Submit()">
                            <option value="0">------------------ กรุณาเลือก ------------------</option>
                            <?php foreach($whats as $what):?>
                            <option value="<?php echo $what->id?>"><?php echo $what->title?></option>
                            <?php endforeach;?>
                        </select>
                        </p>
                        <div id="ajax_form">
                        
                        </div>
                    </form>
                    
				<div id="ajax_form"></div>
				</div>
		</div>
        <br clear="all">
	</div>
</div>