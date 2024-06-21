<?php
$data = 27;
function get_table($tr_cnt, $td_cnt)
{
    $table = '<table border="1" width="100%">';
    for ($tr = 1; $tr <= $tr_cnt; $tr++) {
        $table .= "<tr>";
        for ($td = 1; $td <= $td_cnt; $td++) {
            $table .= "<td>$td * $tr = " . $td * $tr ."</td>";
        }
        $table .= "</tr>";
    }
    $table .= '</table>';
    return $table;
}
