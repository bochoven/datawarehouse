<?php
class UploadException extends Exception 
{ 
    public function __construct($code) { 
        $message = $this->codeToMessage($code); 
        parent::__construct($message, $code); 
    } 

    private function codeToMessage($code) 
    { 
        switch ($code) { 
            case UPLOAD_ERR_INI_SIZE:
                $post_max_size = convertPHPSizeToBytes(ini_get('post_max_size'));
                $upload_max_filesize = convertPHPSizeToBytes(ini_get('upload_max_filesize'));
                if($post_max_size < $upload_max_filesize)
                {
                    $message = "The uploaded file exceeds the post_max_size directive in php.ini (".ini_get('post_max_size').")";
                }
                else
                {
                    $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini (".ini_get('upload_max_filesize').")";
                }
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
        return $message; 
    } 
} 

function convertPHPSizeToBytes($sSize)  
{  
    //This function transforms the php.ini notation for numbers (like '2M') to an integer (2*1024*1024 in this case)  
    $sSuffix = substr($sSize, -1);  
    $iValue = substr($sSize, 0, -1);  
    switch(strtoupper($sSuffix)){  
    case 'P':  
        $iValue *= 1024;  
    case 'T':  
        $iValue *= 1024;  
    case 'G':  
        $iValue *= 1024;  
    case 'M':  
        $iValue *= 1024;  
    case 'K':  
        $iValue *= 1024;  
        break;  
    }  
    return $iValue;  
} 