<script type="text/javascript">
$(function(){
	$("#indexmenu .blog li a img").hover(function(){
		$(this).stop().addClass('active').animate({
					width: 235,
					left: '-10px',
					top: '-3px'
				}, 100 );
	},function(){
		$(this).stop().animate({
					width: 215,
					left: '0px',
					top: '0px'
				}, 75 ).removeClass('active');
	})
});
</script>

<div id="indexmenu" class="corner">

    
    
    <div id="menu"> 
        <div class="rambobar"> 
         <ul> 

			 <table>
			<?php foreach ($menus as $key => $menu):?>
                <?php if($key==0): ?>
				</tr><td>
                <?php elseif(($key%4)==0): ?>
                </td></tr><tr><td>
                <?php endif; ?>
                <div class="blog">
                        <li>
                        <a class="ramboico" href="<?php echo $menu->url?>" target="_self">
                        <?php echo (@$this->session->userdata('lang') == "th")?"<img src=uploads/submenu/".$menu->image_th.">":"<img src=uploads/submenu/".$menu->image_en.">";?>
                        </a>
                        </li> 
                </div>
            <?php endforeach;?>
                 </td></tr>
            </table>

        </ul>
		</div>
	</div>

</div>
