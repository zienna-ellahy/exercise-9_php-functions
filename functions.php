<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function makeCoffee($type) {
  if ($type == 'latte') {
    echo '<p>A latte is a shortened version of the Italian word, caffè latte, which means milk coffee. Lattes contain a shot of espresso and steamed milk.</p>';
  } else if ($type == 'espresso') {
    echo '<p>Highly concentrated Italian coffee served in a single standard shot.</p>';
  } else {
    echo '<p>That&rsquo;s not a real coffee.</p>';
  }
}