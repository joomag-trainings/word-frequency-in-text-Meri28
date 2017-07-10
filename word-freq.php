<?php
	$words = file_get_contents ("text_file.txt");
print_r(array_count_values(str_word_count($words,1)));


?>




