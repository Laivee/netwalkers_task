<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Placeholder for main page content -->
            
        <div class="filter-section2">
            <div class="filter-row2">
                <div class="filter-group2">
                    <label for="startDate2">Start Date</label>
                    <input type="date" id="startDate2" class="date-input2" value="2024-01-03">
                </div>
                <div class="filter-group2">
                    <label for="endDate2">End Date</label>
                    <input type="date" id="endDate2" class="date-input2" value="2024-01-03">
                </div>
                <div class="filter-group2">
                    <label for="category2">Title</label>
                    <div class="select-wrapper2">
                        <select id="category2" class="date-input2">
                            <option value="" selected>Select category</option>
                            <option value="...">...</option>
                            <option value="...">...</option>
                            <option value="...">...</option>
                        </select>
                    </div>
                </div>
                
                <button id="searchBtn2" class="btn2 btn-primary2">Search</button>
            </div>
            <label for="searchInput2" class="filter-table-label2">Filter Table</label>
            <div class="filter-table2">
                <input type="text" id="searchInput2" class="search-input2" placeholder="search post title">
                <a href="<?php echo site_url('post/add') ?>" id="addPostBtn2" class="btn2 btn-primary2">Add Post</a>

            </div>
        </div>

        <div class="table-container2">
            <table id="blogTable2" class="table2">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post) : ?>
                    <tr>
                        <td>#<?php echo $post['id']; ?></td>
                        <td><?php echo $post['author']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><img src="<?php echo base_url().'uploads/'.$post['featured_image']; ?>" height="50" width=""/></td>
                        <td><?php echo $post['description']; ?></td>
                        <td>
                            <div class="views-content2">
                                <span><?php echo $post['address']; ?></span>
                                <div class="badge2"><?php echo $post['location']; ?></div>
                            </div>
                        </td>
                        <td>
                            <div class="action-buttons2">
                                <button class="delete-btn2" aria-label="Delete">
                                    <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    </svg>
                                </button>
                                <button class="edit-btn2" aria-label="Edit">
                                    <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal2" id="confirmModal2">
        <div class="modal-content2">
            <p>Are you sure</p>
            <div class="modal-buttons2">
                <button id="noBtn2" class="btn2 btn-secondary2">No</button>
                <button id="yesBtn2" class="btn2 btn-primary2">Yes</button>
            </div>
        </div>
    </div>
                
                