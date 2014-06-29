<div id="student" class="create">
    <?php 
    echo validation_errors();
    echo form_open('student/create'); 
    ?>          
      Id: <input type="text" name="id" />      
          
      Full Name: <input type="text" name="full_name" />      
          
      Enabled: <input type="checkbox" name="enabled" />      
        <a href="<?php echo site_url('student'); ?>">Cancel</a> | 
    <button>Create</button>
  </form>
</div>