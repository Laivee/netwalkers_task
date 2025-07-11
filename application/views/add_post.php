<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
       <!-- Placeholder for main page content -->
        <div style="color:red; font-weight:bold">
        <?php if (validation_errors()): ?>
            <ul>
                <?php echo validation_errors('<li>', '</li>'); ?>
            </ul>
        <?php endif; ?>
          
          <?php if (!empty($upload_error)): ?>
            <?php echo $upload_error; ?>
          <?php endif; ?>

        </div>
        
              <form class="blogForm2" method="post" action="<?php base_url('post/add') ?>" enctype="multipart/form-data">
              
              <!-- Author -->
              <div class="formGroup2">
                  <label for="postTitle2" class="formLabel2">Name of Author</label>
                  <input
                    name="author"
                    type="text"
                    id="postTitle2"
                    class="inputBox2"
                    placeholder="Name of Author"
                    value="<?php echo set_value('author'); ?>"
                  />
                </div>
              
              <!-- State/Location -->
              <div class="formGroup2">
                  <label for="postTitle2" class="formLabel2">State/Location</label>
                  <input
                    name="location"
                    type="text"
                    id="postTitle2"
                    class="inputBox2"
                    placeholder="State/Location"
                    value="<?php echo set_value('location'); ?>"
                  />
                </div>

              <!-- Contact Address -->
              <div class="formGroup2">
                  <label for="postTitle2" class="formLabel2">Contact Address</label>
                  <input
                    name="address"
                    type="text"
                    id="postTitle2"
                    class="inputBox2"
                    placeholder="Contact Address"
                    value="<?php echo set_value('address'); ?>"
                  />
                </div>

                <!-- Post Title -->
                <div class="formGroup2">
                  <label for="postTitle2" class="formLabel2">Post Title</label>
                  <input
                    name="title"
                    type="text"
                    id="postTitle2"
                    class="inputBox2"
                    placeholder="Post Title"
                    value="<?php echo set_value('title'); ?>"
                  />
                </div>


                <div class="formattingToolbar2">
                  <button type="button" class="formatBtn2" data-format="b">
                    B
                  </button>
                  <button type="button" class="formatBtn2" data-format="i">
                    /
                  </button>
                  <button type="button" class="formatBtn2" data-format="h2">
                    H2
                  </button>
                  <button type="button" class="formatBtn2" data-format="h3">
                    H3
                  </button>
                  <button type="button" class="formatBtn2" data-format="img">
                    IMG
                  </button>
                  <button type="button" class="formatBtn2" data-format="url">
                    URL
                  </button>
                  <button type="button" class="formatBtn2" data-format="hr">
                    HR
                  </button>
                </div>

                <!-- Post Description -->
                <div class="formGroup2">
                  <label for="postContent2" class="formLabel2"
                    >Post Description</label
                  >
                  <textarea
                    name="description"
                    id="postContent2"
                    class="textareaBox2"
                    placeholder="Post Description"
                  ><?php echo set_value('description'); ?></textarea>
                </div>

                <div class="formGroup2">
                  <div id="uploadedImages2" class="uploadedImagesBox2">
                    <span class="uploadedImagesLabel2">uploaded images</span>
                  </div>
                </div>

                <div class="formGroup2">
                  <label class="formLabel2">Feature Image</label>
                  <input type="file" name="image" id="uploadImage2" class="uploadBtn2" />
                </div>

                <?php if (!empty($upload_error)): ?>
                    <p class="formError"><?php echo strip_tags($upload_error); ?></p>
                <?php endif; ?>

                <div class="formGroup2">
                  <button type="submit" class="saveBtn2">SAVE</button>
                </div>
              </form>
            </div>