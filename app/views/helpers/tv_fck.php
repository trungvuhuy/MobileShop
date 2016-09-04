<?php

/**
 * @author        Vo Van Tien <vantienvnn@gmail.com>
 * @package       cake
 * @subpackage    cake.app.helpers
 * @version       CakePHP(tm) >= v 1.3
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 */
class TvFckHelper extends AppHelper {

    var $helpers = array('Html', 'Form', 'Js');

    function create($fieldName,$options=array()) {
        // Mặc định nếu ko định nghĩa chọn toolbar loại nào sẽ sử dụng loại simple
        // Mặc định nếu ko định nghĩa chọn ngôn ngữ nào loại nào sẽ sử dụng ngôn ngữ tiếng việt
        $options+=array('toolbar' => 'simple','language'=>'vi');
        
        //định nghĩa trước một số kiểu toolbar trước

        switch ($options['toolbar']) {
            case 'extra':
                $options['toolbar'] = array(array('Preview'),array('Source'),array('Save'),array('NewPage'), array('PasteFromWord', '-', 'Print'), array('Undo', 'Redo', '-', 'Find', 'Replace', '-', 'RemoveFormat'), array('Bold', 'Italic', 'Underline', 'Strike', '-', 'Subscript', 'Superscript'), array('NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'), array('JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'), array('Link', 'Anchor'), array('Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak'), array('Styles', 'Format', 'Font', 'FontSize'), array('TextColor', 'BGColor'), array('ShowBlocks', 'Maximize'));
                /*
                 * Nếu bạn khai báo phần tử image,flash,file và cho phép người sử dụng upload lên server thì phải cài đặt các chức năng tương ứng sau
                 */
                /* File upload url */
                $options['filebrowserUploadUrl'] = $this->webroot . "js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
                /* Image upload url */
                $options['filebrowserImageUploadUrl'] = $this->webroot . "js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
                /* Flash upload url */
                $options['filebrowserFlashUploadUrl'] = $this->webroot . "js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";
                /* Xem file đã upload */
                $options['filebrowserBrowseUrl'] = $this->webroot . "js/ckfinder/ckfinder.html";
                /* Xem images đã upload */
                $options['filebrowserImageBrowseUrl'] = $this->webroot . "js/ckfinder/ckfinder.html?Type=Images";
                /* Xem flash đã upload */
                $options['filebrowserFlashBrowseUrl'] = $this->webroot . "js/ckfinder/ckfinder.html?Type=Flash";
                break;
            case 'users':
                $options['toolbar'] = array(array('Preview', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'), array('Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Anchor', 'Image', 'Table', 'Smiley'), array('FontSize', 'TextColor', 'BGColor'), array('Undo', 'Redo', 'RemoveFormat', 'PasteFromWord'), array('Maximize'));
                break;
            /* your case here ... */
            default:
                $options['toolbar'] = array(array('Preview', 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', 'Smiley', 'SpecialChar'), array('FontSize', 'TextColor', 'BGColor'), array('RemoveFormat'));
        }
        $attributes = $this->Form->_initInputField($fieldName, array());
        return $this->Html->scriptBlock("CKEDITOR.replace('" . $attributes['id'] . "',{{$this->Js->_parseOptions($options)}});");
    }

}