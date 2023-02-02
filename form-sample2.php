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
        <?php echo '心理テスト' ?>
      </h1>
      <p>
        <?php
        $p_word = 'あなたの心理を調べます';
        echo $p_word;
        ?>
      </p>

      <form id="qform" action='form-answer.php' method='post'>

        <?php
        $items = [
          [
            'qid' => 'q1',
            'q' => '質問１',
            'ask' => '周りを気にする方だ',
            'answer_type' => 'radio',
            'answers' => [
              'check_box1' => 'はい',
              'check_box2' => 'どちらかといえばはい',
              'check_box3' => 'どちらともない',
              'check_box4' => 'どちらかといえばいいえ',
              'check_box5' => 'いいえ',
            ],
          ],
          [
            'qid' => 'q2',
            'q' => '質問２',
            'ask' => '相手の間違いを指摘できる方だ',
            'answer_type' => 'radio',
            'answers' => [
              'check_box1' => 'はい',
              'check_box2' => 'どちらかといえばはい',
              'check_box3' => 'どちらともない',
              'check_box4' => 'どちらかといえばいいえ',
              'check_box5' => 'いいえ',
            ],
          ],
          [
            'qid' => 'q3',
            'q' => '質問３',
            'ask' => '真面目な正確な方だ',
            'answer_type' => 'radio',
            'answers' => [
              'check_box1' => 'はい',
              'check_box2' => 'どちらかといえばはい',
              'check_box3' => 'どちらともない',
              'check_box4' => 'どちらかといえばいいえ',
              'check_box5' => 'いいえ',
            ],
          ],
          [
            'qid' => 'q4',
            'q' => '質問４',
            'ask' => '家族を大切にする方だ',
            'answer_type' => 'radio',
            'answers' => [
              'check_box1' => 'はい',
              'check_box2' => 'どちらかといえばはい',
              'check_box3' => 'どちらともない',
              'check_box4' => 'どちらかといえばいいえ',
              'check_box5' => 'いいえ',
            ],
          ],
          [
            'qid' => 'q5',
            'q' => '質問５',
            'ask' => '軽率に考える方だ',
            'answer_type' => 'check',
            'answers' => [
              'check_box1' => 'はい',
              'check_box2' => 'どちらかといえばはい',
              'check_box3' => 'どちらともない',
              'check_box4' => 'どちらかといえばいいえ',
              'check_box5' => 'いいえ',
            ],
          ],
        ];

        foreach ($items as $item) {

          $answerDOM = '';
          if ($item['answer_type'] == 'radio') {
            foreach ($item['answers'] as $key => $answer) {
              
              $answerDOM = $answerDOM . '
                <div>
                  <input type="radio" id="' . "{$item['qid']}_{$key}" . '" name="' . $item['qid'] . '" value="' . $answer . '">
                  <label for="' . "{$item['qid']}_{$key}" . '">' . $answer . '</label>
                </div>
              ';
            }
  

          } else if ($item['answer_type'] == 'check') {
            foreach ($item['answers'] as $key => $answer) {
              $answerDOM = $answerDOM . '
                <div>
                  <input 
                    type="checkbox" 
                    id="' . "{$item['qid']}_{$key}" . '" 
                    name="' . $item['qid'] . '[]" 
                    value="' . $answer . '"
                  >
                  <label for="' . "{$item['qid']}_{$key}" . '">' . $answer . '</label>
                </div>
              ';
            }
          } else {
            $answerDOM = '=== 回答がありません。 ===';
          }

          
          echo '
          <div class="form-item">
            <div class="question">
              <h3>' . $item['q'] . '</h3>
              <p>' . $item['ask'] . '</p>
            </div>
            <div class="answer">
              ' . $answerDOM . '
            </div>
          </div>
          ';
          }
          // foreach ($items as $item) {


          //   echo '
          //   <div class="form-item">
          //     <div class="question">
          //       <h3>' . $item['q'] . '</h3>
          //       <p>' . $item['ask'] . '</p>
          //     </div>
          //     <div class="answer">
          //       <div>
          //         <input type="radio" name="' . $item['qid'] . '" value="はい">
          //         <label>' . $item['check_box1'] . '</label>
          //       </div>
          //       <div>
          //         <input type="radio" name="' . $item['qid'] . '" value="どちらかといえばはい">
          //         <label>' . $item['check_box2'] . '</label>
          //       </div>
          //       <div>
          //         <input type="radio" name="' . $item['qid'] . '" value="どちらともいえない">
          //         <label>' . $item['check_box3'] . '</label>
          //       </div>
          //       <div>
          //         <input type="radio" name="' . $item['qid'] . '" value="どちらかといえばいいえ">
          //         <label>' . $item['check_box4'] . '</label>
          //       </div>
          //       <div>
          //         <input type="radio" name="' . $item['qid'] . '" value="いいえ">
          //         <label>' . $item['check_box5'] . '</label>
          //       </div>
          //     </div>
          //   </div>
          //   ';
          //   }
        ?>

        <input class="bn632-hover bn26" type=submit value="送信">

      </form>

    </div>

    <script type="text/javascript">
      document.getElementById('qform').onsubmit = function(event) {
        let form = document.getElementById('qform');
        let isQ1Checked = false;
        for( const q1Ele of form.q1 ) {
          if( q1Ele.checked ) {
            isQ1Checked = true;
            break;
          }
        }
        let isQ2Checked = false;
        for( const q2Ele of form.q2 ) {
          if( q2Ele.checked ) {
            isQ2Checked = true;
            break;
          }
        }
        let isQ3Checked = false;
        for( const q3Ele of form.q3 ) {
          if( q3Ele.checked ) {
            isQ3Checked = true;
            break;
          }
        }
        let isQ4Checked = false;
        for( const q4Ele of form.q4 ) {
          if( q4Ele.checked ) {
            isQ4Checked = true;
            break;
          }
        }
        let isQ5Checked = false;
        for( const q5Ele of form['q5[]'] ) {
          if( q5Ele.checked ) {
            isQ5Checked = true;
            break;
          }
        }
        
        if(isQ1Checked && isQ2Checked && isQ3Checked && isQ4Checked && isQ5Checked) {
          return true;
        } else {
          return false;
        }

      };
    </script>

  </body>
</html>