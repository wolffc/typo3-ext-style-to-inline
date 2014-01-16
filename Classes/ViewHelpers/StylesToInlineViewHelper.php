<?php

// TODO: this inclusion is not very Clean rework this this to a more Clean Operation
$extensionPath=t3lib_extMgm::extPath('stylestoinline') .'/vendor/tijsverkoyen/css-to-inline-styles/TijsVerkoyen/CssToInlineStyles/CssToInlineStyles.php';
require_once($extensionPath);

class Tx_Stylestoinline_ViewHelpers_StylesToInlineViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	/**
	 * Renders the HTML with the styles Processed to inline
	 * @param  mixed $styles string or array of stylesheet files to process
	 * @return string             the processed html
	 */
    public function render($styles) {
    	$html = $this->renderChildren();
    	$css = $this->getStyles($styles);
    	$cssToInlineStyles = new \TijsVerkoyen\CssToInlineStyles\CssToInlineStyles($html,$css);
    	$cssToInlineStyles->setEncoding('utf-8');
    	$output = $cssToInlineStyles->convert();
    	return $output;
    }

    /**
     * Reades all Stylesheets and returns css
     * @param  mixed $styles resource string or array of resources
     * @return string         the loaded css
     */
    protected function getStyles($styles){
    	$css = '';
    	if(is_array($styles)){
    		foreach($styles as $stylesheet){
    			$css .= $this->getSingleStylesheet($stylesheet);
    		}
    	}else{
    		$css = $this->getSingleStylesheet($styles);
    	}
    	return $css;
    }

    protected function getSingleStylesheet($stylesheet){
    	$cssFile = t3lib_div::getFileAbsFileName($stylesheet);
    	if(!file_exists($cssFile)) throw new Tx_Fluid_Core_ViewHelper_Exception('Could not get stylesheet resource for "' . htmlspecialchars($cssFile) . '".' , 1389874888);
    	return t3lib_div::getURL($cssFile);
    }
}
?>