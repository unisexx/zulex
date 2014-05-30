<script type="text/javascript">
$(function(){
	$(".blog li a img").hover(function(){
		$(this).stop().addClass('active').animate({
					width: 100,
					left: '-10px',
					top: '-5px'
				}, 100 );
	},function(){
		$(this).stop().animate({
					width: 80,
					left: '0px',
					top: '0px'
				}, 100 ).removeClass('active');
	})
});
</script>
<div id="connect">
	<div class="breadcrumb">
		<a href="home"><?php echo lang('home')?></a> > Connect White Up
	</div>
	
	<div id="bodywrap-content" class="corner">
    
    <div class="header-bar">
		<h1>Connect White Up</h1>
	</div>
    
    	<div id="menu"> 
        <div class="rambobar"> 
         <ul> 

			 <table>
			<?php foreach ($connects as $key => $connect):?>
                <?php if($key==0): ?>
				</tr><td>
                <?php elseif(($key%8)==0): ?>
                </td></tr><tr><td>
                <?php endif; ?>
                <div class="blog">
                        <li>
                        <a class="ramboico" href="<?php echo $connect->url?>" target="_blank">
                        <img src="uploads/connects/<?php echo $connect->image?>" >
                        </a>
                        <a href="<?php echo $connect->url?>" target="_blank"><h3 align="center"><?php echo $connect->name?></h3></a>
                        </li> 
                </div>
            <?php endforeach;?>
                 </td></tr>
            </table>

        </ul>
        </div>
		</div>
        
        <br class="clear" />
	</div>
</div>