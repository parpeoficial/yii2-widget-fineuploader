<?php
/**
 * @author: Steven Cash (toxor88@gmail.com)
 * @copyright: Cash Design
 */

namespace parpe\fineuploader;

/**
 * Class FineuploaderAsset
 *
 * @package toxor88\fineuploader
 */
class FineuploaderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@parpe/fineuploader/assets';
    public $js = [
        'fine-uploader/fine-uploader.min.js'
    ];
    public $css = [
        'fine-uploader/fine-uploader.min.css',
    ];
}
