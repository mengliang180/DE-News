<?php
            $post_data=$db->get_data("*","tbl_news",$con,"id DESC","0,100");
            if($post_data!=0){
              foreach($post_data as $row){
                ?>
                    <div class="row mb-1 contain-row">
                    <div class="img-box">
                      <img src="admin\<?php echo$row[4]?>" alt="">
                    </div>
                    <div class="txt-title">
                      <a href="<?php echo BASE_URL?>?<?php echo "menu_id=".$row[7]?>&<?php echo "News_id=".$row[0].""?>"><?php echo $row[2]?></a>
                     <p><?php echo mb_substr(strip_tags($row[3]),0,150,"utf-8")?></p>
                    </div>
                    </div> 
                <?php
              }
            }
            ?> 