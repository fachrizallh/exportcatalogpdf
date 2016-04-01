<?php 
class exportcatalogpdfExportCatalogModuleFrontController extends FrontController
{
	protected $display_header = false;
	protected $display_footer = false;

	public $content_only = true;

	protected $template;
	public $filename;

	public function postProcess()
	{

	}

	public function display()
	{
		require_once _PS_MODULE_DIR_ . 'exportcatalogpdf/classes/pdf/HTMLTemplateCustomPdf.php';
		$pdf = new PDF($order_invoice_list, 'CustomPdf', $this->context->smarty);
		$pdf->render();
	}

}

/*class ExportCatalogPdfExportCatalogModuleFrontController extends ModuleFrontController{
    public $auth = true;
    public $ssl = true;
	public $a;
    public function setMedia()
    {
        // We call the parent method
        parent::setMedia();
        $this->addCSS(array(
            _THEME_CSS_DIR_.'history.css',
            _THEME_CSS_DIR_.'addresses.css'
        ));
        $this->addJS(array(
            _THEME_JS_DIR_.'history.js',
            _THEME_JS_DIR_.'tools.js' // retro compat themes 1.5
        ));
        $this->addJQueryUI('ui.datepicker');
        $this->addJqueryPlugin(array('scrollTo', 'footable','footable-sort', 'validate'));
        // Save the module path in a variable
        $this->path = __PS_BASE_URI__.'modules/ExportCatalogPdf/';
    }

    public function initContent(){
        $this->display_column_left = false;
        $this->display_column_right = false;
        parent::initContent();
        //$this->initList();
        //sumber dari modul mail alert
		$katalogs = Catalog::getDataKatalog();
        $this->context->smarty->assign(array(
            'katalogs' => $katalogs,
        ));
        $this->setTemplate('content_catalog.tpl');

    }
}*/