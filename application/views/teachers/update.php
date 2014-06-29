<div id="teacher" class="update">
    <?php 
    echo validation_errors();
    echo form_open('teacher/update'); 
    ?>          
      Id: <input type="text" name="id" value="<?php echo set_value('id', $teacher->id); ?>" />      
          
      Full Name: <input type="text" name="full_name" value="<?php echo set_value('full_name', $teacher->full_name); ?>" />      
          
      Username: <input type="text" name="username" value="<?php echo set_value('username', $teacher->username); ?>" />      
          
      Password: <input type="text" name="password" value="<?php echo set_value('password', $teacher->password); ?>" />      
          
      Enabled: <input type="checkbox" name="enabled" checked="<?php echo set_value('enabled',  $teacher->enabled); ?>" />      
        <a href="<?php echo site_url('teacher/read/'  . $teacher->id); ?>">Cancel</a> | 
    <button>Update</button>
  </form>
</div>