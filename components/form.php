<?php 
    echo "
    <div class='form'>
    <h2 class='form__title'>~ Today I need to ~</h2>
    <form action='/vendor/create.php' method='post'>
      <input type='text' name='title' placeholder='Your product title...' maxlength='80' required/>
      <input type='number' name='price' placeholder='Your product price...' maxlength='8' required/>
      <textarea class='description'  name='description'></textarea>
      <button class='create-todo' name='sendTask'>
        <span>Submit</span>
      </button>
    </form>
  </div>
    "
?>