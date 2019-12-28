<?php 

class Template
{ 
    public $template;

    /**
     * Load Template from file (html, php,htm ...).
     * 
     * @param string $filepath adress of the template file. 
     * 
     */


    public function load( string $filepath ) { 
        $this->template = file_get_contents($filepath); 
    }

    /**
     * Load replace Tags with contents.
     * 
     * @param string $tag the tag to replace. 
     * @param string $content the content to replace with. 
     */

    public function replace( string $tag, string $content ) { 
        $this->template = str_replace("{#}$tag{#}", $content, $this->template); 
    } 

    /**
     * Clear unused tags in the template.
     *  
     */

    public function clear_tags() { 
        $this->template = preg_replace('[{#}(.*){#}]', "", $this->template); 
    }

    /**
     * Publish the template.
     *  
     */

    public function publish() {  
        ob_start();  
        eval("?> ".$this->template)."<?php ";   
        ob_end_flush();
    }
}