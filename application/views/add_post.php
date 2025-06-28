<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
       <!-- Placeholder for main page content -->
       <section class="content">
          <div class="wrapper">
            <nav class="navbar2">
              <ul class="nav-links2">
                <li class="nav-item2 active2">
                  <a href="#" data-section="blogs">Blogs</a>
                </li>
                <li class="nav-item2">
                  <a href="#" data-section="categories">Categories</a>
                </li>
                <li class="nav-item2">
                  <a href="#" data-section="media">Media</a>
                </li>
              </ul>
            </nav>

            <div class="container2">
              <div class="breadcrumb2">
                <span
                  style="font-weight: 700 !important; color: #4b4a4a !important"
                  >Blogs</span
                >
                <span class="separator2">></span>
                <span>List Blogs</span>
              </div>

              <form class="blogForm2" method="post" action="<?php base_url('post/add') ?>">
                <div class="formGroup2">
                  <label for="postTitle2" class="formLabel2">Post Title</label>
                  <input
                    name="title"
                    type="text"
                    id="postTitle2"
                    class="inputBox2"
                    placeholder="search post title"
                    value="<?php set_value('title'); ?>"
                  />
                </div>
                <?php echo form_error('title', '<div class="formError">', '</div>');?>

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

                <div class="formGroup2">
                  <label for="postContent2" class="formLabel2"
                    >Post Description</label
                  >
                  <textarea
                    name="description"
                    id="postContent2"
                    class="textareaBox2"
                    placeholder="[b]bvn mm[/b]"
                  ><?php echo set_value('description'); ?></textarea>
                </div>
                <?php echo form_error('description', '<div class="formError">', '</div>');?>

                <div class="formGroup2">
                  <div id="uploadedImages2" class="uploadedImagesBox2">
                    <span class="uploadedImagesLabel2">uploaded images</span>
                  </div>
                </div>

                <div class="formGroup2">
                  <label class="formLabel2">Feature Image</label>
                  <button type="button" id="uploadImage2" class="uploadBtn2">
                    Upload An Image
                  </button>
                </div>

                <div class="formGroup2">
                  <button type="submit" class="saveBtn2">SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </section>