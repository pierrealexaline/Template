# Template

    Nano template for php. Usefull tool for construct
    simple MVC applications or sites in php and render views.
    Required : 
    php 5 + / 

## Example / usage

### Template file : index.htm

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="x-ua-compatible" content="ie=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>{#}TITLE{#}</title> 
        </head> 
        <body>
            {#}H1{#}
            <?php echo "<p>Hello World</p>";?>
            <!--js goes here if u want !-->
        </body>
        </html>

### php file who call the template 

        require('Template.php')
        $template = new Template();
        $template->load("index.htm");
        $template->replace("TITLE","My GreatTitle");
        $template->replace("H1", "Happy 🎄 !");
        $template->clear_tags("");
        $template->publish("");