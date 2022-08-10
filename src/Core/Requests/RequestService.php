namespace Andersontf\SimpleRoute\Core\Requests;

class RequestService {
    static function explodeAccepts($accepts){
        return explode(",", $accepts);
    }
}