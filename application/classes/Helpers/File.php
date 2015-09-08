<?php
class Helpers_File{
	public $_kilobajt = 1024;
	public $_megabajt = 1048576;
	public $_gigabajt = 1073741824;
	
	static function size($size)
	{
		if($size > 1024)
		{
			if($size > 1048576 )
			{
				if( $size > 1073741824 )
				{
					$size = round($size/1073741824, 2);
					return $size.'GB';
				}
				else 
				{
					$size = round($size/1048576, 2);
					return $size.'MB';
				}
			}
			else 
			{
				$size = round($size/1024, 2);
				return $size.'KB';
			}
		}
		else 
		{
			return $size.'B';	
		}
	}
	static function preview_file($director, $filename, $type)
	{
		if(strpos($type, 'image') !== false)
		{
			return '<a href="'.$director.'/'.$filename.'" data-lightbox="image" data-title="'.$filename.'">'.$filename.'</a>';
		}
		else 
		{
			return '<a href="'.$director.'/'.$filename.'" target="_blank">'.$filename.'</a>';
		}
	}
	static function file_icon($type)
	{
		$_word_type = array(
			'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
			'application/msword'
		);
		$_excel_type = array(
			'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
			'application/vnd.ms-excel'
		);
		$_powerpnt_type = array(
			'application/vnd.openxmlformats-officedocument.presentationml.presentation',
			'application/vnd.ms-powerpoint'
		);
		$_pdf_type = array(
			'application/pdf'
		);
		$_image_icon = array(
			'image/jpeg',
			'image/png',
			'image/gif'
		);
		$_video_icon = array(
			'video/x-ms-wmv'
		);
		$_archive_icon = array(
			'application/zip',
			'application/x-rar',
			'application/x-7z-compressed'
		);
		if(in_array($type, $_word_type))
		{
			return '<img src="/public/static/template/admin/images/icons/office-word.png" alt="Word icon" />';
		}
		else if(in_array($type, $_excel_type))
		{
			return '<img src="/public/static/template/admin/images/icons/office-excel.png" alt="Excel icon" />';
		}
		else if(in_array($type, $_powerpnt_type))
		{
			return '<img src="/public/static/template/admin/images/icons/office-powerpnt.png" alt="PowerPoint icon" />';
		}
		else if(in_array($type, $_pdf_type))
		{
			return '<img src="/public/static/template/admin/images/icons/pdf.png" alt="PDF icon" />';
		}
		else if(in_array($type, $_image_icon)) 
		{
			return '<img src="/public/static/template/admin/images/icons/photo.png" alt="Photography icon" />';
		}
		else if(in_array($type, $_video_icon))
		{
			return '<img src="/public/static/template/admin/images/icons/video.png" alt="Video icon" />';
		}
		else if(in_array($type, $_archive_icon))
		{
			return '<img src="/public/static/template/admin/images/icons/archive.png" alt="Archive icon" />';
		}
		else 
		{
			return $type;	
		}
		
	}
}
