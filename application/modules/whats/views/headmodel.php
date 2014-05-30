	<div id="step3">
        <h1>เลือกโมเดล</h1>
                <select name="headmodel" id="headmodel" class="whatfitselect" onChange="headmodel_Submit()">
                    <option value="0">------------------ กรุณาเลือกโมเดล ------------------</option>
                   <?php foreach($headmodel_categories as $headmodel_category):?>
                    <option value="<?php echo $headmodel_category->id?>"><?php echo $headmodel_category->title?></option>
                    <?php endforeach;?>
                </select>
            <div id="antenna_form"></div>
        <div>