<?php if(!@defined('_lib')) die("Error");
session_start();

	#========= Thông tin nhân viên ==============
@define ( '_contact_email' , "noname.nina@gmail.com" );
@define ( '_contact_yahoo' , "" );
@define ( '_contact_skype' , "" );
@define ( '_contact_phone' , "032.00113" );
@define ( '_updating' , "Đang cập nhật thông tin" );

#========= Đường dẫn upload hình ảnh ==============
defined('_DS') ? null : define('_DS', DIRECTORY_SEPARATOR);
@define ( '_upload_tintuc_l' , 'upload/news/' );
@define ( '_upload_thumb' , '../upload/_thumb/' );
@define ( '_upload_thumb_l' , 'upload/_thumb/' );
@define ( '_upload_hinhanh' , '../upload/hinhanh/' );
@define ( '_upload_hinhanh_l' , 'upload/hinhanh/' );

@define ( '_upload_sanpham' , '../upload/sanpham/' );
@define ( '_upload_sanpham_l' , 'upload/sanpham/' );

@define ( '_upload_khac' , '../upload/khac/' );
@define ( '_upload_khac_l' , 'upload/khac/' );

@define ( '_upload_hinhthem' , '../upload/hinhthem/' );
@define ( '_upload_hinhthem_l' , 'upload/hinhthem/' );
#========= Các kiểu định dạng ==============

@define ( '_format_duoihinh' , "jpg|png|jpeg|gif|JPG|PNG|JPEG|GIF");
@define ( '_format_duoitailieu' , "doc|xls|ppt|pdf|rar|win|zip|docx|pptx|xlsx|DOC|XLS|PPT|PDF|RAR|WIN|ZIP|DOCX|PPTX|XLSX");
@define ( '_format_duoixemtailieu' , "doc|xls|ppt|pdf|DOC|XLS|PPT|PDF");
@define ( '_format_duoitatca' , "doc|xls|ppt|pdf|rar|win|zip|docx|pptx|xlsx|DOC|XLS|PPT|PDF|RAR|WIN|ZIP|DOCX|PPTX|XLSX|txt|TXT|xml|XML|html|HTML|png|PNG|gif|GIF|jpg|JPG|");

@define ( '_format_duoihinh_l' , "<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .jpg, .png, .jpeg, .gif &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>");
@define ( '_format_duoitailieu_l' , "<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; doc, .xls, .ppt, .pdf, .rar, .win, .zip &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>");
@define ( '_format_duoixemtailieu_l' , "<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; .doc, .xls, .ppt, .pdf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>");
@define ( '_format_link_l' , "<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; http://tenmien &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>");
@define ( '_format_video_l' , "<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; https://www.youtube.com/watch?v=<span style='color:red;'>6DlstZn6WvI</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copy phần link màu đỏ&nbsp;&nbsp;&nbsp;&nbsp;</strong>");

// constant các giá trị phân quyền
const AUTH_ACCESS_READ = 1;
const AUTH_ACCESS_CREATE = 2;
const AUTH_ACCESS_UPDATE = 4;
const AUTH_ACCESS_DELETE = 8;

const ADMIN_ROOT = 1;

