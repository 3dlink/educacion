<?php
	$path = "uploads/student_image/";

	$valid_formats = array("jpg", "JPG");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_FILES['photo-image-alumno']['name'];
		$size = $_FILES['photo-image-alumno']['size'];
		if(strlen($name))
			{
				list($txt, $ext) = explode(".", $name);
				if(in_array($ext,$valid_formats))
				{
				if($size<(1024*1024))
					{
						$actual_image_name = $name;
						$tmp = $_FILES['photo-image-alumno']['tmp_name'];
						if(move_uploaded_file($tmp, $path.$actual_image_name))
							{
								echo "<img src='../uploads/student_image/".$actual_image_name."'  class='preview'>";
							}
						else
							echo "Cargar imagen nuevamente";
					}
					else
						echo "Tamaño maximo de imagen 1 MB";
					}
					else
						echo "Formato invalido..";
			}

		else
			echo "Seleccione imagen..!";

		exit;
	}
?>