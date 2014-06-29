<div id="student" class="update">
    <?php 
    echo validation_errors();
    echo form_open('student/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $student->id); ?>" />      
          
      Full Name: <input type="text" name="full_name" value="<?php echo set_value('full_name', $student->full_name); ?>" />      
          
      Enabled: <input type="checkbox" name="enabled" checked="<?php echo set_value('enabled',  $student->enabled); ?>" />      
        <a href="<?php echo site_url('student/read/'  . $student->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>