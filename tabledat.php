<?php
#eventboard: the Mount Sentinel scoreboard
#(C) Copyright 2010-2011 Nicholas Paun. All Rights Reserved.

$csv = file('sports-day.2013.csv');


echo("<table>\n");

foreach($csv as $l_num => $line)
 {
  $entry = explode(',',trim($line));

  echo(" <tr>\n");

  foreach($entry as $c_num => $column)
   {
    $column_num = (int) key($entry);
    $column = str_replace('"','',$column);

    if ($l_num == 0)
     echo("  <th class='team-$c_num'>$column</th>\n");
    else
     echo("  <td>$column</td>\n");

    if (is_numeric($column))
      {
       @$total[$c_num] += $column;
      }
   }
 
  echo(" </tr>\n");
 }

if (is_array($total))
 {
foreach (@$total as $teamtot)
 {
  @$totalhtml .= "<th>$teamtot</th>\n";
 }
}
echo <<<EOF
<tr>
<th>Total</th>
$totalhtml
</tr>
EOF;

echo("</table>\n");
