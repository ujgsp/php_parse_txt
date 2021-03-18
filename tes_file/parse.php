<?php
$txt_file    = file_get_contents('data.txt');
$rows        = explode("\n", $txt_file);
array_shift($rows);

foreach($rows as $row => $data)
{
    //get row data
    $row_data = explode('^', $data);

    $info[$row]['id']           = $row_data[0];
    $info[$row]['name']         = $row_data[1];
    $info[$row]['description']  = $row_data[2];
    $info[$row]['images']       = $row_data[3];

    //display data
    echo 'Row ' . $row . ' ID: ' . $info[$row]['id'] . '<br />';
    echo 'Row ' . $row . ' NAME: ' . $info[$row]['name'] . '<br />';
    echo 'Row ' . $row . ' DESCRIPTION: ' . $info[$row]['description'] . '<br />';
    echo 'Row ' . $row . ' IMAGES:<br />';

    //display images
    $row_images = explode(',', $info[$row]['images']);

    foreach($row_images as $row_image)
    {
        echo ' - ' . $row_image . '<br />';
    }

    echo '<br />';
}
?>