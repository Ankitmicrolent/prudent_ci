<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['upload-boq-items'] ='upload_boq_items/upload_boq_items_controller/upload_boq_items';
$route['upload_boq_items_file'] ='upload_boq_items/upload_boq_items_controller/upload_boq_items_file';
$route['save_boq_file_data'] ='upload_boq_items/upload_boq_items_controller/save_boq_file_data';
$route['list-boq-items'] ='upload_boq_items/upload_boq_items_controller/list_boq_items';
$route['list-boq-items-operational-b'] ='upload_boq_items/upload_boq_items_controller/list_boq_items_operational_b';
$route['list-boq-items-operational-b-negative'] ='upload_boq_items/upload_boq_items_controller/list_boq_items_operational_b_negative';

$route['add-boq-items'] ='upload_boq_items/upload_boq_items_controller/add_boq_items';
$route['client-delivery-challan'] ='upload_boq_items/upload_boq_items_controller/client_delivery_challan';
$route['save_client_dc_details'] ='upload_boq_items/upload_boq_items_controller/save_client_dc_details';
$route['get_all_project_list'] ='upload_boq_items/upload_boq_items_controller/get_all_project_list';
$route['publish_boq_items_bulk_upload'] ='upload_boq_items/upload_boq_items_controller/publish_boq_items_bulk_upload';
$route['project_boq_list_display'] ='upload_boq_items/upload_boq_items_controller/project_boq_list_display';
$route['boq_scha_list_display'] ='upload_boq_items/upload_boq_items_controller/boq_scha_list_display';
$route['boq_schb_list_display'] ='upload_boq_items/upload_boq_items_controller/boq_schb_list_display';
$route['boq_schbn_list_display'] ='upload_boq_items/upload_boq_items_controller/boq_schbn_list_display';
$route['project_boq_item_list'] ='upload_boq_items/upload_boq_items_controller/project_boq_item_list';
$route['boq_transaction_display'] ='upload_boq_items/upload_boq_items_controller/boq_transaction_display';
$route['boq_schc_list_display'] ='upload_boq_items/upload_boq_items_controller/boq_schc_list_display';
$route['get_boq_item_by_project'] ='upload_boq_items/upload_boq_items_controller/get_boq_item_by_project';
$route['save_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/save_boq_item_details';
$route['get_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/get_boq_item_details';
$route['get_client_dc_by_project'] ='upload_boq_items/upload_boq_items_controller/get_client_dc_by_project';
$route['project_dcc_list'] ='upload_boq_items/upload_boq_items_controller/project_dcc_list';
$route['project_dcc_list_p'] ='upload_boq_items/upload_boq_items_controller/project_dcc_list_p';

$route['view_dcc_items'] ='upload_boq_items/upload_boq_items_controller/view_dcc_items';
$route['view_dcvs_items'] ='upload_boq_items/upload_boq_items_controller/view_dcvs_items';
$route['project_dcc_items'] ='upload_boq_items/upload_boq_items_controller/project_dcc_items';
$route['move-to-warehouse'] ='upload_boq_items/upload_boq_items_controller/add_virtual_stock';
$route['add-installed-wip'] ='upload_boq_items/upload_boq_items_controller/add_installed_wip';
$route['add-provisional-wip'] ='upload_boq_items/upload_boq_items_controller/add_provisional_wip';
$route['get_dc_item_by_project'] ='upload_boq_items/upload_boq_items_controller/get_dc_item_by_project';
$route['get_dc_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/get_dc_boq_item_details';
$route['get_dcip_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/get_dcip_boq_item_details';
$route['save_virtual_stock_details'] ='upload_boq_items/upload_boq_items_controller/save_virtual_stock_details';
$route['project_dcvs_list'] ='upload_boq_items/upload_boq_items_controller/project_dcvs_list';
$route['project_dcvs_items'] ='upload_boq_items/upload_boq_items_controller/project_dcvs_items';
$route['get_dciwip_item_by_project'] ='upload_boq_items/upload_boq_items_controller/get_dciwip_item_by_project';
$route['get_dcpwip_item_by_project'] ='upload_boq_items/upload_boq_items_controller/get_dcpwip_item_by_project';
$route['save_provisional_wip_details'] ='upload_boq_items/upload_boq_items_controller/save_provisional_wip_details';
$route['save_installed_wip_details'] ='upload_boq_items/upload_boq_items_controller/save_installed_wip_details';
$route['project_dciwip_list'] ='upload_boq_items/upload_boq_items_controller/project_dciwip_list';
$route['project_dciwip_list_p'] ='upload_boq_items/upload_boq_items_controller/project_dciwip_list_p';
$route['view_dciwip_items'] ='upload_boq_items/upload_boq_items_controller/view_dciwip_items';
$route['project_dciwip_items'] ='upload_boq_items/upload_boq_items_controller/project_dciwip_items';
$route['project_dcpwip_list'] ='upload_boq_items/upload_boq_items_controller/project_dcpwip_list';
$route['project_dcpwip_list_p'] ='upload_boq_items/upload_boq_items_controller/project_dcpwip_list_p';
$route['view_dcpwip_items'] ='upload_boq_items/upload_boq_items_controller/view_dcpwip_items';
$route['project_dcpwip_items'] ='upload_boq_items/upload_boq_items_controller/project_dcpwip_items';

$route['create-proforma-invoice'] ='upload_boq_items/upload_boq_items_controller/create_proforma_invoice';
$route['save_proforma_invoice_details'] ='upload_boq_items/upload_boq_items_controller/save_proforma_invoice_details';
$route['get_install_prov_by_project'] ='upload_boq_items/upload_boq_items_controller/get_install_prov_by_project';
$route['get_wip_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/get_wip_boq_item_details';
$route['project_proformaInvc_list'] ='upload_boq_items/upload_boq_items_controller/project_proformaInvc_list';
$route['view_proforma_invoice_items'] ='upload_boq_items/upload_boq_items_controller/view_proforma_invoice_items';
$route['project_proinvc_items'] ='upload_boq_items/upload_boq_items_controller/project_proinvc_items';
$route['convert_to_tax_invoice'] ='upload_boq_items/upload_boq_items_controller/convert_to_tax_invoice';
$route['convert_tax_invoice_details'] ='upload_boq_items/upload_boq_items_controller/convert_tax_invoice_details';

$route['create-tax-invoice'] ='upload_boq_items/upload_boq_items_controller/create_tax_invoice';
$route['get_proforma_boq_item_details'] ='upload_boq_items/upload_boq_items_controller/get_proforma_boq_item_details';
$route['get_proforma_by_project'] ='upload_boq_items/upload_boq_items_controller/get_proforma_by_project';
$route['get_proforma_by_projects'] ='upload_boq_items/upload_boq_items_controller/get_proforma_by_projects';
$route['save_tax_invoice_details'] ='upload_boq_items/upload_boq_items_controller/save_tax_invoice_details';
$route['project_taxInvc_list'] ='upload_boq_items/upload_boq_items_controller/project_taxInvc_list';
$route['download_tax_invoice'] ='upload_boq_items/upload_boq_items_controller/download_tax_invoice';
$route['download_proforma_invoice'] ='upload_boq_items/upload_boq_items_controller/download_proforma_invoice';
$route['view_tax_invoice_items'] ='upload_boq_items/upload_boq_items_controller/view_tax_invoice_items';
$route['project_taxinvc_items'] ='upload_boq_items/upload_boq_items_controller/project_taxinvc_items';
$route['invoice-closure/(:any)'] ="upload_boq_items/upload_boq_items_controller/invoice_closure/$1";
$route['payment-receipt/(:any)'] ="upload_boq_items/upload_boq_items_controller/payment_receipt/$1";
$route['boq-exceptional-approval'] ='upload_boq_items/upload_boq_items_controller/boq_exceptional_approval';
$route['edit_proforma_invoice'] ='upload_boq_items/upload_boq_items_controller/edit_proforma_invoice';











