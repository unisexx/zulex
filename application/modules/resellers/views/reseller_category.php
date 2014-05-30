<div id="resellers-subcategory">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > <a href="resellers"><?php echo lang('reseller')?></a> > <?php echo lang_decode($category->name)?>
	</div>
	
	<div id="bodywrap-content" class="corner">
		<div class="header-bar">
			<h1 align="center"><?php echo lang_decode($category->name)?></h1>
		</div>
	
    	<?php if(@$this->session->userdata('lang') == "th"):?>
        
				<?php foreach ($categories->where("parents = $parent_id")->group_by('alphabet_id')->having('alphabet_id > 0')->get() as $key => $category):?>
					<?php if($key==0): ?>
                        <div class="col key<?php echo $key?>">
                    <?php elseif(($key%5)==0): ?>
                        </div><div class="col key<?php echo $key?>">
                    <?php endif; ?>
                    <ul>
                    <li class="alphabet"><?php echo $category->alphabet->letter?></li>  
                    </ul> 
                    <ul>
                    <?php foreach ($categories->where('parents = '.$parent_id.' and alphabet_id = '.$category->alphabet->id.'')->order_by('id','asc')->get() as $district):?>
                        <li class="district">
                            <span class="icon icon-bullet-blue"></span>
                            <a href="resellers/store/<?php echo $district->id?>"><?php echo lang_decode($district->name)?></a> (<?php echo $district->resellers->result_count(); ?>)
                        </li>
                    <?php endforeach ;?>
                    </ul>
                        
                <?php endforeach?>
        <?php else:?>
        
        		<?php foreach ($categories->where("parents = $parent_id")->group_by('en_alphabet_id')->having('en_alphabet_id > 0')->get() as $key => $category):?>
			
					<?php if($key==0): ?>
                        <div class="col key<?php echo $key?>">
                    <?php elseif(($key%5)==0): ?>
                        </div><div class="col key<?php echo $key?>">
                    <?php endif; ?>
                    <ul>
                    <li class="alphabet"><?php echo $category->en_alphabet->letter?></li>
                    </ul> 
                        
                    <ul>
                    <?php foreach ($categories->where('parents = '.$parent_id.' and en_alphabet_id = '.$category->en_alphabet->id.'')->order_by('id','asc')->get() as $district):?>
                        <li class="district">
                            <span class="icon icon-bullet-blue"></span>
                            <a href="resellers/store/<?php echo $district->id?>"><?php echo lang_decode($district->name)?></a> (<?php echo $district->resellers->result_count(); ?>)
                        </li>
                    <?php endforeach ;?>
                    </ul>
                        
                <?php endforeach?>
                
        <?php endif;?>
        
        
		</ul>
		<br class="clear">
	</div>
	<br class="clear">
</div>