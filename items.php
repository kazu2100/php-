<!DOCTYPE html>
<html>
  <head>
    <title>items sample</title>

    <style>
      .items {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
      }

      .item {
        width: 200px;
        cursor: pointer;
      }
      .item:hover {
        background-color: rgba(0, 0, 0, 0.2);
      }

      .item .item-img-wrap {
        overflow: hidden;
      }
      .item img {
        width: 200px;
        height: 200px;
        transition: 0.3s all;
        object-fit: cover;
      }
      .item:hover img {
        transform: scale(1.2,1.2);
      }

      .item .item-name {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
      }

      .item-price {
        color: red;
        font-weight: bold;
      }
      .item-price-unit {
        font-weight: normal;
        font-size: 14px;
      }
      .tag {
        background-color: orange;
        padding: 2px 4px;
        border-radius: 4px;
        color: white;
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <h1>商品の一覧</h1>

    <div class="items">
    <?php
      $items = [
        [
          "img" => "https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s1048/onepiece01_luffy.png",
          "title" => "ルフィ",
          "price" => "3000",
          "is_shipping_free" => TRUE,
        ],
        [
          "img" => "https://1.bp.blogspot.com/-JWY6R_ha5Uo/X-FcyyDEQyI/AAAAAAABdFI/lYwX7qMA_9wtH4-rWP-_eJT0AGHH4xERgCNcBGAsYHQ/s2048/onepiece20_santaisyou.png",
          "title" => "海軍",
          "price" => "3200",
        ],
        [
          "img" => "https://tc-animate.techorus-cdn.com/resize_image/resize_image.php?image=03231512_605986cd9923e.jpg",
          "title" => "コミック",
          "price" => "3500",
        ],
      ];

      foreach ($items as $item) {
        echo '
        <div class="item">
          <div class="item-img-wrap">
            <img src="' . $item['img'] . '" />
          </div>
          <p class="item-name">' . $item['title'] . '</p>
          <p class="item-price">' . $item['price'] . '<span class="item-price-unit">円</span></p>
          ';
          
          if(isset($item['is_shipping_free']) && $item['is_shipping_free']) {
            echo '<span class="tag">送料無料</span>';
          }

        echo '</div>';
      }
    ?>
    </div>
    
    <div class="items">
      <div class="item">
        <div class="item-img-wrap">
          <img src="https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s1048/onepiece01_luffy.png" />
        </div>
        <p class="item-name">タイトル</p>
        <p class="item-price">3000<span class="item-price-unit">円</span></p>
        <span class="tag">送料無料</span>
      </div>
      <div class="item">
        <div class="item-img-wrap">
          <img src="https://1.bp.blogspot.com/-JWY6R_ha5Uo/X-FcyyDEQyI/AAAAAAABdFI/lYwX7qMA_9wtH4-rWP-_eJT0AGHH4xERgCNcBGAsYHQ/s2048/onepiece20_santaisyou.png" />
        </div>
        <p class="item-name">タイトルタイトルタイトルタイトル</p>
        <p class="item-price">3000<span class="item-price-unit">円</span></p>
      </div>
      <div class="item">
        <div class="item-img-wrap">
          <img src="https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s1048/onepiece01_luffy.png" />
        </div>
        <p class="item-name">タイトルタイトルタイトルタイトル</p>
        <p class="item-price">3000<span class="item-price-unit">円</span></p>
      </div>
      <div class="item">
        <div class="item-img-wrap">
          <img src="https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s1048/onepiece01_luffy.png" />
        </div>
        <p class="item-name">タイトルタイトルタイトルタイトル</p>
        <p class="item-price">3000<span class="item-price-unit">円</span></p>
      </div>
      <div class="item">
        <div class="item-img-wrap">
          <img src="https://1.bp.blogspot.com/-tVeC6En4e_E/X96mhDTzJNI/AAAAAAABdBo/jlD_jvZvMuk3qUcNjA_XORrA4w3lhPkdQCNcBGAsYHQ/s1048/onepiece01_luffy.png" />
        </div>
        <p class="item-name">タイトルタイトルタイトルタイトル</p>
        <p class="item-price">3000<span class="item-price-unit">円</span></p>
      </div>
    </div>
  </body>
</html>