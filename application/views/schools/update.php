<div id="school" class="update">
    <?php 
    echo validation_errors();
    echo form_open('school/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $school->id); ?>" />      
          
      Name: <input type="text" name="name" value="<?php echo set_value('name', $school->name); ?>" />      
          
      Address: <textarea name="address"><?php echo set_value('address', $school->address); ?></textarea>      
          
      Landline: <input type="text" name="landline" value="<?php echo set_value('landline', $school->landline); ?>" />      
          
      Mobile: <input type="text" name="mobile" value="<?php echo set_value('mobile', $school->mobile); ?>" />      
          
      Enabled: <input type="checkbox" name="enabled" checked="<?php echo set_value('enabled',  $school->enabled); ?>" />      
        <a href="<?php echo site_url('school/read/'  . $school->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>