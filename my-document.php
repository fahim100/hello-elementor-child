<?php
function my_document_shortcode(){
    ob_start(); ?>
    <?php
    $user_id = get_current_user_id();
    ?>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Document Name</th>
                        <th scope="col">Added on Your Account</th>
                        <th scope="col">Download Document</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    if( have_rows('my_document', 'user_'.$user_id) ):

                        $i = 1;
                        while( have_rows('my_document', 'user_'.$user_id) ) : the_row();
                            $doc_name = get_sub_field('document_name', 'user_'.$user_id);
                            $doc_url = get_sub_field('download_document', 'user_'.$user_id); 
                            $newDate = $doc_url['date'];
                            $newDate = date( 'j/n/Y \a\t g:iA', strtotime($newDate) );
                            ?>
                                
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $doc_name; ?></td>
                                <td><?php echo $newDate; ?></td>
                                <td>
                                    <a class="doc-download" href="<?php echo $doc_url['url']; ?>" download="<?php echo $doc_name; ?>">
                                        <i class="ri-download-line"></i>
                                        <span>Download Now</span>
                                    </a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endwhile;
                    else :
                        echo 'No document Found';
                    endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php return ob_get_clean();
}