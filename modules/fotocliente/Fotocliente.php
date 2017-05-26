<?php 

class Fotocliente extends Module
{
	
	public function __construct()
	{
		$this->name = 'fotocliente';
        $this->tab = 'front_office_features';
        $this->version = '1.0';
        $this->author = 'Cesar Auris Saga';
        $this->displayName ='Modulo fotos de los clientes';
        $this->description = 'Módulo que sirve para crear fotos de los clientes.';
         $this->bootstrap = true;//libreria bootsrap

        $this->ps_versions_compliancy = array(
            'min' => '1.6',
            'max' => _PS_VERSION_
        ); //las versiones con las que el módulo es compatible.     
       // $this->dependencies=array("blockbanner","bu"); //dependencias de otros modulos
        
       
        parent::__construct();
	}
	  public function getContent()
    {
        if (Tools::isSubmit('fotocliente_form')) {
            $enabled_coomment=Tools::getValue('enable_comment');
            Configuration::updateValue("FOTOCLI_COMMENTS",$enabled_coomment);
            # code...
        }
        $enabled_coomment=Configuration::get('FOTOCLI_COMMENTS');
        $this->context->smarty->assign("enabled_coomment",$enabled_coomment);
        return $this->display(__FILE__,"getContent.tpl");
    }
      public function install()
    {
        //if (!parent::install() || !$this->registerHook('displayTop'))
          if (!parent::install() )
            return false;


        $this->registerHook('displayProductTabContent');

        $result=$this->installDB();

        return $result;


        
    }

      public function installDB()
    {
        return Db::getInstance()->execute("CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."fotocliente_item` (
          `id_fotocliente_item` int(11) NOT NULL AUTO_INCREMENT,
          `id_product` int(11) NOT NULL ,
          `foto` varchar(255) NOT NULL ,
          `comment` text NOT NULL,           
          PRIMARY KEY (`id_fotocliente_item`)
          ) ENGINE=InnoDB  DEFAULT CHARSET=utf8  AUTO_INCREMENT=1;");


        
    }
    
    
    public function uninstall()
    {
        //if (!parent::uninstall() || !$this->unregisterHook('displayTop'))
        if (!parent::uninstall())
            return false;

        Configuration::deleteByName('FOTOCLI_COMMENTS'); //elimnamos la configuracion

        $result=$this->uninstallDB();

        return $result;
    }


      public function uninstallDB()
    {
        return Db::getInstance()->execute("DROP TABLE  `"._DB_PREFIX_."fotocliente_item` ;");


        
    }
    
    //este  hook es el que  se vee en  ladod el clciente
        public function hookdisplayProductTabContent($params)
    {  

        if (Tools::isSubmit('fotocliente_submit_foto')) {
           if (isset($_FILES['foto'])) {
            $foto=$_FILES['foto'];
            if ($foto['name']!="") {
               $allowed=array("image/jpeg","image/jpg","image/gif","image/png");
               if (in_array($foto['type'], $allowed)) {
                   $path='./upload/';
                   list($width,$height)=getimagesize($foto['tmp_name']);
                   $proto=400/$width;
                   $copy=ImageManager::resize();
               }
            }
              
           }
        }


        $enabled_coomment=Configuration::get('FOTOCLI_COMMENTS');
        $this->context->smarty->assign("enabled_coomment",$enabled_coomment);


        return $this->display(__FILE__, 'displayProductTabContent.tpl');
        //return "contenido de mi modulos";
    }
    
}
 