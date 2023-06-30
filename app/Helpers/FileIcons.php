<?php

namespace App\Helpers;

function getFileIcon($fileName) {
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    switch ($extension) {
        case 'sql':
            return 'assets/media/svg/files/sql.svg';
        case 'pdf':
            return 'assets/media/svg/files/pdf.svg';
        case 'doc':
            return 'assets/media/svg/files/doc.svg';
        case 'docx':
            return 'assets/media/svg/files/docx.svg';
        case 'xls':
            return 'assets/media/svg/files/xls.svg';
        case 'xlsx':
            return 'assets/media/svg/files/xlsx.svg';
        case 'png':
            return 'assets/media/svg/files/png.svg';
        case 'jpg':
            return 'assets/media/svg/files/jpg.svg';
        case 'jpeg':
            return 'assets/media/svg/files/jpeg.svg';
        case 'mp4':
            return 'assets/media/svg/files/mp4.svg';
        case 'avi':
            return 'assets/media/svg/files/avi.svg';
        case 'mov':
            return 'assets/media/svg/files/mov.svg';
        case 'php':
            return 'assets/media/svg/files/php.svg';
        case 'txt':
            return 'assets/media/svg/files/txt.svg';
        default:
            return 'assets/media/svg/files/default.svg';
    }
}
