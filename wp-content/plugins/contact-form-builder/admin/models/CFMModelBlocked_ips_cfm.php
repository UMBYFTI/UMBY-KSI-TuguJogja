<?php

class CFMModelBlocked_ips_cfm {
  ////////////////////////////////////////////////////////////////////////////////////////
  // Events                                                                             //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constants                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Variables                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Constructor & Destructor                                                           //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function __construct() {
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Public Methods                                                                     //
  ////////////////////////////////////////////////////////////////////////////////////////
  public function get_rows_data() {
    global $wpdb;
    $where = ((isset($_POST['search_value']) && (esc_html($_POST['search_value']) != '')) ? 'WHERE `ip` LIKE "%' . esc_html($_POST['search_value']) . '%"' : '');
    $asc_or_desc = ((isset($_POST['asc_or_desc'])) ? esc_html($_POST['asc_or_desc']) : 'desc');
    $order_by = ' ORDER BY ' . ((isset($_POST['order_by']) && esc_html($_POST['order_by']) != '') ? esc_html($_POST['order_by']) : 'id') . ' ' . $asc_or_desc;
    if (isset($_POST['page_number']) && $_POST['page_number']) {
      $limit = ((int) $_POST['page_number'] - 1) * 20;
    }
    else {
      $limit = 0;
    }
    $query = "SELECT * FROM " . $wpdb->prefix . "contactformmaker_blocked " . $where . $order_by . " LIMIT " . $limit . ",20";
    $rows = $wpdb->get_results($query);
    return $rows;
  }
  
  public function get_row_data($id) {
    global $wpdb;
    if ($id != 0) {
      $row = $wpdb->get_row($wpdb->prepare('SELECT * FROM ' . $wpdb->prefix . 'contactformmaker_blocked WHERE id="%d"', $id));
    }
    else {
      $row->id = 0;
      $row->ip = '';
    }
    return $row;
  }

  public function page_nav() {
    global $wpdb;
    $where = ((isset($_POST['search_value']) && (esc_html($_POST['search_value']) != '')) ? 'WHERE `ip` LIKE "%' . esc_html($_POST['search_value']) . '%"'  : '');
    $query = "SELECT COUNT(*) FROM " . $wpdb->prefix . "contactformmaker_blocked " . $where;
    $total = $wpdb->get_var($query);
    $page_nav['total'] = $total;
    if (isset($_POST['page_number']) && $_POST['page_number']) {
      $limit = ((int) $_POST['page_number'] - 1) * 20;
    }
    else {
      $limit = 0;
    }
    $page_nav['limit'] = (int) ($limit / 20 + 1);
    return $page_nav;
  }
  ////////////////////////////////////////////////////////////////////////////////////////
  // Getters & Setters                                                                  //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Private Methods                                                                    //
  ////////////////////////////////////////////////////////////////////////////////////////
  ////////////////////////////////////////////////////////////////////////////////////////
  // Listeners                                                                          //
  ////////////////////////////////////////////////////////////////////////////////////////
}