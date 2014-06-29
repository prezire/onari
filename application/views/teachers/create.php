<div id="teacher" class="create">
    <?php 
    echo validation_errors();
    echo form_open('teacher/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Full Name: <input type="text" name="full_name" />      
          
      Username: <input type="text" name="username" />      
          
      Password: <input type="text" name="password" />      
          
      Enabled: <input type="checkbox" name="enabled" />      
        <a href="<?php echo site_url('teacher'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>