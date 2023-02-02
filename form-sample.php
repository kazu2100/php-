<!DOCTYPE html>
<html>
  <head>
    <title>サンプルフォーム</title>
    <link rel="stylesheet" href="./form.css">
    <style>
      body {
        background-color: rgb(0, 187, 255);
      }
      .box {
        background-color: white;
        padding: 50px;
        width: 600px;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
      }
      .form-item {
        display: flex;
      }
      .question, .answer {
        flex: 1;
      }
      .answer {
        padding: 1rem;
      }

      
/* solid020 */
.button_solid020 a {
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 240px;
    padding: 10px 25px 10px 60px;
    color: #FFF;
    transition: 0.3s ease-in-out;
    font-weight: 600;
    background: #6bb6ff;
    filter: drop-shadow(0px 2px 4px #ccc);
    border-radius: 1px;
}
.button_solid020 a:before {
    content: "";
    width: 30px;
    height: 90%;
    position: absolute;
    background: #FFF;
    left: 14px;
    top: -1px;
    clip-path: polygon(100% 0%, 100% 100%, 50% 75%, 0 100%, 0 0);
}
.button_solid020 a:after {
    font-family: "Font Awesome 5 Free";
    content: "\f7d9";
    position: absolute;
    left: 20px;
    top: 7%;
    color: #6bb6ff;
}
.button_solid020 a:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 30px -5px rgb(0 0 0 / 15%), 0 0 5px rgb(0 0 0 / 10%);
}

    </style>
  </head>
  <body>

    <div class="box">
      <h1>
        <?php echo 'ホゲホゲ' ?>
      </h1>
      <p>
        <?php
        $p_word = 'フガフガフガフガフガフガフガフガ';
        echo $p_word;
        ?>
      </p>

      <form action='form-answer.php' method='post'>

        <?php
        $h3 = ['質問１', '質問２', '質問３'];
        $p = ['相手の間違いを指摘できる方だ', 
        '相手の間違いを指摘できる方だ',
        'この中で一番好きな食べ物はどれ？'
        ];  
        $radio_button = ['H' => 'Huey', 
        'D' => 'Dowey', 
        'L' => 'Louie'];
        $check_box = ['はい',
        'どちらかといえばはい',
        'どちらともいえない',
        'どちらかといえばいいえ',
        'いいえ'];
        $radio_button2 = [
        'カニクリームコロッケ',
        'お好み焼き',
        '鶏の唐揚げ'
        ];
        ?>

        <div class="form-item">
          <div class="question">
            <h3>
              <?php
              echo $h3[0];
              ?>
            </h3>
            <p>
              <?php 
              echo $p[0];
              ?>
            </p>
          </div>
          <div class="answer">
            <div>
              <input type="radio" id="huey" name="drone" value="Huey">
              <label for="huey">
                <?php echo $radio_button['H']; ?>
              </label>
            </div>

            <div>
              <input type="radio" id="dewey" name="drone" value="Dewey">
              <label for="dewey">
                <?php echo $radio_button['D']; ?>
              </label>
            </div>
      
            <div>
              <input type="radio" id="louie" name="drone" value="Louie">
              <label for="louie">
                <?php echo $radio_button['L']; ?>
              </label>
            </div>
          </div>
        </div>

        <div class="form-item">
          <div class="question">
            <h3>
              <?php echo $h3[1]; ?>
            </h3>
            <p>
              <?php echo $p[1]; ?>
            </p>
          </div>
          <div class="answer">
            <input type="checkbox" name="mistake" value="はい">
            <?php echo $check_box[0]; ?> <br>
            <input type="checkbox" name="mistake" value="どちらかといえばはい">
            <?php echo $check_box[1]; ?> <br>
            <input type="checkbox" name="mistake" value="どちらともいえない">
            <?php echo $check_box[2]; ?> <br>
            <input type="checkbox" name="mistake" value="どちらかといえばいいえ">
            <?php echo $check_box[3]; ?> <br>
            <input type="checkbox" name="mistake" value="いいえ">
            <?php echo $check_box[4]; ?> <br>
          </div>
        </div>
        
        <div class="form-item">
          <div class="question">
            <h3>
              <?php echo $h3[2]; ?>
            </h3>
            <p>
              <?php echo $p[2]; ?>
            </p>
          </div>
          <fieldset class="answer">

            <div>
              <input type="radio" id="crab" name="q3" value="カニクリームコロッケ" checked>
              <label for="crab">
                <?php echo $radio_button2[0]; ?>
              </label>
            </div>

            <div>
              <input type="radio" name="q3" value="お好み焼き">
              <label for="okono">
                <?php echo $radio_button2[1]; ?>
              </label>
            </div>

            <div>
              <input type="radio" name="q3" value="鶏の唐揚げ">
              <label for="friedchicken">
                <?php echo $radio_button2[2]; ?>
              </label>
            </div>

          </fieldset>
        </div>

        <input class="bn632-hover bn26" type=submit value="送信">
        <div class="button_solid020">
          <a href="#">ちょっと待った</a>
        </div>

      </form>

    </div>

  </body>
</html>