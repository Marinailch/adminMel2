<?php
function getclassBYname($item){
	$class = explode(" ", $item);
	if (!is_array($class)) {
		switch ($class) {
			case 'interio_life':$item = 'Жилые интерьеры';break;
			case 'interio_work':$item = 'Общественные интерьеры';break;
			case 'landscape':$item = 'Ландшафт';break;
			case 'furniture':$item = 'Мебель';break;
			default:$item = 'Произошла ошибка, сообщите администраторам';

		}
	} else {
		$item = "";
		foreach ($class as $value) {
			switch ($value) {
				case 'interio_life':$item.= 'Жилые интерьеры ';break;
				case 'interio_work':$item.= 'Общественные интерьеры ';break;
				case 'landscape':$item.= 'Ландшафт ';break;
				case 'furniture':$item.= 'Мебель ';break;
				default:$item = 'Произошла ошибка, сообщите администраторам';
			}
		}
	}
	return $item;
}

function getheightOffoto($item){
	if($item==1){
		return $item = '270х260';
	}
	return $item = '270х405';
}