<?php

header("Content-Type: text/html; charset=windows-1252");
$data = file_get_contents("gjeldende/index.html");


// vi setter inn innehold etter første avsnitt

$offset = 0;
for ($i = 0; $i < 2; $i++)
{
	$offset = strpos($data, "<p", $offset+1);
}

echo substr($data, 0, $offset);

echo '<p style="text-align: center; font-size: 110%; font-style: italic">For arkiv over tidligere dokumenter: <a href="https://foreningenbs.no/statutter/arkiv/">https://foreningenbs.no/statutter/arkiv/</a></p>';

echo substr($data, $offset);

die;

echo $data;
