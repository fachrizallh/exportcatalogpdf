<?php
require_once(dirname(__FILE__). '/classes/catalog.php');
	class ExportCatalogPdf extends Module
	{
		public $id;
		public function __construct()
		{
			//sebagai data tentang modul yang akan dibuat
			$this->name = 'exportcatalogpdf';
			$this->tab = 'front_office_features';
			$this->version = '1.0';
			$this->author = 'Fachrizal Lukman Hakim';
			$this->displayName = 'Export Catalog PDF';
			$this->description = 'Dengan modul ini, pelanggan dapat mengekspor katalog dalam format PDF';
			$this->confirmUninstall = $this->l('Apakah Anda yakin ingin melakukan uninstallasi?');
			$this->bootstrap = true;
			parent::__construct();
		}

	//------------------------------------------mulai bab 2-------------------------------------------
		public function install()
		{
			if (!parent::install())
				return false;
			//register hook				
			if(!$this->registerHook('displayCustomerAccount') ||
                           !$this->registerHook('displayNav'))
				return false;
			//menampilkan hook di displayProductTabContent, di halaman detail produk, manggil fungsi hookDisplayProductTabContent($params)
			return true;
		}
		public function uninstall(){
			// Call uninstall parent method
			if (!parent::uninstall())
				return false;
			return true;
		}
		
		public function hookDisplayNav($params){
            return $this->display(__FILE__,'navigasi.tpl');
        }
	}
?>