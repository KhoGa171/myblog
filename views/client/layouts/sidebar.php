<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Bài đăng gần đây</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php foreach ($data['postsR'] as $post) { ?>
                                <li><a href="<?php echo URL . 'Home/post/' . $post['slug'] ?>">
                                        <h5><?php echo $post['title'] ?></h5>
                                        <span><?php echo $post['updated_at'] ?></span>
                                    </a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Danh mục</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php foreach ($data['categories'] as $category) { ?>
                                <li><a href="<?php echo URL . 'Home/category/' . $category['slug'] ?>">- <?php echo $category['title'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">PSD</a></li>
                            <li><a href="#">Responsive</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>