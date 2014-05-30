	<div id="logo">
		<img src="themes/zulex/images/logo.png">
	</div>
	<div id="h_rblog">
		<div><a href="home/lang/th">ไทย</a> | <a href="home/lang/en">Eng</a> <?php echo modules::run('socials/inc_index'); ?></div>
		<?php echo modules::run('users/inc_login'); ?>
<!--		<form action="http://www.google.co.th/custom" method="GET">
        	<fieldset class="search">
			<input type="text" value="" maxlength="255" size="17" name="q" id="input_fm">
            <input type="hidden" value="zulex.co.th" name="domains">
            <input type="hidden" value="zulex.co.th" name="sitesearch">
            <button title="Submit Search" class="btn" id="button" name="sa">Search</button>
            </fieldset>
		</form>-->
        
        <form method="get" action="home/search" target="_top">
         <fieldset class="search">
        <input type="hidden" name="domains" value="http://www.zulex.co.th"></input>
        <input type="text" value="" maxlength="255" size="17" name="q" id="sbi">
        <button title="Submit Search" class="btn" id="button" name="sa">Search</button>
        </input>
		<div style="padding-top:5px;">
		<input type="radio" name="sitesearch" value="" id="ss0"></input>
		<label for="ss0" title="Search the Web" class="f11 txtGray">เว็บทั่วโลก</label>
         
		<input type="radio" name="sitesearch" value="http://www.zulex.co.th" checked id="ss1"></input>
		<label for="ss1" title="Search ThaiGCD" class="f11 txtGray">zulex.co.th</label>
		</div>
        
        <input type="hidden" name="client" value="pub-6956175194622836"></input>
        <input type="hidden" name="forid" value="1"></input>
        <input type="hidden" name="ie" value="UTF-8"></input>
        <input type="hidden" name="oe" value="UTF-8"></input>
        <input type="hidden" name="cof" value="GALT:#008000;GL:1;DIV:#336699;VLC:663399;AH:center;BGC:FFFFFF;LBGC:336699;ALC:0000FF;LC:0000FF;T:333333;GFNT:0000FF;GIMP:0000FF;FORID:11"></input>
        <input type="hidden" name="hl" value="en"></input>
        </fieldset>
        </form>
	</div>
    
    <div id="navigation">
            <ul class="nav">
            <?php echo modules::run('hmenus/inc_header_menu'); ?>
            
			<!-- <li><a href="home"><span><?php echo lang('home')?></span></a></li>
            <li><a href="products"><span><?php echo lang('product')?></span></a></li>
            <li><a href="znews"><span><?php echo lang('new&promotion')?></span></a></li>
            <li><a href="resellers"><span><?php echo lang('reseller')?></span></a></li>
            <li><a href="">บริการหลังการขาย</a></li>
			<li><a href="">download</a></li>
            <li><a href="contacts"><span><?php echo lang('contact')?></span></a></li>-->
            </ul>
      </div>
    
	<div id="h_line"></div>
	
