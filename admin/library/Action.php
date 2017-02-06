<?php
/**
 * Created by PhpStorm.
 * User: s7eel
 * Date: 29.10.2016
 * Time: 10:30
 * Главный класс по действиям пользователя
 */
class Action{

	protected $template_name;
	protected $catStorage;

	/**
	 * Action constructor.
	 * @param $template
	 * @param $db
	 * Функция конструктора, принимающая тимплейт и как свойство - экземпляр
	 * класса MainStorage, являющийся соединением с базой данных и несущий
	 * основные функции
	 */
	public function __construct($template, $db){
	    $this->template_name = $template;
		$this->catStorage = new MainStorage($db);
	}

	/**
	 * Функция перенаправки на индексную страницу
	 */
	public function redirect(){
		header('Location:'.$_SERVER['PHP_SELF']);
	}

	/**
	 * Основная страница вывода каталогов с заглавными фотографиями и всеми данными, плюс
	 * поля формы для обработки данных в зависимости от пользователя
	 */
	public function showcatalogs(){
		$title = 'Show all catalogs';
		$layout_name = 'layouts/showcatalog.php';
		$catalogs = $this->catStorage->getcatalogs();
		include_once $this->template_name;
	}

	/**
	 * Изменение титлов каталогов, получение айди каталога для изменения по форме,
	 * Получение из базы данных - данных о каталоге и выведение их в новом тимплейте
	 * для дальнейшей обработки с помощью savetitle();
	 */
	public function changetitle(){
		$id = filter_input(INPUT_POST, 'id');
		if($id) {
			$title = 'Change titles of catalogs';
			$layout_name = 'layouts/changetitle.php';
			$catalogs = $this->catStorage->getcatalogByid($id);
			include_once $this->template_name;
		}else{
			die('NOT ENOUGH DATA FOR PROCESS');
		}
	}

	/**
	 * Получение титлов из формы changetitle(); и занесение новых данных в БД
	 */
	public function savetitle(){
		$id = filter_input(INPUT_POST, 'id');
		$title1 = filter_input(INPUT_POST, 'title1');
		$title2 = filter_input(INPUT_POST, 'title2');
		if(!empty($id)&&!empty($title1)&&!empty($title2)){
			$this->catStorage->savetitle($id, $title1, $title2);
			$this->redirect();
		}else{
			die('NOT ALL DATA');
		}
	}
	/**
	 * Получение исходной высоты главного фото каталога, id каталога, и изменение
	 * данного показателя в зависимости  от пользователя
	 */
	public function changeheight(){
		$id = filter_input(INPUT_POST, 'id');
		$height = filter_input(INPUT_POST, 'height');
		if($height){
			if($height=='1'){
				$height='2';
			}else{
				$height='1';
			}
		}
		if(!empty($id)){
			$this->catStorage->changeHeightFoto($id, $height);
			$this->redirect();
		}else{
			die('something has happened :-(');
		}
	}
	/**
	 * Изменение местоположения каталога относительно каталогов
	 * Получение каталога по айди, выведение новой страницы с данным каталогом
	 */
	public function changecategory(){
		$title = 'change category of catalog';
		$id = filter_input(INPUT_POST, 'id');
		$layout_name = 'layouts/changecategory.php';
		$catalogs = $this->catStorage->getcatalogByid($id);
		if($catalogs){
			include_once $this->template_name;
		}else{
			die('something has happened :-( during last page');
		}
	}

