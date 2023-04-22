<?
namespace App\Traits;
 
trait GlobalTrait {
      
    public function filter_tiltle($str)
    {
        return  str_replace(array("/", "\\", ":", "*", "?", "«", "<", ">", "|",","), "-", $str);
    }
}
?>