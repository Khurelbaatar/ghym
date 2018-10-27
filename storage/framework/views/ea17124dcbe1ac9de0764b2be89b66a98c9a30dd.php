

<div class="row">



    <div class="col-md-2 form-group <?php echo e($errors->has('d1') ? 'has-error' : ''); ?>">
        <label for="d1" class="control-label"><?php echo e('D1'); ?></label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d1" type="number" id="d1" value="<?php echo e(isset($point->d1) ? $point->d1 : ''); ?>" >
        <?php echo $errors->first('d1', '<p class="help-block">:message</p>'); ?>

    </div>
    <div class="col-md-2 form-group <?php echo e($errors->has('d2') ? 'has-error' : ''); ?>">
        <label for="d2" class="control-label"><?php echo e('D2'); ?></label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d2" type="number" id="d2" value="<?php echo e(isset($point->d2) ? $point->d2 : ''); ?>" >
        <?php echo $errors->first('d2', '<p class="help-block">:message</p>'); ?>

    </div>
    <div class="col-md-2 form-group <?php echo e($errors->has('d3') ? 'has-error' : ''); ?>">
        <label for="d3" class="control-label"><?php echo e('D3'); ?></label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d3" type="number" id="d3" value="<?php echo e(isset($point->d3) ? $point->d3 : ''); ?>" >
        <?php echo $errors->first('d3', '<p class="help-block">:message</p>'); ?>

    </div>
    <div class="col-md-2 form-group <?php echo e($errors->has('d4') ? 'has-error' : ''); ?>">
        <label for="d4" class="control-label"><?php echo e('D4'); ?></label>
        <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="d4" type="number" id="d4" value="<?php echo e(isset($point->d4) ? $point->d4 : ''); ?>" >
        <?php echo $errors->first('d4', '<p class="help-block">:message</p>'); ?>

    </div>
</div>
<div class="row">
    <div class="col-md-2 form-group <?php echo e($errors->has('e1') ? 'has-error' : ''); ?>">
    <label for="e1" class="control-label"><?php echo e('E1'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e1" type="number" id="e1" value="<?php echo e(isset($point->e1) ? $point->e1 : ''); ?>" >
    <?php echo $errors->first('e1', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('e2') ? 'has-error' : ''); ?>">
    <label for="e2" class="control-label"><?php echo e('E2'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e2" type="number" id="e2" value="<?php echo e(isset($point->e2) ? $point->e2 : ''); ?>" >
    <?php echo $errors->first('e2', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('e3') ? 'has-error' : ''); ?>">
    <label for="e3" class="control-label"><?php echo e('E3'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e3" type="number" id="e3" value="<?php echo e(isset($point->e3) ? $point->e3 : ''); ?>" >
    <?php echo $errors->first('e3', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('e4') ? 'has-error' : ''); ?>">
    <label for="e4" class="control-label"><?php echo e('E4'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e4" type="number" id="e4" value="<?php echo e(isset($point->e4) ? $point->e4 : ''); ?>" >
    <?php echo $errors->first('e4', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('e5') ? 'has-error' : ''); ?>">
    <label for="e5" class="control-label"><?php echo e('E5'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e5" type="number" id="e5" value="<?php echo e(isset($point->e5) ? $point->e5 : ''); ?>" >
    <?php echo $errors->first('e5', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('e6') ? 'has-error' : ''); ?>">
    <label for="e6" class="control-label"><?php echo e('E6'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="e6" type="number" id="e6" value="<?php echo e(isset($point->e6) ? $point->e6 : ''); ?>" >
    <?php echo $errors->first('e6', '<p class="help-block">:message</p>'); ?>

</div>
</div>

<div class="row">
<div class="col-md-2 form-group <?php echo e($errors->has('l1') ? 'has-error' : ''); ?>">
    <label for="l1" class="control-label"><?php echo e('L1'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="l1" type="number" id="l1" value="<?php echo e(isset($point->l1) ? $point->l1 : ''); ?>" >
    <?php echo $errors->first('l1', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('l2') ? 'has-error' : ''); ?>">
    <label for="l2" class="control-label"><?php echo e('L2'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="l2" type="number" id="l2" value="<?php echo e(isset($point->l2) ? $point->l2 : ''); ?>" >
    <?php echo $errors->first('l2', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('t1') ? 'has-error' : ''); ?>">
    <label for="t1" class="control-label"><?php echo e('T1'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="t1" type="number" id="t1" value="<?php echo e(isset($point->t1) ? $point->t1 : ''); ?>" >
    <?php echo $errors->first('t1', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('total') ? 'has-error' : ''); ?>">
    <label for="total" class="control-label"><?php echo e('C'); ?></label>
    <input step=".001" min="0" pattern="\d+(\.\d{2})?" class="form-control" name="total" type="number" id="total" value="<?php echo e(isset($point->total) ? $point->total : ''); ?>" >
    <?php echo $errors->first('total', '<p class="help-block">:message</p>'); ?>

</div>

<div class="col-md-2 form-group <?php echo e($errors->has('publish') ? 'has-error' : ''); ?>">
    <label for="publish" class="control-label"><?php echo e('publish'); ?></label>
    <input class="form-control" name="publish" type="number" id="publish" value="<?php echo e(isset($point->publish) ? $point->publish : ''); ?>" >
    <?php echo $errors->first('publish', '<p class="help-block">:message</p>'); ?>

</div>
<div class="col-md-2 form-group <?php echo e($errors->has('rank') ? 'has-error' : ''); ?>">
    <label for="rank" class="control-label"><?php echo e('rank'); ?></label>
    <input class="form-control" name="rank" type="number" id="rank" value="<?php echo e(isset($point->rank) ? $point->rank : ''); ?>" >
    <?php echo $errors->first('rank', '<p class="help-block">:message</p>'); ?>

</div>

<div class="col-md-2 form-group <?php echo e($errors->has('player_id') ? 'has-error' : ''); ?>">
    <label for="player_id" class="control-label"><?php echo e('Player_id'); ?></label>
    <input class="form-control" name="player_id" type="number" id="player_id" value="<?php echo e(isset($point->player_id) ? $point->player_id : ''); ?>" required >
    <?php echo $errors->first('player_id', '<p class="help-block">:message</p>'); ?>

</div>

<div class="col-md-2 form-group <?php echo e($errors->has('item_id') ? 'has-error' : ''); ?>">
    <label for="item_id" class="control-label"><?php echo e('item_id'); ?></label>
    <input class="form-control" name="item_id" type="number" id="item_id" value="<?php echo e(isset($point->item_id) ? $point->item_id : ''); ?>" required >
    <?php echo $errors->first('item_id', '<p class="help-block">:message</p>'); ?>

</div>

</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
