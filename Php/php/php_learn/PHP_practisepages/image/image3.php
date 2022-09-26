<?php
	
	

	function rotate($filename, $degrees) 
	{
		/* 创建图像资源，以jpeg格式为例 */
		$source = imagecreatefromjpeg($filename);
		/* 使用imagerotate()函数按指定的角度旋转 */
		$rotate = imagerotate($source, $degrees, 0);
		/* 将旋转后的图片保存 */
		imagejpeg($rotate, $filename); 
	}
	
	/* 将把一幅图像brophp.jpg旋转 180 度,即上下颠倒 */
	//rotate("test.jpg", 180);

	function cut($filename, $x, $y, $width, $height)
	{
		/* 创建背景图片的资源 */
		$back = imagecreatefromjpeg($filename);
		/* 创建一个可以保存裁剪后图片的资源 */
		$cutimg = imagecreatetruecolor($width, $height);
		
		/* 使用imagecopyresampled()函数对图片进行裁剪 */
		imagecopyresampled($cutimg, $back, 0, 0, $x, $y, $width, $height, $width, $height);
		
		/* 保存裁剪后的图片，如果不想覆盖原图片，可以为裁剪后的图片加上前缀 */
		imagejpeg($cutimg, $filename);
		
		imagedestroy($cutimg);      		//销毁图像资源$cutimg
		imagedestroy($back);        		//销毁图像资源$back
	}

	/* 调用cut()函数去裁剪brophp.jpg图片，从50，50开始裁出宽度和高度都为200像素的图片 */
	//cut("test.jpg", 50, 50, 200, 200);	
	

	function thumb($filename, $width=200, $height=200) {
		/* 获取原图像$filename的宽度$width_orig和高度$hteight_orig */
		list($width_orig, $height_orig) = getimagesize($filename);

		/* 根据参数$width和$height值，换算出等比例缩放的高度和宽度 */
		if ($width && ($width_orig < $height_orig)) {
			$width = ($height / $height_orig) * $width_orig;
		} else {
			$height = ($width / $width_orig) * $height_orig;
		}

		/* 将原图缩放到这个新创建的图片资源中 */
		$image_p = imagecreatetruecolor($width, $height);
		/* 获取原图的图像资源 */
		$image = imagecreatefromjpeg($filename);
		
		/*使用imagecopyresampled()函数进行缩放设置 */
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

		/* 将缩放后的图片$image_p保存， 100（最佳质量，文件最大) */
		imagejpeg($image_p, $filename, 100);
		
		imagedestroy($image_p);     	//销毁图片资源$image_p
		imagedestroy($image);       	//销毁图片资源$image
	}
	
	thumb("test.jpg");  		//将brophp.jpg图片缩放成100x100的小图
	/* thumb("brophp.jpg", 200,2000);  	//如果按一边进行等比例缩放，只需要将另一边给个无限大的值 */
	
	






?>