<?php 
  require_once 'CosineSimilarity.php';

  // $ratings = [
  //   'User A' => [3, null, 5, null, null, null],
  //   'User B' => [2, 3, null, 3, 4, null],
  //   'User C' => [5, 4, 4, null, 5, null],
  //   'User D' => [5, 5, 2, null, 5, 4],
  // ];

  // 1 moba
  // 2 fps
  // 3 battle-royale
  // 4 fighting
  // 5 talkshow

  $ratings = [
    'User A' => [1,2,3,4,5],
    'User B' => [6,7,8,9,10,1,2],
    'User C' => [1,2,3,4,5],
    'User D' => [6, 8, 10, 12, 15],
  ];

  $sim_ab = CosineSimilarity::calc($ratings['User A'], $ratings['User C']); // 0.1669244652224
  $sim_ac = CosineSimilarity::calc($ratings['User C'], $ratings['User D']); // 0.66285976669375
  echo $sim_ab . " dan " . $sim_ac;
?>