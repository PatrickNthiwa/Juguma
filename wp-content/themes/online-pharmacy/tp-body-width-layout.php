<?php

	$online_pharmacy_tp_theme_css = "";

	$online_pharmacy_theme_lay = get_theme_mod( 'online_pharmacy_tp_body_layout_settings','Full');
    if($online_pharmacy_theme_lay == 'Container'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.page-template-front-page .menubar{';
			$online_pharmacy_tp_theme_css .='position: static;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.scrolled{';
			$online_pharmacy_tp_theme_css .='width: auto; left:0; right:0;';
		$online_pharmacy_tp_theme_css .='}';
	}else if($online_pharmacy_theme_lay == 'Container Fluid'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.page-template-front-page .menubar{';
			$online_pharmacy_tp_theme_css .='width: 99%';
		$online_pharmacy_tp_theme_css .='}';
		$online_pharmacy_tp_theme_css .='.scrolled{';
			$online_pharmacy_tp_theme_css .='width: auto; left:0; right:0;';
		$online_pharmacy_tp_theme_css .='}';
	}else if($online_pharmacy_theme_lay == 'Full'){
		$online_pharmacy_tp_theme_css .='body{';
			$online_pharmacy_tp_theme_css .='max-width: 100%;';
		$online_pharmacy_tp_theme_css .='}';
	}

    $online_pharmacy_scroll_position = get_theme_mod( 'online_pharmacy_scroll_top_position','Right');
    if($online_pharmacy_scroll_position == 'Right'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='right: 20px;';
        $online_pharmacy_tp_theme_css .='}';
    }else if($online_pharmacy_scroll_position == 'Left'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='left: 20px;';
        $online_pharmacy_tp_theme_css .='}';
    }else if($online_pharmacy_scroll_position == 'Center'){
        $online_pharmacy_tp_theme_css .='#return-to-top{';
            $online_pharmacy_tp_theme_css .='right: 50%;left: 50%;';
        $online_pharmacy_tp_theme_css .='}';
    }
