<?php
/**
 * Counter block template.
 *
 * @param string $block The block settings and attributes.
 */

 $blockTitle = get_field("block_title");
 $subTitle = get_field("sub_title");
 $block_id = !empty($block['id']) ? $block['id'] : 'block-' . uniqid();
?>
<section
  id="counter-block-<?php echo $block_id ?>" 
  class="counter-block col-sm-12"
>
  <div class="num-counter-wrapper">
    <h2>0</h2>
  </div>
  <div class="title-wrapper">
    <h3><?php echo $blockTitle ?></h3>
  </div>
  <div class="subTitle-wrapper">
    <p>Without Clean SITENAME We Can’t <span class="subTitle_typewriter">Survive</span></p>
  </div>
</section>

<script type="text/javascript">
  let counterEle = document.querySelector('.num-counter-wrapper h2');  
  let counterText = counterEle.innerText;
  let counter = 0;

  function finalNum() {
    counterEle.innerText = '4,000,000,000';
  }
   
  let interval = setInterval(() => {
    counter += 1123;
    counterEle.innerText = counter;

    if (counter == 10000) {
      counter = counter + 1000000
    } else if (counter >= 1000000) {
      counter = counter + 10000000
    } else if (counter >= 10000000) {
      counter = counter + 100000000
    }

    if (counter >= 4000000000) {
      clearInterval(interval);
      finalNum()
    }
        
  }, 10 / parseInt(counterText));
    
  let subTitleEle = document.querySelector('.subTitle-wrapper .subTitle_typewriter');
  // let subTitleText = subTitleEle.innerText;

  const words = ["Thrive", "Survive"];
  const speed = 150; // typing speed per character
  const delayBetweenWords = 3000; // delay before switching words
  let wordIndex = 0;

  function typeWord(word, callback) {
    const target = subTitleEle
    target.innerHTML = "";
    let i = 0;

    function typeChar() {
      if (i < word.length) {
        target.innerHTML += word.charAt(i);
        i++;
        setTimeout(typeChar, speed);
      } else {
        setTimeout(callback, delayBetweenWords);
      }
    }

    typeChar();
  }

  function loopWords() {
    typeWord(words[wordIndex], () => {
      wordIndex = (wordIndex + 1) % words.length;
      loopWords();
    });
  }

  loopWords();
</script>