<?php
$args = array(  
        'post_type' => 'recipes',
        'post_status' => 'pending',
        'posts_per_page' => -1, 
        'orderby' => 'date', 
        'order' => 'ASC', 
    );

    $loop = new WP_Query( $args ); 
        
    while ( $loop->have_posts() ) : $loop->the_post(); 
        print the_title(); 
        the_content(); 
    endwhile;

    wp_reset_postdata(); 
?>
<table class="wp-list-table widefat fixed striped posts">
    <thead>
        <tr>
            <td id="cb" class="manage-column column-cb check-column">
                <label class="screen-reader-text" for="cb-select-all-1">Select All</label>
                <input id="cb-select-all-1" type="checkbox">
            </td>
            <th scope="col" id="title" class="manage-column column-title column-primary sortable desc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th>
            <th scope="col" id="author" class="manage-column column-author">Author</th>
            <th scope="col" id="categories" class="manage-column column-categories">Categories</th>
            <th scope="col" id="tags" class="manage-column column-tags">Tags</th>
            <th scope="col" id="comments" class="manage-column column-comments num sortable desc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th>
            <th scope="col" id="date" class="manage-column column-date sortable asc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>
        </tr>
    </thead>

    <tbody id="the-list">
        <tr id="post-74" class="iedit author-self level-0 post-74 type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized">
            <th scope="row" class="check-column">
                <label class="screen-reader-text" for="cb-select-74">
                    Select Test 3 </label>
                <input id="cb-select-74" type="checkbox" name="post[]" value="74">
                <div class="locked-indicator">
                    <span class="locked-indicator-icon" aria-hidden="true"></span>
                    <span class="screen-reader-text">
				“Test 3” is locked				</span>
                </div>
            </th>
            <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
                <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                <strong><a class="row-title" href="http://localhost/wordpress/wp-admin/post.php?post=74&amp;action=edit" aria-label="“Test 3” (Edit)">Test 3</a></strong>

                <div class="hidden" id="inline_39">
                    <div class="post_title">Test 3</div>
                    <div class="post_name">test-3</div>
                    <div class="post_author">1</div>
                    <div class="comment_status">open</div>
                    <div class="ping_status">open</div>
                    <div class="_status">publish</div>
                    <div class="jj">06</div>
                    <div class="mm">02</div>
                    <div class="aa">2020</div>
                    <div class="hh">14</div>
                    <div class="mn">14</div>
                    <div class="ss">10</div>
                    <div class="post_password"></div>
                    <div class="page_template">default</div>
                    <div class="post_category" id="category_39">1</div>
                    <div class="tags_input" id="post_tag_39"></div>
                    <div class="sticky"></div>
                    <div class="post_format"></div>
                </div>
                <div class="row-actions"><span class="edit"><a href="http://localhost/wordpress/wp-admin/post.php?post=74&amp;action=edit" aria-label="Edit “Test 3”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “Test 3” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="trash"><a href="http://localhost/wordpress/wp-admin/post.php?post=39&amp;action=trash&amp;_wpnonce=3e6b3a701c" class="submitdelete" aria-label="Move “Test 3” to the Trash">Trash</a> | </span><span class="view"><a href="http://localhost/wordpress/2020/02/06/test-3/" rel="bookmark" aria-label="View “Test 3”">View</a></span></div>
                <button type="button" class="toggle-row"><span class="screen-reader-text">Show more details</span></button>
            </td>
            <td class="author column-author" data-colname="Author"><a href="edit.php?post_type=post&amp;author=1">admin</a></td>
            <td class="categories column-categories" data-colname="Categories"><a href="edit.php?category_name=uncategorized">Uncategorized</a></td>
            <td class="tags column-tags" data-colname="Tags"><span aria-hidden="true">—</span><span class="screen-reader-text">No tags</span></td>
            <td class="comments column-comments" data-colname="Comments">
                <div class="post-com-count-wrapper">
                    <span aria-hidden="true">—</span><span class="screen-reader-text">No comments</span><span class="post-com-count post-com-count-pending post-com-count-no-pending"><span class="comment-count comment-count-no-pending" aria-hidden="true">0</span><span class="screen-reader-text">No comments</span></span>
                </div>
            </td>
            <td class="date column-date" data-colname="Date">Published
                <br><span title="2020/02/06 2:14:10 pm">2020/02/06</span></td>
        </tr>
        
    </tbody>

    <tfoot>
        <tr>
            <td class="manage-column column-cb check-column">
                <label class="screen-reader-text" for="cb-select-all-2">Select All</label>
                <input id="cb-select-all-2" type="checkbox">
            </td>
            <th scope="col" class="manage-column column-title column-primary sortable desc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=title&amp;order=asc"><span>Title</span><span class="sorting-indicator"></span></a></th>
            <th scope="col" class="manage-column column-author">Author</th>
            <th scope="col" class="manage-column column-categories">Categories</th>
            <th scope="col" class="manage-column column-tags">Tags</th>
            <th scope="col" class="manage-column column-comments num sortable desc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=comment_count&amp;order=asc"><span><span class="vers comment-grey-bubble" title="Comments"><span class="screen-reader-text">Comments</span></span></span><span class="sorting-indicator"></span></a></th>
            <th scope="col" class="manage-column column-date sortable asc"><a href="http://localhost/wordpress/wp-admin/edit.php?orderby=date&amp;order=desc"><span>Date</span><span class="sorting-indicator"></span></a></th>
        </tr>
    </tfoot>

</table>