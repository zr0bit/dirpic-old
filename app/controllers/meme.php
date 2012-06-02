<?php
class Meme extends CI_Controller {

    public function pic($name='challenge_accepted')
    {
        $normal=$name;
        $name= str_replace('_',' ',$name);
        $titulo= strtoupper($name);
        echo"
<!DOCTYPE html>

<html lang='es'>

<head>


<meta property='og:title' content='{$titulo}' />
<meta property='og:type' content='website' />
<meta property='og:url' content='http://dirpic.com/meme/pic/{$normal}' />
<meta property='og:image' content='http://dirpic.com/img/{$normal}.jpg' />
<meta property='og:site_name' content='dirpic.com' />
<meta property='og:description' content='...' />
<meta property='fb:app_id' content='151385418262557' />
</head>
<body>
{$titulo}
:)
</body>
</html>
";
    }

}