	/**
	 * Принимает в массив все инпуты из формы, передающие наименование каталога,
	 * обрезаем пробелы с начала и конца строки и зашиваем в БД
	 */
	public function savecatalog(){
		$id = filter_input(INPUT_POST, 'id');
		$class = array(
			filter_input(INPUT_POST, 'interio_work'),
			filter_input(INPUT_POST, 'interio_life'),
			filter_input(INPUT_POST, 'furniture'),
			filter_input(INPUT_POST, 'landscape'),
		);
		$class = trim(implode(' ', $class));
		if($this->catStorage->savecatalog($id, $class)){
			$this->redirect();
		}else{
			die('something has happened :-( during last page');
		}
	}
	/**
	 * Добавление каталога, тут надо доделать внутри функции дефолтное значение $link и
	 * передавать его внутрь функции addcatalogdata();
	 */
	public function addcatalog(){
		$main_foto_id = "Y";
		$title1 = filter_input(INPUT_POST, 'title1');
		$title2 = filter_input(INPUT_POST, 'title2');
		$height = filter_input(INPUT_POST, 'height');
		$class = array(
			filter_input(INPUT_POST, 'interio_work'),
			filter_input(INPUT_POST, 'interio_life'),
			filter_input(INPUT_POST, 'furniture'),
			filter_input(INPUT_POST, 'landscape'),
		);
		$class = trim(implode(' ', $class));
		$main_foto = $_FILES['main_foto'];
		if($main_foto['error']===4){
			//Код отработает если не введена заглавная фотография
			if(!empty($title1)&&!empty($title2)&&!empty($height)&&!empty($class)){
				//Возвращает айди вновь образованного каталога, для дальнейшей вставки дефолтного фото на главную страницу
				$res = $this->catStorage->addcatalogdata($title1, $title2, $height, $class);
				//Добавление дефолтного фото
				if($res != FALSE){
					$this->catStorage->addmainfoto($res, $link='default.jpg', $main_foto_id);
					$this->redirect();
				}else{
					die('I cant add default main_foto'.__LINE__);
				}

			}
			die('NOT ALL DATA in title1, title2, height, class'.__LINE__);
		}else{
			//Код отработает если введена заглавная фотография
			$types = array("image/jpeg",);
			if ($main_foto['error'] == UPLOAD_ERR_OK) {
				if (in_array($main_foto['type'], $types)) {
					if ($main_foto['size'] <= 3 * 1024 * 1024) {//Не более 3 мб
						$file_name_parts = explode('.',$main_foto['name']);
						$file_extension = array_pop($file_name_parts);
						$file_base_name = implode('',$file_name_parts);
						$file_name = md5($file_base_name.rand(1, getrandmax()));
						$file_name.='.'.$file_extension;
						$path = '../assets/img/projects/images/' . $file_name;
						//Вносим титлы и др инфо без фото, получаем айди новосозданного каталога до переноса фото
						//в сновную папку с фото
						if(!empty($title1)&&!empty($title2)&&!empty($height)&&!empty($class)){
							$res = $this->catStorage->addcatalogdata($title1, $title2, $height, $class);
						}else{
							die('NOT ALL DATA in title1, title2, height, class'.__LINE__);
						}
						if (move_uploaded_file($main_foto['tmp_name'], $path)) {
						//Переносим фото в основную папку, спрашиваем были ошибка при внесении других данных
						// и вносим фото как заглавное
								if($res != FALSE){

									$this->catStorage->addmainfoto($res, $file_name, $main_foto_id);
									$this->redirect();
								}
									die('I cant add main_foto into table');
						} else {
							$message = "problem with moving";
						}
					} else {
						$message = "file is too large";
					}
				} else {
					$message = "invalid type of file";
				}
			} else {
				switch ($main_foto['error']) {
					case UPLOAD_ERR_INI_SIZE:
						$message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
						break;
					case UPLOAD_ERR_FORM_SIZE:
						$message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
						break;
					case UPLOAD_ERR_PARTIAL:
						$message = "The uploaded file was only partially uploaded";
						break;
					case UPLOAD_ERR_NO_FILE:
						$message = "No file was uploaded";
						break;
					case UPLOAD_ERR_NO_TMP_DIR:
						$message = "Missing a temporary folder";
						break;
					case UPLOAD_ERR_CANT_WRITE:
						$message = "Failed to write file to disk";
						break;
					case UPLOAD_ERR_EXTENSION:
						$message = "File upload stopped by extension";
						break;
					default:
						$message = "Unknown upload error";
						break;
				}
			}
			if (!empty($message)) {
				echo $message;
			}
		}
	}

	/**
	 * Удаление каталога из базы данных, необходимо скорее всего добавить дополнительный
	 * вопрос через JS о подтверждении удаления
	 */
	public function deletecatalog(){
		$id = filter_input(INPUT_POST, 'id');
		//Так будем удалять
		//unlink('../assets/img/projects/images/f63faaac030ab4b641af29b906dccb3f.jpg');
		//$array_foto_catalog = $this->catStorage->getfotobyID($id);
		//По логике сейчас надо удалить все фото из папки, потом все ссылки из БД, потом
		//удалить все из таблицы main;
//			echo "<pre>";
//			var_dump($array_foto_catalog);
//			echo "</pre>";
		$result = $this->catStorage->deleteCatalogById($id);
		if($result){
			$this->redirect();
		}else{
			die('something went wrong during delete'.__LINE__);
		}


	}
	public function changefoto(){
		$id = filter_input(INPUT_POST, 'id');
		$title = 'change foto inside catalog';
		$layout_name = 'layouts/showfotocatalog.php';
		$arr_foto = $this->catStorage->getfotobyID($id);
		include_once $this->template_name;


	}

	public function deletefotobyID(){
		$id = $_GET['id'];
		echo 'hihihihihihihihihihihihihihihihihihihihihihihihihihihi'.$id;
	}


















}