<?php 
class Flasher{
    public static function setFlash($message, $type, $dismiss, $dead){
        $_SESSION['flash'] = [
            "message" => $message,
            "type" => $type,
            "dismiss" => $dismiss,
            "time" => time(),
            "dead" => $dead
        ];
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            $flash = $_SESSION['flash'];
            if($flash['dismiss']){
                echo "<div class='alert alert-{$flash['type']} alert-dismissible fade show' role='alert'>
                    {$flash['message']}
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>";
            }
            else{
                echo "<div class='alert alert-{$flash['type']} role='alert'>
                    {$flash['message']}
                </div>";
                unset($_SESSION['flash']);
            }
            if(time()-$flash['time'] > $flash['dead']){
                unset($_SESSION['flash']);
            }
        }
    }
}

?>