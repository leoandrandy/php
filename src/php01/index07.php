<?php
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

echo "<br />" . $people[0] . "<br />";

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);
echo '<br />';

$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];

echo $people['person1'];
echo '<br />';

$people = [
  [
    "name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "name" => "Jiro",
    "age" => 20,
    "gender" => "men"
  ],
  [
    "name" => "hanako",
    "age" => 16,
    "gender" => "women"
  ]
];

foreach ($people as $person) {
  echo $person["name"] . "(" . $person["age"] . "歳" . $person["gender"] . ")";
  echo '<br />';
}

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}