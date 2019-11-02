<?php
  function formatUrlsInText($msg){
// The Regular Expression filter
 
        $reg_exUrl = '/(?![^<>]*>)(?=www|http|https)(http)?(s)?(:\/\/)?(www\.)?(([^\s\.]+[^\s]*)+[^,.\s])/i';  
        $reg_exMail = "#([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#";
   
        $reg_exHashTag = "/(?<=\s|^)#(\w*[A-Za-z_]+\w*)/";
        $reg_exMention = "/@(\w+)/";
       
       
       
       
        preg_replace($regularExpression, $replacement, $subject);
       
        $pat = array($reg_exUrl, $reg_exMail,   $reg_exHashTag, $reg_exMention );
        $rep = array(   "<a href='http$2://$4$5'>$5</a>",
                        "<a href='mailto:$1' target='_blank' >$1</a>",
 
                        "<a href='tag.php?tagname=$1'>#$1</a>",
                        "<a href='profile.php?user=$1'>@$1</a>");
        $text = preg_replace($pat, $rep, $msg);
        
        ?>
       
 
 
 
 
            return $text;          
}
